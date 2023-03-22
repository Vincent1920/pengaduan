<?php

use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->id('id_comment');
        //     $table->unsignedBigInteger('customer_id');
        //     $table->timestamps();
    
        //     $table->foreign('user_id')
        //           ->references('id')
        //           ->on('customers')
        //           ->onDelete('cascade');
        // });
        Schema::create('comment', function (Blueprint $table) {
        $table->id('id_comment');
    
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('body');
        $table->string('title');
        $table->string('image')->nullable();
           $table->string('status')->nullable();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
