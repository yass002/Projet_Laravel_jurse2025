@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/photos/'.$photos->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('photos.form', ['modo' => 'Edit'])

</form>

</div>
@endsection