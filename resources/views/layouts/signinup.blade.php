<div class="overlay" style="display: none;" id="login-form">
    <div class="login-wrapper">
        <div class="login-content" id="loginTarget">
            <a class="login-close">x</a>
            <h3>Sign in</h3>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="user_email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="user_email" value="{{ old('email') }}" required autofocus>

                               
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>


                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>

        </div>
    </div>
</div>

<div class="register-overlay" style="display: none;overflow:scroll;" id="register-form">
    <div class="register-wrapper" style="padding-top: 15px;clear: both;padding-bottom: 15px;">
        <div class="register-content" id="registerTarget" style="padding-top: 30px;">
            <a class="register-close">x</a>
            <h3>Sign Up</h3>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                               
                                    <span class="help-block">

                                    </span>

                            </div>
                        </div>
						
						      <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Mobile Number *</label>

                            <div class="col-md-6">
                                <input id="mnumber" type="text" class="form-control" name="mnumber" value="{{ old('mnumber') }}" required autofocus>

                                
                                    <span class="help-block">
                                
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                
                                    <span class="help-block">
                                
                                    </span>
                               
                            </div>
                        </div>
						
						      <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address *</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                
                                    <span class="help-block">
                                    
                                    </span>

                            </div>
                        </div>
						
						      <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Date Of Birth *</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>


                                    <span class="help-block">

                                    </span>
                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password *</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                               
                                    <span class="help-block">
                                       
                                    </span>
                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password *</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                   </div>
    </div>
</div>

