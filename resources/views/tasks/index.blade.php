<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>task index</title>
</head>

<body>
    <h1>新規論文一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <li class="task-item">
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                <form action="/tasks/{{ $task->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                </form>
            </li>
        @endforeach
    </ul>
    <h1>新規論文投稿</h1>
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body"></textarea>
        </p>
        <input type="submit" value="Create Task">
    </form>


</body>

</html>
