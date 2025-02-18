<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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


{{--<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title"--}}
{{--        data-bs-content={!!<iframe class="img-thumbnail" width="560" height="315"--}}
{{--        src="https://www.youtube.com/embed/aAxlsmHtro4?si=jpJ12cLSIZVWIpJm"--}}
{{--        title="YouTube video player" frameborder="0"--}}
{{--        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"--}}
{{--        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>!!}>Click to toggle popover--}}
{{--</button>--}}


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe class="img-thumbnail" width="560" height="315"
                        src="https://www.youtube.com/embed/aAxlsmHtro4?si=jpJ12cLSIZVWIpJm"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>
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

    <input type="text" @readonly(false)>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script>
    const popoverTriggerList = document.querySelectorAll(' [data-bs-toggle="popover" ]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
</body>
{{--@includeIf('prueba',['color' => 'red'])--}}
@includeWhen(true, 'prueba', ['color'=> 'blue']) {{-- Se incluye cuando se cumple la condición }} --}}
{{--@includeFirst(['vista1','vista2']) -> busca en una array las vistas ,y la primera que encuentre la muestra--}}
</html>
