<?php

use Illuminate\Database\Seeder;
use App\Fumetto;

class FumettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elencoFumetti = config('comics');

        foreach($elencoFumetti as $fumetto) {
            $newComic = new Fumetto();
            $newComic->title = $fumetto['title'];
            $newComic->description = $fumetto['description'];
            $newComic->thumb = $fumetto['thumb'];
            $newComic->price = $fumetto['price'];
            $newComic->series = $fumetto['series'];
            $newComic->sale_date = $fumetto['sale_date'];
            $newComic->type = $fumetto['type'];
            $newComic->save();
        }
    }
}
