<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
  use SoftDeletes, HasTranslations;
  protected $guarded = [];
  public array $translatable =
    [
      'deskripsi',
      'deskripsi_slogan',
      'visi',
      'misi',
      'slogan',
    ];

}
