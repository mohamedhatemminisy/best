<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Http\Requests\GeneralRequest;
use View;

class RateEmployeeController  extends Controller
{
        //get all events
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $banks = General::where('type', 'bank')->orderBy('id', 'desc')->get();

                View::share('banks', $banks);
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
        $data =General::where('type','rate_employee')->orderBy('id','desc')->get();
        return view('admin.rate_employee.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rate_employee.create');
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
        $data['parent_id'] = $request->bank_id;
        $general = General::create($data);
        return $general ? redirect(getRoute('rate_employee.index'))->with(['success'=>trans('general.rate_employee.rate_employee_saved')]) : redirect()->back();
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
        return view('admin.rate_employee.show',compact('data'));
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
        return view('admin.rate_employee.edit',compact('data'));
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
        $data['parent_id'] = $request->bank_id;
        $general = General::findOrfail($id);
        $general->fill($data)->save();
        return $general ? redirect(getRoute('rate_employee.index'))->with(['success'=>trans('general.rate_employee.rate_employee_updated')]) : redirect()->back();
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
        return redirect(getRoute('rate_employee.index'))->with(['success'=>trans('general.rate_employee.rate_employee_deleted')]);
    }
}
