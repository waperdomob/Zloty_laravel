<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeExchanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_exchanges', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('type_exchanges');
=======
            $table->string('type_exchange');
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_exchanges');
    }
}
