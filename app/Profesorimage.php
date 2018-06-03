<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesorimage extends Model
{
    protected $fillable=['name','profosor_id','size','type'];
    public function profosor()
    {
        return $this->belongsTo(Profosor::class);
    }
}
