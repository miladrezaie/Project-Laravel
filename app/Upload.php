<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable=['name','new_id','size','type'];
    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
