<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'id';


    public function Candidate()
    {
        return $this->belongsToMany('App\Models\Candidate');
    }
}
