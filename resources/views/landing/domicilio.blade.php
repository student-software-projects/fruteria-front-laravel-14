@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="estilos/estilo2.css">

<h1>Domicilios</h1>
<br><br>

<section class="home">

    <div class="in-flex">
        <h3>Ensalada</h3>
        <img src="img/ensalada1.jpg" width="300px" height="200px"><br>
            <div>
            Ensalada Solo Frutas.</div>
        <h6>$15,100</h6>
        <img src="img/bigote.png" width="10%" height="10%"> podelo por Rappi de 7am - 7pm <br>
        <button type="button" class="btn btn-primary">Lo quiero</button>
    </div>
        <br>

        <div>
            <h3>Ensalada</h3>
            <img src="img/ensalada2.jpg" width="300px" height="200px"><br>

            <div>Ensalada Solo Frutas.</div>
               <h6>$20,100 </h6>
            <img src="img/bigote.png" width="10%" height="10%"> podelo por Rappi de 7am - 7pm <br>
            <button type="button" class="btn btn-primary">Lo quiero</button>
        </div>


    <div class="in-flex">
        <h3>Ensalada</h3>
        <img src="img/ensalada3.jpg"width="300px" height="200px"><br>

        <div>Ensalada Super Jugosa</div>
        <h6>$18,700</h6>
        <img src="img/bigote.png" width="10%" height="10%"> podelo por Rappi de 7am - 7pm <br>
        <button type="button" class="btn btn-primary">Lo quiero</button>
        <br>


    </div>
</section>
<br><br>


@endsection
