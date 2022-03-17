<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{   
    public function index() {
        $boards = Board::all();
        // $boards = Board::orderBy('created_at', 'desc')->paginate(5);//get은 여러개를 조회
        return view('board_list', compact('boards'));
    }

    public function show($id) {
        $board = Board::where('id', $id)->first();
        //first는 하나만 조회(오브젝트로 결과값나옴)
        // $board = Board::find($id);
        return view('board_content',$board);
    }

    public function create() {
        return view('board_write');
    }

    public function store(Request $request) {
        // $board = new Board;
        // $board -> title = $request->title;
        // $board -> content = $request->content;
        // $board -> save();

        $params = $request->only([ 'title', 'content' ]);
        $board = Board::create($params);
        return redirect('board');
    }

    public function edit($id) {
        $board = Board::where('id', $id)->first();
        return view('board_update',compact('board'));
    }

    public function update( Request $request, $id ) {
        // $board->update(request(['title','content']));
        $board = Board::find($id);

        if(!$board) {
            return response()
                ->json([ 'message' => '조회할 데이터가 없습니다.' ], 404);
        } 

        $content = $request->input('content');
        $title = $request->input('title');
        

        if( $content ) $board->content = $content;
        if( $title ) $board->title = $title;
        

        $board -> save();

        return redirect('/board');
    }

    public function destroy( $id ) {
        // Board::where( 'id', $id )->delete();
        $board = Board::find( $id )->delete();

        return redirect('/board');
    }
}
