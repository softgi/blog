<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/board_list.css">
</head>
<body>
    <div>
        <div id="mainWrapper">
            <ul>
                <li>게시판</li>

                <li>
                    <ul id ="ulTable">
                        <li>
                            <ul>
                                <li>No</li>
                                <li>제목</li>
                                <li>작성일</li>
                            </ul>
                        </li>
                        <li>
                            @foreach($boards as $board) 
                            <ul>
                                
                                <li><a href="http://localhost:8000/board/content/{{$board -> id}}">{{ $board->id }}</a></li>
                                <li class="left"><a href="http://localhost:8000/board/content/{{$board -> id}}">{{ $board->title }}</a><li>
                                <li><a href="http://localhost:8000/board/content/{{$board -> id}}">{{ $board->created_at }}</a></li>
                            </ul>
                            @endforeach
                        </li>
                                                    
                    </ul>
                </li>
            </ul>   
        </div>
        <div id="write_btn">
                    <button onClick="location.href='/board/write'" >글쓰기</button>
        </div>
    </div> 
</body>
</html>