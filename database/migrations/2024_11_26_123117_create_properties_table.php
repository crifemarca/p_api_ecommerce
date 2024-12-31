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
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id'); // id BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->timestamps(); // created_at y updated_at
            $table->softDeletes(); // deleted_at
            $table->bigInteger('attribute_id')->unsigned(); // attribute_id BIGINT
            $table->string('name', 250); // name VARCHAR(250)
            $table->string('code', 250)->nullable(); // code VARCHAR(250)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
