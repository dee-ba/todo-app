<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')


   <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    
    <h1 class="text-6xl text-blue-600">Laravel Layout is Here</h1>

    @yield('content')

</body>
</html>


