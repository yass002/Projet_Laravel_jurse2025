@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/sponsors/'.$sponsors->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('sponsors.form', ['modo' => 'Edit'])

</form>

</div>
@endsection