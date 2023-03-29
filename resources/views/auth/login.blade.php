@extends('layouts.app')

@section('content')
{{-- <div class="container" style="height: 100vh;width: 100%;max-height: 100vh;"> 
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div>  --}}

    <div class="d-lg-flex d-xl-flex align-items-lg-center justify-content-xl-center align-items-xl-center" style="width: 100%;height: 100vh;background: #191e29;border: 3px none #01c38d;">
        <div class="container" style="width: 400px;height: 550px;background: #696f79;border-radius: 20px;border: 4px solid #01c38d;">
            <div class="row">
                <div class="col d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center" style="margin-top: 20px;">
                    
                    <img src="/img/icons8-test-passed-96.png" style="width: 64px;">
                </div>
            </div>
            <h1 style="text-align: center;color: rgb(255,255,255);font-size: 19px;">
                Quiz App</h1>
            <hr style="background: #01c38d;height: 4px;border-radius: 10px;border: 0px none #01c38d;">
            <h1 style="text-align: center;color: rgb(255,255,255);">
                Login
            </h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row row-cols-1 d-lg-flex justify-content-lg-center">
                    <div class="col pl-5" style="width: 80%;max-width: 85%;padding-left: 0;">
                        <small style="font-size: 20px;color: #ffffff;">
                            Email
                        </small>
                    </div>
                    <div class="col-12 d-lg-flex flex-column justify-content-lg-center align-items-lg-center" style="width: 85%;">
                        <input type="email" placeholder="Email" name="email" id="email" class=" textinput form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
                        @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                    </div>
                </div>
            
                <div class="row row-cols-1 d-lg-flex justify-content-lg-center" style="margin-top: 25px;">
                    <div class="col" style="width: 80%;max-width: 85%;padding-left: 0;">
                        <small style="font-size: 20px;color: #ffffff;">
                            Password
                        </small>
                    </div>
                    <div class="col-12 d-lg-flex flex-column justify-content-lg-center align-items-lg-center" style="width: 85%;">
                        <input id="password" type="password"  placeholder="Password" class="form-control textinput @error('password')  is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="row row-cols-1 d-lg-flex justify-content-lg-center" style="margin-top: 15px;">
                    <div class="col" style="width: 90%;max-width: 80%;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="color: #ffffff;">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                   
                </div>
                
                <div class="row">
                    <div class="col" style="text-align: center;margin-top: 20px;color: rgb(255,255,255);">
                        <small style="text-align: center;">
                            No account ?  <a style="  text-decoration: none; color: inherit;" href="{{ route('register') }}"> <strong >Register</strong></a>
                           
                        </small>
                    </div>
                </div>
                <div class="row row-cols-1 d-lg-flex justify-content-lg-center align-items-lg-center" style="margin-top: 5px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="margin: 5px;">
                        <button class="btn btn-primary" type="submit" style="height: 40px;width: 50%;background: #01c38d;border-radius: 31px;border-style: none;margin-top: 0px;font-size: 17px;">
                            LOGIN
                        </button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
