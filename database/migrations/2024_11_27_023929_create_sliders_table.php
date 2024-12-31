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
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('title', 250); // title VARCHAR(250)
            $table->string('label', 250)->nullable(); // label VARCHAR(250)
            $table->string('subtitle', 2000)->nullable(); // subtitle VARCHAR(250)
            $table->string('imagen', 250); // imagen VARCHAR(250)
            $table->double('price_original')->nullable();
            $table->double('price_campaing')->nullable();
            $table->text('link')->nullable(); // subtitle TEXT
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es Activo, 2 es Inactivo');
            $table->tinyInteger('type_slider', false, true)->default(1)->comment('1 Principal, 2 banners, 3 productos');
            $table->string('color', 250)->nullable(); // color VARCHAR(250)
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
