@extends('layouts.main')
@section('title','cat-archives')
@section('content')
            <!-- site-main -->
        <div id="main" class="site-main">
            <div class="layout-medium"> 
                <div id="primary" class="content-area with-sidebar">
                        <!-- site-content -->
                        <div id="content" class="site-content" role="main">
                            <header class="entry-header">
                                <h1 class="entry-title"><i>Posts in</i> <span class="cat-title">Adventure</span></h1>
                                <!--<h1 class="entry-title"><i>Posts tagged</i> <span class="cat-title">typography</span></h1>-->
                                <!--<h1 class="entry-title"><i>Posts by</i> <span class="cat-title">Jeff Winger</span></h1>-->
                                <!--<h1 class="entry-title"><i>searched for :</i> <span class="cat-title">summertime</span></h1>-->
                            </header>
                            
                            
                                <!-- BLOG LIST -->
                                <div class="blog-list blog-stream">
                                    
                                    @foreach ($records as $record)
                                        <!-- .hentry -->
                                        <article class="hentry post has-post-thumbnail">
                                        
                                            <!-- .featured-image -->
                                            <div class="featured-image">
                                                <a href="{{url('/blog-details/'.$record->id)}}" title="{{$record->title}}"><img src="{{asset('admin/blogImage/'.$record->image)}}" alt="blog-image"></a>
                                            </div>
                                            <!-- .featured-image -->
                                            
                                            
                                            
                                            <!-- .hentry-middle -->
                                            <div class="hentry-middle">
                                            
                                                <!-- .entry-header -->
                                                <header class="entry-header">
                                                    
                                                    <!-- .entry-meta -->
                                                    <div class="entry-meta">
                                                        <span class="cat-links">
                                                            <a href="#" title="View all posts in Adventure" rel="category tag">{{$record->category->name}}</a>
                                                        </span>	
                                                        <span class="entry-date">
                                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{$record->created_at}}</time>
                                                        </span>   
                                                        <span class="comment-link">
                                                            <a href="blog-single.html#comments">12 Comments</a>
                                                        </span>
                                                    </div>
                                                    <!-- .entry-meta -->
                                                    
                                                    <!-- .entry-title -->
                                                    <h2 class="entry-title"><a href="{{url('/blog-details/'.$record->id)}}" title="Stop Worrying About How Pretty It is">{{$record->title}}</a></h2>
                                                    
                                                </header>
                                                <!-- .entry-header -->
                                                
                                                <!-- .entry-content -->
                                                <div class="entry-content">
                                                    @php
                                                        $content = strip_tags($record->content); // HTML etiketlerini kaldırın
                                                        $words = str_word_count($content, 1); // İçeriği kelimelere ayırın
                                                        $summary = implode(' ', array_slice($words, 0, 16)); // İlk 75 kelimeyi alın
                                                    @endphp
                                                                                    
                                                    <p>{!!$summary!!}..
                                                        <span class="more">
                                                            <a href="{{url('/blog-details/'.$record->id)}}" class="more-link">Read More</a>
                                                        </span>
                                                    </p>
                                                
                                                </div>
                                                <!-- .entry-content -->
                                            
                                            </div>
                                            <!-- .hentry-middle -->
                                            
                                            
                                        </article>
                                        <!-- .hentry -->  
                                    @endforeach
                                </div>
                                <!-- BLOG LIST -->
                            
                            
                
                                
                                
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