@extends('layouts/main')

@section('container')
    <section id="hero" class="container-fluid">
        <div id="hero-img" class="col-md-5">
            <img src="assets/img/home.png" class="img-fluid" alt="hero banner">
        </div>
        <div id="hero-greeting" class="col-md-5">
            <h1 class="hero1">E-Mading <br> JeWePe</h1>
            <h4 class="hero2">Kumpulan Informasi,<br> Jejak Kreativitas Pendidikan.</h4>
        </div>
    </section>

    {{-- List artikel --}}
    <section class="container-fluid" style="padding: 30px 100px 30px 100px;">
        <div class="row">   
            <div class="mb-3 mb-sm-0 card-artikel">
                <p class="tab-quote">
                    &nbsp; Artikel
                </p>
                @if ($data && $data->count() > 0)
                    @foreach ($data as $row)
                        @if ($row->status === 'publish')
                            <div class="card" style="margin-bottom: 25px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="{{ route('detail', $row->id_artikel) }}">
                                            <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" style="max-width: 100%;" class="img-fluid" />
                                        </a>
                                    </div>
    
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="card-artikel" style="text-align: justify; display: flex; align-items: center;">
                                                <div class="artikel-item" style="margin-bottom: 20px;">
                                                    <img src="assets/img/date.svg" alt="Date Icon" />
                                                    <p style="margin-bottom: 0; font-weight:500; margin-right: 10px;">{{ $row->tgl_artikel }}</p>
                                                </div>
                                                <div class="artikel-item" style="margin-bottom: 20px;">
                                                    <img src="assets/img/user.svg" alt="User Icon" />
                                                    <p style="margin-bottom: 0; font-weight:500;">{{ $row->penulis }}</p>
                                                </div>
                                            </div>
                                            <h5 class="card-title" style="font-weight: 600; margin-bottom: 15px;">{{ $row->judul }}</h5>
                                            <p class="card-text" style="text-align: justify;">{{ \Illuminate\Support\Str::limit($row->isi_artikel, 200) }}</p>
                                            <a href="{{ route('detail', $row->id_artikel) }}" class="btn btn-danger btn-custom" style="width: 250px;">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- Pagination --}}
                   <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination mt-20 basic-pagination-2">
                                <ul class="pagination-list">
                                    @if ($data->onFirstPage())
                                        <li class="disabled"><a href="#"><img src="assets/img/arrowleft.svg" alt="Previous"></a></li>
                                    @else
                                        <li><a href="{{ $data->previousPageUrl() }}"><img src="assets/img/arrowleft.svg" alt="Previous"></a></li>
                                    @endif

                                    @foreach ($data as $page)
                                        @if ($page->url)
                                            <li class="{{ $page->isActive ? 'active' : '' }}">
                                                <a href="{{ $page->url }}" class="pagination-link">{{ $page->label }}</a>
                                            </li>
                                        @else
                                            <li class="disabled">{{ $page->label }}</li>
                                        @endif
                                    @endforeach

                                    @if ($data->hasMorePages())
                                        <li><a href="{{ $data->nextPageUrl() }}"><img src="assets/img/arrowright.svg" alt="Next"></a></li>
                                    @else
                                        <li class="disabled"><a href="#"><img src="assets/img/arrowright.svg" alt="Next"></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <p>Tidak ada data artikel yang ditampilkan.</p>
                @endif
            </div>
        </div>
    </section>
@endsection
