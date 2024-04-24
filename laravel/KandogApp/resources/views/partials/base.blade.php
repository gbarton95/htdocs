<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Kandog')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Uso de Bootstrap -->
</head>
<body>
    @include('partials.navbar')  <!-- Barra de Navegación -->
    
    <div class="container my-4">
        @yield('content')  <!-- Contenido de la vista -->
    </div>
    
    @include('partials.footer')  <!-- Pie de Página -->
    
    @include('partials.login_modal')  <!-- Modal para Login -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
