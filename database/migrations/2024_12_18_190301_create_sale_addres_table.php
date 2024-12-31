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
        Schema::create('sale_addres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sale_id');
            $table->string('name', 250)->nullable();
            $table->string('surname', 250)->nullable();
            $table->string('company', 250)->nullable();
            $table->string('country_region', 250)->nullable();
            $table->string('address', 250);
            $table->string('street', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('postcode_zip', 150)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 250)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_addres');
    }
};
