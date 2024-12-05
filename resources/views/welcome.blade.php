<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>

        @foreach ($anime['data'] as $element)
            <li>
                <a href="{{ route('show', ['mal_id' => $element['mal_id']]) }}">
                    {{ $element['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
