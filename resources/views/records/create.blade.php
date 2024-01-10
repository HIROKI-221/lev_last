<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>記録登録画面</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="title">
                <h2>日付</h2>
                <input type="text" name="record[date]" placeholder="（例）2024/1/1" value={{ old('record.date') }}>
                <p class="title_error" style="color:red">{{ $errors->first('record.date') }}</p>
                <h2>記録</h2>
                <input type="text" name="record[record]" placeholder="（例）2hour" value={{ old('record.record') }}>
                <p class="title_error" style="color:red">{{ $errors->first('record.record') }}</p>
                <textarea name="record[comment]" placeholder="（例）頑張った！">{{ old('record.comment') }}</textarea>
                <p class="title_error" style="color:red">{{ $errors->first('record.comment') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>