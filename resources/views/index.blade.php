<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>Image: </span>
    @foreach ($postsImages as $postsImage)
        <p>{{ $postsImage }}</p>
    @endforeach
</body>
</html>