<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie - Budioskop</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>
    <nav class="w-full fixed top-0 z-50">
        <div class="mx-16 my-8 flex flex-row justify-center md:justify-start">
            <img class="ml-14 md:ml-32 lg:ml-60" src="../image/logo.svg" alt="Budioskop.svg">
        </div>
    </nav>
    
    <section class="max-h-full flex">
        <img class="w-1/5 h-100vh md:bg-cover bg-center bg-no-repeat" src="../image/login-background.png" alt="">
        <div class="w-4/5 h-full">
            <div class="bg-black-wp pr-8 md:pr-24 w-full h-100vh flex-col lg:flex-row flex py-24">
                <div class="w-full mb-12 lg:mb-0 lg:w-1/4 pl-8 flex flex-col justify-center">
                    <h5 class="mb-2 text-yellow leading-relaxed lg:leading-normal text-md">HI THERE!,</h5>
                    <h3
                        class="text-yellow leading-relaxed lg:leading-normal text-lg sm:text-2xl md:text-3xl lg:text-4xl">
                        <span class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-bold">ADD</span> YOUR MOVIES NOW
                        TO HAVE A HOLLYWOOD IN YOUR HOME.
                    </h3>
                </div>

               
                 <form class="pl-8 lg:pl-12 lg:w-3/4 flex flex-col overflow-auto" action="{{route('film.add')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <label class="text-yellow mb-4 text-xl" for="film">Film Name</label>
                    <input class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" id="film" name="title" placeholder="Please type the film name..">
                              @error('title') <span>{{$message}}</span> @enderror

                    <label class="text-yellow mb-4 text-xl" for="release">Release Date</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="date" id="release" name="release" placeholder="MM/DD/YYYY">
                    @error('release') <span>{{$message}}</span> @enderror

                    <label class="text-yellow mb-2 text-xl" for="duration">Duration</label>
                    <label for="" class="text-yellow mb-2 text-m">hours</label>
                    <input id="durationHour" class="text-white mb-2 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-m" name="duration_hours" type="number" min="0" max="24" placeholder="">
            @error('duration_hours') <span>{{$message}}</span> @enderror
            
            <label for="" class="text-yellow mb-2 text-m" >minutes</label>
            <input id="durationMinute" class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl" name="duration_mins" type="number" min="0" max="59" placeholder="">
            @error('duration_mins') <span>{{$message}}</span> @enderror
            

                    <label class="text-yellow mb-4 text-xl" for="screenshoots">Upload Picture</label>
                    <input
                        class="text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image1" id="screenshoots-1"
                        placeholder=" please input the screenshoots..">
                       @error('image-1') <span>{{$message}}</span> @enderror


                    <input
                        class="text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image2" id="screenshoots-2"
                        placeholder=" please input the screenshoots..">
                        @error('image-2') <span>{{$message}}</span> @enderror
                        
                    <input
                        class="text-white mb-4 pb-6 md:pb-9 px-1 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl"
                        type="file" accept="image/*" name="image3" id="screenshoots-3"
                        placeholder=" please input the screenshoots..">
                        @error('image-3') <span>{{$message}}</span> @enderror
                    



                    <label class="text-yellow mb-4 text-xl" for="desc"> Upload Description</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" name="desc" id="desc" placeholder="Please type the movie's description.."> 
                        @error('desc') <span>{{$message}}</span> @enderror

                    <label class="text-yellow mb-4 text-xl" for="link"> Trailer Link</label>
                    <input
                        class="text-white mb-4 py-2 px-2 border-2 border-yellow-300 bg-transparent text-xs sm:text-sm md:text-lg lg:text-xl "
                        type="text" name="trailer" id="link" placeholder="Please type the trailer's link..">
                        @error('trailer') <span>{{$message}}</span> @enderror


                        <button type="submit" 
                        class="w-2/3 sm:w-1/3 lg:w-1/4 mt-8 self-center bg-yellow rounded-2xl py-4 font-bold mt-16">Add Movie</button>
                    <a class="w-2/3 sm:w-1/3 lg:w-1/4 self-center bg-transparent border-2 border-yellow-300 rounded-2xl py-4 font-bold mt-4 flex justify-center text-yellow"
                    href="{{ route('index') }}">Back</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
