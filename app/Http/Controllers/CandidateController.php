<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Candidate;
use App\Models\CandidateOrganization;
use App\Models\Education;
use App\Models\Religion;
use App\Models\SourceInformation;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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


    public function organization(Request $request)
    {
        $orgFileName = "";
        // if ($request->file('file_org')->isValid()) {
        $orgFileName = Storage::putFile('/public/candidates/organisasi', $request->file('file_org'));
        // }

        $org =  [
            'org_name' =>  $request->org_name,
            'year' => $request->year,
            'position' => $request->position,
            'description' => $request->description,
            'file' => $orgFileName
        ];
        return $org;
    }

    public function education(Request $request)
    {
        $educations = Education::where('name', $request->education_name)->first();
        $universities = University::where('name', $request->university_name)->first();
        $edu = [
            'education_id'              => $educations->getAttributes()['id'],
            'university_id'             => $universities->getAttributes()['id'],
            'major'                     => $request->major,
            'graduation_year'           => $request->graduation_year,
            'in_collage'                => $request->in_collage != null ? 1 : 0,
            'semester'                  => $request->semester,
        ];
        return $edu;
    }


    public function profile(Request $request)
    {
        $banks = Bank::where('name', $request->bank_name)->first();
        $religions = Religion::where('name', $request->religion_id)->first();
        $ktpName = Storage::putFile('/public/candidates/ktp', $request->file('identity_file'));
        $profile = [
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
            'twitter'                   => $request->twitter,
            'instagram'                 => $request->instagram,
            'linkedin'                  => $request->linkedin,
            'facebook'                  => $request->facebook,
        ];
        return $profile;
    }

    public function others(Request $request)
    {
        $cvName = $request->file('file_cv');
        $photoName = $request->file('file_photo');
        $portofolioName = $request->file('file_portofolio');



        // if ($request->file($cvName, $photoName, $portofolioName)->isValid()) {
        $uploadCV = Storage::putFile('/public/candidates/lain-lain', $cvName);
        $uploadPhoto = Storage::putFile('/public/candidates/lain-lain', $photoName);
        $uploadPortofolio = Storage::putFile('/public/candidates/lain-lain', $portofolioName);
        // }


        $others = [
            'file_cv'           => $uploadCV,
            'file_photo'        => $uploadPhoto,
            'file_portofolio'   => $uploadPortofolio
        ];
        return $others;
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
            'date_of_birth'     => ' required|date',
            'religion_id'       => 'required',
            'email'             => 'required|email',
            'phone'             => 'required|digits_between:10,12,',
            'identity_number'   => 'required|size:16',
            'identity_file'     => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'bank_account'      => 'required|numeric',
            'bank_name'         => 'required',
            'address'           => 'required',
            'major'              => 'required',
            'skill'             => 'required',
            'file_cv'           => 'required|file|mimes:jpeg,jpg,pdf|max:2048',
            'file_photo'        => 'required|image|max:2048',
            'file_portofolio'           => 'required|file|max:2048',
        ]);

        $profile = array_unshift($this->profile($request));
        $education = $this->education($request);
        $organization = $this->organization($request);
        $others = $this->others($request);
        $post = [
            $profile,
            $education,
            $organization,
            'skill'                     => $request->skill,
            $others,
            'source_information_id'     => $request->source_information_id,
            'source_information_other'  => $request->source_information_other,
        ];

        dd($post);

        // Candidate::create([
        //     $profile,
        //     $education,
        //     $organization,
        //     'skill'                     => $request->skill,
        //     $others,
        //     'source_information_id'     => $request->source_information_id,
        //     'source_information_other'  => $request->source_information_other,
        // ]);

        $candidates = Candidate::all();

        return view('candidate.data_activity', compact('candidates'));
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
