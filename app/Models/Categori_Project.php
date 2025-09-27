<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Categori_Project extends Model
{
  use SoftDeletes, HasTranslations;
  protected $guarded = [];
  protected $table = 'categori_projects';

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

  public function project()
  {
    return $this->hasMany(Project::class, 'categori_id');
  }
  public array $translatable =
    [
      'categori',
    ];
}
