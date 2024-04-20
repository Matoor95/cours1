<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('post.create') }}"> ajouter un post</a>
    <p>
        @foreach ($posts as $post)
            titre : {{ $post->titre }}
            <br>
            Description: {{ $post->description }}
            <br>
            date de creation ; {{ $post->created_at }}
       


        @endforeach
    </p>
    listes des commentaires:
    @foreach ($comments as $item)
    {{ $item->libelle }}

    @endforeach

</body>

</html>
