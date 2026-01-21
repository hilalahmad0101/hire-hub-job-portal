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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Company Information
            $table->string('company_name');
            $table->string('website_url')->nullable();
            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->text('company_bio')->nullable();

            // Media Assets
            $table->string('banner_image')->nullable();
            $table->string('logo_image')->nullable();

            // SEO & Additional Info
            $table->string('slug')->unique()->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_published')->default(false);

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('user_id');
            $table->index('slug');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
