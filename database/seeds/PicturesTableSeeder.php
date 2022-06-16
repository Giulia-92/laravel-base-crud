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

            $newpicture = new Picture();
            $newpicture->title = $picture['title'];
            $newpicture->image = $picture['thumb'];
            $newpicture->description = $picture['description'];
            $newpicture->price = $picture['price'];
            $newpicture->type = $picture['type'];
            $newpicture->series = $picture['series'];
                
            $newpicture->save();
        }

       
    }
}
