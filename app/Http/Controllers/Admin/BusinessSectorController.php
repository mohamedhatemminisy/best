<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Http\Requests\GeneralRequest;

class BusinessSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =General::where('type','business_sector')->orderBy('id','desc')->get();
        return view('admin.business_sector.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business_sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->all();
        $general = General::create($data);
        return $general ? redirect(getRoute('business_sector.index'))->with(['success'=>trans('general.business_sector.business_sector_saved')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = General::findOrfail($id);
        return view('admin.business_sector.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = General::findOrfail($id);
        return view('admin.business_sector.edit',compact('data'));
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
        $data = $request->all();
        $general = General::findOrfail($id);
        $general->fill($data)->save();
        return $general ? redirect(getRoute('business_sector.index'))->with(['success'=>trans('general.business_sector.business_sector_updated')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = General::findOrfail($id);
        $general->delete();
        return redirect(getRoute('business_sector.index'))->with(['success'=>trans('general.business_sector.business_sector_deleted')]);
    }
}
