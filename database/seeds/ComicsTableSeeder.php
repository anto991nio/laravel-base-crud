<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config("comic");
        foreach ($comicsList as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->img = $comic["thumb"];
            $newComic->series = $comic["series"];
            $newComic->price = $comic["price"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];

            $newComic->save();
        }
    }
}
