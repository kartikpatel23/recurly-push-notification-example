
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Recurly Integration Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo Asset::styles(); ?>
    {{HTML::style('default/recurly.css')}}
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/main.css')}}
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Recurly Integration Samples</a>
          @if(Auth::check())
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="{{Request::uri() == '/' ? 'active' : ''}}"><a href="{{URL::to('/')}}">Home</a></li>
              <li><a href="{{URL::to('subscriptions')}}">Subscriptions</a></li>
              <!-- <li><a href="{{URL::to('revenue')}}">Revenue</a></li> -->
              <!-- <li class="{{Request::uri() == 'ambassador' ? 'active' : ''}}"><a href="{{URL::to('ambassador')}}">GetAmbassador</a></li> -->
              <li class="{{Request::uri() == 'options' ? 'active' : ''}}"><a href="{{URL::to('options')}}">Options</a></li>
            </ul>
          </div>
          <ul class="nav pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->username}} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('change-password')}}">Change Password</a></li>
                <li class="divider"></li>
                <li><a href="{{URL::to('logout')}}">Logout</a></li>
              </ul>
            </li>
          </ul>
          @endif
        </div>
      </div>
    </div>

    <div class="container">

      @section('maincontent')
      @yield_section

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">var BASE = "{{ URL::home() }}";</script>
    {{HTML::script('js/jquery-min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/knockout/2.1.0/knockout-min.js"></script>
    <?php echo Asset::scripts(); ?>
  </body>
</html>
