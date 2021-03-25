@extends('layouts.app')
@section('content')


<!-- BUSCADOR -->
<div class="col-sm-3 col-12  inline ">

<form class="d-flex" action="{{ route('home') }}" method="GET" >
                            
    <input class="form-control me-2"  type="text" name="search" id="search" value="{{ request()->query('search') }}" placeholder="Ingresa un Autor, Titulo o Descripcion" aria-label="Search">
         <button class="btn btn-dark" type="submit">Buscar</button>
</form>
</div>
<!--Fin del buscador-->



<div class="container">
<div class="row">


@foreach( $spotify as $pasar)

<div class="col-12 col-lg-3 mt-5 mb-5">
<div class="card d-block gb-light" style="width: 250px;">
  <img class="card-img-top" src="{{ asset('storage').'/'.$pasar->Portada }} " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"> {{ $pasar->Nombre }}</h5>
    <p class="card-text">{{ $pasar->Autor }}</p>
    <p class="card-text">{{ $pasar->DescripcionC }}</p>
    <a href="{{route ('vista') }}" class="btn btn-primary"> Ver descripcion Completa</a>
  </div>
</div>
</div> <!--Fin del col-->

@endforeach


</div> <!--Fin del row-->
</div> <!--Fin del container-->

@endsection