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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('inventory_id');
            $table->integer('quantity'); 
            $table->decimal('price', 10, 2); 
            $table->timestamps(); 

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Cascade delete if order is deleted
            $table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade'); // Cascade delete if inventory item is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};