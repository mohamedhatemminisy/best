<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
    public function index()
    {
        //
        $data = Feature::all();
        return view('admin.feature.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureRequest $request)
    {
        //
           $data =  $request->all();
            
        
        $general = Feature::create($data);
        return $general ? redirect(getRoute('feature.index'))->with(['success'=>trans('general.feature.feature_saved')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //\
        $general = Feature::findOrfail($id);
        return view('admin.feature.show',compact('general'));
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
        $general = Feature::findOrfail($id);
        return view('admin.feature.edit',compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureRequest $request, $id)
    {
        //
        $data = $request->all();
        $general = Feature::findorfail($id);
       
        $general->fill($data)->save();
        return $general ? redirect(route('feature.index'))->with(['success'=>trans('general.feature.feature_updated')]) : redirect()->back();
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
     
        $general = Feature::findorfail($id);
       
        $general->delete();
         
        return redirect(route('feature.index'))->with(['success'=>trans('general.feature.feature_deleted')]); 

    }
}
