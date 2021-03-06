<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateStatus extends Model
{
    protected $table = 'candidate_status';
    protected $primaryKey = 'id';

    public function Candidate()
    {
        return $this->hasMany('App\Models\Candidate');
    }
}
