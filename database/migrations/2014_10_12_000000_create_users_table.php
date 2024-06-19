<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('first_name');
      $table->string('last_name')->nullable();
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('two_factor_code')->nullable();
      $table->dateTime('two_factor_expires_at')->nullable();
      $table->string('password');
      $table->string('role')->default('customer');
      $table->string('profile_img')->nullable();
      $table->string('phone_no')->nullable();
      $table->string('address1')->nullable();
      $table->string('address2')->nullable();
      $table->integer('postal_code')->nullable();
      $table->string('city')->nullable();
      $table->string('state')->nullable();
      $table->rememberToken();
      $table->timestamps();
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