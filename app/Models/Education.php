<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = ['education'];
    protected $primaryKey = ['id'];

    public function Candidate()
    {
        return $this->belongsToMany('App\Models\Candidate');
    }
}
