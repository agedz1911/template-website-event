<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="images/logo/favicon.ico">

    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body>
    {{$slot}}

    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>