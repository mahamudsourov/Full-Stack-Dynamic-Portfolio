<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $fillable = [
        'user_id',
        'type',
        'name',
        'institute',
        'enrolled_year',
        'passing_year',
        'grade',
    ];
}
