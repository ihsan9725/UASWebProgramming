
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Beranda</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/button.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/icon.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/transition.css">

  <link href="http://localhost/Simple_elearning-master/css/styles.css" rel="stylesheet">
  <link href="http://localhost/Simple_elearning-master/css/responsive.css" rel="stylesheet">
  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="http://localhost/Simple_elearning-master/assets/library/jquery.min.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/visibility.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/sidebar.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/transition.js"></script>
  <script type="text/javascript" src="http://localhost/Simple_elearning-master/jquery/dist/jquery.min.js">
    
  </script>
    <script type="text/javascript" src="http://localhost/Simple_elearning-master/js/custom-scroller.js">
      
    </script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>
  <a class="item">Work</a>
  <a class="item">Company</a>
  <a class="item">Careers</a>
  <a class="item">Login</a>
  <a class="item">Signup</a>
</div>


<!-- Page Contents -->

<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment" style="background-image:url(web-image/laptop.jpg);
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item" href="welcome">Beranda</a>
        
         <a class="item">Tentang Kami</a>
       
        <div class="right item">
          <a href="http://localhost/Simple_elearning-master/login" class="ui inverted button" >Log in Mahasiswa</a>
           <a href="http://localhost/Simple_elearning-master/login_dosen" class="ui inverted button" >Log in Dosen</a>
          
        
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        E-Learning
      </h1>
        E-Learning Kampus Hibarmahesa
      <br>
      <br>
        <h2><div class="element"></div></h2>
      <br>
      <a href="login" class="ui huge primary button" >Get Started </a>
    </div>

  </div>

  
    </div>
  </div>
</div>

</body>

</html>

<!--javascript-->
<script type="text/javascript" src="http://localhost/Simple_elearning-master/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="http://localhost/Simple_elearning-master/js/particles.min.js"></script>
<script type="text/javascript" src="http://localhost/Simple_elearning-master/js/particlesReset.js"></script>
<script type="text/javascript" src="http://localhost/Simple_elearning-master/js/typed.js"></script>
<script type="text/javascript" src="http://localhost/Simple_elearning-master/js/main.js"></script>
