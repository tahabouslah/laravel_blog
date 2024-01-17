<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <?php foreach ($posts as $p ) : ?>
        <article>
            <h1><a href="post/{{$p->id}}"><?=  $p->title; ?></a></h1>

            <a href="/categories/{{$p->category->slug}}">{{$p->category->name}}</a>

            <p><?= $p->excerpt; ?></p>
        </article>
    <?php endforeach  ?>
</body>
</html>
