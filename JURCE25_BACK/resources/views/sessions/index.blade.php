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

    <a href="{{url('sessions/create')}}" class="btn btn-success"> Add Special Session</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
              
              
                <th>Title</th>
                <th>Description</th>
                <th>Order</th>
              
              
            </tr>
        </thead>

        <tbody>
            @foreach ($sessions as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
              

                <td>{{ $empleado->title}}</td>
                <td>{{ $empleado->description}}</td>
                <td>{{ $empleado->order}}</td>
              
                <td>

                <a href="{{ url('/sessions/'.$empleado->id.'/edit') }}" class="btn btn-info">
                    Edit
                </a> 
                    |

                <form action="{{ url('/sessions/'.$empleado->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')" 
                        value="Delete">
                </form>
                
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection