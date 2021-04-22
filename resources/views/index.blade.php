    @extends('layouts.app')

    @section('content')



    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/HomePageStyle.css">
</head>

<body>
    <nav class="w-full absolute lg:fixed">
        
        <div class="md:ml-20 mt-10 flex flex-col md:flex-row justify-between item-center content-center">
            <img class="w-28 md:w-60 ml-28 md:ml-0" src="../image/logo.svg" alt="Budioskop.svg">
            <div
                class="h-auto mt-7 md:mt-1 lg:w-90 flex flex-col lg:flex-row lg:flex-wrap justify-around items-center content-center">
                <embed src="{{asset(Auth::user()->profile)}}" alt="Film Image" height="40px" width="40px" style="border-radius: 20px">
                &nbsp; &nbsp;

            <a class="mt-1 lg:mr-20 lg:mt-0 border-3 border-yellow-300 border rounded-full py-1 px-10" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

                  <!-- LIMIT -->
            </div>
        </div>
    </nav>



    <div style="background-image: url(../image/Home-Page-Background.png); background-size: cover;"
        class="h-full py-96 pl-0 md:pl-96 w-full">
        <h1 class="text-4xl lg:text-6xl lg:pl-96">Encouraging for</h1>
        <br>
        <h1 class="text-4xl lg:text-6xl font-bold lg:pl-96">Better Audience.</h1>
        <br>
        <p class="text-white lg:pl-96">Budioskop values honesty, Lorem ipsum dolor</p>
        <p class="text-white lg:pl-96">Lorem ipsum dolor sit amet.</p>
    </div>




        <div class="HomePageContentContainer">
        <div class="flex flex-row justify-center lg:justify-end  m-3">
            <a class="text-3xl mt-1 lg:mr-20 lg:mt-0 border-3 border-yellow-300 border rounded-full py-1 px-5" href="{{ route('new') }}">+Add</a>
        </div>
        <div class="m-3 flex flex-col lg:flex-row justify-between items-center content-center">

        @foreach($films as $film)
            <div class="mt-5 md:w-4/5 lg:w-1/3 h-96 border-2 border-yellow-400">
                <iframe class="mt-1 w-full h-3/4" src="{{ $film->trailer }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <div class="flex flex-col text-center">
                    <h1 class="text-yellow-300 text-lg font-bold">{{ $film->title }} </h1>
                    <div class="text-yellow-300 flex flex-col space-y-2 md:space-y-0 space-x-0 md:space-x-4">
                        <p class="text-xs sm:text-sm">Released : {{ $film->release }}  ||   Duration : {{ $film->duration }} </p>
                        <p class="text-xs sm:text-sm">Average Rating : {{round($film->comments->avg('rating'), 1)}}</p>
                    </div>
                    <a class="mt:2 text-right" href="{{ route('film.show',$film->id) }}">Movie Detail.. </a>
                </div>
            </div>
        @endforeach
           
        </div>
    </div>
</body>
</html>
@endsection 