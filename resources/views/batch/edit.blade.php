@extends('index')

@section('content')

<div class="container" style="padding-top:70px;">
  <h1>Update Book</h1>
    {!! Form::model($batch,['method' => 'PATCH','route'=>['batch.update',$batch->id]]) !!}
    <div class="form-group">
        {!! Form::label('Batch Number', 'Batch Number:') !!}
        {!! Form::text('mfg_date', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Manufucturing Date', 'Manufucturing Date:') !!}
        {!! Form::text('mfg_date', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Expiring Date', 'Expiring Date:') !!}
        {!! Form::text('exp_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
