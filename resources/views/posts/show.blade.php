<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>number</th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
