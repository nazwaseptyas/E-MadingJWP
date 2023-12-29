@extends('layouts/mainadmin')

@section('container')
<div class="container mt-5">
    <h2 class="tab-quote"> &nbsp; Edit Artikel</h2><br>
    <div class="container crud-container">
        <form action="{{ route('updateartikel', ['id' => $data->id_artikel]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" value="{{ $data->judul }}" class="form-control" id="judul" placeholder="Masukkan Judul Artikel">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="penulis" class="form-label">Nama Penulis</label>
                    <input type="text" name="penulis" value="{{ $data->penulis }}" class="form-control" id="penulis" placeholder="Masukkan Nama Penulis">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="tgl_artikel" class="form-label">Tanggal</label>
                <input type="date" name="tgl_artikel" value="{{ $data->tgl_artikel }}" class="form-control" id="tgl_artikel">
            </div>

            <div class="mb-3">
                <label for="isi_artikel" class="form-label">Isi Artikel</label>
                <textarea name="isi_artikel" class="form-control" id="isi_artikel" placeholder="Masukkan Isi Artikel" style="height: 200px" rows="6">{{ $data->isi_artikel }}</textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" value="{{ $data->gambar }}" id="gambar">
            </div>
            
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select form-select-sm" id="status" name="status">
                    <option value="publish" {{ $data->status === 'publish' ? 'selected' : '' }}>Publish</option>
                    <option value="draf" {{ $data->status === 'draf' ? 'selected' : '' }}>Draf</option>
                </select>
            </div>

            <div style="margin-bottom: 100px;">
                <button class="btn btn-danger btn-custom" type="submit">Simpan</button>
                <a href="/admin" class="btn btn-danger btn-custom2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
