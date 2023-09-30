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
        Schema::create('today_work_forms', function (Blueprint $table) {
            $table->id();
            $table->boolean('empolyee_id')->nullable();
            $table->string('name');
            $table->string('designation');
            $table->string('date');
            $table->string('morning_work');
            $table->string('lunch_work');
            $table->string('afternoon_work');
            $table->string('evening_work');
            $table->string('over_time');
            $table->string('signature_personal');
            $table->string('signature_office');
            $table->string('weekly_comment');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('today_work_forms');
    }
};
