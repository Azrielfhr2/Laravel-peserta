@extends('layouts.master')
@section('title')
    <title>Edit Data Peserta</title>
@endsection
@section('content')
    <div class="container pt-5">
        <a href="/peserta" class="btn btn-primary pb">Kembali</a>
    </div>
    <form class="container pt-3" action="/peserta/{{ $peserta->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input value="{{ $peserta->nama }}" name="nama" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select name="jk" class="form-select" id="validationCustom04">
                <option selected disabled value="">{{ $peserta->jk }}</option>
                <option value="Laki-laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="floatingTextarea2"
                style="height: 100px">{{ $peserta->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
            <select name="agama" class="form-select" id="minat_jurusan">
                <option selected disabled value="">{{ $peserta->agama }}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
            <input value="{{ $peserta->asal_sekolah }}" name="asal_sekolah" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Minat Jurusan</label>
            <select name="minat_jurusan" class="form-select" id="validationCustom04">
                <option selected disabled value="">{{ $peserta->minat_jurusan }}</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="MMD">Multimedia</option>
                <option value="TBG">Tata Boga</option>
                <option value="TBS">Tata Busana</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
