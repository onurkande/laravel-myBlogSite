<div>
    <header class="entry-header">
        <h1 class="entry-title"><i>Posts in</i> <span class="cat-title">Adventure</span></h1>
        <!--<h1 class="entry-title"><i>Posts tagged</i> <span class="cat-title">typography</span></h1>-->
        <!--<h1 class="entry-title"><i>Posts by</i> <span class="cat-title">Jeff Winger</span></h1>-->
        <!--<h1 class="entry-title"><i>searched for :</i> <span class="cat-title">summertime</span></h1>-->
    </header>
    
    <div>
        <div class="form custom-width">
            <i class="fa fa-search"></i> 
            <input type="text" wire:model.live="arama" class="form-control form-input" placeholder="Search anything...">
        </div>
    </div>
    
    <!-- BLOG LIST -->
    <div class="blog-list blog-stream">

        @foreach ($blogs as $record)
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
    {{ $blogs->links('pagination.blog-pagination') }}
    <!-- post pagination -->
    
    
</div>
