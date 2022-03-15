<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        # code...

        $page = Page::where('identifier','home')->first();    //get first not all
        $pageName = $page->identifier;
        return view('admin.page.edit',compact('page','pageName'));
    }
     public function about()
     {
         # code...
         $general = Page::where('identifier','about')->first();
         $page = Page::where('identifier','about')->first();    //get first not all
         $pageName = $page->identifier;
        return view('admin.page.edit',compact('general','pageName'));

     }

     public function feature()
      {
        $general = Page::where('identifier','why_chooce')->first();
        $page = Page::where('identifier','why_chooce')->first();    //get first not all
        $pageName = $page->identifier;

        return view('admin.page.edit',compact('general','pageName'));

      }

      public function contact()
      {
        $general = Page::where('identifier','contact')->first();
        $page = Page::where('identifier','contact')->first();    //get first not all
        $pageName = $page->identifier;
        return view('admin.page.edit',compact('general','pageName'));
      }

      public function services()
      {
        $general = Page::where('identifier','services')->first();
        $page = Page::where('identifier','services')->first();    //get first not all
        $pageName = $page->identifier;
        return view('admin.page.edit',compact('general','pageName'));
      }
      public function jobs()
      {
        $general = Page::where('identifier','services')->first();
        $page = Page::where('identifier','services')->first();    //get first not all
        $pageName = $page->identifier;
        return view('admin.page.edit',compact('general','pageName'));
      }
      public function clients()
      {
        $general = Page::where('identifier','clients')->first();
        $page = Page::where('identifier','clients')->first();    //get first not all
        $pageName = $page->identifier;
        return view('admin.page.edit',compact('general','pageName'));
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.create');
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
        $general = Page::findOrfail($id);
        return view('admin.page.show',compact('general'));
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
        $general = Page::findOrfail($id);
        return view('admin.page.edit',compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        //
        $data = $request->all();
        $general = Page::findorfail($id);


        if ($request->hasFile('image')) {
          $data['image'] = upload_image($request->file('image'), 'image');
      } else {
          unset($data['image']);
      }

        $general->fill($data)->save();
        return $general ? redirect()->back()->with(['success'=>trans('general.page.page_updated')]) : redirect()->back();
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

        $general = Page::findorfail($id);

        $general->delete();

        return redirect(route('page.index'))->with(['success'=>trans('general.page.page_deleted')]);

    }
}
