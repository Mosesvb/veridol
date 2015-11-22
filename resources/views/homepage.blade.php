
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <title>Veridol</title>

    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="css/main.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/">Veridol</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}" style="color: white;">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}" style="color: white;">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">VERIFY YOUR MEDICATION</h1>
                <p class="tagline">Your health is our concern</a></p>
                @if (! Auth::guest())
                    <p><a class="btn btn-download btn-action btn-lg" href="/medication" role="button">ADD NEW MEDICATION</a></p>
                @endif
            </div>
        </div>
    </header>
    <!-- /Header -->

<section class="container-fluid" id="section2">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="panel panel-default slideInLeft animate">
                <div class="panel-heading">
                  <h3>Accessible</h3></div>
                <div class="panel-body">
                  <p>Without the need for data bundles and running on any platform on any form, vwith veridol you can verify any medicine anywhere.</p>
                  <hr>GO
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="panel panel-default slideInUp animate">
                <div class="panel-heading">
                  <h3>Trusted</h3></div>
                <div class="panel-body">
                  <p>Every manufacturer who places their product on this platform stakes their reputation on the quality of their products.</p>
                  <hr>GO
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="panel panel-default slideInRight animate">
                <div class="panel-heading">
                  <h3>Instant</h3></div>
                <div class="panel-body">
                  <p>Get your results instantly with our app. No need to wait for confirmation.</p>
                  <hr>GO
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/row-->
      <div class="row">
        <br>
      </div>
    </div>
    <!--/container-->
  </section>

  <section class="container-fluid" id="section3">
    <h1 class="text-center"><emp>Verify </emp>your medication.</h1>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="text-center lato slideInUp animate">The <strong>Truth</strong> about G.E.N.U.I.N.E.</h3>
        <br>
        <div class="row">
          <div class="col-xs-offset-1">
            <p class="lead text-center">The industry of pharmaceuticals is a multi-billion dollar profit industry. The research of the scientists who make up this industry has offered many solutions and has helped improve the quality of billions of lives. The fact that a lot of the pharmaceutical products are ingested, or to put it another way, they are applied to the human body, makes the upsurge of counterfeit drugs such a great threat to human lives. Furthermore, checking a medicine for genuineness is not something easily achievable at a users level - as it needs complex analysis with a suitably equipped laboratory.</p>
          </div>
          <div class="col-xs-2"></div>
          <div class="col-xs-12 text-right">With veridol one can check the authenticity of drugs just by dialing *384*65# and sending the batch number on the box. No need to download any app, no data charges, heck no need for a smartphone either. It is just that simple.</div>
        </div>
        <br>
      </div>
    </div>
  </section>

    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- /social links -->


    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+234 23 9873237<br>
                                <a href="mailto:#">veridol@veridol.com</a><br>
                                <br>
                                525 Kindaruma Road
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow me</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href="#"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-2"></i></a>
                                <a href="#"><i class="fa fa-github fa-2"></i></a>
                                <a href="#"><i class="fa fa-facebook fa-2"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">Veridol</h3>
                        <div class="widget-body">
                            <p>You may report an adverse event related to Pfizer products by calling 1-800-438-1985 (U.S. only). If you prefer, you may contact the U.S. Food and Drug Administration (FDA) directly. The FDA has established a reporting service known as MedWatch where healthcare professionals and consumers can report serious problems they suspect may be associated with the drugs and medical devices they prescribe, dispense, or use. Visit MedWatch or call 1-800-FDA-1088</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2015
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48366846-1', 'gettemplate.com');
  ga('send', 'pageview');
</script>



    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/template.js"></script>
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d8f8d75dfc85f4"></script> -->
</body>
</html>
