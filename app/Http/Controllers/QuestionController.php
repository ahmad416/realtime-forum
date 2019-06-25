<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;
class QuestionController extends Controller
{
    
    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }

    
    public function store(Request $request)
    {
        Question::create($request->all());
        return response()->json([
            'message'=>'Question created successfully',
            'status_code'=> '200'
        ]);
    }

    
    public function show(Question $question)
    {
        return new QuestionResource($question);
    }
    
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return response()->json([
            'message' => 'Question has been updated',
            'status_code' => '402'
        ]);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json([
            'message' => 'Question deleted successfully',
            'status_code'=> '204',
        ]);
    }
}
