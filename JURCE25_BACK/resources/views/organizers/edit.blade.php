@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/organizers/'.$organizers->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
{{-- @method('PUT'); --}}
@include('organizers.form', ['modo' => 'Edit'])

</form>

</div>
@endsection