<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$l->id_location}}</h1>
    @foreach($l->tour as $item)
        <div>{{$item->id_tour}} - {{$item->name_tour}}</div>
    @endforeach
</body>
</html>