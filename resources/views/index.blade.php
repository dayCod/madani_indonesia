@extends ('layouts/main')
 
@section('title' , 'Madani Indonesia - Social Riset Politic')

@section('container')
    <div id="main" class="site-main">
					
        <!-- InstanceBeginEditable name="TopContent" -->
        
        <!-- InstanceEndEditable -->
        
        <div class="layout-medium"> 
            <div id="primary" class="content-area">
         
                <!-- site-content -->
                <div id="content" class="site-content" role="main">
                        
                    <!-- InstanceBeginEditable name="PageContent" -->
                    
                    <!-- .hentry -->
                    <article class="hentry page">
                        
                            
                        <!-- .entry-content -->
                        <div class="entry-content intro" data-animation="rotate-1">
                            
                         <!-- .profile-image -->
                         <div class="profile-image">
                                	<img alt="profile" src="{{asset('images/ico/logo.jpg')}}">
                                </div>  
                                <!-- .profile-image -->
                                
                                
                                <h2 style="font-family: 'Baloo Tammudu 2', cursive; font-size: 85px;">Madani Indonesia</h2>
                                <h3 style="font-family: 'Baloo Tammudu 2', cursive; font-size: 35px;
                                ">Pusat Kajian Social Riset and Politic Development</h3>
                                
                        
                            <!-- .link-boxes -->
                            <figure>
                                <a href="/article"><img src="images/ico/article2.png" alt="Article"></a>
                                <figcaption class="wp-caption-text">Article</figcaption>
                            </figure>        
                            
                            <figure>
                                <a href="/galeri"><img src="images/ico/gallery.jpg" alt="Gallery"></a>
                                <figcaption class="wp-caption-text">Gallery</figcaption>
                            </figure> 
                            
                            <figure>
                                <a href="/about-madani-indonesia"><img src="images/ico/logo.jpg" alt="About Madani Indonesia"></a>
                                <figcaption class="wp-caption-text">About <br> Madani Indonesia</figcaption>
                            </figure> 
                            
                            <figure>
                                <a href="/our-team"><img src="images/ico/group.png" alt="Our Team" ></a>
                                <figcaption class="wp-caption-text">Our Team</figcaption>
                            </figure> 
                            <!-- .link-boxes -->         
                                
                                
                         </div> 
                         <!-- .entry-content -->
                            
                                
                                
                     </article> 
                     <!-- .page -->
                             
                   <!-- .home-title -->
                   <h3 class="widget-title home-title">NEWEST ARTICLE</h3>  
                     
                    @foreach ($value as $val)
                   <!-- BLOG SIMPLE -->
                   <div class="blog-simple">
                        
                        <!-- .hentry -->  
                        <article class="hentry post has-post-thumbnail">
                            
                            <!-- .hentry-left -->
                            <div class="hentry-left">
                                <div class="entry-date">
                                    <span class="day">{{ $loop->index+1 }}</span>
                                </div>
                                <div class="featured-image">
                                <img src="{{ asset('foto_content/'.$val->gambar) }}" style="width: 100px; height: 100px;">
                                </div>
                            </div>
                            <div class="hentry-middle">
                                    
                                <!-- .entry-title -->
                                <h2 class="entry-title">{{ $val->judul }}</h2>
                        
                            </div> 
                            
                        </article>
                   </div> 
                   @endforeach
                   <!-- BLOG SIMPLE -->
                  
                  <!-- .home-launch -->
                  <div class="home-launch">
                    <a class="button" href="/article">See All Articles</a>
                  </div> 
                  <!-- .home-launch -->
                           
                    <!-- InstanceEndEditable -->
                                
                </div>
                <!-- site-content -->
        
            </div>
            <!-- primary -->    
            
        </div>
        <!-- layout -->
    
    </div>
    <!-- site-main -->
@endsection