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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->primary();;
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('gtin')->nullable();
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->foreignId('user_id')->default(1);
            $table->timestamps();
            $table->index('id');
            $table->index('gtin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
