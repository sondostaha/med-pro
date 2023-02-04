@extends('layouts.app')
@extends('layouts.css1')
@section('content')
<div class="center2">
    <h1>SignUp</h1>
                <div class="txt_field2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="txt_field2">
                            <label for="name" >
                                {{ __(' Frist Name') }}</label>

                            <div >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt_field2">
                            <label for="name" >
                                {{ __('Last Name') }}</label>

                            <div >
                                <input id="name" type="text" class="form-control
                                @error('Last name') is-invalid @enderror"
                                name="name" value="{{ old('Last name') }}"
                                 required autocomplete=" name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt_field2">
                            <label for="email">
                                {{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid
                                 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt_field2">
                            <label for="password" >{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control
                                @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt_field2">
                            <label for="password-confirm" >
                                {{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                            <div >
                                <button type="submit" >
                                    {{ __('Register') }}
                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
