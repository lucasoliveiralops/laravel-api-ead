<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait GenerateUuid
{
  public static function booted()
  {
    static::creating(function ($model) {
      $model->{$model->getKeyName()} = (string) Str::uuid();
    });
  }
}
