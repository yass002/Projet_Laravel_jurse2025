@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/keynotes/'.$keynotes->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('keynotes.form', ['modo' => 'Edit'])

</form>

</div>
@endsection