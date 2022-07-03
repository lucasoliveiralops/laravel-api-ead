<?php

namespace App\Models;

use App\Models\Traits\GenerateUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use GenerateUuid, HasFactory;
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['name'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
