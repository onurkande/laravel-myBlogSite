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
                    <!-- widget : text -->
                    
                    
                    <!-- widget : text -->
                    <!--<aside class="widget widget_text">
                      <h3 class="widget-title">Twitter</h3>
                      <a class="twitter-timeline" href="https://twitter.com/ahmetsali" data-widget-id="653367978407391232">Tweets by @ahmetsali</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </aside>-->
                    <!-- widget : text -->
                                
                    
                    <!-- widget : social_feed -->
                    <!--<aside class="widget widget_social_feed">
                      <h3 class="widget-title">Instagram</h3>-->
                      <!-- available networks : pinterest , dribbble , instagram , picasa , deviantart -->
                      <!--<div class="social-feed" data-social-network="instagram" data-username="silviutolu" data-limit="9"></div>
                    </aside>-->
                    <!-- widget : social_feed -->
                    
                    
                    <!-- widget : flickr -->
                    <!--<aside class="widget widget_flickr">
                      <h3 class="widget-title">Photos on flickr</h3>
                      <div class="flickr-badges flickr-badges-s">
                      <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?size=s&amp;count=9&amp;display=random&amp;layout=x&amp;source=user&amp;user=53227905@N03"></script>
                       </div>
                    </aside>-->
                    <!-- widget : flickr -->
                    
                   
                    <!-- widget : search -->
                    <!--<aside class="widget widget_search">
                        <h3 class="widget-title">Search</h3>
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" title="Enter Keyword">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </aside>-->
                    <!-- widget : search -->
                    
                    
                    <!-- widget : tag_cloud -->
                    <!--<aside class="widget widget_tag_cloud">
                      <h3 class="widget-title">Tags</h3>
                      <div class="tagcloud"> <a href="#" title="1 topic">adaptive</a> <a href="#" title="2 topics">design</a> <a href="#" title="1 topic">html</a> <a href="#" title="2 topics">responsive</a> <a href="#" title="2 topics">think</a> <a href="#" title="1 topic">web design</a> <a href="#" title="1 topic">css</a> <a href="#" title="2 topics">animations</a> <a href="#" title="1 topic">layout</a> <a href="#" title="2 topics">mobile</a> <a href="#" title="2 topics">think</a> <a href="#" title="1 topic">typography</a> </div>
                    </aside>-->
                    <!-- widget : tag_cloud -->
    
                    
                    
                    
                    <!-- widget : recent-posts -->
                    <!--<aside class="widget widget_recent_entries">		
                        <h3 class="widget-title">Recent Posts</h3>		
                        <ul>
                            <li><a href="#">Thinking About Responsive Design</a></li>
                            <li><a href="#">Adaptive Vs. Responsive Layouts And Optimal Form Field Labels</a></li>
                            <li><a href="#">Thinking About Responsive Design</a></li>
                            <li><a href="#">Adaptive Vs. Responsive Layouts And Optimal Form Field Labels</a></li>
                        </ul>
                    </aside>-->
                    <!-- widget : recent-posts -->
                    
                    
                    <!-- widget : recent_comments -->
                    <!--<aside class="widget widget_recent_comments">
                        <h3 class="widget-title">Recent Comments</h3>
                        <ul id="recentcomments">
                            <li class="recentcomments"><a href="#" rel="external nofollow" class="url">Albert Einstein</a> on <a href="#">Adaptive Layouts</a></li>
                            <li class="recentcomments"><a href="#" rel="external nofollow" class="url">Thomas Edison</a> on <a href="#">I invented the bulb!</a></li>
                            <li class="recentcomments"><a href="#" rel="external nofollow" class="url">Isaac Newton</a> on <a href="#">Gravity Theory</a></li>
                        </ul>
                    </aside>-->
                    <!-- widget : recent_comments -->
        
                    
                    <!-- widget : archive -->
                    <!--<aside class="widget widget_archive">
                        <h3 class="widget-title">Archives</h3>		
                        <ul>
                            <li><a href="#" title="July 2012">July 2014</a></li>
                            <li><a href="#" title="June 2012">June 2014</a></li>
                            <li><a href="#" title="May 2012">May 2014</a></li>
                            <li><a href="#" title="April 2012">April 2014</a></li>
                        </ul>
                    </aside>-->
                    <!-- widget : archive -->
                                
                    
                    <!-- widget : meta -->
                    <!--<aside class="widget widget_meta">
                      <h3 class="widget-title">Meta</h3>
                      <ul>
                        <li><a href="#">Site Admin</a></li>
                        <li><a href="#">Log out</a></li>
                        <li><a href="#" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                        <li><a href="#" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                        <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
                      </ul>
                    </aside>-->
                    <!-- widget : meta -->
                    
                    <!-- widget : calendar -->
                    <!--<aside class="widget widget_calendar">
                        <h3 class="widget-title">Calendar</h3>
                        <div id="calendar_wrap">
                            <table id="wp-calendar">
                                <caption>
                                July 2014
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
        
                                        <th scope="col" title="Sunday">S</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" id="prev"><a href="#" title="View posts for June 2015">« Jun</a></td>
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next" class="pad">&nbsp;</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td colspan="1" class="pad">&nbsp;</td>
                                        <td>1</td>
                                        <td><a href="#" title="test">2</a></td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td id="today">15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td class="pad" colspan="3">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>-->
                    <!-- widget : calendar -->
                              
                    
                    <!-- widget : pages -->
                    <!--<aside class="widget widget_pages">
                        <h3 class="widget-title">Pages</h3>
                        <ul>
                            <li class="page_item page_item_has_children"><a href="#">About Me</a>
                                <ul class="children">
                                    <li class="page_item"><a href="#">Clearing Floats</a></li>
                                    <li class="page_item"><a href="#">Page Image Alignment</a></li>
                                    <li class="page_item"><a href="#">Page Markup And Formatting</a></li>
                                    <li class="page_item"><a href="#">Page with comments</a></li>
                                    <li class="page_item"><a href="#">Page with comments disabled</a></li>
                                </ul>
                            </li>
                            <li class="page_item"><a href="#">About Me</a></li>
                            <li class="page_item current_page_item"><a href="#">Gallery</a></li>
                            <li class="page_item"><a href="#">Contact</a></li>
                        </ul>
                    </aside>-->
                    <!-- widget : pages -->
                    
                    
                    <!-- widget : rss -->
                    <!--<aside class="widget widget_rss">
                      <h3 class="widget-title"><a class="rsswidget" href="#">RSS Feed</a></h3>
                      <ul>
                        <li><a class="rsswidget" href="#">Thinking About Good Design</a> <span class="rss-date">May 2, 2012</span>
                          <div class="rssSummary">Vivamus et aliquet ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Curabitur vitae ornare erat. Fusce mollis dolor sed justo iaculis feugiat. Suspendisse potenti. Aenean rutrum ligula nec eros gravida et cursus sapien mollis. In laoreet tempus purus sed dictum. Cras pellentesque interdum u […]</div>
                          <cite>Albert Einstein</cite> </li>
                        <li><a class="rsswidget" href="#">A Deep Brief on Character Design</a> <span class="rss-date">May 2, 2012</span>
                          <div class="rssSummary">Vivamus et aliquet ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Curabitur vitae ornare erat. Fusce mollis dolor sed justo iaculis feugiat. Suspendisse potenti. Aenean rutrum ligula nec eros gravida et cursus sapien mollis. In laoreet tempus purus sed dictum. Cras pellentesque interdum u […]</div>
                          <cite>Albert Einstein</cite> </li>
                      </ul>
                    </aside>-->
                    <!-- widget : rss -->
                
                </div>
                <!-- #secondary -->
            </div>
            <!-- layout -->
        </div>
        <!-- site-main -->
@endsection