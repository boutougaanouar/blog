<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('articles.update',$article->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input type="text" name="title" value="{{$article->title}}">
        <p>
            <label for="">Content</label>
            <input type="text" name="content" value="{{$article->content}}">
        </p>
        <label for="">pulication date</label>
        <input type="date" name="publication_date" value="{{$article->publication_date}}">
        <p>
            <button>Enregistrer</button>
        </p>
    
    
    </form>
</body>
</html>