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
    Schema::create('hotels', function (Blueprint $table) {
      $table->id();
      $table->string('category');
      $table->string('name');
      $table->decimal('rating', 2, 1);
      $table->string('location');
      $table->integer('distance');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('hotels');
  }
};