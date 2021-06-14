@extends('layouts.app')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Daftar kandidat </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                </ol>
            </nav>
        </div>

        <!-- ---------------------------------------------------------------------- -->

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Diri </h4>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Ahmad Syaifullah"
                                            value="{{old('name') ? old('name') : $candidate->name}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Laki-laki"
                                            value="{{old('gender') ? old('gender') : $candidate->gender}}" disabled
                                            name="gender">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Tempat Lahir"
                                            value="{{old('city_of_birth') ? old('city_of_birth') : $candidate->city_of_birth}}"
                                            disabled name="city_of_birth">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Tanggal Lahir"
                                            value="{{old('date_of_birth') ? old('date_of_birth') : $candidate->date_of_birth}}"
                                            disabled name="date_of_birth">
                                    </div>

                                    <div class="form-group">
                                        <label for="#">Agama</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Agama" disabled
                                            value="{{old('religion_id') ? old('religion_id') : $candidate->religion_id}}"
                                            name="religion_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Email</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder=" Email" disabled
                                            value="{{old('email') ? old('email') : $candidate->email}}" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Nomor HP " disabled
                                            value="{{old('phone') ? old('phone') : $candidate->phone}}" name="phone">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Nomor KTP " disabled
                                            value="{{old('identity_number') ? old('identity_number') : $candidate->identity_number}}"
                                            name="identity_number">
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> File KTP</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="File KTP " disabled
                                            name="identity_file"
                                            value="{{old('identity_file') ? old('identity_file') : $candidate->identity_file}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Nama Bank " disabled
                                            name="bank_name"
                                            value="{{old('bank_name') ? old('bank_name') : $candidate->bank_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Nomor Bank Akun "
                                            disabled name="bank_account"
                                            value="{{old('bank_account') ? old('bank_account') : $candidate->bank_account}}">
                                    </div>
                                    <div class=" form-group">
                                        <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                        <textarea class="form-control" id="#" rows="6" placeholder="Alamat Domisili"
                                            disabled name="address">
                                            {{old('address') ? old('address') : $candidate->address}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title"> Data Pendidikan </h4>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Pendidikan"
                                            name="education_id"
                                            value="{{old('education_id') ? old('education_id') : $candidate->education_id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Universitas</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Universitas"
                                            name="university_id"
                                            value="{{old('university_id') ? old('university_id') : $candidate->university_id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                        <div class="form-group">
                                            <div class="input-group" name="#">
                                                <input type="text" class="form-control mr-2" id="#"
                                                    placeholder="Tahun Lulus" name="graduation_year"
                                                    value="{{old('graduation_year') ? old('graduation_year') : $candidate->graduation_year}}">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="in_college"
                                                            value="{{old('in_college') ? old('in_college') : $candidate->in_college}}">
                                                        Masih Kuliah
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Jurusan </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Jurusan"
                                            name="major" value="{{old('major') ? old('major') : $candidate->major}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Semester</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Semester"
                                            name="semester"
                                            value="{{old('semester') ? old('semester') : $candidate->semester}}">
                                    </div>
                                </div><br>
                            </div>
                            <h4 class="card-title"> Pengalaman Organisai </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Organisasi</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="organisasi"
                                            name="org_name"
                                            value="{{old('org_name') ? old('org_name') : $candidate->CandidateOrganization->org_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tahun</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="tahun"
                                            value="{{old('year') ? old('year') : $candidate->CandidateOrganization->year}}"
                                            name="year">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Jabatan</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="jabatan"
                                            name="position"
                                            value="{{old('position') ? old('position') : $candidate->CandidateOrganization->position}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                        <textarea class="form-control" id="exampleTextarea1" rows="6"
                                            name="description">{{old('description') ? old('description') : $candidate->CandidateOrganization->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> File</label>
                                        <input type="file" class="form-control" id="#" placeholder="" name="file"
                                            value="{{old('file') ? old('file') : $candidate->CandidateOrganization->file}}">
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="#">Keahlian</label><span class="text-danger">*</span>
                                        <textarea class="form-control" id="exampleTextarea1" rows="10" name="skill">{{old('skill') ? old('skill') : $candidate->skill}}
                                        </textarea>
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title">Lain - Lain </h4>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">File CV</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="File CV.pdf"
                                            name="file_cv"
                                            value="{{old('file_cv') ? old('file_cv') : $candidate->file_cv}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Past Photo</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Photo.jpg"
                                            name="file_photo"
                                            value="{{old('file_photo') ? old('file_photo') : $candidate->file_photo}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#"> Portofolio</label>
                                        <input type="text" class="form-control" id="#" placeholder="Portofolio.pdf"
                                            name="file_portofolio"
                                            value="{{old('file_portofolio') ? old('file_portofolio') : $candidate->file_portofolio}}">
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                            <div class="row">
                                @foreach ($source_information as $item)
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input"
                                                    name="optionsRadios{{$item->id}}" id="optionsRadios1"
                                                    value="{{old('name') ? old('name') : $candidate->source_information_id}}"
                                                    {{($candidate->source_information_id == $item->id) ? "checked" : "disabled"}}>

                                                {{$item->name}} <i class="input-helper"></i></label>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <input type="text" class="form-control col-md-3 float-right mr-5" id="#" placeholder=""
                                name="source_information_others"
                                value="{{old('source_information_others') ? old('source_information_others') : $candidate->source_information_others}}"><br>
                            <h4 class="card-title">Data Akun Magang </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Lowongan</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Lowongan" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tipe Magang </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="Tipe Magang"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#"> Periode Magang</label>
                                        <input type="text" class="form-control" id="#" placeholder="Periode Magang"
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Lokasi Magang</label>
                                        <input type="text" class="form-control" id="#" placeholder="Lokasi Magang "
                                            disabled>
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title">Proses Seleksi </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Hasil</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="#" placeholder="" disabled>
                                    </div>
                                </div>
                            </div><br>
                        </form>
                        <div class="float-right">
                            <a href="{{ url('candidate') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------------------------------------- -->

    </div>
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                    href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                rights
                reserved.</span>
            <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                Technology
                Group </span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection