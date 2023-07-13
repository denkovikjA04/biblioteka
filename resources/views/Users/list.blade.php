<html>
<body>
<ul>
    @foreach($users as $user)
    <li>{{$user->firstName}} {{$user->lastName}} {{$user->exif_thumbnail}}</li>
    @endforeach
</ul>
</body>
</html>