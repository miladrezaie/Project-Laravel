<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profosor extends Model
{

    protected $fillable = ['name', 'family','degree'];


    public function degrees()
    {
        return $this->hasMany(Degree::class);
    }

    public function profosorimages()
    {
        return $this->hasMany(Profesorimage::class);
    }
}
