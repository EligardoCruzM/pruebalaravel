<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title ?? 'Prueba' }} </title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>
    <x-layouts.navigation /> 
    @if(session('status'))
        <div class>
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
</body>
</html>