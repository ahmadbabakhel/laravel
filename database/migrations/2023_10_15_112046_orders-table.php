<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function (Blueprint $table) {
            $table->id();
            $table->string('design_name');
            $table->string('order_type'); 
            $table->dateTime('order_date')->useCurrent(); 
            $table->text('comments'); 
            $table->integer('order_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
