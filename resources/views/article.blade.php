@extends('layouts/main')

@section('title' , 'Article - Madani Indonesia')

@section('container')

<!-- PAGE -->
<div id="page" class="hfeed-site">
            <!-- site-main -->
            <div id="main" class="site-main">
		
        <br>
        <h3 align="center">Category</h3><br>
        <!-- post-slider -->
     <div class="post-slider owl-carousel" data-items="3" data-loop="true" data-center="true" data-mouse-drag="true"  data-dots="false" data-autoplay="true" data-autoplay-speed="200" data-autoplay-timeout="2000">
         
         <!-- post -->
         <div class="post-thumbnail" style="background-image:url(images/blog/01.jpg)">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 <!-- .entry-meta -->
                 <div class="entry-meta">
                     <span class="cat-links">
                         <a href="/riset" title="View all posts in Life" rel="category tag">Riset</a>
                     </span>	
                 </div>
                 <!-- .entry-meta -->
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title"><a href="{{ url('riset') }}">Check Below For Detail</a></h2>
                 
                 <p><a href="{{ url('riset') }}" class="more-link">View Post</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->    
         
         <!-- post -->
         <div class="post-thumbnail" style="background-image:url(images/blog/02.jpg)">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 <!-- .entry-meta -->
                 <div class="entry-meta">
                     <span class="cat-links">
                         <a href="/politic" title="View all posts in Travel" rel="category tag">Politic</a>
                     </span>	
                 </div>
                 <!-- .entry-meta -->
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title"><a href="{{ url('politic') }}">Check Below For Detail</a></h2>
                 
                 <p><a href="{{ url('politic') }}" class="more-link">View Post</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->  
         
         <!-- post -->
         <div class="post-thumbnail" style="background-image:url(images/blog/05.jpg)">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 <!-- .entry-meta -->
                 <div class="entry-meta">
                     <span class="cat-links">
                         <a href="/social" title="View all posts in Travel" rel="category tag">Social</a>
                     </span>	
                 </div>
                 <!-- .entry-meta -->
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title"><a href="{{ url('social') }}">Check Below For Detail</a></h2>
                 
                 <p><a href="{{ url('social') }}" class="more-link">View Post</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->  
              <div class="post-thumbnail" style="background-image:url(images/blog/05.jpg)">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 <!-- .entry-meta -->
                 <div class="entry-meta">
                     <span class="cat-links">
                         <a href="/social" title="View all posts in Travel" rel="category tag">Humanity</a>
                     </span>    
                 </div>
                 <!-- .entry-meta -->
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title"><a href="{{ url('social') }}">Check Below For Detail</a></h2>
                 
                 <p><a href="{{ url('social') }}" class="more-link">View Post</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->  
          <div class="post-thumbnail" style="background-image:url(images/blog/05.jpg)">
                 
             <!-- .entry-header -->
             <header class="entry-header">
                 
                 <!-- .entry-meta -->
                 <div class="entry-meta">
                     <span class="cat-links">
                         <a href="/social" title="View all posts in Travel" rel="category tag">Public Space</a>
                     </span>    
                 </div>
                 <!-- .entry-meta -->
                 
                 <!-- .entry-title -->
                 <h2 class="entry-title"><a href="{{ url('social') }}">Check Below For Detail</a></h2>
                 
                 <p><a href="{{ url('social') }}" class="more-link">View Post</a></p>
                 
             </header>
             <!-- .entry-header -->
             
         </div>
         <!-- post -->  
             
             
     </div>
     <!-- post-slider -->
     
     <!-- InstanceBeginEditable name="TopContent" -->
     
     <!-- InstanceEndEditable -->
      
     <div class="layout-medium"> 
         <div id="primary" class="content-area">
     
             <!-- site-content -->
             <div id="content" class="site-content" role="main">
             
                 <!-- BLOG LIST -->
                 <div class="blog-list  blog-stream">
                 
                     <!-- .hentry -->
                     <article class="hentry post has-post-thumbnail">
                         
                         <!-- .featured-image -->
                       
                         <!-- .featured-image -->
                         
                         
                         
                         <!-- .hentry-middle -->
                         <!-- .hentry-middle -->
                         
                         
                     </article>
                     <!-- .hentry -->
                            <!-- post pagination -->
                            <nav class="post-pagination">
                                <ul class="pagination">
                                  <li class="pagination-first"><a href="#"> First </a></li>
                                  <li class="pagination-prev"><a href="#" rel="prev"></a></li>
                                  <li class="pagination-num"><a href="#"> 1 </a></li>
                                  <li class="pagination-num current"><a href="#"> 2 </a></li>
                                  <li class="pagination-num"><a href="#"> 3 </a></li>
                                  <li class="pagination-next"><a href="#" rel="next"></a></li>
                                  <li class="pagination-last"><a href="#"> Last </a> </li>
                                </ul>
                            </nav>
                            <!-- post pagination -->
            </div>
        </div>
    </div>
                 
</div>

</div>


@endsection