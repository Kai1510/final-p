<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Tilte</th>
            <th>Description</th>
        </tr>
        @foreach ($posts as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->slug}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->description}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>