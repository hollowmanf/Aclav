<!DOCTYPE html>
<html lang="es">
<head>

<base href="{{ asset('')}}">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACLAV - Asociación de Clubes Liga Argentina de Voleibol</title>
<!--// Responsive //-->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--// Stylesheets //-->
<link href="assets/estilosweb/css/normalize.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 	

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Wrapper Start -->
<div class="wrapper">
	<!-- Header Start -->
   @include('web.escudos')
   @include('web.header')
    <!-- Header End -->
  
    <!-- Contents Start -->
   @yield('contenido')
    <!-- Contents End -->
    <!-- Footer Start -->
   @include('web.sponsor')
   
   @include('web.footer')
    <!-- Footer End --> 
    <a href="#" class="pull-right gotop btn btn-primary backcolor"> <i class="glyphicon glyphicon-hand-up"></i> </a>
</div>
<!-- Wrapper End -->
<!--// Javascript //-->
<script type="text/javascript" src="assets/estilosweb/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/functions.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/responsiveCarousel.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/slimbox2.js"></script>


</body>
</html>