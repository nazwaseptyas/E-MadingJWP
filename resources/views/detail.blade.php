@extends('layouts/main')

@section('container')
<section class="container-fluid">
    <a href="/">
        <img src="{{ asset('assets/img/arrowleft.svg') }}" alt="Back" style="margin-top: 30px; margin-left:50px; margin-bottom:20px;">
    </a>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mb-30 mx-auto">
                <div class="artikel-details">
                    <div class="artikel-d-img">
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->judul }}" />
                    </div>
                    <div class="artikel-body" style="margin-top: 20px;">
                        <div class="artikel-text">
                            <span style="font-weight:500; margin-right: 30px;">
                                <img src="{{ asset('assets/img/date.svg')}}" alt="Date">
                                {{ $data->tgl_artikel }}
                            </span>
                            <span style="font-weight:500;">
                                <img src="{{ asset('assets/img/user.svg')}}" alt="User">
                                {{ $data->penulis }}
                            </span>
                        </div>
                        <h4 style="margin-top: 30px; text-align: justify; margin-bottom: 30px; font-weight:700;">{{ $data->judul }}</h4>
                        <p style="text-align: justify;">{!! nl2br(e($data->isi_artikel)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection