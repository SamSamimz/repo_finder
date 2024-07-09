<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Repo_finder</title>
    </head>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('bootstrap/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/custom.css')}}">

    <body>
        <main>{{$slot}}</main>
        <script src="{{asset('bootstrap/script.min.js')}}"></script>
        @livewireScripts
    </body>

</html>