
<h1> {{ $modo }} Home:Tweets </h1>

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
    <label for="ApellidoPaterno">Tweet_link </label>
    <input type="text" class="form-control" name="link" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno"> Date_tweet</label>
    <input type="text" class="form-control" name="date_tweet" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
</div>




<input class="btn btn-success" type="submit" value="{{$modo}} ">

<a class="btn btn-primary" href="{{url('tweets/')}}">cancel </a>

<br>
