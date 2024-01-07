@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/videos')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('videos.form', ['modo' => 'Create'])

</form>
</div>
@endsection