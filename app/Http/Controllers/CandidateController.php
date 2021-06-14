<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Candidate;
use App\Models\Education;
use App\Models\Religion;
use App\Models\SourceInformation;
use App\Models\University;
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
        $source_information = SourceInformation::all();
        return view('candidate.form_registrasi', compact('source_information'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $religions = Religion::where('name', $request->religion_id)->first();
        $banks = Bank::where('name', $request->bank_name)->first();
        $educations = Education::where('name', $request->education_name)->first();
        $universities = University::where('name', $request->university_name)->first();





        $ktpName = $request->identity_file->getClientOriginalName() . '-' . time() . '.' . $request->identity_file->extension();
        $request->identity_file->move(public_path('candidates/ktp', $ktpName));

        $orgFileName = $request->file_org->getClientOriginalName() . '-' . time() . '.' . $request->file_org->extension();
        $request->file_org->move(public_path('candidates/organisasi', $orgFileName));

        $cvName = $request->file_cv->getClientOriginalName() . '-' . time() . '.' . $request->file_cv->extension();
        $request->file_cv->move(public_path('candidates/lain-lain', $cvName));

        $photoName = $request->file_photo->getClientOriginalName() . '-' . time() . '.' . $request->file_photo->extension();
        $request->file_photo->move(public_path('candidates/lain-lain', $photoName));

        $portofolioName = $request->file_portofolio->getClientOriginalName() . '-' . time() . '.' . $request->file_portofolio->extension();
        $request->file_portofolio->move(public_path('candidates/lain-lain', $portofolioName));

        $requestPost = [
            'name'                      => $request->name,
            'gender'                    => $request->gender,
            'city_of_birth'             => $request->city_of_birth,
            'date_of_birth'             => $request->date_of_birth,
            'religion_id'               => $religions->getAttributes()['id'],
            'email'                     => $request->email,
            'phone'                     => $request->phone,
            'identity_file'             => $ktpName,
            'bank_id'                   => $banks->getAttributes()['id'],
            'bank_account'              => $request->bank_account,
            'bank_name'                 => $request->bank_name,
            'address'                   => $request->address,
            'education_id'              => $educations->getAttributes()['id'],
            'university_id'             => $universities->getAttributes()['id'],
            'major'                     => $request->major,
            'graduation_year'           => $request->graduation_year,
            'in_college'                => $request->in_college,
            'semester'                  => $request->semester,
            'skill'                     => $request->skill,
            'file'                      => $orgFileName,
            'file_cv'                   => $cvName,
            'file_photo'                => $photoName,
            'file_portofolio'           => $portofolioName,
            'source_information_id'     => $request->source_information_id,
            'source_information_other'  => $request->source_information_other,
            'work_unit'                 => $request->work_unit,
            'ranking'                   => $request->ranking,
            'assessment_score'          => $request->assessment_score,
            'mail_sent'                 => $request->mail_sent,
            'twitter'                   => $request->twitter,
            'linkedin'                  => $request->linkedin,
            'facebook'                  => $request->facebook,
            'candidate_status_id'       => $request->candidate_status_id,

        ];
        dd($requestPost);



        // $request->validate([
        //     'name'              => 'required|max:300',
        //     'gender'            => ' required|in:L,P',
        //     'city_of_birth'     => ' required',
        //     'date_of_birth'     => ' required|date|before_or_equal:date|',
        //     'religion_id'       => 'required',
        //     'email'             => 'required|email',
        //     'phone'             => 'required|digits_between:10,12,',
        //     'identity_number'   => 'required|size:16',
        //     'identity_file'     => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        //     'bank_id'           => 'required',
        //     'bank_account'      => 'required|numeric',
        //     'bank_name'         => 'required',
        //     'address'           => 'required',
        //     'education_id'      => 'required',
        //     'major'              => 'required',
        //     'skill'             => 'required',
        //     'file_cv'           => 'required|file|mimes:jpeg,jpg,pdf|max:2048',
        //     'file_photo'           => 'required|image|max:2048',
        //     'file_portofolio'           => 'required|file|max:2048',

        // ]);

        Candidate::create([
            'name'                      => $request->name,
            'gender'                    => $request->gender,
            'city_of_birth'             => $request->city_of_birth,
            'date_of_birth'             => $request->date_of_birth,
            'religion_id'               => $request->religion_id,
            'email'                     => $request->email,
            'phone'                     => $request->phone,
            'identity_file'             => $ktpName,
            'bank_id'                   => $request->bank_id,
            'bank_account'              => $request->bank_account,
            'bank_name'                 => $request->bank_name,
            'address'                   => $request->address,
            'education_id'              => $request->education_id,
            'university_id'             => $request->university_id,
            'major'                     => $request->major,
            'graduation_year'           => $request->graduation_year,
            'in_college'                => $request->in_college,
            'semester'                  => $request->semester,
            'skill'                     => $request->skill,
            'file'                      => $orgFileName,
            'file_cv'                   => $cvName,
            'file_photo'                => $photoName,
            'file_portofolio'           => $portofolioName,
            'source_information_id'     => $request->source_information_id,
            'source_information_other'  => $request->source_information_other,
            'work_unit'                 => $request->work_unit,
            'ranking'                   => $request->ranking,
            'assessment_score'          => $request->assessment_score,
            'mail_sent'                 => $request->mail_sent,
            'twitter'                   => $request->twitter,
            'linkedin'                  => $request->linkedin,
            'facebook'                  => $request->facebook,
            'candidate_status_id'       => $request->candidate_status_id,

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
        $source_information = SourceInformation::all();
        $candidate = Candidate::find($id);

        return view('candidate.data_activity_detail', compact('candidate', 'source_information'));
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
