@extends('layouts/main')

@section('title' , 'Riset - Madani Indonesia')

@section('container')
<div id="main" class="site-main">
    <div class="layout-medium">
       <h3 style="font-size: 30px; font-family: 'Baloo Tammudu 2', cursive;">Riset Artikel</h3><br>
        <div class="col-md-12">
            <div class="row">
                @foreach ($show as $sw)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('foto_content/'.$sw->gambar) }}" alt="Card image cap" style="height: 250px; width: 300px;">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size: 20pt; font-family:'Baloo Tammudu 2', cursive;  text-transform: uppercase;">{{ $sw->judul }}</h5>
                    <p class="card-text">{{ str_limit($sw->isi, 100, ' Baca Selengkapnya...') }}</p>
    <a href="{{ url('detail_riset',$sw->id) }}" class="btn btn-primary btn-sm">View More</a>
  </div>
</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection