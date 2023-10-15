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
        Schema::create('profile', function (Blueprint $table) {
            $table->id(); 
            $table->integer('user_id')->unique();  
            $table->string('company_name');   
            $table->string('first_name');   
            $table->string('last_name');   
            $table->string('email');   
            $table->string('size');   
            $table->string('website');   
            $table->string('mobile');   
            $table->text('address');    
            $table->text('about');   
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
