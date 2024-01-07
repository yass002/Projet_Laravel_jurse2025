@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/videos/'.$videos->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('videos.form', ['modo' => 'Edit'])

</form>

</div>
@endsection