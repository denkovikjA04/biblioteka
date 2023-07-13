<html>
<body>
<ul>
    @foreach($knigi as $book)
    <li><a href="{{ route('kniga.prikazi',['id'=>$book->id]) }}">{{$book->name}}</a></li>
    @endforeach
</ul>
</body>
</html>