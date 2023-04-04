<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Home</title>
	<link href="{{url('ClientAssets')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('ClientAssets')}}/css/global.css" rel="stylesheet">
	<link href="{{url('ClientAssets')}}/css/index.css" rel="stylesheet">
	<link href="{{url('ClientAssets')}}/css/element.css" rel="stylesheet">
    <link href="{{url('ClientAssets')}}/css/list.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{url('ClientAssets')}}/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <link href="{{url('ClientAssets')}}/css/login.css" rel="stylesheet">
	<script src="{{url('ClientAssets')}}/js/jquery-2.1.1.min.js"></script>
    <script src="{{url('ClientAssets')}}/js/bootstrap.min.js"></script>
  </head>
<body>
<section id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-home"></i> My Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="tag_menu active_tab" href="{{route('home')}}">Home</a>
                    </li>
					
					<li>
                        <a class="tag_menu" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
                    @if(Session::has('buyer'))
                    <li>
                        <a class="tag_menu" href="{{route('logout')}}">Logout</a>
                    </li>
                    @else
                    <li>
                        <a class="tag_menu" href="{{route('login')}}">Log In</a>
                    </li>
                
                    <li>
                        <a class="tag_menu" href="{{route('signup')}}">Sign UP</a>
                    </li>
                    @endif

                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>
