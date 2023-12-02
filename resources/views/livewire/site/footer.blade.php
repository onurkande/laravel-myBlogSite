<div>
    @if($records != null and $header != null)
    <div>
        <footer id="colophon" class="site-footer" role="contentinfo">
                
                <!-- layout-medium -->
                <div class="layout-medium">
                
                    
                    <!-- site-title-wrap -->
                    <div class="site-title-wrap">
                    
                    
                        <!-- site-title : text-logo -->
                        <!--<h1 class="site-title">
                            <a href="../index.html" rel="home">
                                Jeff Winger
                            </a>
                        </h1>-->
                        <!-- site-title -->
                                
                        <!-- site-title : image-logo -->
                        <h1 class="site-title">
                            <a href="index.html" rel="home">
                                <img src="{{asset('admin/headerImage/'.$header->image)}}" alt="logo">
                            </a>
                        </h1>
                        <!-- site-title -->
                        
                        <p class="site-description">{{$records->content}}</p>
                    
                    </div>
                    <!-- site-title-wrap -->
                    
                    
                    <!-- footer-social -->
                    <div class="footer-social">
                        
                        <div class="textwidget">
                            @php
                                $icons = json_decode($records->icons, TRUE);
                                $iconsUrl = json_decode($records->iconsUrl, TRUE);
                            @endphp
                            @foreach($icons as $key=>$single)
                                <a class="{!!$single!!}" href="{{$iconsUrl[$key]}}"></a>
                            @endforeach
                        </div>
                        
                    </div>
                    <!-- footer-social -->
                    
                </div>
                <!-- layout-medium -->
                    
                    
                <!-- .site-info -->
                <div class="site-info">
                    
                    <!-- layout-medium -->
                    <div class="layout-medium">
                    
                        <div class="textwidget">{!! $records->smallContent !!}</div>
                    
                    </div>
                    <!-- layout-medium -->
                
                </div>
                <!-- .site-info -->
                
        </footer>
    </div>
    @endif
</div>