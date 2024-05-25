<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="">
        <h3>Foldery</h3>
        <ul>
            @forelse ($showFolders as $folder)
                <li>{{ $folder->name }}</li>
            @empty
                <li>Brak folderów do zagnieżdżenia</li>
            @endforelse
        </ul>
    </div>
</body>

</html>
