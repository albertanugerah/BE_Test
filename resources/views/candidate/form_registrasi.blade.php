@extends('layouts.app')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Forms
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <form action="/candidate" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="Ahmad Syaifullah" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Jenis Kelamin</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="L/P" name="gender">
                                        </div>
                                         <div class="form-group">
                                            <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="Jakarta" name="place_of_birth">
                                        </div>
                                        <div class="form-group">
                                            <label for="date_of_birth">Tanggal Lahir</label><span class="text-danger">*</span>
                                            <input name="date_of_birth" type="date" class="flatpickr flatpickr-input form-control" id="checkin-date">
                                        </div>
                                        <div class="form-group">
                                            <label for="religion">Agama</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="Agama" name="religion">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label><span class="text-danger">*</span>
                                            <input type="email" class="form-control" id="#" placeholder=" Email"-name="email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="0812345678910">
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Twitter</label><span class="text-danger"></span>
                                            <input type="text" class="form-control" id="#" placeholder="Twitter" name="twitter">
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Facebook</label><span class="text-danger"></span>
                                            <input type="text" class="form-control" id="#" placeholder="Facebook" name="facebook">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="identity_numbe#">Nomor KTP </label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="Nomor KTP " name="identity_number" >
                                        </div>
                                        <div class="form-group">
                                            <label for="identity_file"> File KTP</label><span class="text-danger">*</span>
                                            <input type="file" class="form-control" id="#" placeholder=" KTP " name="identity_file">

                                        </div>
                                        <div class="form-group">
                                            <label for="bank_name">Nama Bank </label><span class="text-danger">*</span>
                                             <select class="form-control" id="bank_name" name="bank_name">
                                            <option disabled selected value>--Select Bank --</option>
                                            <option value="1">BCA</option>
                                            <option value="2">MANDIRI</option>
                                            <option value="3">BRI</option>
                                            <option value="4">BTN</option>
                                            <option value="5">BNI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="#" placeholder="Nomor Bank Akun" name="bank_account">
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                            <textarea class="form-control" id="#" rows="8" placeholder="Alamat Domisili" name="address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Instagram</label><span class="text-danger"></span>
                                            <input type="text" class="form-control" id="#" placeholder="Instagram" name="instagram">
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Linked In</label><span class="text-danger"></span>
                                            <input type="text" class="form-control" id="#" placeholder="Linked In" name="likedin">
                                        </div>
                                    </div>
                                </div><br>
                                <h4 class="card-title"> Data Pendidikan </h4>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education">Pendidikan</label><span class="text-danger">*</span>
                                            <select class="form-control" id="education" name="education">
                                            <option disabled selected value>--Pilih Pendidikan --</option>
                                            <option value="1_SMA">SMA</option>
                                            <option value="2_D3">D3</option>
                                            <option value="3_D4">D4</option>
                                            <option value="4_S1">S1</option>
                                            <option value="5_S2">S2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Universitas</label><span class="text-danger">*</span>
                                               <select class="form-control" id="university" name="university">
                                            <option disabled selected value>--Pilih Universitas --</option>
                                            <option value="1_Universitas Singa Perbangsa">Universitas Singa Perbangsa</option>
                                            <option value="2_ITB">ITB</option>
                                            <option value="3_UI">UI</option>
                                            <option value="4_UNPAD">UNPAD</option>
                                            <option value="5_UNJ">UNJ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control mr-2" id="graduation_year" placeholder="Tahun Lulus" name="graduation_year">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="in_collage">
                                                        <label class="custom-control-label" for="customCheck2">Masih
                                                            Kuliah</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="major">Jurusan </label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="major" placeholder="Jurusan" name="major">
                                        </div>
                                        <div class="form-group">
                                            <label for="semester"> Semester</label><span class="text-danger">*</span>
                                            <input type="text" class="form-control" id="semester" placeholder="Semester" name="semester">
                                        </div>
                                    </div><br>
                                </div>

                                <div class="controls mt-3">
                                    <div class="entry ">
                                        <h4 class="card-title mt-5"> Pengalaman Organisai </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Organisasi</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="org_name" placeholder="organisasi" name="org_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Tahun</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="year" placeholder="tahun" name="year">
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">Jabatan</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="position" placeholder="jabatan" name="position">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="6" name="description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="file_org"> File</label>
                                                    <input type="file" class="form-control" id="file_org" placeholder="" name="file_org">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="input-group-btn float-right">
                                            <button class="btn btn-success btn-sm btn-add" type="button"> Tambah Organisasi
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div><br>
                                <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="#">Keahlian</label><span class="text-danger">*</span>
                                            <textarea class="form-control" id="exampleTextarea1" rows="10" name="skill"></textarea>
                                        </div>
                                    </div>
                                </div><br>
                                <h4 class="card-title">Lain - Lain </h4>
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="#">File CV</label><span class="text-danger">*</span>
                                            <input type="file" class="form-control" id="#" placeholder="File CV.pdf" name="file_cv">
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Past Photo</label><span class="text-danger">*</span>
                                            <input type="file" class="form-control" id="#" placeholder="Photo.jpg" name="file_photo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="#"> Portofolio</label>
                                            <input type="file" class="form-control" id="#" placeholder="Portofolio.pdf" name="file_porto">
                                        </div>
                                    </div>
                                </div><br>
                                <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio1">Internet</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio2">Kampus</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio3">Instagram</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio4">facebook</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio5">Twitter</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input" name="source_information_id">
                                                    <label class="custom-control-label" for="customRadio6">Lain-lain</label>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="#" placeholder="" name="source_information_other">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I Accept <a href="" class="text-primary">Terms And Condition</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-outline-primary">Kirim Lamaran <i class="mdi mdi-send"></i></button>
                                </div>
                            </form>
                            <!--end form-->
                        </div>
                       

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                rights
                reserved.</span>
            <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                Technology
                Group </span>
        </div>
    </footer>
    <!-- partial -->
</div>
<script>

var checkbox = document.getElementById("customCheck2");
function validator() {
  if (checkbox.checked == false) {
    document.getElementById('graduation_year').disabled = false;
  } else {
    document.getElementById('graduation_year').disabled = true;
     document.getElementById('graduation_year').value = '';

  }
}

checkbox.addEventListener('click', validator);
</script>
<!-- main-panel ends -->
@endsection