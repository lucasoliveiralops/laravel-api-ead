<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait GenerateUuid
{
  public static function boot()
  {
    static::creating(function ($model) {
      $model->id = (string) Str::uuid();
    });
  }
}
