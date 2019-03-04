<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/touchTouch.css">
    <link rel="stylesheet" href="css/initMap.css">
    <script src="js/jquery.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/sForm.js"></script>
    <script src="js/jquery.jqtransform.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6ZEMmbfukYkQ6Ix2Pcs8UggE7T-YsVZ4&libraries=places&language=vi&region=VI&callback=initMap"
            async defer>
    </script>
    <script src="js/initMap.js"></script>
    <script>
        $(window).load(function(){
            $('.slider')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:800,
                preset:'random',
                pagination:false,//'.pagination',true,'<ul></ul>'
                pagNums:false,
                slideshow:8000,
                numStatus:false,
                banners:true,
                waitBannerAnimation:false,
                progressBar:false
            })	;
            $( "#tabs" ).tabs();

            $().UItoTop({ easingType: 'easeOutQuart' });
        });

        $(function() {
            //find all form with class jqtransform and apply the plugin
            $(".form1").jqTransform();
        });

        $(function(){

            // Initialize the gallery
            $('.gallery a.gal').touchTouch();
        });

    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
</head>
<body	class="page1">
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>


            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav	class="" >
                <ul class="sf-menu">
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="tours">Tours</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="recommendation">Recommendation</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</header>

@section('content')
@show


<!--=======bottom================================-->

<div class="bottom_block">
    <div class="container_12">
        <div class="grid_2 prefix_2">
            <ul>
                <li><a href="#">FAQS Page</a></li>
                <li><a href="#">People Say</a></li>
            </ul>
        </div>
        <div class="grid_2">
            <ul>
                <li><a href="#">Useful links</a></li>
                <li><a href="#">Partners</a></li>
            </ul>
        </div>
        <div class="grid_2">
            <ul>
                <li><a href="#">Insurance</a></li>
                <li><a href="#">Family Travel</a></li>
            </ul>
        </div>
        <div class="grid_2">
            <h4>Contact Us:</h4>
            TEL: 0123456789<br><a href="#">15021371@vnu.edhu.vn</a>

        </div>
        <div class="clear"></div>
    </div>
</div>
<!--==============================footer=================================-->

<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="socials">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
            <div class="copy">
                Travel &copy; 2019| <a href="#">Privacy Policy</a>
            </div></div>
        <div class="clear"></div>
    </div>

</footer>

</body>
</html>