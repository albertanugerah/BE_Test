<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateOrganization extends Model
{
    protected $table = 'candidate_organization';
    protected $primaryKey = 'id';
    protected $guarded = 'id';

    public function Candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
}
