<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laravel Livewire</title>

    @livewireStyles
</head>
<body>

    <div class="container">
         {{ $slot }}  {{-- renderizar contéudo do livewire --}}
    </div>

    @livewireScripts
</body>
</html>