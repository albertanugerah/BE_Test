<?php

namespace App\Http\Controllers;

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
        $candidates = [
            ['No' => 1, 'Nama Kandidat' => 'Annisa Rahma', 'Jurusan' => 'Komunikasi', 'Tanggal Registrasi' => 'Dec 3, 2020', "Unit Kerja" => "IT Group", "Status" => 'Review', 'Email' => "annisa@gmail.com"],
            ['No' => 2, 'Nama Kandidat' => 'Joko Anwar', 'Jurusan' => 'Hukum', 'Tanggal Registrasi' => 'Dec 8, 2020', "Unit Kerja" => "Audit Group", "Status" => 'Review', 'Email' => "joko@gmail.com"],
            ['No' => 3, 'Nama Kandidat' => 'Budi Jamal', 'Jurusan' => 'Ekonomi', 'Tanggal Registrasi' => 'Dec 8, 2020', "Unit Kerja" => "Finance Group", "Status" => 'Review', 'Email' => "joko@gmail.com"],
        ];

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('candidate.data_activity_detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
