<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
</head>
<body>
    {{-- including some partials files of the folder partials --}}
    @include('partials.header')

    <main>
 {{-- segnaposto   --}}
      @yield('content')
    </main>
 
    @include('partials.footer')
</body>
</html>