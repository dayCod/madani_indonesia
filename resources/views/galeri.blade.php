@extends('layouts/main')

@section('title' , 'Gallery - Madani Indonesia')

@section('container')

<session class="gallery-block cards-gallery">

	<div class="container">
		<div class="headling">
			<h2 class="mt-4">Gallery Madani Indonesia</h2>
		</div>

		<div class="post-slider owl-carousel" data-items="3" data-loop="true" data-center="true" data-mouse-drag="true"  data-dots="false" data-autoplay="true" data-autoplay-speed="500" data-autoplay-timeout="2000" >
         
		 <div class="post-thumbnail" style="background-image:url(images/ico/politic.jpg);height: 250px;">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title mt-5"><a href="{{ asset('galeri_politic') }}">Politic</a></h2>
                 
                 <p><a href="{{ asset('galeri_politic') }}" class="more-link">View Album</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->    
         
         <!-- post -->
         <div class="post-thumbnail" style="background-image:url(images/ico/social.png);height: 250px;">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                
                 <!-- .entry-title -->
                 <h2 class="entry-title mt-5"><a href="{{ asset('galeri_social') }}">Social</a></h2>
                 
                 <p><a href="{{ asset('galeri_social') }}" class="more-link">View Album</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->  
         
         <!-- post -->
         <div class="post-thumbnail" style="background-image:url(images/ico/public.jpg); height: 250px;">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title mt-5"><a href="{{ asset('galeri_public') }}">Public Dialog</a></h2>
                 
                 <p><a href="{{ asset('galeri_public') }}" class="more-link">View Album</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>

         </div>
     <!-- post-slider -->




		<!-- <div class="col-md-12">
		<div class="row">
			@foreach ($gambar as $gm)
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
	</div> -->
	</div>

</session>
@endsection
