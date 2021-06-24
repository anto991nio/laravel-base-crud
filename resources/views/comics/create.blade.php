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
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <h1>INSERISCI IL NUOVO FUMETTO A CATALOGO</h1>
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="img">Immagine</label>
            <input type="text" name="img" id="img">
        </div>
        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date">Data di uscite</label>
            <input type="text" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type">
        </div>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Invia">
    </form>
</body>
</html>
