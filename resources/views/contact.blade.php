@extends('layouts/main')

@section('title' , 'Contact - Madani Indonesia')

@section('container')
 <!-- site-main -->
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
                    
                        
                        <!-- .entry-header -->   
                        <header class="entry-header">
                            <h1 class="entry-title" align="center">Opinion</h1>
                        </header>
                        <!-- .entry-header -->   
                        
                        
                        <!-- .entry-content -->
                        <div class="entry-content">
                            
                          <p>Masukan Kritik dan Saran Anda</p>
                      
                        
                          <form action="{{ route('add_content') }}" method="POST" class="validate-form">
                            @csrf
                            
                            <p>
                              <label for="your-name">Nama :</label>
                              <input type="text" name="nama" id="your-name" class="required">
                            </p>
                            
                            <p>
                              <label for="your-email">Email :</label>
                              <input type="email" name="email" id="your-email" class="required email">
                            </p>
                            
                            <p>
                                  <label for="your-message">Masukan :</label>
                                  <textarea name="saran" id="your-message"></textarea>
                                </p>
                                
                                
                                <p>
                                  <input type="submit" value="Kirim Masukan">
                                </p>
                              </form>
                                
                                
                                
                                
                               
                            </div>
                            <!-- .entry-content -->
                          </article>
                    </div>
                  </div>
                </div>
            </div>
@endsection