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
        Schema::create('admission_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');
            $table->string('student_name');
            $table->string('class_applying_for');
            $table->string('mobile', 15)->index();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['New', 'Contacted', 'Closed'])->default('New')->index();
            $table->enum('crm_status', ['Pending', 'Sent', 'Failed'])->default('Pending')->index();
            $table->text('crm_response')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();

            // Index to support fast 24-hour duplicate enquiry checks (mobile + class + created_at)
            $table->index(['mobile', 'class_applying_for', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_enquiries');
    }
};
