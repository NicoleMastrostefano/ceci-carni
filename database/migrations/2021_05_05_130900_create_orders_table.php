<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_status', function (Blueprint $table) {
            $table->id();
            $table->string('stato', 50);
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 100);
            $table->string('telefono', 15);
            $table->text('messaggio');
            $table->unsignedBigInteger('stato');
            $table->dateTime('consegna');
            $table->string('token',100)->nullable(true)->default(null);
            $table->timestamps();
            // relazioni
            $table->foreign('stato')
                  ->references('id')
                  ->on('orders_status');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_status');
        Schema::dropIfExists('orders');
    }
}
