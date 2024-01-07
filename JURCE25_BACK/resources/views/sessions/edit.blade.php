@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/sessions/'.$sessions->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('sessions.form', ['modo' => 'Edit'])

</form>

</div>
@endsection