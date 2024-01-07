@extends('layouts.app')

@section('content')
<div class="container">

    @if (Session::has('mensaje')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button> 
        
        </div>
    @endif

    <a href="{{url('tweets/create')}}" class="btn btn-success">Add Tweets </a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>link_tweet</th>
                <th>date_tweet</th>
          
        </thead>

        <tbody>
            @foreach ($tweets as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
               
                <td>{{ $empleado->link}}</td>
                <td>{{ $empleado->date_tweet}}</td>
                
                <td>

                <a href="{{ url('/tweets/'.$empleado->id.'/edit') }}" class="btn btn-info">
                    Edit 
                </a> 
                    |

                <form action="{{ url('/tweets/'.$empleado->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('are you sure?')" 
                        value="deleted">
                </form>
                
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection