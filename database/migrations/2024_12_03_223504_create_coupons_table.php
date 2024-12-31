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
        Schema::create('cupones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 250)->nullable();
            $table->tinyInteger('type_discount', false, true)->default(1)->comment('1: porcentaje, 2: monto fijo');
            $table->double('discount')->nullable();
            $table->tinyInteger('type_count', false, true)->default(1)->comment('1: ilimitado, 2: limitado');
            $table->double('num_use')->default(0);
            $table->tinyInteger('type_cupone', false, true)->default(1)->comment('1: producto, 2: categorias, 3: marca');
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es Activo, 2 es Inactivo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupones');
    }
};
