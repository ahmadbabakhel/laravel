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
        //	
        Schema::create('specialty_elements', function (Blueprint $table) {
            $table->id(); 
            $table->integer('user_id')->unique();  
            $table->string('specialty');   
            $table->string('order_id');  
            $table->timestamp('datetime')->useCurrent();
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
