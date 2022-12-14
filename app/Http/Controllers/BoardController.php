<?php

namespace App\Http\Controllers;

// Boardモデルを利用
use App\Models\Board;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        // 全レコードを返す
        $items = Board::all();
        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        // idだけ返さない
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        
        return redirect('/board');
    }
}
