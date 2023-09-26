<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Anime Character</h1>
        @foreach($errors->all() as $error)
                <div class="w-full px-4 py-2">{{ $error }}</div>
        @endforeach
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
            <label for="character_name" class="block mb-2 text-sm text-gray-600">Character Name</label>
            <input type="text" id="character_name" name="character_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
            </div>
            <div class="mb-4">
            <label for="anime_name" class="block mb-2 text-sm text-gray-600">Anime name</label>
            <input type="text" id="anime_name" name="anime_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
            </div>
            <div class="mb-4">
            <label for="character_rating" class="block mb-2 text-sm text-gray-600">Character Rating</label>
            <input type="character_rating" id="character_rating" name="character_rating" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
            </div>
            <div class="mb-4">
            <label for="email_sender" class="block mb-2 text-sm text-gray-600">Email</label>
            <input type="email" id="email_sender" name="email_sender" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
            </div>
            <div class="mb-6">
            <label for="character_image" class="block mb-2 text-sm text-gray-600">Character Images</label>
            <input
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out "
                type="file"
                id="character_image" name="character_image" />
            </div>
            <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">Add</button>
        </form>
        </div>
    </div>
    </body>
</html>