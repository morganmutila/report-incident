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
        Schema::create('incidents', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('incident_categories');
            $table->string('status')->default(IncidentSeverity::PENDING->value);
            $table->string('severity')->default(IncidentSeverity::MODERATE->value);
            $table->boolean('is_anonymouse')->nullable()->default(false);
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('location');
            $table->text('description');
            $table->timestamp('occurred_at')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->json('meta')->nullable();
            $table->index(['user_id', 'status', 'severity']);
            $table->index(['longitude', 'latitude']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
