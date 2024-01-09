<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Top Page</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>n日目記録</h1>
        <div class='posts'>
            @foreach ($tasks as $task)
                <div class='post'>
                    <h2 class='title'>{{ $task->title }}</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>