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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->tinyInteger('type_discount', false, true)->nullable();
            $table->double('discount')->default(0)->nullable();
            $table->tinyInteger('type_campaing', false, true)->nullable();
            $table->string('code_cupon', 400)->nullable();
            $table->string('code_discount', 150)->nullable();
            $table->bigInteger('product_variation_id')->nullable();
            $table->double('quantity')->default(1);
            $table->double('price_unit')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('total')->nullable();
            $table->string('currency', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
