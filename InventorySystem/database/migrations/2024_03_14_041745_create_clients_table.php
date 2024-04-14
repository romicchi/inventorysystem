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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('tin')->nullable();
            $table->string('vn');
            $table->string('rdo_code');
            $table->unsignedBigInteger('business_type_id');
            $table->json('socials')->nullable();            
            $table->unsignedBigInteger('report_status_id');
            $table->string('duration');
            $table->timestamps();

            $table->foreign('report_status_id')->references('id')->on('report_statuses');
            $table->foreign('business_type_id')->references('id')->on('business_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
