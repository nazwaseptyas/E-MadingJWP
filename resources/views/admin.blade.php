@extends('layouts/mainadmin')

@section('container')
<div class="container mt-5">
    {{-- Tabel Publish Artikel --}}
    <h2 class="tab-quote"> &nbsp; Publish Artikel</h2>
    <a href="/add" class="btn btn-danger btn-custom" style="margin-bottom: 20px;">Tambah Artikel</a>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Isi Artikel</th>
                <th>Gambar</th>
                <th>Created At</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data->where('status', 'publish') as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->penulis }}</td>
                    <td>{{ $row->tgl_artikel }}</td>
                    <td style="text-align: justify;">{{ $row->isi_artikel }}</td>
                    <td>
                        <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" style="max-width: 100px;">
                    </td>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="/edit/{{ $row->id_artikel }}" class="btn btn-primary btn-custom3">Edit</a>
                            <a href="/delete-article/{{ $row->id_artikel }}" class="btn btn-danger btn-custom3">Delete</a>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success">{{ $row->status }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Tabel Draf Artikel --}}
    <h2 class="tab-quote" style="margin-top: 100px;"> &nbsp; Draf Artikel</h2>
    <table class="table" style="margin-bottom: 100px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Isi Artikel</th>
                <th>Gambar</th>
                <th>Created At</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data->where('status', 'draf') as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->penulis }}</td>
                    <td>{{ $row->tgl_artikel }}</td>
                    <td style="text-align: justify;">{{ $row->isi_artikel }}</td>
                    <td>
                        <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" style="max-width: 100px;">
                    </td>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                        <a href="/edit/{{ $row->id_artikel }}" class="btn btn-primary btn-custom3">Edit</a>
                        <a href="/delete-article/{{ $row->id_artikel }}" class="btn btn-danger btn-custom3">Delete</a>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-danger">{{ $row->status }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
