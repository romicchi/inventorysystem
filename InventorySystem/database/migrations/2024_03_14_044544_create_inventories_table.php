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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('name');
            $table->unsignedBigInteger('inventory_type_id');
            $table->string('description');
            $table->string('unit');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->decimal('total', 8, 2);
            $table->string('image');
            $table->date('date_purchase');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('inventory_type_id')->references('id')->on('inventory_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
