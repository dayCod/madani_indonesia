@extends('layouts/main')

@section('title' , 'Public Space - Madani Indonesia')

@section('container')
<div id="main" class="site-main">
    <div class="layout-medium">
        <h3 style="font-size: 30px; font-family: 'Baloo Tammudu 2', cursive;">Public Space Artikel</h3><br>
        <div class="col-md-12">
            <div class="row">
                @foreach($show as $rp)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('foto_content/'.$rp->gambar) }}" alt="Card image cap" style="height: 250px; width: 300px;">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size: 20pt; font-family:'Baloo Tammudu 2', cursive;  text-transform: uppercase;">{{ $rp->judul }}</h5>
                    <p class="card-text">{{ str_limit($rp->isi, 100, ' Baca Selengkapnya...') }}</p>
    <a href="{{ url('detail_politic',$rp->id) }}" class="btn btn-primary btn-sm">View More</a>
  </div>
</div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>
@endsection