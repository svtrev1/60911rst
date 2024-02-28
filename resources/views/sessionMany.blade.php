<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{$sessionMany ? "Список услуг по сеансу:".$sessionMany->id : "Неверный id" }}</h2>
    @if($sessionMany)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Имя</td>
            <td>Цена</td>
        </tr>
    @foreach ($sessionMany->services as $i)
    <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->name}}</td>
        <td>{{$i->price}}</td>
    </tr>
    @endforeach
    </table>
    @endif
</body>
</html>