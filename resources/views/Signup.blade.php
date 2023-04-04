@extends('Master')
@section('content')

<section id="center" class="clearfix center_about">
    <div class="container clearfix">
        <div class="row">
             <div class="center_about_1 text-center clearfix">
	            <div class="col-sm-12">
	             <h1 class="mgt">Sign UP</h1>
	             <p>Find new & top rated property for you.</p>
	            </div>
            </div>
        </div>
    </div>
</section>

<section id="signup">
 <div class="container clearfix">
  <div class="row">
   <div class="login_1 clearfix">
	  <div class="account-box">
            
                <form class="form-signin" method="POST">
                    @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="" autofocus="" name="name">
                    @error('name')
                    <div clas="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" autofocus="" name="email">
                    @error('email')
                    <div clas="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                    @error('pssword')
                    <div clas="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- <label class="checkbox">
                    <input type="checkbox" value="remember-me">
                    Keep me signed in
                </label> -->
                <input  name="signup" id="" vlaue="Sign Up" class="btn btn-lg btn-block purple-bg" type="submit" name="signup">
                </form>
                <!-- <a class="forgotLnk" href="#">I can't access my account</a>
                <div class="or-box">
                    <span class="or">OR</span>
                    <div class="row">
                        <div class="col-md-6 row-block">
                            <a href="#" class="btn btn-facebook btn-block">Facebook</a>
                        </div>
                        <div class="col-md-6 row-block">
                            <a href="#" class="btn btn-google btn-block">Google</a>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>
</div>
</section>
@endsection

