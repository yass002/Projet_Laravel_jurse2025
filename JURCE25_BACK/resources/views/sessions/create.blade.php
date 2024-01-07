@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/sessions')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('sessions.form', ['modo' => 'Create'])

</form>
</div>
@endsection