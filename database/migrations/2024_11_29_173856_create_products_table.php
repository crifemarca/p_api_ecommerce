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
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('title', 250)->nullable(); // title VARCHAR(250) NULL
            $table->text('slug')->nullable(); // slug TEXT NULL
            $table->string('sku', 80)->nullable(); // sku VARCHAR(80) NULL
            $table->double('price_pen')->nullable(); // price_pen DOUBLE NULL
            $table->double('price_usd')->nullable(); // price_usd DOUBLE NULL
            $table->longText('description')->nullable()->charset('utf8')->collation('utf8_general_ci'); // description LONGTEXT NULL utf8_general_ci
            $table->longText('resumen')->nullable(); // resumen LONGTEXT NULL
            $table->string('imagen', 250)->nullable(); // imagen VARCHAR(250)
            $table->tinyInteger('state', false, true)->default(1)->comment('1 es pendiente, 2 es público'); // state TINYINT(2) DEFAULT 1
            $table->json('tags')->nullable(); // tags JSON NULL
            $table->bigInteger('brand_id')->nullable(); // brand_id BIGINT(30) NULL
            $table->bigInteger('categorie_first_id')->nullable(); // categorie_first_id BIGINT(30) NULL
            $table->bigInteger('categorie_second_id')->nullable(); // categorie_second_id BIGINT(30) NULL
            $table->bigInteger('categorie_third_id')->nullable(); // categorie_third_id BIGINT(30) NULL
            $table->double('stock')->nullable()->default(0); // stock DOUBLE DEFAULT 0
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
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
