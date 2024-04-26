<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />


</head>

<body>
    <div class="p-2 bg-white shadow-sm">
        <div class="flex justify-center m-3 text-blue-500">
            <h2> Ajouter un post</h2>
        </div>




    <form method="POST"  action="{{ route('posts.store') }}">
        @csrf
        @method('post')

        @if (Session::get('error'))
            <div class="p-5">
                <div class="p-4 border-red-500 bg-red-400 animate-bounce text-white">{{ Session::get('error') }}</div>
            </div>
        @endif

        <div class="p-5 flex flex-col gap-4">
            <div class="block mb-5">
                <label>Titre</label>
                <input type="text"
                    class="block mt-1 rounded-md border-gray-300 w-full @error('titre')
            border-red-500 bg-red-100 animate-bounce
             @enderror"
                   name="titre">

                @error('titre')
                    <div class="text text-red-500 mt-1"> {{ $message }}</div>
                @enderror
            </div>

            <div class="block mb-5">
                <label>Description</label>
                <input type="text"
                    class="block mt-1 rounded-md border-gray-300 w-full @error('description')
            border-red-500 bg-red-100 animate-bounce
             @enderror"
                   name="description">

                @error('description')
                    <div class="text text-red-500 mt-1"> {{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="p-5 flex justify-between items-center bg-gray-100">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm"
                onclick=" window.history.back();">Annuler</button>
            <button class="bg-green-600 p-3 rounded-sm text-white text-sm" type="submit">Ajouter</button>
        </div>


    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
