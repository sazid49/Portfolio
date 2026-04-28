<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'email',
        'phone',
        'location',
        'cv_file',
    ];
}
