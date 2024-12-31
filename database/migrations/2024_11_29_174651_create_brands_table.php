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
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('name', 250)->nullable(); // name VARCHAR(250)
            $table->string('imagen', 250)->nullable(); // imagen VARCHAR(250)
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es Activo, 2 es Inactivo'); // state TINYINT DEFAULT 1
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
