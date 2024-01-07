@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/tweets')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('tweets.form', ['modo' => 'Create'])

</form>
</div>
@endsection