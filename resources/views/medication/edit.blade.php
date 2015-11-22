@extends('index')

@section('content')

<div class="container" style="padding-top:70px;">
  <h1>Update Medication</h1>
    {!! Form::model($medication,['method' => 'PATCH','route'=>['medication.update',$medication->id]]) !!}
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
        {!! Form::text('quantity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
