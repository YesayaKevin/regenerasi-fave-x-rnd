@extends('layouts.app')

@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="profile" class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control @error('profile') is-invalid @enderror" name="profile">

                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Budioskop</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="w-full fixed top-0 z-50">
        <div class="mx-24 my-8 flex flex-row justify-center md:justify-between">
            <img src="../image/logo.svg" alt="Budioskop.svg">
            <div class="hidden md:flex flex-row justify-around space-x-2">
                <p class="text-white">Have an account?</p>
                <a class="text-white font-bold hover:text-yellow-300" href="../pages/login.html">Log in now!</a>
            </div>
        </div>
    </nav>


    <section class="min-h-full flex">
        <img class="w-1/4 h-100vh md:bg-cover bg-center bg-no-repeat" src="../image/login-background.png" alt="">
        <div class="w-3/4 h-full">
            <div class="bg-black-wp pr-8 md:pr-24 w-full h-100vh flex-col lg:flex-row flex py-24">
                <div class="w-full mb-12 lg:mb-0 lg:w-1/3 pl-8 flex flex-col">
                    <h5 class="mb-2 text-yellow leading-relaxed lg:leading-normal text-md">WELCOME,</h5>
                    <h3 class="text-yellow leading-relaxed lg:leading-normal text-lg sm:text-2xl md:text-3xl lg:text-4xl"><span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">FILL THE FORM</span> TO BRING THE WORLD INSIDE.</h3>
                </div>

                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" class="pl-8 lg:pl-12 lg:w-2/3 flex flex-col" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="text-yellow mb-4 text-xl" for="profile" class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>

                            <div class="col-md-6">
                                <input class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="text" name="name" placeholder="Please type your email...">

                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"  class="text-yellow mb-4 text-xl">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="text" name="name" placeholder="Please type your email..." type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="text-yellow mb-4 text-xl">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="text" name="email" placeholder="Please type your email..." id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text-yellow mb-4 text-xl">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="text-yellow mb-4 text-xl">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Budioskop</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="w-full fixed top-0 z-50">
        <div class="mx-24 my-8 flex flex-row justify-center md:justify-between">
            <img src="../image/logo.svg" alt="Budioskop.svg">
            <div class="hidden md:flex flex-row justify-around space-x-2">
                <p class="text-white">Have an account?</p>
                <a class="text-white font-bold hover:text-yellow-300" href="../pages/login.html">Log in now!</a>
            </div>
        </div>
    </nav>
    <section class="min-h-full flex">
        <img class="w-1/4 h-100vh md:bg-cover bg-center bg-no-repeat" src="../image/login-background.png" alt="">
        <div class="w-3/4 h-full">
            <div class="bg-black-wp pr-8 md:pr-24 w-full h-100vh flex-col lg:flex-row flex py-24">
                <div class="w-full mb-12 lg:mb-0 lg:w-1/3 pl-8 flex flex-col">
                    <h5 class="mb-2 text-yellow leading-relaxed lg:leading-normal text-md">WELCOME,</h5>
                    <h3 class="text-yellow leading-relaxed lg:leading-normal text-lg sm:text-2xl md:text-3xl lg:text-4xl"><span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">FILL THE FORM</span> TO BRING THE WORLD INSIDE.</h3>
                </div>

                <form method="POST" class="pl-8 lg:pl-12 lg:w-2/3 flex flex-col" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf    
                <label class="text-yellow mb-4 text-xl" for="name">Username</label>
                    <input id="name" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="text" name="name" placeholder="Please type your email..." class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label class="text-yellow mb-4 text-xl" for="email">Email</label>
                    <input id="email" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="email" placeholder="Please type your email..." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   
                    <label class="text-yellow mb-4 text-xl" for="password">Password</label>
                    <input id="password" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="password" name="password" placeholder="Please type your password... " class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    <label class="text-yellow mb-4 text-xl" for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " type="password" name="password_confirmation" placeholder="Please confirm your password..." required autocomplete="new-password" >
                    <button type="submit" class="w-2/3 sm:w-1/3 lg:w-1/4 mt-8 self-center bg-yellow rounded-2xl py-4 font-bold mt-8">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> -->
@endsection
