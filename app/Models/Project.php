<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    public function tags()
    {
        return $this->hasMany(ProjectTag::class);
    }
}
