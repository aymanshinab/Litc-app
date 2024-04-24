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
        Schema::create('employee__groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('EmployeePersonnelNumber', 10);
            $table->foreignId('groupId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee__groups');
    }
};
