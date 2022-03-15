<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->roles[0]->name == 'superadmin') {
            $invoice = Invoice::all();
        } elseif (auth()->user()->roles[0]->name == 'mediator') {
            $invoice = Invoice::where('added_by', auth()->user()->id)->orWhere('redirected_to', auth()->user()->id)->get();
        } elseif (auth()->user()->roles[0]->name == 'employee') {
            $invoice = Invoice::where('added_by', auth()->user()->id)->get();
        }
        $users = User::role(['superadmin', 'mediator'])->get();

        return view('admin.invoice.index', compact('invoice', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        $data  =  $request->all();
        $data['added_by'] = auth()->user()->id;
        $invoices = Invoice::create($data);
        return $invoices ? redirect(getRoute('invoice.index'))->with(['success' => trans('general.invoice.invoice_saved')]) : redirect()->back();
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
        $general = Invoice::findOrfail($id);
        return view('admin.invoice.show', compact('general'));
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
        $general = Invoice::findOrfail($id);
        return view('admin.invoice.edit', compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceRequest $request, $id)
    {
        $data = $request->all();
        $general = Invoice::findOrfail($id);
        $data['added_by'] = auth()->user()->id;
        $general->fill($data)->save();
        return $general ? redirect(getRoute('invoice.index'))->with(['success' => trans('general.invoice.invoice_updated')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Invoice::findorfail($id);
        $general->delete();
        return redirect(route('invoice.index'))->with(['success' => trans('general.invoice.invoice_deleted')]);
    }
    public function accept($id)
    {
        $general = Invoice::findorfail($id);
        $general->status = 'accept';
        $general->save();
        return redirect(route('invoice.index'))->with(['success' => trans('general.invoice.invoice_accepted')]);
    }
    public function reject($id)
    {
        $general = Invoice::findorfail($id);
        $general->status = 'reject';
        $general->save();
        return redirect(route('invoice.index'))->with(['success' => trans('general.invoice.invoice_rejected')]);
    }
    public function forward(Request $request)
    {
        $general = Invoice::findorfail($request->id);
        $general->status = 'redirect';
        $general->redirected_to = $request->redirected_to;
        $general->save();
        return redirect(route('invoice.index'))->with(['success' => trans('general.invoice.redirected_successfully')]);
    }
    public function delay(Request $request)
    {
        $general = Invoice::findorfail($request->id);
        $general->status = 'delay';
        $general->delay = $request->delay;
        $general->save();
        return redirect(route('invoice.index'))->with(['success' => trans('general.invoice.delayed_successfully')]);
    }
}
