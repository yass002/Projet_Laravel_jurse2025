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

    <a href="{{url('videos/create')}}" class="btn btn-success"> Add Videos</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
              
              
               <th>Vpath</th>
               
                <th>title</th>
                <th>Order</th>
              
            </tr>
        </thead>

        <tbody>
            @foreach ($videos as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->vpath}}</td>
                <td>{{ $empleado->title}}</td>
                <td>{{ $empleado->order}}</td>
                <td>

                <a href="{{ url('/videos/'.$empleado->id.'/edit') }}" class="btn btn-info">
                    Edit
                </a> 
                    |

                <form action="{{ url('/videos/'.$empleado->id)}}" class="d-inline" method="post">
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