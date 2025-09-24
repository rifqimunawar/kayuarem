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
    Schema::create('sites', function (Blueprint $table) {
      $table->id();
      $table->string('site_name')->nullable();
      $table->string('logo')->nullable();
      $table->string('alamat')->nullable();
      $table->string('link_ig')->nullable();
      $table->string('link_tw')->nullable();
      $table->string('link_fb')->nullable();
      $table->string('link_yt')->nullable();
      $table->string('link_lk')->nullable();
      $table->string('link_tt')->nullable();
      $table->string('link_shopee')->nullable();
      $table->string('link_tokped')->nullable();
      $table->string('link_lazada')->nullable();
      $table->string('mobile')->nullable();
      $table->string('email')->nullable();
      $table->string('link_gmap')->nullable();
      $table->string('slogan')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down() : void
  {
    Schema::dropIfExists('sites');
  }
};
