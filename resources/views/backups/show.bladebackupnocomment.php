<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>BUDIOSKOP</title>
</head>

<body class="bg-black-wph">
    
    <nav class="w-full relative space-x-4 space-y-4 h-48 sm:h-32 px-8 sm:px-16 bg-none flex flex-col sm:flex-row justify-center sm:justify-between items-center z-50">
        <img class="w-48" src="../image/logo.svg" alt="">
        <div class="flex flex-row items-center justify-between w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <a href="#" class="text-yellow-300">Edit movies</a>
            <a href="#" class="text-yellow-300">Ratings</a>
            <form action="">
                <button href="#" class="h-8 w-24 text-yellow-300 flex items-center justify-center bg-transparent border-2 border-yellow-300 font-bold rounded-xl">Log Out</button>
            </form>
        </div>
    </nav>


    <img class="z-0 absolute top-0 w-full h-80" src="../image/home-background.png" alt="">
    <section class="px-8 sm:px-16 md:px-24 lg:px-32 lg:px-32 z-0 relative flex flex-col">
        <iframe class="z-50 w-full h-96 mb-8" src="{{($film->trailer)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="flex justify-between">
            <div class="flex flex-col space-y-2">
                <h1 class="text-yellow-300 text-4xl font-bold">{{($film->title)}}</h1>
                <div class="text-yellow-300 flex flex-col md:flex-row space-y-2 md:space-y-0 space-x-0 md:space-x-4">
                    <p class="text-xs sm:text-sm md:text-md lg:text-lg xl:text-xl">Released on: {{($film->release)}}</p>
                    <p class="hidden md:flex text-xs sm:text-sm md:text-md lg:text-lg xl:text-xl">||</p>
                    <p class="text-xs sm:text-sm md:text-md lg:text-lg xl:text-xl">Duration: {{($film->duration)}}</p>
                </div>
            </div>
            <form action="">
                <a href="{{ route('film.edit',$film->id) }}" class="h-2/3 flex px-4 md:px-6 py-2 md:space-x-4 items-center border-2 border-yellow-300 rounded-2xl">
                    <img class="hidden md:flex md:w-6" src="../image/pencil.svg" alt="">
                    <p class="text-yellow" >Edit</p>
                </a>
            </form>
        </div>
        <hr class="my-4 border-solid border-yellow-300">
        <p class="text-white text-sm mb-12">{{($film->desc)}}</p>
        <h1 class="text-2xl text-yellow-300 font-bold">Screenshoots</h1>
        <hr class="my-4 border-solid border-yellow-300">
        <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 lg:space-x-8 mb-12">
            <div class="w-full m-auto lg:m-0 sm:w-1/2 lg:w-1/3 h-96 bg-cover bg-yellow-100 bg-no-repeat"><img class="w-full h-full bg-cover bg-no-repeat" src="{{asset($film->image1)}}" alt="Screenshoots.png"></div>
            <div class="w-full m-auto lg:m-0 sm:w-1/2 lg:w-1/3 h-96 bg-cover bg-yellow-100 bg-no-repeat"><img class="w-full h-full bg-cover bg-no-repeat" src="{{asset($film->image2)}}" alt="Screenshoots.png"></div>
            <div class="w-full m-auto lg:m-0 sm:w-1/2 lg:w-1/3 h-96 bg-cover bg-yellow-100 bg-no-repeat"><img class="w-full h-full bg-cover bg-no-repeat" src="{{asset($film->image3)}}" alt="Screenshoots.png"></div>
        </div>
        <h1 class="text-2xl text-yellow-300 font-bold">Comments (jumlah)</h1>
        <hr class="my-4 border-solid border-yellow-300">
        <!-- Comment BOX -->
        <div class="flex flex-col space-y-4 mb-2">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <img width="75px" height="75px" src="../image/peopleImageAdd.png" alt="">
                    <div class="flex flex-col text-yellow-300">
                        <h2 class="text-2xl">Username</h2>
                        <h3 class="text-xl">Rating</h3>
                    </div>
                </div>
                <button onclick="showModal2()" class="m-0 p-0 flex items-end" href="#"><img class="w-6" src="../image/pencil.svg" alt=""></button>
            </div>
            <p class="text-white text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quia at mollitia quidem dignissimos accusantium totam aliquid fugiat culpa eveniet repellat earum, eaque nemo atque rem voluptas iusto exercitationem quos.
            Temporibus ipsum officiis accusamus quasi minima omnis ducimus doloribus eos fugiat consequatur accusantium, cum ad. Nesciunt accusantium dignissimos odit quaerat, commodi, perferendis dolorum amet repudiandae omnis, magnam ipsa veniam quo.</p>
            <p class="flex justify-end text-sm text-yellow-300">Sent Hour : Minute</p>
        </div>
        <!-- Comment BOX II -->
        <div class="flex flex-col space-y-4 mb-2">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <img width="75px" height="75px" src="../image/peopleImageAdd.png" alt="">
                    <div class="flex flex-col text-yellow-300">
                        <h2 class="text-2xl">Username</h2>
                        <h3 class="text-xl">Rating</h3>
                    </div>
                </div>
                <button onclick="showModal2()" class="m-0 p-0 flex items-end" href="#"><img class="w-6" src="../image/pencil.svg" alt=""></button>
            </div>
            <p class="text-white text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quia at mollitia quidem dignissimos accusantium totam aliquid fugiat culpa eveniet repellat earum, eaque nemo atque rem voluptas iusto exercitationem quos.
            Temporibus ipsum officiis accusamus quasi minima omnis ducimus doloribus eos fugiat consequatur accusantium, cum ad. Nesciunt accusantium dignissimos odit quaerat, commodi, perferendis dolorum amet repudiandae omnis, magnam ipsa veniam quo.</p>
            <p class="flex justify-end text-sm text-yellow-300">Sent Hour : Minute</p>
        </div>


        <button onclick="showModal1()" class="font-bold px-8 py-4 mt-12 mb-36 bg-yellow-300 w-1/2 sm:w-1/3 lg:w-1/4 xl:w-1/5 self-center rounded-xl">Give Comments</button>
    
    </section>
    <!-- Modal Section -->

    <!-- Post Comment Modal -->
    <div id="modalComment-1" onclick="showModal1()" style="display: none;" class="z-100 top-0 fixed flex-col justify-center items-center h-full w-full bg-black-transparent">
        <div id="modalContent-1" class="bg-black-wp w-4/5 sm:w-2/3 md:w-1/2 h-4/6 px-8 sm:px-12 md:px-16 lg:px-20 xl:px-24 py-4 flex flex-col items-center border-2 border-white">
            <button id="deleted-1" onclick="closeModal1()" class="self-end text-6xl text-yellow font-bold p-0 m-0">&times;</button>
            <div class="w-full flex flex-col justify-center items-center space-y-4">
                <img width="100px" height="100px" src="../image/peopleImageAdd.png" alt="">
                <h1 class="text-yellow sm:text-lg md:text-xl lg:text-3xl xl:text-4xl font-bold">USERNAME</h1>
            </div>
            <form class="w-full flex flex-col space-y-2 md:space-y-4 justify-between " action="">
                <label class="sm:text-xs md:text-sm lg:text-md xl:text-lg text-yellow" for="ratings">Ratings</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="number" name="ratings" id="ratings" placeholder="Please type your ratings..">
                <label class="sm:text-xs md:text-sm lg:text-md xl:text-lg text-yellow" for="comments">Comments</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="text" name="comments" id="comments" placeholder="Please type your comments..">
                <button class="w-2/3 md:w-1/2 self-center bg-yellow-300 font-bold text-xl flex items-center justify-center rounded-xl p-2" type="submit">Post Comment</button>
            </form>
        </div>
    </div>

    <!-- Update Comment Modal -->
    <div id="modalComment-2" onclick="showModal2()" style="display: none;" class="z-100 top-0 fixed flex-col justify-center items-center h-full w-full bg-black-transparent">
        <div id="modalContent-2" class="bg-black-wp w-4/5 sm:w-2/3 md:w-1/2 h-4/6 px-8 sm:px-12 md:px-16 lg:px-20 xl:px-24 py-4 flex flex-col items-center border-2 border-white">
            <button id="deleted-2" onclick="closeModal2()" class="self-end text-6xl text-yellow font-bold p-0 m-0">&times;</button>
            <div class="w-full flex flex-col justify-center items-center space-y-4">
                <img width="100px" height="100px" src="../image/peopleImageAdd.png" alt="">
                <h1 class="text-yellow sm:text-lg md:text-xl lg:text-3xl xl:text-4xl font-bold">USERNAME</h1>
            </div>
            <form class="w-full flex flex-col space-y-2 md:space-y-4 justify-between " action="">
                <label class="text-xs md:text-sm lg:text-md xl:text-lg text-yellow" for="ratings">Ratings</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="number" name="ratings" id="ratings" placeholder="Please type your ratings..">
                <label class="text-xs md:text-sm lg:text-md xl:text-lg text-yellow" for="comments">Comments</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="text" name="comments" id="comments" placeholder="Please type your comments..">
                <button class="w-2/3 md:w-1/2 self-center bg-yellow-300 font-bold text-xl flex items-center justify-center rounded-xl p-2" type="submit">Update Comment</button>
            </form>
        </div>
    </div>
    <script src="../script/movie-detail.js"></script>
</body>
</html>