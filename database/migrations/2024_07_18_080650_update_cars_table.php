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
        //
        Schema::table('cars', function (Blueprint $table) {
            
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
