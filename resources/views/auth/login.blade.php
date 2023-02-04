
@extends('layouts.app')
@extends('layouts.css2')
@section('content')
<div class="center">
    <h1>Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="txt_field" >
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control
                                @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="txt_field" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="txt_field">
                            <label for="password" >
                                {{ __('Password') }}</label>

                            <div >
                                <input id="password" type="password" class="form-control
                                \@error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if (Route::has('password.request'))
                        <a class="pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
               <div>
                    <input type="submit"  value="Sign in">
                    
                </div>
                                <div class="signup_link">
                                    Not a member ? <a href="{{ route('register') }}" >Sign Up</a>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
