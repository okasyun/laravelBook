<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // コントローラで操作しない値
    protected $guarded = array('id');

    public $timestamps = false;

    // バリデーションの設定
    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    // Boardクラスがidとタイトルを取得
    public function getData()
    {
        return $this->id . ':' . $this->title;
    }
}
