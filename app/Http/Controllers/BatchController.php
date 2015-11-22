<?php

namespace App\Http\Controllers;


use Auth;
use Request;
use App\Batch;
use App\Medication;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BatchRequest;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchs = Batch::personalize()->get();

        return view('batch.index', ['batchs' => $batchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Medication::personalize()->lists('name', 'name');
        return view('batch.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BatchRequest $request)
    {
        $batch = new Batch();
        $batch->user_id = Auth::user()->id;
        $batch->medication_id = Auth::user()->medication->id;
        $batch->batch_number = $request['batch_number'];
        $batch->medication_name = $request['medication_name'];
        $batch->mfg_date = $request['mfg_date'];
        $batch->exp_date = $request['exp_date'];
        $batch->save();

        return redirect('batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('batch.show', ['batch' => $this->findById($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('batch.edit', ['batch' => $this->findById($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateBatch = Request::all();

        $this->findById($id)->update($updateBatch);

        return redirect('batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->findById($id)->delete();

        return redirect('batch');
    }

    private function findById($id)
    {
        return Batch::find($id);
    }
}
