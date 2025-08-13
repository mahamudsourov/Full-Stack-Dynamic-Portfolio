<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $table = 'personal_details';

    protected $fillable = [
        'user_id',
        'description',
        'blood_group',
        'department',
        'age',
        'dob',
        'address',
        'gender',
    ];
}
