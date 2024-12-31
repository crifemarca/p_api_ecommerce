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
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('method_payment', 250);
            $table->string('currency_total', 150)->nullable();
            $table->string('currency_payment', 150)->nullable();
            $table->string('preference_id', 500)->nullable();
            $table->double('discount')->nullable();
            $table->double('subtotal')->nullable();
            $table->longText('description')->nullable();
            $table->double('total')->nullable();
            $table->double('price_dolar')->nullable();
            $table->string('n_transaccion', 500)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
