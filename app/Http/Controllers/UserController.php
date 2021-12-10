<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user= User::where('id','=',$id)->first();
        $products = Product::paginate(5);
        $roles = $user->roles;
        
        foreach ($roles as $rol) {
            
            if ($rol->pivot['role_id'] == 1){
                
                $users = User::where('id','!=',$id)->get();
                $admins = User::where('id','=',$id)->get();
                return view('admin.index', compact('users','admins','products'));

            }            
            else {
                return view('user.index',compact('user','products'));                
            }
        }
        return view('user.index',compact('user','products'));                
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id','=',$id)->first();
        return view('user.profile',compact('user'));
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
        
        $userData = $request->except(['_token','_method','photo']);
        $profile_photo_path = request()->get('photo');

        if ($request->hasfile('photo')) {
            $user = User::findOrfail($id);
            Storage::delete(['public/'. $user->profile_photo_path]);
            $userData['profile_photo_path'] = $request->file('photo')->store('profiles_photos','public');
            User::where('id','=',$id)->update(['profile_photo_path'=>$userData['profile_photo_path']]);
        }
       
        User::where('id','=',$id)->update($userData);

        $user = User::findOrfail($id);
        return redirect()->route('users.edit',compact('user')) ;
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
    public function pdfUsers()
    {
        
        $today = Carbon::now()->format('d/m/Y');
        
        $id = auth()->user()->id;        
        $users = User::where('id','!=',$id)->get();
        //$pdf = PDF::loadView('admin.pdfUsers', ['users' => $users])->setOptions(['defaultFont' => 'sans-serif']);

        $pdf = PDF::loadView('admin.pdfUsers',compact('users'));        
        return $pdf->download($today.'_Reporte_Usuarios'.'.pdf');
        //return $pdf->stream($today.'_Reporte_Usuarios'.'.pdf');
        
        
        return view('admin.pdfUsers',compact('users'));
    }
}
