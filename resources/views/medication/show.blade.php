@extends('index')

@section('content')
<div class="container" style="padding-top:70px;">
  <h1>Show Medication</h1>
  
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder={{ $medication->name }} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ailment" class="col-sm-2 control-label">Ailment</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ailment" placeholder={{ $medication->ailment }} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="quantity" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="quantity" placeholder={{ $medication->quantity }} readonly ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('medication')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div>
@endsection
