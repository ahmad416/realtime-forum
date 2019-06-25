<?php

namespace App\Http\Controllers;

use App\Model\Reply;
use Illuminate\Http\Request;
use App\Model\Question;
use App\Http\Resources\ReplyResource;
class ReplyController extends Controller
{
   
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
    }

    public function show(Question $question,Reply $reply)
    {
        return new ReplyResource($reply);
    }

    public function store(Question $question, Request $request){
        $question->replies()->create($request->all());
        return response()->json('Reply Added', 200);
    }
    
    
    public function update(Request $request, Reply $reply, Question $question)
    {
        $reply->update($reply->all());
        return response()->json('Updated', 200);
    }

    
    public function destroy(Reply $reply, Question $question)
    {
        $reply->delete();
        return response()->json('Deleted successfully', 200);
    }
}
