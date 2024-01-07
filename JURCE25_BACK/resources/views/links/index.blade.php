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

    <a href="{{url('links/create')}}" class="btn btn-success"> Add link</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>description</th>
                <th>links</th>
              
            </tr>
        </thead>

        <tbody>
            @foreach ($links as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                

                <td>{{ $empleado->description}}</td>
                <td>{{ $empleado->links}}</td>
              
                <td>

                <a href="{{ url('/links/'.$empleado->id.'/edit') }}" class="btn btn-info">
                    Edit 
                </a> 
                    |

                <form action="{{ url('/links/'.$empleado->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('are you sure?')" 
                        value="delete">
                </form>
                
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection