<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    // 自動で更新されるタイムスタンプを無効にする
    public $timestamps = false;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        // $thisはインスタンス自体
        return $this->id . ':' . $this->name . '(' . $this->age .')';
    }

    public function board() 
    {
        return $this->hasOne('App\Models\Board');
    }

    public function boards() {
        return $this->hasMany('App\Models\Board');
    }
}
