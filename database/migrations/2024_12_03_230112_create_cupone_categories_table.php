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
        Schema::create('cupone_categories', function (Blueprint $table) {
            $table->id(); // Crea automáticamente una columna 'id' con auto_increment y primary key
            $table->bigInteger('categorie_id')->unsigned(); // No debe tener auto_increment
            $table->bigInteger('cupone_id')->unsigned();    // No debe tener auto_increment
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupone_categories');
    }
};
