<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h2>Welcome</h2>

    <p>Struktura folderów i plików</p>

    <p>
        Go to <a href="{{ route('explorer.show', null) }}">explorer</a>
    </p>
</body>

</html>
