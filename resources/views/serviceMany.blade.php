<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{$serviceMany ? "Список сеансов по услуге:".$serviceMany->id : "Неверный id" }}</h2>
    @if($serviceMany)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Client_id</td>
            <td>Cosmetologist_id</td>
        </tr>
    @foreach ($serviceMany->sessions as $session)
    <tr>
        <td>{{$session->id}}</td>
        <td>{{$session->client_id}}</td>
        <td>{{$session->cosmetologist_id}}</td>
    </tr>
    @endforeach
    </table>
    @endif
</body>
</html>