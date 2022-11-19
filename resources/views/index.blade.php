<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>parent_id</th>
            <th>position</th>
            <th>status</th>
        </tr>
        @foreach($data as $_data)
        <tr>
            <td>{{$_data->id}}</td>
            <td>{{$_data->name}}</td>
            <td>{{$_data->parent_id}}</td>
            <td>{{$_data->position}}</td>
            <td>{{$_data->status}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>