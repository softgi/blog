<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정</title>
</head>
<body>
<div id="board_update">
        <h4>게시판 수정</h4>
        <div>
            <form method="POST" action="/board/update/{{ $board -> id }}">
                @method('PATCH')
                @csrf
                <div>
                    <textarea type="text" name="title">{{ $board->title }}</textarea>
                </div>
                <div>
                    <textarea type="text" name="content">{{ $board->content }}</textarea>
                </div>
                <div>
                    <button type="submit">글수정</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>