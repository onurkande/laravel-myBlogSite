<div>
    <header id="masthead" class="site-header" role="banner">
 			
            
            <!-- site-navigation -->
            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                
                
                
                <!-- layout-medium -->
                <div class="layout-medium">
                
                    
                    
                    
                    <!-- site-title : image-logo -->
                    <h1 class="site-title">
                        <a href="index.html" rel="home">
                            <img src="{{asset('admin/headerImage/'.$records->image)}}" alt="logo">
                        	<span class="screen-reader-text">Haley Dust</span>
                        </a>
                    </h1>
                    <!-- site-title -->
                    
                    <!-- site-title : text-logo -->
                    <!--<h1 class="site-title">
                        <a href="../index.html" rel="home">
                            Haley Dust
                        </a>
                    </h1>-->
                    <!-- site-title -->
                    
                    
                    
                
                    <a class="menu-toggle"><span class="lines"></span></a>
                    
                    <!-- nav-menu -->
                    <div class="nav-menu">
                        @php
                            $pages = json_decode($records->pages, TRUE);
                            $pagesUrl = json_decode($records->pagesUrl, TRUE);
                        @endphp
                        <ul>
                            @foreach($pages as $key=>$single)
                                <li><a href="{{$pagesUrl[$key]}}">{{$single}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- nav-menu -->
                    
                    <a class="search-toggle toggle-link"></a>
                                        
                    <!-- search-container -->
                    <div class="search-container">
                        
                        <div class="search-box" role="search">
                            <form method="get" class="search-form" action="#">
                                <label>Search Here
                                    <input type="search" id="search-field" placeholder="type and hit enter" name="s">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div>
                    
                    </div>
                    <!-- search-container -->
                    
                    <!-- social-container -->
                    <div class="social-container">
                        @php
                            $icons = json_decode($records->icons, TRUE);
                            $iconsUrl = json_decode($records->iconsUrl, TRUE);
                        @endphp
                        @foreach($icons as $key=>$single)
                            <a class="{!!$single!!}" href="{{$iconsUrl[$key]}}"></a>
                        @endforeach
    
                    </div>
                    <!-- social-container -->
        
                </div>
                <!-- layout-medium -->
                
            </nav>
            <!-- site-navigation -->
            
            
            
            
            
            		
    </header>
</div>
