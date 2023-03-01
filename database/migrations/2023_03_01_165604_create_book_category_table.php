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
        Schema::create('book_category', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->primary(['book_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('book_category', function (Blueprint $table) {
            Schema::drop("book_category");
            });
    }
};
