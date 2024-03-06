<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il model
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = config('comics');


        foreach ($comicsData as $index => $SingleComicData) {
            $comic = new Comic();

            $CleanedPrice = str_replace('$', '', $SingleComicData['price']);

            $comic->title = $SingleComicData['title'];
            $comic->description = $SingleComicData['description'];
            $comic->thumb = $SingleComicData['thumb'];
            $comic->price = floatval($CleanedPrice);
            $comic->series = $SingleComicData['series'];
            $comic->sale_date = $SingleComicData['sale_date'];
            $comic->type = $SingleComicData['type'];
            $comic->artists = json_encode($SingleComicData['artists']);
            $comic->writers = json_encode($SingleComicData['writers']);

            $comic->save();
        }
    }
}
