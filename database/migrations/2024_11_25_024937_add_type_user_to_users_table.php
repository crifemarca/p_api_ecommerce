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
            // Agregar el campo type_user con comentario
            $table->unsignedTinyInteger('type_user')
                ->comment('1 es Admin, 2 es Cliente')
                ->after('id');

            // Agregar el campo surname
            $table->string('surname', 255)
                ->nullable()
                ->after('name');

            // Agregar el campo phone
            $table->string('phone', 20)
                ->nullable()
                ->after('surname');

            // Agregar el campo avatar
            $table->string('avatar', 255)
                ->nullable()
                ->after('phone');

            // Agregar el campo deleted_at para soft deletes
            $table->timestamp('deleted_at')
                ->nullable()
                ->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['type_user', 'surname', 'phone', 'avatar', 'deleted_at']);
        });
    }
};
