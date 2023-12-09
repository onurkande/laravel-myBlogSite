@extends('layouts.main')
@section('title','home')
@section('keywords','home,ana sayfa')
@section('description','ana sayfa')
@section('content')
    <!-- site-main -->
        <div id="main" class="site-main">
       		<!-- post-slider -->
            <div class="post-slider owl-carousel" data-items="3" data-loop="true" data-center="true" data-mouse-drag="true" data-nav="true" data-dots="false" data-autoplay="false" data-autoplay-speed="600" data-autoplay-timeout="2000">
                
                @if($slider)
                    @foreach ($slider as $slide)
                        <!-- post -->
                        <div class="post-thumbnail" style="background-image:url({{asset('admin/blogImage/'.$slide->image)}})">
                            <!-- .entry-header -->
                            <header class="entry-header">
                                
                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="{{url('/blog-details/'.$slide->slug)}}" title="View all posts in Life" rel="category tag">{{$slide->category->name}}</a>
                                    </span>	
                                </div>
                                <!-- .entry-meta -->
                                
                                <!-- .entry-title -->
                                <h2 class="entry-title"><a href="{{url('/blog-details/'.$slide->slug)}}">{{$slide->title}}</a></h2>
                                
                                <p><a href="{{url('/blog-details/'.$slide->slug)}}" class="more-link">View Post</a></p>
                                
                            </header>
                            <!-- .entry-header -->
                            
                        </div>
                        <!-- post -->
                    @endforeach
                @endif
                    
            </div>
            <!-- post-slider -->
		

			<div class="layout-medium"> 
                <div id="primary" class="content-area with-sidebar">

                    <!-- site-content -->
                    <div id="content" class="site-content" role="main">
                        @livewire('site.blogs')
                    </div>
                    <!-- site-content -->
            
                </div>
                <!-- primary -->    
            
            
            	
            
                <!-- #secondary -->
                @livewire('site.sidebar')
                <!-- #secondary -->
                
                
            
            
            </div>
            <!-- layout -->
        
        
        </div>
    <!-- site-main -->
@endsection