<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('type_exchange_id');
            $table->foreign('type_exchange_id')->references('id')->on('type_exchanges');

<<<<<<< HEAD
            $table->unsignedBigInteger('exchange_state_id');
            $table->foreign('exchange_state_id')->references('id')->on('exchange_state');
=======
            $table->unsignedBigInteger('exchange_state');
            $table->foreign('exchange_state')->references('id')->on('exchange_states');
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f

            $table->unsignedBigInteger('input_id');
            $table->foreign('input_id')->references('id')->on('inputs');

            $table->unsignedBigInteger('output_id')->nullable();
            $table->foreign('output_id')->references('id')->on('outputs');
<<<<<<< HEAD
            
=======
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
        Schema::dropIfExists('exchangues');
    }
}
