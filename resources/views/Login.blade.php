@extends('Master')
@section('content')

<section id="center" class="clearfix center_about">
    <div class="container clearfix">
        <div class="row">
            <div class="center_about_1 text-center clearfix">
	            <div class="col-sm-12">
	                <h1 class="mgt">Log In</h1>
	                    <p>Find new & top rated property for you.</p>
	            </div>
            </div>
        </div>
    </div>
</section>

<section id="login">
    <div class="container clearfix">
        <div class="row">
            <div class="login_1 clearfix">
                <div class="account-box">
            
                <form class="form-login" method="POST">
                    @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" required="" autofocus="" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <input type="submit" valur="Sign In" name="signin" class="btn btn-lg btn-block purple-bg">
                
                        </form>
        
</section>
@endsection 

