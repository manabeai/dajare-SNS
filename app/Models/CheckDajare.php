<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckDajare extends Model
{
    //最も長さの長いダジャレの文字数を返す。
    //ダジャレでない場合-1
    public function findMaxDajare($text){
        //ここにロジックを記述
        return 5;
    }
    //小さいっ、とかを消去するサポート関数(使用予定)
    private function deleteSmallChar($S){

    }
}
