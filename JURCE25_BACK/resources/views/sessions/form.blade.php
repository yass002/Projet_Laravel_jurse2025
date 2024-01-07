
<h1> {{ $modo }} Session </h1>

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
    <label for="ApellidoPaterno"> Title </label>
    <input type="text" class="form-control" name="title" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Description </label>
    <input type="text" class="form-control" name="description" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>
<div class="form-group">
    <label for="Nombre"> Order </label>
    <input type="text" class="form-control" name="order" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>




<input class="btn btn-success" type="submit" value="{{$modo}}">

<a class="btn btn-primary" href="{{url('sessions/')}}"> Cancel </a>

<br>
