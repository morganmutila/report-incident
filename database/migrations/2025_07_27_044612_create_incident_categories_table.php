<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\IncidentSeverity;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incident_categories', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('color')->default('#000000'); // Default color for the category
            $table->string('icon')->nullable(); // Optional icon for the category
            $table->string('slug')->unique(); // Unique slug for URL-friendly access
            $table->string('default_severity')->default(INCIDENTSEVERITY::MODERATE->value); // Default severity level for incidents in this category
            $table->boolean('is_active')->default(true);
            $table->boolean('is_default')->default(false); // Indicates if this is a default category
            $table->boolean('is_visible')->default(true); // Indicates if this category is visible in the UI
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_categories');
    }
};
