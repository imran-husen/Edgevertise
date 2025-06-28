<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingData extends Model
{
    protected $fillable=[
        'name',
        'college',
        'number',
        'email',
        'course',
      ];
}
