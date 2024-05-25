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
        @if ($folder->id)
            <p>
                <a href="{{ route('explorer.show', $folder->parent_id) }}">
                    Wróć
                </a>
            </p>
        @endif

        <h3>Foldery</h3>
        <ul>
            @forelse ($showFolders as $folder)
                <li>
                    <a href="{{ route('explorer.show', $folder) }}">
                        {{ $folder->name }}
                    </a>
                </li>
            @empty
                <li>
                    Brak plików do zagnieżdżenia
                </li>
            @endforelse
        </ul>
    </div>

    <div class="">
        <h3>Pliki</h3>
        <ul>
            @forelse ($showFiles as $file)
                <li>{{ $file->name }}</li>
            @empty
                <li>
                    Brak folderów do zagnieżdżenia
                </li>
            @endforelse
        </ul>
    </div>
</body>

</html>
