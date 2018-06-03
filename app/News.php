<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'body'];

    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }
}
