@extends('layouts.appa')

@section('login')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>

			<form method="POST" action="{{ route('login') }}">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail0" placeholder="Email">
				</div>
			  </div>
			  <div class="controls">
			    <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		    </div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3 form-control @error('email') is-invalid @enderror"  type="email" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				</div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3 form-control @error('password') is-invalid @enderror"  type="password" id="password" placeholder="Password" name="password" required autocomplete="password">
				</div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			  </div>
              <div class="control-group">
				<label class="control-label" for="remember">Keep me sign in</label>
				<div class="controls">
				  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
				</div>                
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> 
                  
                    @if (Route::has('password.request'))                        
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif                  
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>		
</div>
@endsection

