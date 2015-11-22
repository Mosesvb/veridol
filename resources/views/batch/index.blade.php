@extends('index')
@section('content')
<div class="container">
  @if (Auth::check()) 
    <h2>Add Batch</h2>
    <a href="{{url('/batch/create')}}" class="btn btn-primary">Create Batch</a>     
    <table class="table">
      <thead>
        <tr>
          <th>Medication Name</th>
          <th>Batch Number</th>
          <th>Manufucturing Date</th>
          <th>Expring Date</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($batchs as $batch)
        <tr>
          <td>{{ $batch->medication_name }}</td>
          <td>{{ $batch->batch_number }}</td>
          <td>{{ $batch->mfg_date }}</td>
          <td>{{ $batch->exp_date }}</td>
          <td><a href="{{url('batch', $batch->id)}}" class="btn btn-primary">Read</a></td>
          <td><a href="{{route('batch.edit', $batch->id)}}" class="btn btn-warning">Update</a></td>
          <td>
            {!! Form::open(['method' => 'DELETE', 'route'=>['batch.destroy', $batch->id]]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
      
      </tbody>   
    </table>
    <div>
        <a href="{{ url('medication')}}" class="btn btn-primary">Back</a>
    </div>
  @else
    <h3>Please login/register first to access this feature.</h3>
  @endif
</div>
@endsection
