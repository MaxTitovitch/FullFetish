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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['user', 'seller', 'admin']);
            $table->string('country');
            $table->string('referral')->nullable();
            $table->string('rating')->default(5);
            $table->string('balance')->default(0);
            $table->longText('description')->default('');
            $table->unsignedInteger('subscribe_cost')->nullable();
            $table->timestamp('birthday_at');
            $table->timestamp('visited_at')->nullable();

            $table->string('photo')->nullable();
            $table->string('photo_passport')->nullable();
            $table->string('photo_passport_selfie')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('password_verified_at')->nullable();
            $table->timestamp('password_selfie_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
