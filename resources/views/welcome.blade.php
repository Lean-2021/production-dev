<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>

    <style>
        .color-red {
            color: red;
        }

        .color-green {
            color: green;
        }
    </style>
</head>

<body>
<h1>Estas en la vista Home de la ruta home</h1>
<h3>Este framework es: {{ $name }}</h3>
{{--<ul>--}}
{{--    @foreach( $posts as $index => $post)--}}
{{--        --}}{{--    <span>{{ $loop->last ? $post['title'] : $post['title'].' | ' }} </span>--}}
{{--        --}}{{--    @if($loop->first)--}}
{{--        --}}{{--            <p>{{$post['title']}} Soy la primera</p>--}}
{{--        --}}{{--        @else--}}
{{--        <li @class([--}}
{{--            'color-red' => $loop->first,--}}
{{--            'color-green' => $loop->last--}}
{{--        ])>--}}
{{--            <p>{{$post['title']}}</p>--}}
{{--            --}}{{--        @endif--}}
{{--            <p>{{$post['content']}}</p>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
<form action="">
    <label for="peru">
        <input type="checkbox" @checked(true) name="paises[]" id="peru">
        Peru
    </label>
    <label for="colombia">
        <input type="checkbox" name="paises[]" id="colombia">
        Colombia
    </label>
    <label for="argentina">
        <input type="checkbox" name="paises[]" id="argentina">
        Argentina
    </label>
    <label for="mexico">
        <input type="checkbox" name="paises[]" id="mexico">
        México
    </label>

    <input type="text" @readonly(true)>
</form>
</body>
{{--@includeIf('prueba',['color' => 'red'])--}}
@includeWhen(true, 'prueba', ['color'=> 'blue']) {{-- Se incluye cuando se cumple la condición }} --}}
{{--@includeFirst(['vista1','vista2']) -> busca en una array las vistas ,y la primera que encuentre la muestra--}}
</html>
