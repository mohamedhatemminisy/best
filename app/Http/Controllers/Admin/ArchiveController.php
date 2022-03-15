<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Receipt;

class ArchiveController extends Controller
{
    public function index(){
        $data = Receipt::orderBy('id', 'desc')->where('status','archive')->get();
        return view('admin.archive.index', compact('data'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receipt = Receipt::findOrfail($id);
        $receipt->commitment->each->delete();
        $receipt->income->each->delete();
        $receipt->salary->each->delete();
        $receipt->realEstate->each->delete();
        $receipt->realEstateRate->each->delete();
        $receipt->land->each->delete();
        $receipt->landRates->each->delete();
        $receipt->delete();
        return redirect(route('archive'))->with(['success' => trans('general.receipts.archive_deleted')]);
    }
    public function archive($id)
    {
        $general = Receipt::findorfail($id);
        $general->status = 'archive';
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.invoice.invoice_archiveed')]);
    }
    public function un_archive ($id)
    {
        $general = Receipt::findorfail($id);
        $general->status = 'un_archive';
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.receipts.invoice_un_archiveed')]);
    }
}
