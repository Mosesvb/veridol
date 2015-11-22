@extends('index')
@section('content')
<div class="container" style="padding-top:70px;">
  @if (Auth::check()) 
    <h2>Add New medication</h2>
    <a href="{{url('/medication/create')}}" class="btn btn-primary">Create medication</a>     
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Ailment</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($medications as $medication)
        <tr>
          <td>{{ $medication->name }}</td>
          <td>{{ $medication->ailment }}</td>
          <td>{{ $medication->quantity }}</td>
          <td><a href="{{url('medication',$medication->id)}}" class="btn btn-primary">Read</a></td>
          <td><a href="{{route('medication.edit',$medication->id)}}" class="btn btn-warning">Update</a></td>
          <td>
            {!! Form::open(['method' => 'DELETE', 'route'=>['medication.destroy', $medication->id]]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
      </tbody>
      <h2>Add New Batch</h2>
    <a href="{{url('/batch')}}" class="btn btn-primary">Create batch</a>     
    </table>
  @else
    <h3>Please login/register first to access this feature.</h3>
  @endif
</div>
@endsection
