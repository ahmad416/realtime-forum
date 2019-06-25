<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;
class LikeController extends Controller
{
    public function LikeIt(Reply $reply){
        $reply->likes()->create([
            'user_id' => '5'
        ]);
    }
    public function unLikeIt(Reply $reply){
        $reply->likes()->where('user_id','5')->first()->delete();
    }
}
