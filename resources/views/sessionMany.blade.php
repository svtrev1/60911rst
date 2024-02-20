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
    @foreach ($sessionMany->services as $service)
    <tr>
        <td>{{$service->id}}</td>
        <td>{{$service->name}}</td>
        <td>{{$service->price}}</td>
    </tr>
    @endforeach
    </table>
    @endif
</body>
</html>