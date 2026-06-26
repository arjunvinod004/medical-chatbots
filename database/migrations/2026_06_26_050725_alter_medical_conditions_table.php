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
    Schema::table('medical_conditions', function (Blueprint $table) {
        $table->text('possible_conditions')->change();
        $table->text('severity_assessment')->change();
        $table->text('emergency_warning_signs')->change();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
