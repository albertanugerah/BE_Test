<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SourceInformation extends Model
{
    protected $table = ['source_information'];
    protected $primaryKey = ['id'];

    public function Candidate()
    {
        return $this->belongsToMany('App\Models\Candidate');
    }
}
