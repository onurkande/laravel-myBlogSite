<div>
    <div class="media-grid-wrap">
        <div class="masonry blog-masonry blog-stream  " data-layout="masonry" data-mobile-item-width="220" data-item-width="420"> 
            @foreach ($blogs as $blog)
                <!-- .hentry -->
                <article class="hentry post has-post-thumbnail">
                
                    <!-- .featured-image -->
                    <div class="featured-image">
                        <a href="{{url('/blog-details/'.$blog->id)}}"><img width="1440" height="1440" src="{{asset('admin/blogImage/'.$blog->image)}}" alt="blog-image"></a>
                    </div>
                    <!-- .featured-image -->
                    
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                        <!-- .entry-title -->
                        <h2 class="entry-title"><a href="{{url('/blog-details/'.$blog->id)}}">{{$blog->title}}</a></h2>
                        
                        
                        <!-- .entry-meta -->
                        <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Adventure" rel="category tag">{{$blog->category->name}}</a>
                            </span>	
                            <span class="entry-date">
                                <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{$blog->created_at}}</time>
                            </span>    
                            <span class="comment-link">
                                <a href="blog-single.html#comments">12 Comments</a>
                            </span>
                        </div>
                        <!-- .entry-meta -->
                        
                        
                    </header>
                    <!-- .entry-header -->
                    
                    <!-- .entry-content -->
                    <div class="entry-content">
                        @php
                            $content = strip_tags($blog->content); // HTML etiketlerini kaldırın
                            $words = str_word_count($content, 1); // İçeriği kelimelere ayırın
                            $summary = implode(' ', array_slice($words, 0, 16)); // İlk 75 kelimeyi alın
                        @endphp
                                                        
                        <p>{!!$summary!!}...
                        {{-- {!! Str::limit($blog->content, 73) !!} --}}
                            <span class="more">
                                <a href="{{url('/blog-details/'.$blog->id)}}" class="more-link">Read More</a>
                            </span>
                        </p>
                    
                    </div>
                    <!-- .entry-content -->
                    
                    
                </article>
                <!-- .hentry -->
            @endforeach    
        </div>
    </div>    
{{ $blogs->links('pagination.blog-pagination') }}
</div>
