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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fb', 255)
            ->nullable()
            ->after('avatar');

            $table->string('address_city', 255)
            ->nullable()
            ->after('fb');

            $table->text('bio')
            ->nullable()
            ->after('address_city');


            $table->string('sexo', 40)
            ->nullable()
            ->after('bio');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
