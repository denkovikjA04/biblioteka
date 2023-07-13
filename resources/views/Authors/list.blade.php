<html>
<body>
<ul>
    @foreach($avtori as $author)
    <li><a href="{{ route('avtor.prikazi',['id'=>$author->id]) }}">{{$author->name}}</a></li>
    @endforeach
</ul>
</body>
</html>