<div> 
    
    <br>
    <br>
    <div>
        <div class="form custom-width">
            <i class="fa fa-search"></i> 
            <div class="container">
                <input type="text" wire:model.live="arama" class="form-control form-input" placeholder="Search anything..."> 
            </div>
        </div>
    </div>
    <!-- blog-regular -->
    <div class="blog-regular blog-stream">
        
    @foreach ($blogs as $blog)    
        <!-- .hentry -->
        <article class="hentry post">
        
            
            <!-- .entry-header -->
            <header class="entry-header">
                
                <!-- .entry-title -->
                <h2 class="entry-title"><a href="{{url('/blog-details/'.$blog->slug)}}">{{$blog->title}}</a></h2>
                
                <!-- .entry-meta -->
                <div class="entry-meta">
                    <span class="cat-links">
                        <a href="#" title="View all posts in Life" rel="category tag">{{$blog->category->name}}</a>
                    </span>	
                    <span class="entry-date">
                        <time class="entry-date" datetime="{{$blog->created_at}}">{{$blog->created_at}}</time>
                    </span> 
                    <span class="comment-link">
                        <a href="#">{{count($blog->comments)}} YORUM</a>
                    </span>
                </div>
                <!-- .entry-meta -->
                
            </header>
            <!-- .entry-header -->
            
            <!-- .featured-image -->
            <div class="featured-image">
                <a href="{{url('/blog-details/'.$blog->slug)}}">
                    <img src="{{asset('admin/blogImage/'.$blog->image)}}" alt="{{$blog->image}}">
                </a>
            </div>
            <!-- .featured-image -->
            
            <!-- .entry-content -->
            <div class="entry-content">
                @php
                    $content = strip_tags($blog->content); // HTML etiketlerini kaldırın
                    $words = str_word_count($content, 1); // İçeriği kelimelere ayırın
                    $summary = implode(' ', array_slice($words, 0, 35)); // İlk 75 kelimeyi alın
                @endphp
            
                <p>{!!$summary!!}...
                    <span class="more">
                        <a href="{{url('/blog-details/'.$blog->slug)}}" class="more-link">Read More</a>
                    </span>
                </p>
                
            </div>
            <!-- .entry-content -->
            
        </article>
        <!-- .hentry -->
    @endforeach
        
    </div>
    <!-- blog-regular -->


        
    <!-- post nav -->
    <!-- <nav class="navigation" role="navigation">
        <div class="nav-previous"><a href="#">Older posts</a></div>
        <div class="nav-next"><a href="#">Newer posts</a></div>
    </nav> -->
    <!-- post nav -->
    
    
    <!-- post pagination -->
    {{ $blogs->links('pagination.blog-pagination') }}
    <!-- post pagination -->
    
    
        
    
    
    
    
</div>
            