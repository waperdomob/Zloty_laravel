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

            $table->unsignedBigInteger('exchange_state_id');
            $table->foreign('exchange_state_id')->references('id')->on('exchange_state');

            $table->unsignedBigInteger('input_id');
            $table->foreign('input_id')->references('id')->on('inputs');

            $table->unsignedBigInteger('output_id')->nullable();
            $table->foreign('output_id')->references('id')->on('outputs');
            
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
