<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exchange;
use App\Models\Input;
use App\Models\Output;
use App\Models\Product;
use App\Models\State;
use App\Models\Type_exchange;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $products = Product::where('user_id','=',$user->id)->get();
        return view('product.list',compact('user'));
    }
    
    public function list($id)
    {
        $categories = Category::all();
        $states = State::all();
        if ($id == 1) {
            
            $inputs = Product::with('category','state')
            ->join('inputs', 'inputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.input_id', '=', 'inputs.id')->where('exchanges.type_exchange_id',$id)
            ->select('products.*')
            ->get();
            return view('admin.listProducts',['inputs'=>$inputs,'categories'=>$categories,'states'=>$states]);
        }
        else{
            $inputs = Product::with('category','state')
            ->join('inputs', 'inputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.input_id', '=', 'inputs.id')->where('exchanges.type_exchange_id',2)
            ->select('products.*')
            ->get();
            $outputs = Product::with('category','state')
            ->join('outputs', 'outputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.output_id', '=', 'outputs.id')->where('exchanges.type_exchange_id',2)
            ->select('products.*')
            ->get();
            return view('admin.listProducts',compact('inputs','outputs','categories','states'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $categories = Category::all();
        $states = State::all();
        $type_Exchanges = Type_exchange::all();

        return view('product.create',['product' => new Product(),'user_id'=>$user_id,'categories'=>$categories,'states'=>$states,'type_Exchanges'=>$type_Exchanges]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = request()->except('_token','type_exchange_id','date');
        
        if ($request['type_exchange_id'] == '1') {
                
            if ($request->hasfile('image')) {

                    $product['image'] = $request->file('image')->store('uploads','public');
            }
            $id = DB::table('products')->insertGetId($product);
            $input_id = DB::table('inputs')
            ->insertGetId([
                'quantity' => $request['stocks'],
                'date' => $request['date'],
                'product_id' => $id
            ]);
            DB::table('exchanges')->insert([
                'user_id'=> $request['user_id'],
                'type_exchange_id' => $request['type_exchange_id'],
                'exchange_state_id' => 2,
                'input_id' => $input_id,
            ]);
            return redirect()->route('users.index');
            
        }
        else{
            if ($request->hasfile('image')) {

                $product['image'] = $request->file('image')->store('uploads','public');
            }
            $id = DB::table('products')->insertGetId($product);
            $input_id = DB::table('inputs')
            ->insertGetId([
                'quantity' => $request['stocks'],
                'date' => $request['date'],
                'product_id' => $id
            ]);
            $exchange_id = DB::table('exchanges')->insertGetId([
                'user_id'=> $request['user_id'],
                'type_exchange_id' => $request['type_exchange_id'],
                'exchange_state_id' => 1,
                'input_id' => $input_id,
            ]);
            $products = Product::where('user_id','!=',$request['user_id'])->with('category','state')->get();
            return view('product.exchange',['products'=>$products,'user'=>$request['user_id'],'exchange_id'=>$exchange_id]);
            }
    }

    public function exchange(Request $request,$id)
    {

        $product = Product::findOrfail($id);
        if($product->stocks > 0)
        {
            $stocks = $product->stocks - $request['quantity'];

            Product::where('id','=',$id)->update(['stocks'=> $stocks]);
            $output_id = DB::table('outputs')
            ->insertGetId([
                'quantity' => $request['quantity'],
                'date' => date('Y-m-d'),
                'product_id' => $id
            ]);
            Exchange::where('id','=',$request['exchange_id'])->update(['output_id'=> $output_id,'exchange_state_id'=>2]);
            return redirect()->route('users.index');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('user_id','=',$id)->with('category','state')->get();
        //return $products;
        return view('product.list', ['products'=>$products]);
    }
    public static function validation($id)
    {
        
        $user_id = auth()->user()->id;
        $exchanges = Exchange::where('user_id','=',$user_id)->get();
        foreach ($exchanges as $exchange) {
            if ($exchange->type_exchange_id == 2 && $exchange->output_id == NULL) {
                $product = Product::findOrfail($id);
                if($product->stocks > 0)
                {
                    $stocks = $product->stocks - 1;
        
                    Product::where('id','=',$id)->update(['stocks'=> $stocks]);
                    $output_id = DB::table('outputs')
                    ->insertGetId([
                        'quantity' => 1,
                        'date' => date('Y-m-d'),
                        'product_id' => $id
                    ]);
                    
                    Exchange::where('id','=',$exchange->id)->update(['output_id'=> $output_id,'exchange_state_id'=>2]);
                    return redirect()->route('users.index');
                }
            }
            else {
                $user_id = auth()->user()->id;
                $categories = Category::all();
                $states = State::all();
                $type_Exchanges = Type_exchange::all();

                return view('product.create',['product' => new Product(),'user_id'=>$user_id,'categories'=>$categories,'states'=>$states,'type_Exchanges'=>$type_Exchanges]);
            }
        }
        //return view('product.list', ['products'=>$products]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $user_id = auth()->user()->id;
        $categories = Category::all();
        $states = State::all();
        return view('product.edit',['product'=>$product,'user_id'=>$user_id,'categories'=>$categories,'states'=>$states]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        $dataProduct = $request->except(['_token','_method','image']);
        $imagen = request()->get('image');
        
        if ($request->hasfile('image')) {

            $product = Product::findOrfail($id);
            Storage::delete(['public/'. $product->image]);            
            $dataProduct['image'] = $request->file('image')->store('uploads','public');
            Product::where('id','=',$id)->update(['image'=>$dataProduct['image']]);
        }
        Product::where('id','=',$id)->update($dataProduct);
        
        //return redirect()->route('empleado.index',$empleado);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pdfProducts($id)
    {
        
        $today = Carbon::now()->format('d/m/Y');
        if ($id == 1) {
        
            $inputs = Product::with('category','state')
            ->join('inputs', 'inputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.input_id', '=', 'inputs.id')->where('exchanges.type_exchange_id',$id)
            ->select('products.*')
            ->get();
            $pdf = PDF::loadView('admin.pdfProducts',compact('inputs'));        
            return $pdf->download($today.'_Reporte_Productos'.'.pdf');
        }
        else{
            $inputs = Product::with('category','state')
            ->join('inputs', 'inputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.input_id', '=', 'inputs.id')->where('exchanges.type_exchange_id',2)
            ->select('products.*')
            ->get();
            $outputs = Product::with('category','state')
            ->join('outputs', 'outputs.product_id', '=', 'products.id')
            ->join('exchanges', 'exchanges.output_id', '=', 'outputs.id')->where('exchanges.type_exchange_id',2)
            ->select('products.*')
            ->get();
            $pdf = PDF::loadView('admin.pdfProducts',compact('inputs','outputs'));        
            return $pdf->download($today.'_Reporte_Productos'.'.pdf');
        }
        
        //return view('admin.pdfProducts',compact('products'));

    }
}
