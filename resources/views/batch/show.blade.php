@extends('index')

@section('content')
<div class="container">
  <h1>Show Batch</h1>
  
    <form class="form-horizontal">
        <div class="form-group">
            <label for="batch_number" class="col-sm-2 control-label">Batch number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="batch_number" placeholder={{ $batch->batch_number }} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="medication_name" class="col-sm-2 control-label">Medication Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="medication_name" placeholder={{ $batch->medication_name }} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="mfg_date" class="col-sm-2 control-label">Manufucturing Date</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="mfg_date" placeholder={{ $batch->mfg_date }} readonly ></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="exp_date" class="col-sm-2 control-label">Expiring Date</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="exp_date" placeholder={{ $batch->exp_date }} readonly ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('batch')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div>
@endsection
