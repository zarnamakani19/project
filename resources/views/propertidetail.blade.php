
@extends('Master')
@section('content')
	
<section id="list_detail" class="clearfix center_about">
 <div class="container clearfix">
  <div class="row">
   <div class="list_detail_1 clearfix">
    <div class="col-sm-8">
	 <div class="list_detail_1l clearfix">
	  <div class="list_detail_1l1 clearfix">
	   <h3 class="mgt">{{ $properties->housing_name	}} / <span class="span_1">Monthly</span> <span class="span_2">For Rental</span></h3>
	   <p></p>
	  </div>
	  <div class="list_detail_1l2 clearfix">
      <h4 class="mgt">Property Info</h4>
	  <hr>
	  <div class="list_detail_1l2i clearfix">
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Bedrooms</h5>
		<h6 class="col_1">3</h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Bathrooms</h5>
		<h6 class="col_1">1</h6>
	   </div>
	   
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Area</h5>
		<h6 class="col_1">490 sq ft</h6>
	   </div>
	  </div>
	  <div class="list_detail_1l2i clearfix">
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">Type</h5>
		<h6 class="col_1">Apartment</h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">price</h5>
		<h6 class="col_1">
			{{$properties->price}}
		</h6>
	   </div>
	   <div class="col-sm-3 space_left">
	    <h5 class="mgt">City</h5>
		<h6 class="col_1">{{ $properties->city_id}}</h6>
	   </div>
	   
	  </div>
	  </div>

	  
	
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="list_detail_1r clearfix">
	  <div class="list_detail_1r1 clearfix">
	   <img src="img/13.jpg" class="img-circle" alt="abc">
	   <h4 class="mgt"><a href="#">Mauris Massa</a></h4>

	  
    <ul>
    @foreach ($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
    @endforeach
    </ul>

	   <div class="list_detail_1r1i clearfix">
		<form action="{{ route('requests') }}" method="post">
	          	@csrf
			<input placeholder="Your Name" class="form-control" name="name" type="text">
			<input placeholder="Your Email" class="form-control" name="email"  type="text">
			<input placeholder="Your Phone" class="form-control" name="phone" type="text">
			<textarea placeholder="Message" class="form-control form_1" name="message"></textarea>
			<input style="margin:auto" type="submit" class="button block">

		</form>
		<div class="panel panel-default">
    @if (session('suc'))
        <div  class="alert alert-success">{{ session('suc') }}</div>
    @endif
</div>
		
	   </div>
	  </div>
	  
	  
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>


@endsection