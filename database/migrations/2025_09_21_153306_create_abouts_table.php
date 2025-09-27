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
    Schema::create('abouts', function (Blueprint $table) {
      $table->id();
      $table->string('img');
      $table->string('jumlah_client');
      $table->string('jumlah_project');
      $table->text('deskripsi');
      $table->text('visi')->nullable();
      $table->text('misi')->nullable();
      $table->text('slogan')->nullable();
      $table->string('img_slogan')->nullable();
      $table->text('deskripsi_slogan')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down() : void
  {
    Schema::dropIfExists('abouts');
  }
};
