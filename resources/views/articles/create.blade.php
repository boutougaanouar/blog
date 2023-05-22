<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("articles.store")}}" method="Post">
        @csrf
        <p>
            <label for="">title</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="">Content</label>
            <textarea  id="" cols="30" rows="2" name="content"></textarea>
        </p>
        <p>
            <label for="">Date</label>
            <input type="date" name="publication_date">
        </p>
        <button>Ajouter</button>
    </form>
</body>
</html>