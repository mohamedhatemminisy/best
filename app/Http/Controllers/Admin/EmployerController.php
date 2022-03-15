<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Http\Requests\GeneralRequest;
use View;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $business_sectors =General::where('type','business_sector')->orderBy('id','desc')->get();
            View::share('business_sectors', $business_sectors);
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =General::where('type','employer')->orderBy('id','desc')->get();
        return view('admin.employer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralRequest $request)
    {
        $data =$request->all();
        $data['parent_id'] = $request->business_sector_id;
        $general = General::create($data);
        return $general ? redirect(getRoute('employer.index'))->with(['success'=>trans('general.employer.employer_saved')]) : redirect()->back();
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
        return view('admin.employer.show',compact('data'));
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
        return view('admin.employer.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralRequest $request, $id)
    {
        $data = $request->all();
        $general = General::findOrfail($id);
        $data['parent_id'] = $request->business_sector_id;
        $general->fill($data)->save();
        return $general ? redirect(getRoute('employer.index'))->with(['success'=>trans('general.employer.employer_updated')]) : redirect()->back();
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
        return redirect(getRoute('employer.index'))->with(['success'=>trans('general.employer.employer_deleted')]);
    }
}
