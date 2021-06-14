<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = ['university'];
    protected $primaryKey = ['id'];

    public function Candidate()
    {
        return $this->belongsToMany('App\Models\Candidate');
    }
}
