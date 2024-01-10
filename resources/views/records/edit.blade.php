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
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/records/{{ $record->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>日付</h2>
                <input type='text' name='record[date]' value="{{ $record->date }}">
                <h2>記録</h2>
                <input type='text' name='record[record]' value="{{ $record->record }}">
                <h2>コメント</h2>
                <input type='text' name='record[comment]' value="{{ $record->comment }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>