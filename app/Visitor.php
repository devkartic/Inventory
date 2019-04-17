<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['name', 'address', 'age'];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
