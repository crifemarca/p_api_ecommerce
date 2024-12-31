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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
            $table->string('name', 250);
            $table->text('icon')->nullable();
            $table->string('imagen', 250)->nullable();
            $table->bigInteger('categorie_second_id')->nullable();
            $table->bigInteger('categorie_third_id')->nullable();
            $table->double('position', 8, 2)->default(1); // DOUBLE con valor por defecto 1
            $table->tinyInteger('type_categorie', false, true)->default(1)->comment('1 es departamento, 2 es categoria y 3 es subcategoria'); // TINYINT(2) UNSIGNED con comentario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
