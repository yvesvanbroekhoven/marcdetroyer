<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>

  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

  <title>Marc De Troyer</title>
  
  <link rel="stylesheet" href="/stylesheets/reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/stylesheets/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="/stylesheets/print.css" media="print" type="text/css" />
  
  <script src="/javascripts/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js">></script>
  <script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
  <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js"></script>
  <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.1.1.js"></script>
  <script src="/javascripts/custom.js" type="text/javascript" charset="utf-8"></script>

  <!--[if IE 6]>
    <script src="/javascripts/pngfix.js" type="text/javascript"></script>
    <script>
      DD_belatedPNG.fix('*');
    </script>
  <![endif]-->
  
  <!--[if IE]>
    <link rel="stylesheet" href="/stylesheets/ie.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <![endif]-->
  
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22866540-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  
</head>

<body class="black">

  <div class="wrapper">
    
    <div id="header">
      <h1><a href="#">Marc de Troyer</a> Photographer</h1>
      <ul id="menu">
        <li><a href="#content" rel="#pictures" class="active">Pictures</a></li>
        <li><a href="#contact" rel="#contact">Contact</a></li>
      </ul>    
    </div><!-- / header -->

    <div id="content">
      <?php $this->load->view($yield); ?>
    </div>
    
    <?php $this->load->view("contact/index"); ?>
    
  </div><!-- /.wrapper -->

</body>
</html>