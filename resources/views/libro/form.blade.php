<h1> {{ $modo }} Libro </h1> 

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>    {{  $error }}   </li>
    @endforeach
    </ul>
    </div>
   
@endif

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text"  class="form-control" name="Nombre" value=" {{ isset($pasar->Nombre)?$pasar->Nombre:old('Nombre') }}" id="Nombre">

</div>
<!--Fin del formulario mas vistoso-->


<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Autor"> Autor </label>
<input type="text"  class="form-control" name="Autor" value=" {{ isset($pasar->Autor)?$pasar->Autor:old('Autor') }}"    id="Autor">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->

<div class="form-group">

<label for="DescripcionC"> Descripcion </label>
<!--<input  type="text" class="form-control" name="DescripcionC" value=" {{ isset($pasar->DescripcionC)?$pasar->DescripcionC:old('DescripcionC') }}"  id="Descripcion"> -->


    <textarea  rows="3" class="form-control"  name="DescripcionC" value=" {{ isset($pasar->DescripcionC)?$pasar->DescripcionC:old('DescripcionC') }}"  id="Descripcion"></textarea>

</div> 

<!--Fin del formulario mas vistoso-->



<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Portada"> Portada </label>

@if(isset($pasar->Portada))
<img src=" {{ asset('storage').'/'.$pasar->Portada }} "  widt="100" height="100" alt="">
@endif
<input type="file" class="form-control" name="Portada" value=""  id="Portada">

</div>
<!--Fin del formulario mas vistoso-->
<input class="btn btn-success" type="submit" value=" {{ $modo }} datos"> 

<a class="btn btn-primary" href="  {{ url('libro/') }} " > Regresar </a>