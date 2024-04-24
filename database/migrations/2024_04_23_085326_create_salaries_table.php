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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('month');
            $table->string('EmployeePersonnelNumber', 10);
            $table->decimal('salary', 10, 3);
            $table->decimal('healthCareRefund', 10, 3);
            $table->decimal('healthCareBalance', 10, 3);
            $table->decimal('loan', 10, 3);
            $table->decimal('loanRemaining', 10, 3);
            $table->decimal('loanInstallment', 10, 3);
            $table->integer('loanRemaingingMonths');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
