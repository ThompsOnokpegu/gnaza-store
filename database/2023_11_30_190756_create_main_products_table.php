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
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->string('category_id')->nullable();
            $table->decimal('regular_price');
            $table->decimal('sales_price')->nullable();
            $table->string('sku')->nullable();
            $table->string('tags')->nullable();
            $table->integer('stock_quantity')->default(5);
            $table->integer('low_stock_threshold')->default(2);
            $table->string('product_image')->nullable();
            $table->string('image_gallery')->nullable();
            $table->string('attributes')->nullable();
            $table->string('attribute_values')->nullable();
            $table->date('sales_start_date')->nullable();
            $table->date('sales_end_date')->nullable();
            $table->string('discount_type')->nullable();
            $table->decimal('discount_amount')->nullable();           
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
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
