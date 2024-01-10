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
                        <a href="/records/{{ $record->task->id }}">{{ $record->task->title }}</a>
                        <form action="/tasks/{{ $task->id }}" id="form_{{ $task->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $task->id }})">delete</button>
                        </form>
                        <script>
                            function deletePost(id) {
                                'use strict'
                        
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                    document.getElementById(`form_${id}`).submit();
                                }
                            }
                        </script>
                    </h2>
                </div>
            @endforeach
        </div>
        <a href='/tasks/create'>create</a>
    </body>
</html>