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
    Schema::create('log_pengunjungs', function (Blueprint $table) {
      $table->id();
      $table->string('ip_address', 45)->nullable(); // IPv4/IPv6
      $table->string('user_agent')->nullable();     // browser/device info
      $table->string('url')->nullable();            // halaman yang diakses
      $table->string('halaman')->nullable();            // halaman yang diakses
      $table->unsignedBigInteger('user_id')->nullable(); // jika user login
      $table->timestamp('visited_at')->useCurrent();     // waktu kunjungan
      $table->softDeletes();
      $table->timestamps();

      $table->index('ip_address');
      $table->index('user_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down() : void
  {
    Schema::dropIfExists('log_pengunjungs');
  }
};
