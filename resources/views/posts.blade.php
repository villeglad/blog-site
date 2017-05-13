<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

    </style>
</head>
<body>
<div>

    <div>
        <h1>Posts</h1>

        <ul>
           @foreach($posts as $post)
               <li>
                   <h3>{{$post->title}}</h3>
                   <p>{{$post->body}}</p>
               </li>
           @endforeach
        </ul>
    </div>
</div>
</body>
</html>
