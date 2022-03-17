<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content</title>
    <link>
</head>
<body>
    <div id="in_title">
        <h2>{{ $title }}</h2>
    </div>

    <div class="wi_line"></div>
    <div>
        <h4> {{ $content }} </h4>
    </div>
    <div>  
        <button id="write_btn" onClick="location.href='/board/edit/{{$id}}'">글 수정</button>
        <form method="POST" action="/board/{{$id}}/destroy">
            @method('DELETE')
            @csrf    
            <button id="write_btn">글 삭제</button>
        </form>        
        <button id="cancer_btn" onClick="location.href='/board'" type="button">취소</button>
</div>
</body>
</html>