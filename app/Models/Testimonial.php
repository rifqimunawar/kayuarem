<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
  use SoftDeletes, HasTranslations;
  protected $guarded = [];

  public array $translatable =
    [
      'deskripsi',
    ];
}
