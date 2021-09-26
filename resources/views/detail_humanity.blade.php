@extends('layouts/main')
 
@section('title' , 'Detail Content - Madani Indonesia')

@section('container')

<!-- site-main -->
<div id="main" class="site-main">

        <div class="layout-medium"> 
            <div id="primary" class="content-area with-sidebar">

                <!-- site-content -->
                <div id="content" class="site-content" role="main">
            
                        <!-- .hentry -->
                        <article class="hentry post single-post">
                            <!-- .entry-header -->
                            <header class="entry-header">
                              @foreach ($show as $sw)
                                <h1 class="entry-title">{{ $sw->judul }}</h1>
                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Travel" rel="category tag"></a>
                                    </span>	
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{ $sw->created_at }}</time>
                                    </span> 
                                </div>
                            </header>
                            <div class="featured-image">
                                <img src="{{asset('foto_content/'.$sw->gambar)}}" alt="blog-image" width="660px" height="400px">
                            </div>
                            <div class="entry-content">                            
                                <p>{{ $sw->isi }}</p>
                                @endforeach
                                 <div class="share-links">
                                    
                                    <h3>SHARE THIS POST</h3>
                                                                    
                                    <a rel="nofollow" target="_blank" href="mailto:?subject=I wanted you to see this post&amp;body=Check out this post." title="Email this post to a friend"><i class="pw-icon-mail"></i></a>
                                    
                                      
                                    <a rel="nofollow" target="_blank" href="" title="Share this post on Facebook"><i class="pw-icon-facebook"></i></a>
                                    
                                    <a rel="nofollow" target="_blank" href="" title="Share this post on Google+"><i class="pw-icon-gplus"></i></a>
                                 </div> 
                            </div>   
                        </article>                                                      
                          <!-- #respond --> 
                </div>
                <!-- site-content -->
            </div>
            <!-- primary -->    
            <!-- #secondary -->
            <div id="secondary" class="widget-area sidebar" role="complementary">
            
                
                
                
                 <!-- widget :  MailChimp for WordPress Plugin --> 
                    <aside class="widget widget_mc4wp_widget">
                        <h3 class="widget-title">Subscribe To Madani Indonesia</h3>
                        <div class="form mc4wp-form">
                            <form action="{{ route('subs_action') }}" method="POST">
                                @csrf
                                <p>
                                    <label>Email address: </label>
                                    <input type="email" name="email" placeholder="Your email address">
                                </p>
                                <p>
                                    <input type="submit" value="Subscribe!">
                                </p>
                            </form>
                        </div>
                    </aside>
                    <!-- widget :  MailChimp for WordPress Plugin -->
                    
                
                
                
                <!-- widget : popular-posts -->
                <!-- styles for plugin : https://wordpress.org/plugins/top-10 -->
                <!-- widget : popular-posts -->
                
                
                <!-- widget : categories -->
                <aside class="widget widget_categories">
                  <h3 class="widget-title">Categories</h3>
                  <ul>
                    <li class="cat-item"><a href="/social" title="View all posts filed under Nature">Social</a></li>
                    <li class="cat-item"><a href="/riset" title="View all posts filed under Life">Riset</a></li>
                    <li class="cat-item"><a href="/politic" title="View all posts filed under Adventure">Politic</a></li>
                    <li class="cat-item"><a href="/humanity" title="View all posts filed under Adventure">Humanity</a></li>
                    <li class="cat-item"><a href="/public-space" title="View all posts filed under Adventure">Public Space</a></li>
                 </ul>
                </aside>
                <!-- widget : categories -->
                
                
                
                
                </div>
                <!-- #secondary -->
            
            </div>
            <!-- layout -->
        
        
        </div>
        <!-- site-main -->
@endsection