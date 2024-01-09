<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>項目登録画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>項目</h2>
                <input type="text" name="post[title]" placeholder="（例）勉強" value={{ old('task.title') }}>
                <p class="title_error" style="color:red">{{ $errors->first('task.title') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>