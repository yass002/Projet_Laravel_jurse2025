
<h1> {{ $modo }} Organizer </h1>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
<div class="form-group">
    <label for="ApellidoPaterno"> Src </label>
    <input type="text" class="form-control" name="src" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Alt </label>
    <input type="text" class="form-control" name="alt" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="Nombre"> Order </label>
    <input type="text" class="form-control" name="order" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>



<input class="btn btn-success" type="submit" value="{{$modo}} ">

<a class="btn btn-primary" href="{{url('organizers/')}}"> Cancel </a>

<br>
