<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = [
        'name',
        'family',
        'degree',
        'location_birth',
        'birthday',
        'address',
        'mobile',
        'email',
        'contact',
        'profosor_id'
    ];

    public function profosor()
    {
        return $this->belongsTo(Profosor::class);
    }
}
