@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/keynotes')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('keynotes.form', ['modo' => 'Create'])

</form>
</div>
@endsection