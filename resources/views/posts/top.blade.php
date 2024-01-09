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
                    <h2 class='title'>
                        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                        <div class="edit"><a href="/tasks/{{ $task->id }}/edit">edit</a></div>
                    </h2>
                </div>
            @endforeach
        </div>
        <a href='/tasks/create'>create</a>
    </body>
</html>