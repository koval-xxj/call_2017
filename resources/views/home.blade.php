<!DOCTYPE html> 
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conference 2017</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="/css/home/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/home/owl.carousel.css" />
    <link rel="stylesheet" href="/css/home/animate.css" />
    <link rel="stylesheet" href="/css/home/main.css" />
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="/css/home/responsive.css" />
  </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    @include('header')

      @include('about')

      @include('prices')
        
      @include('speakers')

      @include('contacts')

        <section clas="wow fadeInUp">
          <div id="map-wrapper" style=" width: 100%; height: 500px;"></div>
          
        </section>
        

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
       
        <script src="/js/home/vendor/modernizr-2.6.2.min.js"></script>
        <script src="/js/home/vendor/jquery-1.10.2.min.js"></script>
        <!--<script src="https://maps.googleapis/maps/api/js?sensor=false"></script>-->
        
        <!--<link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">-->
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU5BzdFzXB1BV8Ps6Re5hggANtQPE50-Y&callback=initMap"async defer></script>-->
        
        <script src="/js/home/jquery.lwtCountdown-1.0.js"></script>
        <script src="/js/home/bootstrap.min.js"></script>
        <script src="/js/home/owl.carousel.min.js"></script>
        <script src="/js/home/jquery.validate.min.js"></script>
        <script src="/js/home/additional-methods.min.js"></script>
        <script src="/js/home/jquery.form.js"></script>
        <script src="/js/home/jquery.nav.js"></script>
        <script src="/js/home/jquery.sticky.js"></script>
        <script src="/js/home/plugins.js"></script>
        <script src="/js/home/wow.min.js"></script>
        <script src="/js/home/main.js"></script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU5BzdFzXB1BV8Ps6Re5hggANtQPE50-Y&callback=initMap">
    </script>
        
    </body>
</html>
