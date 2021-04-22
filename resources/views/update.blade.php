<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie - Budioskop</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="w-full fixed top-0">
        <div class="mx-16 my-8 flex flex-row justify-center md:justify-start">
            <img class="ml-14 md:ml-32 lg:ml-64" src="/image/logo.svg" alt="Budioskop.svg">
        </div>
    </nav>
    <section class="max-h-full flex">
        <img class="w-1/5 h-100vh md:bg-cover bg-center bg-no-repeat" src="/image/login-background.png" alt="">
        <div class="w-4/5 h-full">
            <div class="bg-black-wp pr-8 md:pr-24 w-full h-100vh flex-col lg:flex-row flex py-24">
                <div class="w-full mb-12 lg:mb-0 lg:w-1/4 pl-8 flex flex-col justify-around">
                    <div class="flex flex-col">
                        <h5 class="mb-2 text-yellow leading-relaxed lg:leading-normal text-md">A GOOD NEWS,</h5>
                        <h3
                            class="text-yellow leading-relaxed lg:leading-normal text-lg sm:text-2xl md:text-3xl lg:text-4xl">
                            <span class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-bold">EDIT</span> YOUR MOVIES
                            IN A BLINK OF YOUR EYE.
                        </h3>
                    </div>

                    
                    <button id="" onclick="showModal1()" class="rounded-xl items-center w-auto self-center border-2 border-yellow-300 bg-transparent px-4 py-2 flex space-x-2">
                        <img class="" src="/image/trash.svg" alt="trash.svg">
                        <p class="text-yellow text-2xl">Delete</p>
                    </button>
                </div>
        <form class="pl-8 lg:pl-12 lg:w-3/4 flex flex-col overflow-auto" action="{{ route('film.update',[ $film, $film->id ] ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
                    <label class="text-yellow mb-4 text-xl" for="film">Film Name</label>
                    <input
                        class="placeholder-gray-400 text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" id="title" name="title" placeholder="Please type the film name.." value="{{$film->title}}">

                    <label class="text-yellow mb-4 text-xl" for="release">Release Date</label>
                    <input
                        class="placeholder-gray-400 text-white mb-4 py-6 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="date" id="release" name="release" placeholder="DD/MM/YYYY" value="{{$film->release}}">


                    <label class="text-yellow mb-4 text-xl" for="duration">Duration</label>
                    <label for="" class="text-yellow mb-2 text-m" >hours</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        id="duration_hours" name="duration_hours" type="number" min="0" max="24" name="duration_hour" value="{{$film->duration}}">
                    
                    <label for="" class="text-yellow mb-2 text-m" >minutes</label>
                      <input 
                      class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl" 
                      id="duration_mins" name="duration_mins" type="number" min="0" max="59" placeholder="" value="{{$film->duration}}">

                    <label class="text-yellow mb-4 text-xl" for="screenshoots">Upload Picture</label>
                    <input
                        class="placeholder-gray-400 text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image1" id="image1"
                        placeholder=" please input the screenshoots.." value="{{$film->image1}}">
                    <input
                        class="placeholder-gray-400 text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image2" id="image2"
                        placeholder=" please input the screenshoots.." value="{{$film->image2}}">
                    <input
                        class="text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image3" id="image3"
                        placeholder=" please input the screenshoots.." value="{{$film->image3}}">
                    <label class="text-yellow mb-4 text-xl" for="desc">Upload Description</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" id="desc" name="desc" placeholder="Please type the movie's description.." value="{{$film->desc}}">
                    <label class="text-yellow mb-4 text-xl" for="link">Trailer Link</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" id="trailer" name="trailer" placeholder="Please type the trailer's link.." value="{{$film->trailer}}">
                    <button type="submit"
                        class="w-2/3 sm:w-1/3 lg:w-1/4 mt-8 self-center bg-yellow rounded-2xl py-4 font-bold mt-16">Save
                        Changes</button>
                    <a class="w-2/3 sm:w-1/3 lg:w-1/4 self-center bg-transparent border-2 border-yellow-300 rounded-2xl py-4 font-bold mt-4 flex justify-center text-yellow"
                    href="{{ route('index') }}">Back</a>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal Section -->
    <!-- Delete Modal -->
    <div id="modalComment-1" onclick="showModal1()" style="display: none;"
        class="z-100 top-0 fixed flex-col justify-center items-center h-full w-full bg-black-transparent">
        <div id="modalContent-1"
            class="bg-black-wp w-4/5 sm:w-2/3 xl:w-1/2 h-4/6 px-4 sm:px-16 md:px-24 py-4 flex flex-col items-center border-2 border-white">
            <div class="w-full h-full flex flex-col justify-center items-center space-y-8 pb-12">
                <img width="100px" height="100px" src="/image/danger.svg" alt="">
                <h1 class="text-yellow text-lg lg:text-2xl text-center font-bold">Are you sure want to delete this movie?</h1>
                <div class="flex space-x-2 sm:space-x-4 md:space-x-8 lg:space-x-12 w-full justify-center">
                    <form action="" class="w-1/3">
                        <button id="deleted-1" onclick="closeModal1()"
                        class="w-full bg-transparent border-2 border-yellow-300 rounded-2xl flex justify-center text-yellow py-2 px-4">Back</button>
                    </form>

                    
                     <form action="{{route('film.del', $film->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                    <button onclick="verifyModal()"
                        class="w-full rounded-xl border-2 border-yellow-300 bg-yellow font-bold py-2 px-4">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Successfull Modal -->
    <div id="modalComment-2" style="display: none;"
        class="z-100 top-0 fixed flex-col justify-center items-center h-full w-full bg-black-transparent">
        <div id="modalContent-2"
            class="bg-black-wp w-4/5 md:w-2/3 xl:w-1/2 h-4/6 px-4 sm:px-16 md:px-24 py-4 flex flex-col items-center border-2 border-white">
            <div class="w-full h-full flex flex-col justify-center items-center space-y-8 pb-16">
                <img width="100px" height="100px" src="/image/circled-check.svg" alt="">
                <h1 class="text-yellow text-lg lg:text-2x text-center font-bold">This movie is succesfully deleted!</h1>
                <a href="{{ route('index') }}"
                    class="text-center w-1/2 self-center bg-yellow-300 font-bold text-md lg:text-xl flex items-center justify-center rounded-xl p-2">Back
                    to home</a>
            </div>
        </div>
    </div>
    <script src="/js/movie-detail.js"></script>
</body>

</html>