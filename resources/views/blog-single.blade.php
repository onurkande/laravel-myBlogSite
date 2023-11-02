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
                            <a href="#comments">4 Comments</a>
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
                                
                                    <div class="nav-previous col-xs-6">
                                        <h4>PREVIOUS POST</h4>
                                        <a href="#" rel="prev">Adding A Personal Touch To Your Web Design</a>
                                    </div>
                                    
                                    <div class="nav-next col-xs-6">
                                        <h4>NEXT POST</h4>
                                        <a href="#" rel="next">How To Build Long-Term Client Relationships</a>
                                    </div>
                                    
                                </nav>
                                <!-- .nav-single -->
                                    
                                    
                                <!-- .about-author -->
                                <aside class="about-author">
                                    
                                    <h3>About The Author</h3>
                                    
                                    <!-- .author-bio --> 
                                    <div class="author-bio">
                                        
                                        <!-- .author-img --> 
                                        <div class="author-img">
                                            <a href="#"><img alt="Johnny Doe" src="images/site/author-1.jpg" class="avatar"></a>												
                                        </div>
                                        <!-- .author-img -->
                                        
                                        <!-- .author-info -->
                                        <div class="author-info">
                                            <h4 class="author-name">Jeff Winger</h4>
                                            <p>Johnny Doe was born in Ulm, in the Kingdom of Württemberg in the German Empire on 14 March 1879. His father was Hermann Einstein, a salesman and engineer. He was a really good man for sure.</p>
                                            
                                            <p>
                                                <a class="social-link facebook" href="#"></a>
                                                <a class="social-link twitter" href="#"></a>
                                                <a class="social-link vine" href="#"></a>
                                                <a class="social-link dribbble" href="#"></a>
                                                <a class="social-link instagram" href="#"></a>
                                            </p>
                                            
                                        </div>
                                        <!-- .author-info -->
                                        
                                    </div>
                                    <!-- .author-bio --> 
                                    
                                </aside>
                                <!-- .about-author -->
                                
                                
                                
                            </div>
                            <!-- .entry-content -->
                                
                        
                            
                        </article>
                        <!-- .hentry -->
                    
                        
                        
                        
                        <!-- realated-posts -->
                        <aside class="related-posts">
                        
                            <h3>You May Also Like</h3>
                        
                            <!-- post -->
                            <div class="post-thumbnail" style="background-image:url(images/blog/02.jpg)">
                                    
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    
                                    <!-- .entry-title -->
                                    <h2 class="entry-title"><a href="blog-single.html">Embracing Nomadic Lifestyle</a></h2>
                                    
                                    <p><a href="blog-single.html" class="more-link">View Post</a></p>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                            </div>
                            <!-- post -->
                        
                            <!-- post -->
                            <div class="post-thumbnail" style="background-image:url(images/blog/04.jpg)">
                                    
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    
                                    <!-- .entry-title -->
                                    <h2 class="entry-title"><a href="blog-single.html">Embracing Nomadic Lifestyle</a></h2>
                                    
                                    <p><a href="blog-single.html" class="more-link">View Post</a></p>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                            </div>
                            <!-- post --> 
                        
                            <!-- post -->
                            <div class="post-thumbnail" style="background-image:url(images/blog/05.jpg)">
                                    
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    
                                    <!-- .entry-title -->
                                    <h2 class="entry-title"><a href="blog-single.html">Embracing Nomadic Lifestyle</a></h2>
                                    
                                    <p><a href="blog-single.html" class="more-link">View Post</a></p>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                            </div>
                            <!-- post -->  
                        
                        </aside>                               
                        <!-- realated-posts -->
                        
                            
                        
                        
                        <!-- #comments -->
                        <div id="comments" class="comments-area">
                            
                            <h3>4 Comments</h3>
                            
                            <!-- .commentlist -->
                            <ol class="commentlist">
                            <li class="comment even thread-even depth-1">
                                
                                <!-- #comment-## -->
                                <article class="comment">
                                
                                <!-- .comment-meta -->
                                <header class="comment-meta comment-author vcard">
                                    <img alt="" src="images/site/testo-01.jpg" class="avatar" height="75" width="75">
                                    <cite class="fn"><a href="#" rel="external nofollow" class="url">Phillip Austin</a></cite>
                                    <span class="comment-date">October 17, 2013 at 2:16 PM
                                        <span class="comment-edit-link"><a href="#">Edit</a></span>
                                    </span>
                                </header>
                                <!-- .comment-meta -->
                                
                                <!-- .comment-content -->
                                <section class="comment-content comment">
                                    <p>Hi, this is a very useful article. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </section>
                                <!-- .comment-content -->
                                
                                <!-- .reply --> 
                                <div class="reply">
                                    <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
                                </div>
                                <!-- .reply --> 
                                
                                </article>
                                <!-- #comment-## -->
                                
                                <!-- .comment depth-2 -->
                                <ol class="children">
                                
                                <li class="comment odd alt depth-2 bypostauthor">
                                    
                                    <!-- #comment-## -->
                                    <article class="comment">
                                    
                                    <!-- .comment-meta -->
                                    <header class="comment-meta comment-author vcard">
                                        <img alt="" src="images/site/author-1.jpg" class="avatar photo" height="75" width="75">
                                        <cite class="fn"><a href="#" rel="external nofollow" class="url">Jeff Winger</a> <i>- Site Author</i></cite>
                                        <span class="comment-date">October 17, 2013 at 2:16 PM</span>
                                    </header>
                                    <!-- .comment-meta -->
                                    
                                    <!-- .comment-content -->
                                    <section class="comment-content comment">
                                        <p>Thanks Phillip, glad you liked it. Nice to see you around.</p>
                                    </section>
                                    <!-- .comment-content -->
                                    
                                    <!-- .reply --> 
                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
                                    </div>
                                    <!-- .reply -->  
                                    
                                    </article>
                                    <!-- #comment-## -->
                                    
                                    <!-- .comment depth-3 -->
                                    <ol class="children">
                                    
                                    <li class="comment even depth-3">
                                        <article class="comment">
                                        
                                        <!-- .comment-meta -->
                                        <header class="comment-meta comment-author vcard">
                                            <img alt="" src="images/site/testo-03.jpg" class="avatar photo" height="75" width="75">
                                            <cite class="fn"><a href="#" rel="external nofollow" class="url">Rachel Funny</a></cite>
                                            <span class="comment-date">October 17, 2013 at 2:16 PM</span>
                                        </header>
                                        <!-- .comment-meta -->
                                        
                                        
                                        <!-- .comment-content -->
                                        <section class="comment-content comment">
                                            <p>Hey guys, c'mon this is old stuff!</p>
                                        </section>
                                        <!-- .comment-content -->
                                        
                                        <!-- .reply --> 
                                        <div class="reply">
                                            <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
                                        </div>
                                        <!-- .reply -->
                                            
                                        </article>
                                        <!-- #comment-## -->
                                        
                                    </li>
                                    </ol>
                                    <!-- .comment depth-3 -->
                                    
                                </li>
                                </ol>
                                <!-- .comment depth-2 -->
                                
                            </li>
                            <!-- .comment depth-1 -->
                            
                            
                            <!-- .comment depth-1 -->
                            <li class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="comment-5" class="comment">
                                
                                <!-- .comment-meta -->
                                <header class="comment-meta comment-author vcard">
                                    <img alt="" src="images/site/testo-02.jpg" class="avatar avatar-44 photo" height="75" width="75">
                                    <cite class="fn"><a href="#" rel="external nofollow" class="url">Gary Morgan</a></cite>
                                    <span class="comment-date">October 17, 2013 at 2:16 PM</span>
                                </header>
                                <!-- .comment-meta -->
                                
                                <!-- .comment-content -->
                                <section class="comment-content comment">
                                    <p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
                                    <p>Hi, this is cool but i know something cooler than this, new iPad!</p>
                                </section>
                                <!-- .comment-content -->
                                
                                <!-- .reply --> 
                                <div class="reply">
                                    <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
                                </div>
                                <!-- .reply -->
                                
                                </article>
                                <!-- #comment-## --> 
                            </li>
                            <!-- .comment depth-1 -->
                            
                            </ol>
                            <!-- .commentlist -->
                            
                            
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
                            
                        </div>
                        <!-- #comments -->
                        
                        
                </div>
                <!-- site-content -->
        
            </div>
            <!-- primary -->    
        
        
            
        
            <!-- #secondary -->
            <div id="secondary" class="widget-area sidebar" role="complementary">
            
                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">About Me</h3>
                    <div class="textwidget">
                    <p><img src="images/site/about-me.jpg" alt="avatar"></p>
                    <p>Hello. I am a freelance writer. I live in a small town somewhere in the world. I write about design and biking.</p>
                    </div>
                </aside>
                <!-- widget : text -->
                
                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">Follow Me</h3>
                    <div class="textwidget">
                    <p>
                        <a class="social-link facebook" href="#"></a>
                        <a class="social-link twitter" href="#"></a>
                        <a class="social-link vine" href="#"></a>
                        <a class="social-link dribbble" href="#"></a>
                        <a class="social-link instagram" href="#"></a>
                    </p>
                    </div>
                </aside>
                <!-- widget : text -->
                
                
                <!-- widget :  MailChimp for WordPress Plugin --> 
                <aside class="widget widget_mc4wp_widget">
                    <h3 class="widget-title">Subscribe To Newsletter</h3>
                    <div class="form mc4wp-form">
                        <form method="post">
                            <p>
                                <label>Email address: </label>
                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            </p>
                            <p>
                                <input type="submit" value="Sign up">
                            </p>
                        </form>
                    </div>
                </aside>
                <!-- widget :  MailChimp for WordPress Plugin -->
                
                
                <!-- widget : popular-posts -->
                <!-- styles for plugin : https://wordpress.org/plugins/top-10 -->
                <aside class="widget widget_widget_tptn_pop">
                    <h3 class="widget-title">Trending Posts</h3>
                    <div class="tptn_posts tptn_posts_widget">
                        <ul>
                        
                            <li>
                                <a href="#" class="tptn_link">
                                    <img src="images/blog/p2.jpg" alt="post-image" class="tptn_thumb">
                                </a>
                                <span class="tptn_after_thumb">
                                    <a href="#" class="tptn_link"><span class="tptn_title">Feel The Wind</span></a>
                                    <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>
                        
                            <li>
                                <a href="#" class="tptn_link">
                                    <img src="images/blog/p3.jpg" alt="post-image" class="tptn_thumb">
                                </a>
                                <span class="tptn_after_thumb">
                                    <a href="#" class="tptn_link"><span class="tptn_title">Stop Worrying About How Pretty It is</span></a>
                                    <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>
                        
                            <li>
                                <a href="#" class="tptn_link">
                                    <img src="images/blog/p4.jpg" alt="post-image" class="tptn_thumb">
                                </a>
                                <span class="tptn_after_thumb">
                                    <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                    <a href="#" class="tptn_link"><span class="tptn_title">10 Killer Blogging Tips</span></a>
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>
                        
                            <li>
                                <a href="#" class="tptn_link">
                                    <img src="images/blog/p1.jpg" alt="post-image" class="tptn_thumb">
                                </a>
                                <span class="tptn_after_thumb">
                                    <a href="#" class="tptn_link"><span class="tptn_title">Exploring Wild Canyons</span></a>
                                    <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>
                        
                            <li>
                                <a href="#" class="tptn_link">
                                    <img src="images/blog/p5.jpg" alt="post-image" class="tptn_thumb">
                                </a>
                                <span class="tptn_after_thumb">
                                    <a href="#" class="tptn_link"><span class="tptn_title">Dive Into The Sea Life</span></a>
                                    <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>
                            
                            
                            <!--<li>
                                <span class="tptn_after_thumb">
                                    <a href="#" class="tptn_link"><span class="tptn_title">Keep it Simple Dummy!</span></a>
                                    <span class="tptn_author"> by <a href="#">Johnny Doe</a></span>
                                    <span class="tptn_date"> September 3, 2014</span> 
                                </span>
                            </li>-->
                            
                        </ul>
                    </div>
                </aside>
                <!-- widget : popular-posts -->
                
                
                <!-- widget : categories -->
                <aside class="widget widget_categories">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                    <li class="cat-item"><a href="#" title="View all posts filed under Nature">Nature</a></li>
                    <li class="cat-item"><a href="#" title="View all posts filed under Life">Life</a></li>
                    <li class="cat-item"><a href="#" title="View all posts filed under Adventure">Adventure</a></li>
                    <li class="cat-item"><a href="#" title="View all posts filed under Freebies">Freebies</a></li>
                    </ul>
                </aside>
                <!-- widget : categories -->
                
                
                <!-- widget : text -->
                <aside class="widget widget_text">
                    <!--<h3 class="widget-title">BANNER</h3>-->
                    <div class="textwidget">
                    <a href="#"><img src="images/blog/banner.jpg" alt="banner"></a>
                    </div>
                </aside>     
            </div>
            <!-- #secondary -->
            
            
        
        
        </div>
        <!-- layout -->
    
    
    </div>
    <!-- site-main -->
@endsection