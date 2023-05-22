<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('search')}} ">
        <input type="text" name="search">
        <button>Search</button>
    </form>
    <a href="{{route('articles.create')}}">create</a>
    <table border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>contente</th>
                <th>Pulication Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}} </td>
                <td>{{$article->publication_date}} </td>
                <td><a href="{{route('articles.show',$article->id)}}">show</a> </td>
                <td><a href="{{route('articles.edit',$article->id)}}">Update</a></td>
                <td>
                    <form method="POST" action="{{route('articles.destroy', $article->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Supprimer" />
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>