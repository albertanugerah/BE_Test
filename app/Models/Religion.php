<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected  $table = ['religion'];
    protected $primaryKey = ['id'];

    public function Candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
}
