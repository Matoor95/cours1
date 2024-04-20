<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route() }}">
        <input type="text" name="titre">
        <br>
        <input type="text" name="description">
        <br>
        <input type="text" name='slug'>
        <br>
        <input type="submit" value="ajouter">
    </form>

</body>

</html>
