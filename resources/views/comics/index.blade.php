<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>ARCHIVIO FUMETTI</h1>
    <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto all'archivio...</a>
    <div class="d-flex">
        @foreach($comics as $comic)

        <div class="card">

            <img src="{{$comic->img}}" alt="">
            <h2> TITOLO : {{$comic->title}}</h2>
            <h2>PREZZO : {{$comic->price}}</h2>
            <h2>SERIE : {{$comic->series}}</h2>
            <h2>DATA USCITA : {{$comic->sale_date}}</h2>
            <h2>DESCRIZIONE : {{$comic->description}}</h2>
        </div>

        @endforeach
    </div>

</body>
</html>
