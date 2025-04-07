<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project}}</li>
        @endforeach
    </ul>
</body>
</html>