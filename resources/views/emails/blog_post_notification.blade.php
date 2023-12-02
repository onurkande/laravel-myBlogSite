<!doctype html>

<html lang="en" class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small" data-effect="slideUp">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Impose - Responsive HTML5 Template">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="Pixelwars">
    <title>email</title>
    
    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="{{asset('assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/images/ico/apple-touch-icon.png')}}"/>
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts/fontello/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/jquery.magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/jquery.fluidbox/fluidbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/selection-sharer/selection-sharer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rotate-words.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/align.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/shortcodes/shortcodes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/768.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/992.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- INITIAL SCRIPTS -->
	<script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    @livewireStyles

</head>

<body class="page  ">

    <!-- page -->
    <div id="page" class="hfeed site">


        <!-- site-main -->
        <div id="main" class="site-main"> <!-- .featured-top -->
            <div class="featured-top">
                    
                <img src="images/blog/02.jpg">
                
                <!-- .post-thumbnail -->
                <div class="post-thumbnail" style="background-image:url({{asset('admin/blogImage/'.$data['image'])}})">
                                            
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                                        
                        <!-- .entry-meta -->
                        <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag">{{$data['category']}}</a>
                            </span>	
                        </div>
                        <!-- .entry-meta -->
                        
                        <!-- .entry-title -->
                        <h1 class="entry-title">{{$data['title']}}</h1>
                                        
                        <!-- .entry-meta -->
                        <div class="entry-meta">
                            <span class="entry-date">
                                <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{$data['created_at']}}</time>
                            </span>
                        </div>
                        <!-- .entry-meta -->
                        
                    </header>
                    <!-- .entry-header -->
                    
                </div>
                <!-- .post-thumbnail -->
                
            </div>
            <!-- .featured-top -->	
        </div>
        <!-- site-main -->

        
	</div>
    <!-- page -->
    

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
	   if (!window.jQuery) { 
		  document.write('<script src="js/jquery-3.1.1.min.js"><\/script>'); 
	   }
	</script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('assets/js/jquery.viewport.mini.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>    
    <script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fluidbox/jquery.fluidbox.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/selection-sharer/selection-sharer.js')}}"></script>
    <script src="{{asset('assets/js/socialstream.jquery.js')}}"></script>
    <script src="{{asset('assets/js/jquery.collagePlus/jquery.collagePlus.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/shortcodes/shortcodes.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>