<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class student extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(course::class);
    }
}
