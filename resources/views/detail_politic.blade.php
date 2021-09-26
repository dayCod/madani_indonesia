@extends('layouts/main')
 
@section('title' , 'Detail Content - Madani Indonesia')

@section('container')

<!-- site-main -->
<div id="main" class="site-main">
		
        
		
			
			
			
			
            
			
        <!-- InstanceBeginEditable name="TopContent" -->
        
        <!-- InstanceEndEditable -->
        
        
        
    
    
         
    
         
        <div class="layout-medium"> 
            <div id="primary" class="content-area with-sidebar">
         
        
         
        
        
        
         
    
        

        
                <!-- site-content -->
                <div id="content" class="site-content" role="main">
                
                                
                    <!-- InstanceBeginEditable name="PageContent" -->
                
                    
                
                
                
                
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
                                                                    
                                    <a rel="nofollow" target="_blank" href="mailto:?subject=I wanted you to see this post&amp;body=Check out this post : Sketching Mickey - http://themes.pixelwars.org/editor-html/blog-single.html." title="Email this post to a friend"><i class="pw-icon-mail"></i></a>
                                    
                                    <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=Currently%20reading:%20'Sketching%20Mickey'%20http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post with your followers"><i class="pw-icon-twitter"></i></a>
                                      
                                    <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://themes.pixelwars.org/editor-html/blog-single.html&amp;t=Sketching%20Mickey" title="Share this post on Facebook"><i class="pw-icon-facebook"></i></a>
                                    
                                    <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post on Google+"><i class="pw-icon-gplus"></i></a>
                                 </div> 
                            </div>   
                        </article>                              
                        <!-- realated-posts -->
                        
                         
                        
                        
                          <!-- #respond --> 
                          <div id="respond">
                          
                            <h3 id="reply-title">LEAVE A COMMENT <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                            
                            <!-- .commentform -->
                            <form action="#" method="post" id="commentform">
                            
                              <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                              
                              <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>
                              </p>
                              
                              <p class="comment-form-author">
                                <label for="author">Name <span class="required">*</span></label>
                                <input id="author" name="author" type="text" size="30" aria-required="true">
                              </p>
                              
                              <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input id="email" name="email" type="text" size="30" aria-required="true">
                              </p>
                              
                              <p class="comment-form-url">
                                <label for="url">Website</label>
                                <input id="url" name="url" type="text" size="30">
                              </p>
                              
                              <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
                              
                              <p class="form-submit">
                                <input type="submit" name="submit" id="submit" class="button primary" value="Post Comment">
                              </p>
                              
                            </form>
                            <!-- .commentform -->
                            
                          </div>
                          <!-- #respond --> 



                        <!-- #comments -->
                        
                        <!-- #comments -->
                        
                        
                        
                        
                    
                    
                
                    <!-- InstanceEndEditable -->
                    
                    
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