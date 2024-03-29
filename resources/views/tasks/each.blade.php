<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $task->title }}
        </h1>
        <a href='/records/create'>記録の追加</a>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $task->body }}</p>    
            </div>
        </div>
        <div class="edit"><a href="/tasks/{{ $task->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>