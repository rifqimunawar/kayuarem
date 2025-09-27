<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
  use SoftDeletes, HasTranslations;
  protected $guarded = [];
  // uuid
  public $incrementing = false;
  protected $keyType = 'string';

  protected static function boot()
  {
    parent::boot();

    static::creating(function ($model) {
      if (!$model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }
  // uuid

  public function category()
  {
    return $this->belongsTo(Categori_News::class, 'categori_id');
  }
  public array $translatable =
    [
      'judul',
      'deskripsi',
    ];
}
