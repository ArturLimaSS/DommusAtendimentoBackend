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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->integer('organization_id');
            $table->integer('requester_id');
            $table->string('title');
            $table->text('description');
            $table->integer('resposible_id');
            $table->integer('work_team_id');
            $table->integer('service_id');
            $table->integer('categy_id');
            $table->integer('urgency_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
