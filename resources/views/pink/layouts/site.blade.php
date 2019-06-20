<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="Александр" >
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="bootstrap/assets/css/ie10&#45;viewport&#45;bug&#45;workaround.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
<style>
	 nav{margin-bottom: 10px;}
	 .card{margin-bottom: 15px;}
	 .well{margin-bottom: 55px;}	
	 .nav-item{border-right: 1px solid #c2bebe; box-shadow: 2px 3px 5px #c4c4c4;margin-right: 10px;}
	 .active{box-shadow: 2px 3px 5px #3d3b3b;}
</style>
  </head>
<!-- NAVBAR
================================================== -->
<body style="display: flex; height: 100vh;flex-direction: column;">
    <div class="container">
      <img class="img-responsive" style="width:160px" src="/img/logo.jpg">
      <img class="drawer" style="" src="/img/drawer.jpg" >

    </div>
    <div style="margin-top: 19px; position:relative;">
      <div class="container">
		@yield('navigation')
      </div>
    </div>
	<div class="container" style="font-size:21px; flex: 1;" >
		@yield('content')
	</div>

    <div class="container marketing"  style="">


@if( Route::current()->getName() === 'home')
    <!-- Carousel
    ================================================== -->



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 500px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="text-align: center;">
      <img src="/img/programmer-slider-2.jpg" class="d-block " style="margin: 0 auto;" alt="...">
    </div>
    <div class="carousel-item"  style="text-align: center;">
      <img src="/img/Tarasov-A-main-foto2.jpg" class="d-block "  style="margin: 0 auto;" alt="...">
    </div>
    <div class="carousel-item"  style="text-align: center;">
      <img src="/img/programmer-slider-3.jpg" class="d-block " style="margin: 0 auto;" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/img/main-page-reliability.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Reliability</h2>
          <p>I have worked in the web I.T field for more than 10 years. For this time I've seen a lot, fashion, trends, deceivers that didn't dislodge me from the track. I keep myself intact and up to date with the latest frameworks and technologies. My domain was registered in July of 2007, and you can see for yourself by going to the WHOIS LOOKUP SERVICE at https://www.whois.com/whois/ and inputting iwork.com.ua. I will do everything in my power to grow your project and to fulfill your needs.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/img/main-page-responsibility.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Responsibility</h2>
          <p>In any case when we take up the project, we’re aware of the obligations that rely on 
			us, and we always try to understand as deeply as possible the customer and 
			their needs. When we take up the project, 
			we will support it for a long duration, and take the required 
			time to complete it on deadlines.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/img/main-page-comprehension.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Comprehension</h2>
          <p>The purpose of the business is not the source code but profit-making accordingly a more thoughtful advertising company, brand uniqueness, work with clients, CRM, understanding the tasks of the business as a whole, not just its online part.. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">osCommerce - <span class="text-muted"> excellent engine for online selling.</span></h2>
          <p class="lead"> This is used by more than 280 thousends store owners. Multifunctional and conveniont CMS with local and global payment methods such as PayPal, G2A PAY and etc.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/main-oscommerce.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Magento - <span class="text-muted"> this is high performance, stable functionality</span></h2>
		  <p class="lead"> permanent development of your internet store. At this platform working a lots of famous and popular internet resources today. You can see such giants like Samsung, Olympus, Gap, Lenovo, TimeOut, 20th Century Fox and many other.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/main-magento.jpg" alt="generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Laravel - <span class="text-muted"> it's a beauty and plain framework for online developing.</span></h2>
          <p class="lead">He has written on PHP language that is demanding in web array. Also we have here db (data) based on mysql. Support countless moduls for payments, security etc. A lot of delicious buns for marketers. By the way this site founded on laravel.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/main-laravel.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
@endif

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2017 - {{date('Y')}}<a href="#"></a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container --!>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <!-- <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
  </body>
</html>
