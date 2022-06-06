<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\doctor;
use App\Models\student;


class course extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->belongsToMany(doctor::class);
    }

    public function students()
    {
        return $this->belongsTo(student::class);
    }
}
