<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['visitor_id', 'division_id', 'from_date', 'to_date', 'durations'];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
