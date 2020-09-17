@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"> 
            <ul class="tab-group">
                <li class="tab active"><a href="#login">Log In</a></li>
                <li class="tab"><a href="#register">Register</a></li>
            </ul>  
            <div class="tab-content">
                <div class="login" id="login">   
                    <form role="form" action="{{ route('login') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="txt-field">Username:</div>
                        <div class="field-wrap">
                            <input type="text" required autocomplete="off" value="{{ old('login_username') }}"
                            class="form-control" placeholder="Username" name="login_username"/>
                        </div>
                        <div class="txt-field">Password:</div>
                        <div class="field-wrap">
                            <input type="password"required autocomplete="off" value=""
                            class="form-control" placeholder="Password" name="login_password"/>
                        </div>
                        <div>
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember" value="1">Remember Me
                            </label>
                            <p class="forgot"><a href="#">Forgot Password?</a></p>
                        </div>
                        <button class="button button-block"/>Log In</button>
                    </form>
                </div>
                <div class="register" id="register">   
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {!! csrf_field() !!}
                        <div class="txt-field">Username:</div>
                        <div class="field-wrap">
                            <input type="text" required autocomplete="off" value="{{ old('username') }}"
                            class="form-control" placeholder="Username" name="username"/>
                        </div>
                        <div class="txt-field">Email:</div>
                        <div class="field-wrap">
                            <input type="email"required autocomplete="off" value="{{ old('email') }}"
                            class="form-control" placeholder="Email" name="email"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="txt-field">Password:</div>
                        <div class="field-wrap">
                            <input type="password"required autocomplete="off" value=""
                            class="form-control" placeholder="Password" name="password" id="password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="txt-field">Confirm Password:</div>
                        <div class="field-wrap">
                            <input type="password"required autocomplete="off" value=""
                            class="form-control" placeholder="Confirm Password" name="password_confirmation" id="confirmPassword"/>
                        </div>
                        <button type="submit" class="button button-block"/>Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>     
</div>
