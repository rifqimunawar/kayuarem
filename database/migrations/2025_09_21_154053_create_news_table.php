<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up() : void
  {
    Schema::create('news', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('img')->nullable();
      $table->string('judul')->nullable();
      $table->text('deskripsi')->nullable();
      $table->string('categori_id')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down() : void
  {
    Schema::dropIfExists('news');
  }
};
