@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/tweets/'.$tweets->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('tweets.form', ['modo' => 'Edit'])

</form>

</div>
@endsection