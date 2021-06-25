<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", [
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();
        $request->validate([
            "title"=> "required|max:100",
            "description"=> "required",
            "img"=> "required",
            "price"=> "required|max:11",
            "sale_date"=> "required",
            "type"=> "required|max:30"
        ]);

        $newComic = new Comic();
        $newComic->title = $newComicData["title"];
        $newComic->description = $newComicData["description"];
        $newComic->img = $newComicData["img"];
        $newComic->price = $newComicData["price"];
        $newComic->series = $newComicData["series"];
        $newComic->sale_date = $newComicData["sale_date"];
        $newComic->type = $newComicData["type"];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", [
            "comic" => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view("comics.edit", [
            "comic" => $comic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $formData = $request->all();

        $request->validate([
            "title"=> "required|max:100",
            "description"=> "required",
            "img"=> "required",
            "price"=> "required|max:11",
            "sale_date"=> "required",
            "type"=> "required|max:30"
        ]);


        $comic->update($formData);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route("comics.index");
    }
}
