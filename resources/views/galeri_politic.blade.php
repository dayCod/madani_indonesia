@extends('layouts/main')

@section('title' , 'Gallery - Madani Indonesia')

@section('container')

<session class="gallery-block cards-gallery">

    <div class="container">
        <div class="headling">
            <h2 class="mt-4">Gallery Politic Madani Indonesia</h2>
        </div>




        <div class="col-md-12">
        <div class="row">
            @foreach ($post as $gm)
            <div class="col-md-4 mb-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="">
                        <img src="{{ asset('gallery/'.$gm->gambar) }}" class="card-img-top"
                        style="box-shadow: 0px 2px 10px rgba(0,0,0,0.5); width: 300px; height: 300px;">
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </div>

</session>
@endsection
