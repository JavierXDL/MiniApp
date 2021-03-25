@extends('layouts.app')
@section('content')
<div class="container"><!-- Inicio del container--> 
<div class="row"> <!-- Inicio del Row--> 

@foreach( $spotify as $pasar)

<div class="col-12 mt-5">
<div class="card d-block"  style="width: 250px;"> 
  <img class="card-img-top " src="{{ asset('storage').'/'.$pasar->Portada }} " alt="Card image cap">
</div><!--FIn del card-->
</div> <!--Fin del col-->



@endforeach

</div> <!--Fin del row-->
<div class="contenedor" style="text-align: right;"></div>
<h4> Nombre</h4>
<p class="card-text"> {{ $pasar->Nombre }}</p>
<h4> Autor</h4>
<p class="card-text">{{ $pasar->Autor }}</p>
<h4> Descripcion Corta</h4>
<p class="card-text">{{ $pasar->DescripcionC }}</p>
<h4> Descripcion</h4>
<p class="card-text"> {{ $pasar->description }}</p>
<h4> ISBN</h4>
<p class="card-text">{{ $pasar->ISBN }}</p>
<h4> Editorial</h4>
<p class="card-text">{{ $pasar->Editorial }}</p>
<h4> Numero de paginas</h4>
<p class="card-text"> {{ $pasar->Npaginas }}</p>
<h4> Edicion</h4>
<p class="card-text">{{ $pasar->Edicion }}</p>
<h4> Pais</h4>
<p class="card-text">{{ $pasar->Pais }}</p>
<h4>Año</h4>
<p class="card-text"> {{ $pasar->Anio }}</p>


</div> <!--Fin del container-->


@endsection