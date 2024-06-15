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
        Schema::create('item_sizes', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('b_height')->nullable();
            $table->integer('b_width')->nullable();
            $table->integer('b_depth')->nullable();
            $table->integer('t_weight')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_sizes');
    }
};
