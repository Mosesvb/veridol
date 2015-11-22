<?php

namespace App\Http\Controllers;

use Auth;
use Request;
use App\Batch;
use App\Medication;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicationRequest;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medications = Medication::personalize()->get();
        $batchs = Batch::personalize()->get();

        return view('medication.index', ['medications' => $medications, 'batchs' => $batchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicationRequest $request)
    {
        $medication = new Medication();
        $medication->user_id = Auth::user()->id;
        $medication->name = $request['name'];
        $medication->ailment = $request['ailment'];
        $medication->quantity = $request['quantity'];
        $medication->save();

        return redirect('medication');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('medication.show', ['medication' => $this->findById($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('medication.edit', ['medication' => $this->findById($id)]);
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
        $updateMedication = Request::all();

        $this->findById($id)->update($updateMedication);

        return redirect('medication');
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

        return redirect('medication');
    }

    private function findById($id)
    {
        return Medication::find($id);
    }
}
