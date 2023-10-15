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
        //notifications
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->integer('from_id'); 
            $table->integer('to_id'); 
            $table->integer('opened')->default(0); 
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
