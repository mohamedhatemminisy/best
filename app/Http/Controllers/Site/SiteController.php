<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderReuest;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\General;
use App\Models\Order;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Receipt;
use App\Models\Salary;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $slider  = Slider::all();
        $services = Service::all();
        $clients = Partner::all();
        $about = Page::where('identifier', 'about')->first();
        $servicesSection = Page::where('identifier', 'services')->first();
        $clientSection = Page::where('identifier', 'clients')->first();
        $contactSection = Page::where('identifier', 'contact')->first();


        return view('site.pages.home', compact('slider', 'services', 'clients', 'about', 'servicesSection', 'clientSection', 'contactSection'));
    }
    public function about()
    {
        $about = Page::where('identifier', 'about')->first();
        $features = Feature::all();
        $featuresSection = Page::where('identifier', 'why_chooce')->first();
        $title = trans('general.aside.pages.about');
        return view('site.pages.about', compact('about', 'featuresSection', 'features', 'title'));
    }
    public function preOrder()
    {
        # code...
        $banks = General::where('type', 'bank')->orderBy('id', 'desc')->get();
        $employers = General::where('type', 'employer')->orderBy('id', 'desc')->get();
        $product_type = General::where('type', 'product_type')->orderBy('id', 'desc')->get();
        $product_description = General::where('type', 'product_description')->orderBy('id', 'desc')->get();

        $title = trans('general.aside.pages.preOrder');
        return view('site.pages.preOrder', compact('title', 'banks', 'employers', 'product_type', 'product_description'));
    }
    public function contact()
    {
        $contactSection = Page::where('identifier', 'contact')->first();
        $title = trans('general.aside.pages.contact');
        return view('site.pages.contact', compact('contactSection', 'title'));
    }

    public function service_details($id)
    {
        $service = Service::findorfail($id);
        $title =  trans('general.aside.pages.services');
        return view('site.pages.service', compact('service', 'title'));
    }
    public function contactUs(ContactRequest $request)
    {
        $data = $request->all();

        $contact = Contact::create($data);
        if ($contact) {
            return response()->json(['success' => trans('general.fields.message_success')]);
        } else
            return response()->json(['error' => 'Ajax request eroor']);
    }


    public function orderRequest(OrderRequest $request)
    {
        $receipt = new Receipt();
        $receipt->name = $request->name;
        $receipt->phone_one = $request->phone;
        $receipt->bank_id = $request->bank;
        $receipt->support_status = $request->support_status;
        $receipt->order_type = $request->order_type;
        $receipt->order_result = $request->order_result;
        $receipt->product_type_id = $request->product_type_id;
        $receipt->product_details = $request->product_details;
        $receipt->code = $request->code;
        $receipt->save();

        $salary = new Salary();
        $salary->net = $request->net;
        $salary->employer_id = $request->employer;
        $salary->bank_salary_transferred = $request->salary_bank;
        $salary->receipt_id = $receipt->id;
        $salary->save();

        if ($salary) {
            return response()->json(['success' => trans('general.fields.message_success')]);
        } else
            return response()->json(['error' => 'Ajax request eroor']);
    }
}
