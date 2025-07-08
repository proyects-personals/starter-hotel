<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            if (!Schema::hasColumn('rooms', 'capacity')) {
                $table->decimal('capacity', 8, 2)->nullable();  // Ajusta 'column_name' si es necesario
            }
        });
    }

    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('capacity');
        });
    }
};
