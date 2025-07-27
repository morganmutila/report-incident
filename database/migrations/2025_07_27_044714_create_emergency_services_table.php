<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ServiceType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emergency_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default(ServiceType::OTHER->value);
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('coverage_raduis_km', 5, 2)->default(0.00);
            $table->text('description')->nullable();
            $table->json('meta')->nullable();
            $table->index(['type']);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_services');
    }
};
