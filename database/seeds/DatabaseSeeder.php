<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Catagory;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)-> create();
        factory(Catagory::class, 5)->create();
        factory(Question::class,10)->create();
        factory(Reply::class,50)->create()->each(function($reply){
            return $reply->likes()->save(factory(Like::class)->make());
        });
    }
}
