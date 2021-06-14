<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = ['id'];
    protected $table  = ['candidate'];


    public function Religion()
    {
        return $this->hasOne('App\Models\Religion');
    }

    public function Bank()
    {
        return $this->hasOne('App\Models\Bank');
    }

    public function Education()
    {
        return $this->hasOne('App\Models\Education');
    }

    public function Univeristy()
    {
        return $this->hasOne('App\Models\Univesity');
    }

    public function SourceInformation()
    {
        return $this->hasOne('App\Models\Univesity');
    }

    public function CandidateStatus()
    {
        return $this->hasOne('App\Models\CandidateStatus');
    }
}
