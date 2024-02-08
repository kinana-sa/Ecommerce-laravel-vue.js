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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_price',20,2);
            $table->string('status',45);
            $table->timestamps();
            $table->foreignId('created_by')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignId('updated_by')->references('id')->on('users')->onDelete('cascade')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
