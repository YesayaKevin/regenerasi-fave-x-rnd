<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit Comment</title>
</head>
<body style="background: #232425">
    <div class="z-100 top-0 fixed flex-col justify-center items-center h-full w-full bg-black-transparent">
        <div id="modalContent-2" class="bg-black-wp w-4/5 sm:w-2/3 md:w-1/2 h-4/6 px-8 sm:px-12 md:px-16 lg:px-20 xl:px-24 py-4 flex flex-col items-center border-2 border-white">
            <a id="deleted-2" href="{{ route('index') }}" onclick="closeModal2()" class="self-end text-6m text-yellow-300 font-bold p-0 m-0">close</a>
            <div class="w-full flex flex-col justify-center items-center space-y-4">
                <img width="100px" height="100px" src="{{asset($comment->user->profile)}}" alt="">
                <h1 class="text-yellow-300 sm:text-lg md:text-xl lg:text-3xl xl:text-4xl font-bold">{{($comment->user->name)}}</h1>
            </div>
            <form class="w-full flex flex-col space-y-2 md:space-y-4 justify-between " action="{{route('update.comment', $comment->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label class="text-yellow-300 md:text-sm lg:text-md xl:text-lg text-yellow" for="ratings">Ratings</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="number" min="1" max="10" name="rating" id="ratings" placeholder="Please type your ratings..">
                <label class="text-yellow-300 md:text-sm lg:text-md xl:text-lg text-yellow" for="comments">Comments</label>
                <input class="text-white text-sm placeholder-gray-300 border-2 bg-transparent p-2" type="text" name="comment" id="comments" placeholder="Please type your comments..">
                <button class="w-2/3 md:w-1/2 self-center bg-yellow-300 font-bold text-xl flex items-center justify-center rounded-xl p-2" type="submit" >Update Comment</button>
            </form>
        </div>
    </div>
</body>
</html>