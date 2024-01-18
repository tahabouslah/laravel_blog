<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <article>
        <h1><?= $post->title ?><h1>
        by<a href="#">{{$post->user->username}} </a>  in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>

        <p><?= $post->body  ?></p>
    </article>

    <a href="/">Go Back </a>

</body>
</html>
