@extends('index')

@section('content')
<div class="container" style="padding-top:70px;">
  <h1>Create Medication</h1>
    {!! Form::open(['url' => 'medication']) !!}
  <div class="form-group">
      {!! Form::label('Name', 'Name:') !!}
      {!! Form::text('name',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('Ailment', 'Ailment:') !!}
      {!! Form::text('ailment',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::label('Quantity', 'Quantity:') !!}
      {!! Form::textarea('quantity',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
  </div>
  {!! Form::close() !!}
</div>
@endsection
