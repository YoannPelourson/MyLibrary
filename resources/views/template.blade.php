<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} : @yield('title')</title>
</head>
<body>
    
    @include('parts/header')
    <main>
        <div class="container">
        @yield('content')
        </div>
    </main>
    <footer>
        
        <h2>plus coucou</h2>
    </footer>
</body>
</html>