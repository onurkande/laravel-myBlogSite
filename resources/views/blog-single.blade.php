@extends('layouts.main')
@section('title','blog-single')
@section('content')
    <!-- site-main -->
    <div id="main" class="site-main"> <!-- .featured-top -->
        <div class="featured-top">
                
            <img src="images/blog/02.jpg">
            
            <!-- .post-thumbnail -->
            <div class="post-thumbnail" style="background-image:url({{asset('admin/blogImage/'.$records->image)}})">
                                        
                <!-- .entry-header -->
                <header class="entry-header">
                    
                                    
                    <!-- .entry-meta -->
                    <div class="entry-meta">
                        <span class="cat-links">
                            <a href="#" title="View all posts in Travel" rel="category tag">{{$records->category->name}}</a>
                        </span>	
                    </div>
                    <!-- .entry-meta -->
                    
                    <!-- .entry-title -->
                    <h1 class="entry-title">{{$records->title}}</h1>
                                    
                    <!-- .entry-meta -->
                    <div class="entry-meta">
                        <span class="entry-date">
                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{$records->created_at}}</time>
                        </span> 
                        <span class="comment-link">
                            <a href="#comments">{{count($comments)}} COMMENTS</a>
                        </span>
                    </div>
                    <!-- .entry-meta -->
                    
                </header>
                <!-- .entry-header -->
                
            </div>
            <!-- .post-thumbnail -->
            
        </div>
        <!-- .featured-top -->	
        
        
        <div class="layout-medium"> 
            <div id="primary" class="content-area with-sidebar">
            
        
            
        
        
        
            
    
        

        
                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                        <article class="hentry post single-post">
                        
                            
                            <!-- .entry-content -->
                            <div class="entry-content">
                                                                    
                                {!!$records->content!!}
                                
                                
                                    <!-- .post-tags -->
                                    <div class="post-tags tagcloud">
                                    <a href="#" rel="tag">travel</a>
                                    <a href="#" rel="tag">earth</a>
                                    <a href="#" rel="tag">think</a>
                                    </div>
                                    <!-- .post-tags -->
                                
                                    
                                    <!-- .share-links -->
                                    <div class="share-links">
                                    
                                    <h3>SHARE THIS POST</h3>
                                                                    
                                    <a rel="nofollow" target="_blank" href="mailto:?subject=I wanted you to see this post&amp;body=Check out this post : Sketching Mickey - http://themes.pixelwars.org/editor-html/blog-single.html." title="Email this post to a friend"><i class="pw-icon-mail"></i></a>
                                    
                                    <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=Currently reading: 'Sketching Mickey' http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post with your followers"><i class="pw-icon-twitter"></i></a>
                                        
                                    <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://themes.pixelwars.org/editor-html/blog-single.html&amp;t=Sketching Mickey" title="Share this post on Facebook"><i class="pw-icon-facebook"></i></a>
                                    
                                    <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://themes.pixelwars.org/editor-html/blog-single.html" title="Share this post on Google+"><i class="pw-icon-gplus"></i></a>
                                    
                                    </div>
                                    <!-- .share-links -->
                                    
                                    
                                    <!-- .nav-single -->
                                <nav class="nav-single row">
                                    @php
                                        $previousPost = $blogs->where('id', '<', $records->id)->sortByDesc('created_at')->first();
                                        $nextPost = $blogs->where('id', '>', $records->id)->sortBy('created_at')->first();
                                    @endphp
                                
                                    @if($previousPost)
                                        <div class="nav-previous col-xs-6">
                                            <h4>ÖNCEKİ POST</h4>
                                            <a href="{{url('/blog-details/'.$previousPost->id)}}" rel="prev">{{$previousPost->title}}</a>
                                        </div>
                                    @endif
                                    
                                    @if($nextPost)
                                        <div class="nav-next col-xs-6">
                                            <h4>SONRAKİ POST</h4>
                                            <a href="{{url('/blog-details/'.$nextPost->id)}}" rel="next">{{$nextPost->title}}</a>
                                        </div>
                                    @endif
                                    
                                </nav>
                                <!-- .nav-single -->
                                    
                                    
                                <!-- .about-author -->
                                @livewire('site.about')
                                <!-- .about-author -->
                                
                                
                                
                            </div>
                            <!-- .entry-content -->
                                
                        
                            
                        </article>
                        <!-- .hentry -->
                    
                        
                        
                        
                        <!-- realated-posts -->
                        <aside class="related-posts">
                        
                            <h3>You May Also Like</h3>
                            @php
                                //$topBlogs = $blogs->where('cate_id', $records->category->id)->all();
                                $topBlogs = $blogs->where('cate_id', $records->category->id)
                                    ->sortByDesc('view')
                                    ->take(3)
                                    ->values();
                            @endphp
                        
                            @foreach($topBlogs as $single)
                                <!-- post -->
                                <div class="post-thumbnail" style="background-image:url({{asset('admin/blogImage/'.$single->image)}})">
                                        
                                    <!-- .entry-header -->
                                    <header class="entry-header">
                                        
                                        <!-- .entry-title -->
                                        <h2 class="entry-title"><a href="{{url('/blog-details/'.$single->id)}}">{{$single->title}}</a></h2>
                                        
                                        <p><a href="{{url('/blog-details/'.$single->id)}}" class="more-link">View Post</a></p>
                                        
                                    </header>
                                    <!-- .entry-header -->
                                    
                                </div>
                                <!-- post -->
                            @endforeach
                        
                        </aside>                               
                        <!-- realated-posts -->
                        
                            
                        
                        
                        <!-- #comments -->
                        <div id="comments" class="comments-area">
                            
                            <h3>{{count($comments)}} COMMENTS</h3>
                            
                            @livewire('site.comment',['comments'=>$comments,'blog_id'=>$records->id])
                            
                            
                            <!-- #respond --> 
                            <div id="respond">
                            
                            <h3 id="reply-title">LEAVE A COMMENT <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                            
                            <!-- .commentform -->
                            <form method="post" action="{{url('insert-comment')}}" id="commentform">
                                @csrf
                            
                                <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                
                                <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>
                                </p>
                                
                                <p class="comment-form-author">
                                <label for="author">Name <span class="required">*</span></label>
                                <input id="author" name="name" type="text" size="30" aria-required="true">
                                </p>
                                
                                <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input id="email" name="email" type="text" size="30" aria-required="true">
                                </p>

                                <input type="hidden" name="blog_id" value="{{ $records->id }}">
                                
                                <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
                                
                                <p class="form-submit">
                                <input type="submit" name="submit" id="submit" class="button primary" value="Post Comment">
                                </p>
                                
                            </form>
                            <!-- .commentform -->
                            
                            </div>
                            <!-- #respond --> 
                            
                        </div>
                        <!-- #comments -->
                        
                        
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