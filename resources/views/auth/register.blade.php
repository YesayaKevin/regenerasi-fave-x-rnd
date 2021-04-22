@extends('layouts.app')

@section('content')

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
                <a class="text-white font-bold hover:text-yellow-300" href="{{ route('login') }}">Log in now!</a>
            </div>
        </div>
    </nav>
    <section class="min-h-full flex">
        <img class="w-1/4 h-101vh md:bg-cover bg-center bg-no-repeat" src="../image/login-background.png" alt="">
        <div class="w-3/4 h-full">
            <div class="bg-black-wp pr-8 md:pr-24 w-full h-101vh flex-col lg:flex-row flex py-24">
                <div class="w-full mb-4 sm:mb-8 md:mb-12 lg:mb-0 lg:w-1/3 pl-8 flex flex-col">
                    <h5 class="mb-2 text-yellow leading-relaxed lg:leading-normal text-md">WELCOME,</h5>
                    <h3 class="text-yellow leading-relaxed lg:leading-normal text-lg sm:text-2xl md:text-3xl lg:text-4xl"><span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">FILL THE FORM</span> TO BRING THE WORLD INSIDE.</h3>
                </div>

                <form method="POST" class="pl-8 lg:pl-12 lg:w-2/3 flex flex-col" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf  

       
                    <input hidden type="file" accept="image/*" id="add-btn" class="form-control @error('profile') is-invalid @enderror" name="profile">
                    <div class="w-24 h-24 sm:w-32 sm:32 md:w-40 md:h-40 self-center bg-addfile">
                        <label for="add-btn" class="w-full flex justify-end">
                            <img class="w-8 h-8 md:w-12 md:h-12" src="../image/add-photos.svg" alt="">
                        </label>
                        @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                
                    <!-- <input hidden type="file" accept="image/*" name="" id="add-btn " class="form-control @error('profile') is-invalid @enderror" name="profile">
                    <div class="w-24 h-24 sm:w-32 sm:32 md:w-40 md:h-40 self-center bg-addfile">
                        <label for="add-btn" class="w-full flex justify-end">
                            <img class="w-8 h-8 md:w-12 md:h-12" src="../image/add-photos.svg" alt="">
                        </label>
                        @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div> -->



                            <label for="name"  class="text-yellow mb-4 text-xl">{{ __('Username') }}</label>
                            <input id="name" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Please type your email..." type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="email" class="text-yellow mb-4 text-xl">{{ __('E-Mail') }}</label>
                            <input class="text-white mb-3 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Please type your email..." id="email" type="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
               
                            <label for="password" class="text-yellow mb-4 text-xl">{{ __('Password') }}</label>
                            <input class="text-white mb-3 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Please confirm your password...">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                            <label for="password-confirm" class="text-yellow mb-4 text-xl">{{ __('Confirm Password') }}</label>
                            <input class="text-white mb-3 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl " id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Please confirm your password...">
                                <button type="submit" class="w-2/3 sm:w-1/3 lg:w-1/4 mt-8 self-center bg-yellow rounded-2xl py-4 font-bold mt-2">
                                    {{ __('Register') }}
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
