<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bien venido a la pagina principal</h1> --}}
        
        <x-alert type="dark" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            Contedio de la alerta
        </x-alert2>
        <p>hola mundo</p>
    </div>


</body>

</html>
