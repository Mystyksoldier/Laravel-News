<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($articles as $article)
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['intro'] }}</p>
        <a href="/news/{{ $article['slug'] }}">Read more</a>
        
    @endforeach
</body>
</html>