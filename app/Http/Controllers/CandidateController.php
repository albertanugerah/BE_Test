<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();

        return view('candidate.data_activity', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.form_registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|max:300',
            'gender'            => ' required|in:L,P',
            'city_of_birth'     => ' required',
            'date_of_birth'     => ' required|date|before_or_equal:date|',
            'religion_id'       => 'required',
            'email'             => 'required|email',
            'phone'             => 'required|digits_between:10,12,',
            'identity_number'   => 'required|size:16',
            'identity_file'     => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'bank_id'           => 'required',
            'bank_account'      => 'required|numeric',
            'bank_name'         => 'required',
            'address'           => 'required',
            'education_id'      => 'required',
            'major'              => 'required',
            'skill'             => 'required',
            'file_cv'           => 'required|file|mimes:jpeg,jpg,pdf|max:2048',
            'file_photo'           => 'required|image|max:2048',
            'file_portofolio'           => 'required|file|max:2048',






        ]);

        Candidate::create([
            'name'                => $request->name,
            'gender'              => $request->gender,
            'city_of_birth'      => $request->city_of_birth,
            'date_of_birth'       => $request->date_of_birth,
            'religion_id'         => $request->religion_id,
            'email'               => $request->email,
            'phone'               => $request->phone,
            'identity_number'     => $request->identity_number
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.data_activity_detail', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.data_activity_edit', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Candidate::find($id)->update([
            'name'                => $request->name,
            'gender'              => $request->gender,
            'city_of_birth'       => $request->city_of_birth,
            'date_of_birth'       => $request->date_of_birth,
            'religion_id'         => $request->religion_id,
            'email'               => $request->email,
            'phone'               => $request->phone,
            'identity_number'     => $request->identity_number

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
