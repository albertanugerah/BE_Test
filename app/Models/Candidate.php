<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = 'id';
    protected $table  = 'candidate';


    public function Religion()
    {
        return $this->belongsTo('App\Models\Religion');
    }

    public function Bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    public function Education()
    {
        return $this->belongsTo('App\Models\Education');
    }

    public function Univeristy()
    {
        return $this->belongsTo('App\Models\Univesity');
    }

    public function SourceInformation()
    {
        return $this->belongsTo('App\Models\Univesity');
    }

    public function CandidateStatus()
    {
        return $this->belongsTo('App\Models\CandidateStatus');
    }
    public function CandidateOrganization()
    {
        return $this->hasOne('App\Models\CandidateOrganization');
    }
}
