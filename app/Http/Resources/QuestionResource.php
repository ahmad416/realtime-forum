<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CatagoryResource;
class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->title,
            'body'=> $this->body,
            'path'=> $this->path,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,
            'replies' => $this->replies,
            'replies_count' => $this->replies->count(),
            'catagory'=> [ 
                'title' => $this->catagory->title
            ]
        ];
    }
}
