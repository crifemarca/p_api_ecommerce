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
        Schema::create('discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 250)->nullable();
            $table->tinyInteger('type_discount', false, true)->default(1)->comment('1: porcentaje, 2: monto fijo');
            $table->double('discount')->nullable();
            $table->tinyInteger('discount_type', false, true)->default(1)->comment('1: producto, 2: categorias, 3: marca');
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es Activo, 2 es Inactivo');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->tinyInteger('type_campaing', false, true)->default(1)->comment('1:Normal, 2:Flash, 3:link');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
