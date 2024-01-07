@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/links/'.$links->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('links.form', ['modo' => 'Edit'])

</form>

</div>
@endsection