@extends('layouts.main')
@section('title','about')
@section('content')
    <!-- site-main -->
        <div id="main" class="site-main"> <!-- .featured-top -->
            <div class="featured-top">
                    
                <img src="images/blog/02.jpg">
            	
                <!-- .post-thumbnail -->
                <div class="post-thumbnail" style="background-image:url({{asset('admin/aboutImage/'.$records->image)}})">
                                          
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                        <!-- .entry-title -->
                        <h1 class="entry-title">{{$records->title}}</h1>
                        
                    </header>
                    <!-- .entry-header -->
                    
                </div>
            	<!-- .post-thumbnail -->
                
            </div>
            <!-- .featured-top -->
            
			
			<div class="layout-fixed"> 
                <div id="primary" class="content-area">
            
            
             
        
        	

            
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main"> <!-- .hentry -->
                        <article class="hentry page">   
                            
                            <!-- .entry-content -->
                            <div class="entry-content">
                            	
                                {!! $records->content !!}
                                
                                
                                <p>
                                    @php
                                        $icons = json_decode($records->icons, TRUE);
                                        $iconsUrl = json_decode($records->iconsUrl, TRUE);
                                    @endphp
                                    @foreach($icons as $key=>$single)
                                        <a class="{!!$single!!}" href="{{$iconsUrl[$key]}}"></a>
                                    @endforeach
                                </p>
                                
                                
                            </div>
                            <!-- .entry-content -->
                            
                            
                        </article>
                        <!-- .hentry -->
                        
                            
                    </div>
                    <!-- site-content -->
            
                </div>
                <!-- primary -->    
            
            
            	
            
            
            </div>
            <!-- layout -->
        
        
        </div>
    <!-- site-main -->
@endsection