
<h1> {{ $modo }} empleado </h1>

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
    <label for="ApellidoPaterno"> Description </label>
    <input type="text" class="form-control" name="description" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>
<div class="form-group">
    <label for="ApellidoMaterno"> Link </label>
    <input type="text" class="form-control" name="links" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>





<input class="btn btn-success" type="submit" value="{{$modo}} ">

<a class="btn btn-primary" href="{{url('links/')}}"> cancel </a>

<br>
