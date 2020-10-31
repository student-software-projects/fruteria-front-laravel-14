<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Fruteria </title>
</head>
<body>


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="{{route('landing.index')}}" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="{{route('landing.acercade')}}" role="tab" aria-controls="pills-profile" aria-selected="false">Acerca de</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="{{route('landing.domicilio')}}" role="tab" aria-controls="pills-contact" aria-selected="false">Domicilio</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="{{route('landing.contacto')}}" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
    </li>
</ul>
@yield('content')

</body>
</html>
