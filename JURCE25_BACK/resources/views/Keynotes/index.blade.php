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

    <a href="{{url('keynotes/create')}}" class="btn btn-success"> Add Keynote</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
              
              
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Src</th>
                <th>Description</th>
                <th>Website</th>
              
            </tr>
        </thead>

        <tbody>
            @foreach ($keynotes as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
              

                <td>{{ $empleado->firstname}}</td>
                <td>{{ $empleado->lastname}}</td>
                <td>{{ $empleado->src}}</td>
                <td>{{ $empleado->description}}</td>
                <td>{{ $empleado->website}}</td>
                <td>

                <a href="{{ url('/keynotes/'.$empleado->id.'/edit') }}" class="btn btn-info">
                    Edit
                </a> 
                    |

                <form action="{{ url('/keynotes/'.$empleado->id)}}" class="d-inline" method="post">
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