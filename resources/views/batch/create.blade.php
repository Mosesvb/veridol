@extends('index')

@section('content')
<div class="container" style="padding-top:70px;">
  <h1>Create Batch</h1>
    {!! Form::open(['url' => 'batch']) !!}
  <div class="form-group">
      {!! Form::label('Batch Number', 'Batch Number:') !!}
      {!! Form::text('batch_number',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('Manufucturing Date', 'Manufucturing Date:') !!}
      {!! Form::text('mfg_date',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('Expiring Date', 'Expiring Date:') !!}
      {!! Form::text('exp_date',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('Medication Name', 'Medication Name:') !!}
      {!! Form::select('medication_name', $tags, null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
  </div>
  {!! Form::close() !!}
</div>
@endsection
