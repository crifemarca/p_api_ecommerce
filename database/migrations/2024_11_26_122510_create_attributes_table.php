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
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
            $table->string('name', 250); // name VARCHAR(250)
            $table->tinyInteger('type_attribute', false, true)->default(1); // type_attribute TINYINT(2) UNSIGNED con valor por defecto 1
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es Activo, 2 es Inactivo'); // state TINYINT(2) UNSIGNED con comentario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
