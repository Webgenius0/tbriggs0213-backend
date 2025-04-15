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
        Schema::create('choose_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);   
            $table->boolean('has_ads')->default(true);
            $table->enum('billing_cycle', ['free', 'monthly', 'yearly', 'lifetime']);
            $table->integer('touchpoint_limit')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_plans');
    }
};
