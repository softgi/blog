<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>작성</title>
</head>
<body>
@section('content')
<div id="board_write">
        <h4>게시판 작성</h4>
        <div>
            <form action='http://localhost:8000/board/write' method="POST">
                @csrf
                <div id="in_title">
                    <textarea id="write_title" name="title" type="text" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                </div>

                <div class="wi_line"></div>
                <div>
                    <textarea class="write_content" name="content" type="text" rows="10" cols="55" placeholder="내용" required></textarea>
                </div>
                <div>
                    <input id="write_btn" type="submit" value="글 작성"/>
                    <button id="cancer_btn" onClick="location.href='/board/list'" type="button">취소</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>