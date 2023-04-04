
@extends('Master')
@section('content')

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
                        <a class="tag_menu" href="{{route('home')}}">Home</a>
                    </li>
					
				
					<li>
                        <a class="tag_menu" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_menu" href="{{route('login')}}">Log In </a>
                    </li>
					<li>
                        <a class="tag_menu" href="{{route('signup')}}">Sign Up</a>
                    </li>
					
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>

<section id="center" class="center_list center_about">
<div class="container">
  
 </div>
</section>


<section id="popular">
 <div class="container">
  <div class="row">
   <div class="popular_1 text-center clearfix">
    <div class="col-sm-12">
	 <h1 class="mgt"> Property List</h1>
	 <p>Find new &amp; top rated property for you.</p>
	</div>
   </div>
   <div class="popular_2 clearfix">
	@foreach($properties as $properties)
    <div class="col-sm-4">
     <div class="popular_2i clearfix">
	   <div class="popular_2i1 clearfix">
	    <a href="detail.html"><img  width="100px" height="200px" src="{{ url('/ClientAssets/img/'.$properties->images)}}" class="iw" alt="abc"></a>	   </div>
	   <div class="popular_2i2 clearfix">
	    <h5 class="mgt"><a href="detail.html">{{$properties->sales_rent}}</a></h5>
	   </div>
	 </div>
	 <div class="popular_2i3 clearfix">
	    <h5 class="mgt"><a href="detail.html">{{$properties->housing_name}} <span><i class="fa fa-home col_2"></i> 4 Bath</span></h6>
        <h5 class="mgt"><a href="detail.html">{{$properties->propertitypes}} <span></i> </span></h6>
        <h5 class="mgt"><a href="detail.html">{{$properties->Housetype}} <span> </span></h6>
        
		
		<h5 class="inline"><a class="button_1" href="{{route('propertidetail',$properties->id)}}">Property Detail</a></h5>
	   </div>
	   
	</div>
@endforeach
   </div>
   
  </div>
 </div>
</section>

@endsection