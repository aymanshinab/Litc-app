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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('EmployeePersonnelNumber', 10);
            $table->integer('quarter');
            $table->integer('year');
            $table->integer('evaluated');
            $table->decimal('rate', 3, 2);
            $table->decimal('percentage', 4, 2);
            $table->decimal('degree', 4, 2);
            $table->string('rating', 12);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
