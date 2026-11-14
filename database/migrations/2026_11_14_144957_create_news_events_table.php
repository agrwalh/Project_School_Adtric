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
        Schema::create('news_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('category', ['News', 'Event', 'Achievement'])->index();
            $table->date('event_date')->index();
            $table->string('image')->nullable();
            $table->text('short_description');
            $table->longText('content');
            $table->boolean('is_published')->default(true)->index();
            $table->timestamps();

            // Composite index for efficient querying of published items by date and category
            $table->index(['is_published', 'event_date']);
            $table->index(['is_published', 'category', 'event_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_events');
    }
};
