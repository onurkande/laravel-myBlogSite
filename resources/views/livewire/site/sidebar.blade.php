<div>
    <div id="secondary" class="widget-area sidebar" role="complementary">
        
        @if($abouts)
        <!-- widget : text -->
            <aside class="widget widget_text">
                <h3 class="widget-title">{{$abouts->title}}</h3>
                <div class="textwidget">
                <p><img src="{{asset('admin/aboutImage/'.$abouts->image)}}" alt="avatar"></p>
                @php
                    $content = strip_tags($abouts->content); // HTML etiketlerini kaldırın
                    $words = str_word_count($content, 1); // İçeriği kelimelere ayırın
                    $summary = implode(' ', array_slice($words, 0, 16)); // İlk 75 kelimeyi alın
                @endphp
                <p>{!!$summary!!}...</p>
                </div>
            </aside>
        <!-- widget : text -->
        
        <!-- widget : text -->
        <aside class="widget widget_text">
            <h3 class="widget-title">Follow Me</h3>
            <div class="textwidget">
            <p>
                @php
                    $icons = json_decode($abouts->icons, TRUE);
                    $iconsUrl = json_decode($abouts->iconsUrl, TRUE);
                @endphp
                @foreach($icons as $key=>$single)
                    <a class="{!!$single!!}" href="{{$iconsUrl[$key]}}"></a>
                @endforeach
            </p>
            </div>
        </aside>
        <!-- widget : text -->
        @endif
        
        
        <!-- widget :  MailChimp for WordPress Plugin --> 
        <aside class="widget widget_mc4wp_widget">
            <h3 class="widget-title">Subscribe To Newsletter</h3>
            <div class="form mc4wp-form">
                <form method="post" action="{{url('insert-email')}}">
                    @csrf
                    <p>
                        <label>Email address: </label>
                        <input type="email" name="email" placeholder="Your email address" required="">
                    </p>
                    <p>
                        <input type="submit" value="Sign up">
                    </p>
                </form>
            </div>
        </aside>
        <!-- widget :  MailChimp for WordPress Plugin -->
        
        
        @if($trendingBlogs)
        <!-- widget : popular-posts -->
        <!-- styles for plugin : https://wordpress.org/plugins/top-10 -->
        <aside class="widget widget_widget_tptn_pop">
            <h3 class="widget-title">Trending Posts</h3>
            <div class="tptn_posts tptn_posts_widget">
                <ul>
                    @foreach($trendingBlogs as $single)
                        <li>
                            <a href="{{url('/blog-details/'.$single->slug)}}" class="tptn_link">
                                <img src="{{asset('admin/blogImage/'.$single->image)}}" alt="post-image" class="tptn_thumb">
                            </a>
                            <span class="tptn_after_thumb">
                                <a href="{{url('/blog-details/'.$single->slug)}}" class="tptn_link"><span class="tptn_title">{{$single->title}}</span></a>
                                <!--<span class="tptn_author"> by <a href="#">Johnny Doe</a></span>-->
                                <span class="tptn_date"> {{$single->created_at}}</span> 
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <!-- widget : popular-posts -->
        
        
        <!-- widget : categories -->
        <aside class="widget widget_categories">
            <h3 class="widget-title">Categories</h3>
            <ul>
                @foreach($categories as $single)
                    <li class="cat-item"><a href="#" title="View all posts filed under Nature">{{$single->name}}</a></li>
                @endforeach
            </ul>
        </aside>
        <!-- widget : categories -->
        @endif
        
        
        <!-- widget : text -->
        <!-- <aside class="widget widget_text">
            <h3 class="widget-title">BANNER</h3>
            <div class="textwidget">
            <a href="#"><img src="images/blog/banner.jpg" alt="banner"></a>
            </div>
        </aside> -->
        <!-- widget : text -->
    
    </div>
</div>
