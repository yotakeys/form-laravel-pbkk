<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anime Form</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body class="bg-gray-100" style="font-family: 'Poppins', sans-serif;">
        <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
        @if(Session::get('status') != null)
            <div class="text-lime-500">{{ \Illuminate\Support\Facades\Session::get('status') }}</div>
        @endisset

        @foreach($animes as $anime)

        <div class="p-10">
            <!--Card 1-->
            <div class=" w-full">
            <img class="h-48 w-48 rounded-full" src="{{ asset('storage/images/' . $anime['character_image']) }}">
            <div class="border-b border-t bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{$anime->character_name}} - {{$anime->anime_name}}</div>
                <p class="text-gray-700 text-base">Rating : {{$anime->character_rating}}</p>
                </div>
                <div class="flex items-center">
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{$anime->email_sender}}</p>
                    <p class="text-gray-600">{{$anime->created_at}}</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
            <button onclick="location.href='/form'" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">Add</button>
        </div>
        </div>
    </body>
</html>