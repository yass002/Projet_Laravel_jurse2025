@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/photos')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('photos.form', ['modo' => 'Create'])

</form>
</div>
@endsection