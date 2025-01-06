<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>{{ $title ?? 'Sistema de sectorización' }}</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 30px;
            *display: flex;
            justify-content: center;
            align-items: center;

        }

        body {
            background-color: rgb(12, 191, 223);
            background-image: url("{{ asset('images/fondo.png') }}"); 
            background-size: cover;
            /* Ajusta la imagen para cubrir toda la pantalla */
            background-repeat: no-repeat;
            /* Evita que la imagen se repita */
            background-position: center;
            /* Centra la imagen */
            height: 100vh;
            /* Ocupa toda la altura de la ventana */
            margin: 0;
            /* Elimina el margen por defecto */
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>

</html>
