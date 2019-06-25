<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Model\Reply;
use App\Model\Catagory;
class Question extends Model
{
    use Sluggable;
    protected $guarded=[];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
       return $this->belongsTo('App\User');
    }

    public function replies(){
       return  $this->hasMany('App\Model\Reply');
    }

    public function catagory(){
        return$this->belongsTo(Catagory::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function getPathAttribute(){
        return "api/question/$this->slug";
    }
}
