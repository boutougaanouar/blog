<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        title:{{$article->title}}
    </p>
    <p>
        content:{{$article->content}}
    </p>
    <p>
        publication date:{{$article->publication_date}}
    </p>{{$article->body}}
    <div>
        <form action="{{route('articles.comments.store',['article'=>$article->id])}} ">
            @csrf
    <div>
        <input type="text" name="contenu">
    </div>
    <button>Submit</button>
        </form>
    </div>


</body>
</html>