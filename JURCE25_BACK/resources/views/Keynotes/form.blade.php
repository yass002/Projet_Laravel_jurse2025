
<h1> {{ $modo }} Keynode </h1>

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
    <label for="ApellidoPaterno"> Firstname </label>
    <input type="text" class="form-control" name="firstname" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Lastname </label>
    <input type="text" class="form-control" name="lastname" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Src </label>
    <input type="text" class="form-control" name="src" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="Nombre"> Description </label>
    <input type="text" class="form-control" name="description" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>
<div class="form-group">
    <label for="Nombre"> Website</label>
    <input type="text" class="form-control" name="website" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>



<input class="btn btn-success" type="submit" value="{{$modo}} ">

<a class="btn btn-primary" href="{{url('keynotes/')}}"> Cancel </a>

<br>
