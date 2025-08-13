<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'github_url',
        'demo_url',
        'images',
        'type',
        'reference',
        'tools',
        'keywords',
        'status',
    ];
}
