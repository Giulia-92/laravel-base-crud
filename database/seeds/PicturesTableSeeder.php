<?php

use Illuminate\Database\Seeder;
use App\Picture;
class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pictures = config('comics');
        foreach($pictures as $picture){

            $newPicture = new Picture();
            $newPicture->title = $picture['title'];
            $newPicture->image = $picture['thumb'];
            $newPicture->description = $picture['description'];
            $newPicture->price = $picture['price'];
            $newPicture->type = $picture['type'];
            $newPicture->series = $picture['series'];
                
            $newPicture->save();
        }

       
    }
}
