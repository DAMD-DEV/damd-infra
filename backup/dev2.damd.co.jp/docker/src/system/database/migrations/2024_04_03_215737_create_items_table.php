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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('maker_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->integer('spec_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name');
            $table->integer('shipping_id')->nullable();
            $table->string('code')->nullable();
            $table->string('year_from')->nullable();
            $table->string('year_to')->nullable();
            $table->string('applied')->nullable();
            $table->integer('price');
            $table->integer('invoice_price')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('m_cost')->nullable();
            $table->integer('paint_cost')->nullable();
            $table->integer('no_paint')->default(0);
            $table->integer('paint_only')->default(0);
            $table->integer('no_mount')->default(0);
            $table->integer('no_damd')->default(0);
            $table->integer('no_home')->default(0);
            $table->integer('no_stop')->default(0);
            $table->integer('sender')->nullable();
            $table->string('loan')->nullable();
            $table->integer('factory_id')->nullable();
            $table->string('composition')->nullable();
            $table->string('accessories')->nullable();
            $table->string('colors')->nullable();
            $table->text('options')->nullable();
            $table->integer('multiple')->nullable();
            $table->string('template_ids')->nullable();
            $table->text('others')->nullable();
            $table->integer('display');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
