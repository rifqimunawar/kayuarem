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
    Schema::create('products', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('img')->nullable();
      $table->text('nama_produk')->nullable();
      $table->decimal('nominal', 18)->nullable();
      $table->string('categori_id')->nullable();
      $table->text('deskripsi')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down() : void
  {
    Schema::dropIfExists('products');
  }
};
