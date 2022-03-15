<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MediatorRequest;
use App\Models\Mediator;
use Illuminate\Http\Request;

class MediatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Mediator::all();

        return view('admin.mediator.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mediator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediatorRequest $request)
    {
        //
            //  $data = $request->all();
             $general = new Mediator();
             $general->name = $request->name;
             $general->phone_one = $request->phone_one;
             $general->phone_two = $request->phone_two;

             $general->code = random_int(10000, 99999);

             $general->url =route('preOrder').'/?code='.$general->code;
             
          
             $general->save();

             return $general ? redirect(route('mediator.index'))->with(['success'=>trans('general.mediator.mediator_saved')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $general = Mediator::findOrfail($id);
        return view('admin.mediator.show',compact('general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $general = Mediator::findOrfail($id);
        return view('admin.mediator.edit',compact('general'));
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
        //

         $data = $request->all();
        $general = Mediator::findorfail($id);
       
        $general->fill($data)->save();
        return $general ? redirect(route('mediator.index'))->with(['success'=>trans('general.mediator.mediator_updated')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $data = Mediator::find($id);

        $data->delete();
        return redirect(route('mediator.index'))->with(['success'=>trans('general.mediator.mediator_deleted')]); 

    }
}
