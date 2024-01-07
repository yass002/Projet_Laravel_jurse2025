@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/organizers')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('organizers.form', ['modo' => 'Create'])

</form>
</div>
@endsection