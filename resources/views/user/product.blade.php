<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/layout_user/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    @foreach($data as $item)
        <div>{{$item->id_tour}}</div>
        <div>{{$item->name_tour}}</div>
        <br>
    @endforeach
    {{$data->links()}}
</body>
</html>