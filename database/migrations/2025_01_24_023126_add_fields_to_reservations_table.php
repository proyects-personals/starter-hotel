<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->date('check_in_date')->nullable(); // Día de ingreso
            $table->date('check_out_date')->nullable(); // Día de salida
            $table->integer('num_people')->nullable(); // Cantidad de personas

            // Índice único para check_in_date y check_out_date
            $table->unique(['check_in_date', 'check_out_date'], 'unique_check_in_out_dates');
        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Eliminar el índice único si se revierte la migración
            $table->dropUnique('unique_check_in_out_dates');
            $table->dropColumn(['check_in_date', 'check_out_date', 'num_people']);
        });
    }
};
