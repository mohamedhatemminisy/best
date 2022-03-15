<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReceiptEditRequest;
use App\Http\Requests\ReceiptRequest;
use App\Models\Commitment;
use App\Models\General;
use App\Models\Income;
use App\Models\Land;
use App\Models\LandRate;
use App\Models\RealEstate;
use App\Models\RealEstateRate;
use App\Models\Receipt;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use View;

class ReceiptController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $cities = General::where('type', 'city')->orderBy('id', 'desc')->get();
            $banks = General::where('type', 'bank')->orderBy('id', 'desc')->get();
            $business_sectors = General::where('type', 'business_sector')->orderBy('id', 'desc')->get();
            $employers = General::where('type', 'employer')->orderBy('id', 'desc')->get();
            $income_type = General::where('type', 'income_type')->orderBy('id', 'desc')->get();
            $order_status = General::where('type', 'product_type')->orderBy('id', 'desc')->get();
            $sponsers = General::where('type', 'sponser')->orderBy('id', 'desc')->get();
            $Payment_status = General::where('type', 'Payment_status')->orderBy('id', 'desc')->get();
            $product_description = General::where('type', 'product_description')->orderBy('id', 'desc')->get();
            $real_estate_types = General::where('type', 'real_estate_type')->orderBy('id', 'desc')->get();
            $real_estate_status = General::where('type', 'real_estate_status')->orderBy('id', 'desc')->get();
            $license_types = General::where('type', 'license_type')->orderBy('id', 'desc')->get();
            $land_type_ids = General::where('type', 'earth_type')->orderBy('id', 'desc')->get();
            $land_status_ids = General::where('type', 'earth_status')->orderBy('id', 'desc')->get();
            $rate_employees = General::where('type', 'rate_employee')->orderBy('id', 'desc')->get();

            View::share('cities', $cities);
            View::share('banks', $banks);
            View::share('business_sectors', $business_sectors);
            View::share('employers', $employers);
            View::share('income_type', $income_type);
            View::share('order_status', $order_status);
            View::share('sponsers', $sponsers);
            View::share('product_description', $product_description);
            View::share('Payment_status', $Payment_status);
            View::share('real_estate_types', $real_estate_types);
            View::share('real_estate_status', $real_estate_status);
            View::share('license_types', $license_types);
            View::share('land_type_ids', $land_type_ids);
            View::share('land_status_ids', $land_status_ids);
            View::share('rate_employees', $rate_employees);
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
        $users = User::role(['superadmin', 'mediator'])->get();
        if (auth()->user()->roles[0]->name == 'superadmin') {
            $data = Receipt::orderBy('id', 'desc')->where('status', '<>', 'archive')->orWhereNull('status')->get();
        } elseif (auth()->user()->roles[0]->name == 'mediator') {
            $data = Receipt::where(function ($query) {
                $query->where('added_by', auth()->user()->id)
                    ->orWhere('redirected_to', auth()->user()->id);
            })->where(function ($query) {
                $query->where('status', '<>', 'archive')->orWhereNull('status');
            })->orderBy('id', 'desc')->get();
        } elseif (auth()->user()->roles[0]->name == 'employee') {
            $data = Receipt::where(function ($query) {
                $query->where('added_by', auth()->user()->id);
            })->where(function ($query) {
                $query->where('status', '<>', 'archive')->orWhereNull('status');
            })->orderBy('id', 'desc')->get();
        }
        return view('admin.receipt.index', compact('data', 'users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.receipt.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceiptRequest $request)
    {
        $recipet = new Receipt();
        $recipet->name = $request->name;
        $recipet->identity = $request->identity;
        $recipet->phone_one = $request->phone_one;
        $recipet->phone_two = $request->phone_two;
        $recipet->Hijri_date_of_birth = $request->Hijri_date_of_birth;
        $recipet->birthday = $request->birthday;
        $recipet->Hijri_age = $request->Hijri_age;
        $recipet->birth_age = $request->birth_age;
        $recipet->city_id = $request->city_id;
        $recipet->family_members = $request->family_members;
        $recipet->notes = $request->notes;
        $recipet->bank_id = $request->bank_id;
        $recipet->support_status = $request->support_status;
        $recipet->order_type = $request->order_type;
        $recipet->order_result = $request->order_result;
        $recipet->product_type_id = $request->product_type_id;
        $recipet->product_details = $request->product_details;
        $recipet->compeleted = $request->compeleted;
        $images_obj = [];
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $new = upload_image($file, 'file_');
                array_push($images_obj, $new);
            }
            $recipet->file = json_encode($images_obj);
        } else {
            $recipet->file = '';
        }

        $recipet->added_by = auth()->user()->id;
        $recipet->save();
        // if condetion to check if user inseart any data in salary form
        if (
            $request->salary[0] != null || $request->Allowances_without != null || $request->Monthly_allowance != null || $request->totals != null
            || $request->retirement != null || $request->other_discount != null || $request->nets != null || $request->approved_salarys != null
            ||  $request->job_titles != null || $request->hiring_dates != null || $request->Remaining_period_of_retirements != null ||
            $request->bank_salary_transferreds || $request->salary_notes != null || $request->business_sector_ids || $request->employer_ids
        ) {

            for ($i = 0; $i < count($request->salary); $i++) {
                $salary = new Salary();
                $salary->basic_salary = $request->salary[$i];
                $salary->Allowances_without_housing_allowance = $request->Allowances_without[$i];
                $salary->Monthly_housing_allowance = $request->Monthly_allowance[$i];
                $salary->total = $request->totals[$i];
                $salary->retirement_discount = $request->retirement[$i];
                $salary->other_discounts = $request->other_discount[$i];
                $salary->net = $request->nets[$i];
                $salary->approved_salary = $request->approved_salarys[$i];

                if ($request->business_sector_ids &&  isset($request->business_sector_ids[$i])) {
                    $salary->business_sector_id = $request->business_sector_ids[$i];
                }
                if ($request->employer_ids &&  isset($request->employer_ids[$i])) {
                    $salary->employer_id = $request->employer_ids[$i];
                }
                $salary->job_title = $request->job_titles[$i];
                $salary->hiring_date = $request->hiring_dates[$i];
                $salary->Remaining_period_of_retirement = $request->Remaining_period_of_retirements[$i];
                if ($request->bank_salary_transferreds &&  isset($request->bank_salary_transferreds[$i])) {
                    $salary->bank_salary_transferred = $request->bank_salary_transferreds[$i];
                }
                $salary->salary_note = $request->salary_notes[$i];
                $salary->receipt_id = $recipet->id;
                $salary->save();
            }
        }
        // if condetion to check if user inseart any data in income form
        if ($request->income_type_ids) {
            for ($j = 0; $j < count($request->income_type_ids); $j++) {
                $income = new Income();
                $income->income_type_id = $request->income_type_ids[$j];
                $income->annual_income_value = $request->annual_income_values[$j];
                $income->income_statement_detail = $request->income_statement_details[$j];
                $income->receipt_id = $recipet->id;
                $income->save();
            }
        }
        // if condetion to check if user inseart any data in commitment form
        if (
            $request->installments[0] != null || $request->product_type_ids != null || $request->sponser_ids != null || $request->payment_status_ids != null
            || $request->early_repayments[0] != null || $request->commitment_totals[0] != null  || $request->commitment_start_dates[0] != null  ||
            $request->commitment_end_dates[0] != null || $request->remaining_installments_counts[0] != null || $request->last_payment_dates[0] != null
            || $request->commitment_notess[0] != null
        ) {
            for ($j = 0; $j < count($request->installments); $j++) {
                $commitments = new Commitment();
                $commitments->installment = $request->installments[$j];
                if ($request->product_type_ids &&  isset($request->product_type_ids[$j])) {
                    $commitments->product_type_id = $request->product_type_ids[$j];
                }
                if ($request->sponser_ids &&  isset($request->sponser_ids[$j])) {
                    $commitments->sponser_id = $request->sponser_ids[$j];
                }
                if ($request->payment_status_ids &&  isset($request->payment_status_ids[$j])) {
                    $commitments->payment_status_id = $request->payment_status_ids[$j];
                }
                $commitments->early_repayment = $request->early_repayments[$j];
                $commitments->total = $request->commitment_totals[$j];
                $commitments->commitment_start_date = $request->commitment_start_dates[$j];
                $commitments->commitment_end_date = $request->commitment_end_dates[$j];
                $commitments->remaining_installments_count = $request->remaining_installments_counts[$j];
                $commitments->last_payment_date = $request->last_payment_dates[$j];
                $commitments->notes = $request->commitment_notess[$j];
                $commitments->receipt_id = $recipet->id;
                $commitments->save();
            }
        }
        // if condetion to check if user inseart any data in real estate form
        if ($request->real_estate_typess) {
            //loop in real estate request
            for ($j = 0; $j < count($request->real_estate_typess); $j++) {
                $real_estate = new RealEstate();
                $real_estate->real_estate_type_id = $request->real_estate_typess[$j];
                if ($request->real_estate_statuss &&  isset($request->real_estate_statuss[$j])) {
                    $real_estate->real_estate_status_id = $request->real_estate_statuss[$j];
                }
                if ($request->real_city_id &&  isset($request->real_city_id[$j])) {
                    $real_estate->real_city_id = $request->real_city_id[$j];
                }
                $real_estate->planned_num = $request->real_planned_nums[$j];
                $real_estate->piece_num = $request->real_piece_nums[$j];
                $real_estate->district = $request->real_districts[$j];
                $real_estate->owner_num = $request->real_owner_nums[$j];
                $real_estate->rate_num = $request->real_rate_nums[$j];
                if ($request->real_license_type_id &&  isset($request->real_license_type_id[$j])) {
                    $real_estate->real_license_type_id = $request->real_license_type_id[$j];
                }
                $real_estate->license_issue_date = $request->real_license_issue_dates[$j];
                $real_estate->license_expiration_date = $request->real_license_expiration_dates[$j];
                $real_estate->property_price = $request->real_property_prices[$j];
                $real_estate->property_notes = $request->real_property_notess[$j];
                $real_estate->receipt_id = $recipet->id;
                $real_estate->save();
            }
            // if condetion to check if user inseart any data in real estate rating form
            if ($request->real_bank_ids) {
                //loop in real estate rate request
                for ($j = 0; $j < count($request->real_bank_ids); $j++) {
                    $real_estate_rate = new RealEstateRate();
                    $real_estate_rate->real_bank_id = $request->real_bank_ids[$j];
                    if ($request->real_emp_rates &&  isset($request->real_emp_rates[$j])) {
                        $real_estate_rate->emp_rate_id = $request->real_emp_rates[$j];
                    }
                    $real_estate_rate->first_rate = $request->real_first_rates[$j];
                    $real_estate_rate->second_rate = $request->real_second_rates[$j];
                    $real_estate_rate->third_rate = $request->real_third_rates[$j];
                    $real_estate_rate->approved_rate = $request->real_approved_rates[$j];
                    $real_estate_rate->rate_notes = $request->real_rate_notess[$j];
                    $real_estate_rate->real_estate_id = $real_estate->id;
                    $real_estate_rate->receipt_id = $recipet->id;
                    $real_estate_rate->save();
                }
            }
        }
        // if condetion to check if user inseart any data in land form
        if ($request->land_estate_typess) {
            //loop in lsnd request
            for ($j = 0; $j < count($request->land_estate_typess); $j++) {
                $land = new Land();
                $land->land_type_id = $request->land_estate_typess[$j];
                if ($request->land_estate_statuss &&  isset($request->land_estate_statuss[$j])) {
                    $land->land_status_id = $request->land_estate_statuss[$j];
                }
                if ($request->land_city_id &&  isset($request->land_city_id[$j])) {
                    $land->real_city_id = $request->land_city_id[$j];
                }
                $land->planned_num = $request->land_planned_nums[$j];
                $land->piece_num = $request->land_piece_nums[$j];
                $land->district = $request->land_districts[$j];
                $land->owner_num = $request->land_owner_nums[$j];
                $land->rate_num = $request->land_rate_nums[$j];
                if ($request->land_license_type_id &&  isset($request->land_license_type_id[$j])) {
                    $land->real_license_type_id = $request->land_license_type_id[$j];
                }
                $land->license_issue_date = $request->land_license_issue_dates[$j];
                $land->license_expiration_date = $request->land_license_expiration_dates[$j];
                $land->property_price = $request->land_property_prices[$j];
                $land->property_notes = $request->land_property_notess[$j];
                $land->receipt_id = $recipet->id;
                $land->save();
            }
            // if condetion to check if user inseart any data in land rating form
            if ($request->land_bank_ids) {
                //loop in lsnd rate request
                for ($j = 0; $j < count($request->land_bank_ids); $j++) {
                    $landRate = new LandRate();
                    $landRate->land_bank_id = $request->land_bank_ids[$j];
                    if ($request->land_emp_rates &&  isset($request->land_emp_rates[$j])) {
                        $landRate->emp_rate_id = $request->land_emp_rates[$j];
                    }
                    $landRate->first_rate = $request->land_first_rates[$j];
                    $landRate->second_rate = $request->land_second_rates[$j];
                    $landRate->third_rate = $request->land_third_rates[$j];
                    $landRate->approved_rate = $request->land_approved_rates[$j];
                    $landRate->rate_notes = $request->land_rate_notess[$j];
                    $landRate->receipt_id = $recipet->id;
                    $landRate->land_id = $land->id;
                    $landRate->save();
                }
            }
        }
        return $recipet ? redirect(route('receipts.index'))->with(['success' => trans('general.receipts.receipts_saved')]) : redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $general = Receipt::findOrfail($id);
        return view('admin.receipt.show', compact('general'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Receipt::findOrfail($id);
        return view('admin.receipt.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReceiptEditRequest $request, $id)
    {
        $recipet = Receipt::findOrfail($id);
        $recipet->name = $request->name;
        $recipet->identity = $request->identity;
        $recipet->phone_one = $request->phone_one;
        $recipet->phone_two = $request->phone_two;
        $recipet->Hijri_date_of_birth = $request->Hijri_date_of_birth;
        $recipet->birthday = $request->birthday;
        $recipet->Hijri_age = $request->Hijri_age;
        $recipet->birth_age = $request->birth_age;
        $recipet->city_id = $request->city_id;
        $recipet->family_members = $request->family_members;
        $recipet->notes = $request->notes;
        $recipet->bank_id = $request->bank_id;
        $recipet->support_status = $request->support_status;
        $recipet->order_type = $request->order_type;
        $recipet->order_result = $request->order_result;
        $recipet->product_type_id = $request->product_type_id;
        $recipet->product_details = $request->product_details;
        $recipet->compeleted = $request->compeleted;
        $images_obj = [];
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $new = upload_image($file, 'file_');
                array_push($images_obj, $new);
            }
            $recipet->file = json_encode($images_obj);
        } else {
            $recipet->file = '';
        }
        $recipet->save();

        if (
            $request->salary != null || $request->Allowances_without != null || $request->Monthly_allowance != null || $request->totals != null
            || $request->retirement != null || $request->other_discount != null || $request->nets != null || $request->approved_salarys != null
            ||  $request->job_titles != null || $request->hiring_dates != null || $request->Remaining_period_of_retirements != null ||
            $request->bank_salary_transferreds || $request->salary_notes != null || $request->business_sector_ids || $request->employer_ids
        ) {
            $old_salaries = Salary::where('receipt_id', $recipet->id)->pluck('id')->toArray();
            $new_collection = $request->salary_id;
            $remove_ids = array_diff($old_salaries, $new_collection);
            $deleted_salary = Salary::whereIn('id', $remove_ids)->get();
            $deleted_salary->each->delete();
            for ($i = 0; $i < count($request->salary); $i++) {
                $salary = Salary::where('id', $request->salary_id[$i])->first();
                if ($salary) {
                    $salary->basic_salary = $request->salary[$i];
                    $salary->Allowances_without_housing_allowance = $request->Allowances_without[$i];
                    $salary->Monthly_housing_allowance = $request->Monthly_allowance[$i];
                    $salary->total = $request->totals[$i];
                    $salary->retirement_discount = $request->retirement[$i];
                    $salary->other_discounts = $request->other_discount[$i];
                    $salary->net = $request->nets[$i];
                    $salary->approved_salary = $request->approved_salarys[$i];

                    if ($request->business_sector_ids &&  isset($request->business_sector_ids[$i])) {
                        $salary->business_sector_id = $request->business_sector_ids[$i];
                    }
                    if ($request->employer_ids &&  isset($request->employer_ids[$i])) {
                        $salary->employer_id = $request->employer_ids[$i];
                    }
                    $salary->job_title = $request->job_titles[$i];
                    $salary->hiring_date = $request->hiring_dates[$i];
                    $salary->Remaining_period_of_retirement = $request->Remaining_period_of_retirements[$i];
                    if ($request->bank_salary_transferreds &&  isset($request->bank_salary_transferreds)) {
                        $salary->bank_salary_transferred = $request->bank_salary_transferreds[$i];
                    }
                    $salary->salary_note = $request->salary_notes[$i];
                    $salary->receipt_id = $recipet->id;
                    $salary->save();
                } else {
                    $salary = new Salary();
                    $salary->basic_salary = $request->salary[$i];
                    $salary->Allowances_without_housing_allowance = $request->Allowances_without[$i];
                    $salary->Monthly_housing_allowance = $request->Monthly_allowance[$i];
                    $salary->total = $request->totals[$i];
                    $salary->retirement_discount = $request->retirement[$i];
                    $salary->other_discounts = $request->other_discount[$i];
                    $salary->net = $request->nets[$i];
                    $salary->approved_salary = $request->approved_salarys[$i];

                    if ($request->business_sector_ids &&  isset($request->business_sector_ids[$i])) {
                        $salary->business_sector_id = $request->business_sector_ids[$i];
                    }
                    if ($request->employer_ids &&  isset($request->employer_ids[$i])) {
                        $salary->employer_id = $request->employer_ids[$i];
                    }
                    $salary->job_title = $request->job_titles[$i];
                    $salary->hiring_date = $request->hiring_dates[$i];
                    $salary->Remaining_period_of_retirement = $request->Remaining_period_of_retirements[$i];
                    if ($request->bank_salary_transferreds &&  isset($request->bank_salary_transferreds)) {
                        $salary->bank_salary_transferred = $request->bank_salary_transferreds[$i];
                    }
                    $salary->salary_note = $request->salary_notes[$i];
                    $salary->receipt_id = $recipet->id;
                    $salary->save();
                }
            }
        }
        if ($request->income_type_ids != null || $request->income_id[0] != null || $request->income_statement_details[0] != null) {
            $old_incomes = Income::where('receipt_id', $recipet->id)->pluck('id')->toArray();
            $new_income = $request->income_id;
            $remove_ids = array_diff($old_incomes, $new_income);
            $deleted_income = Income::whereIn('id', $remove_ids)->get();
            $deleted_income->each->delete();
            // dd(($request->income_id));
            for ($j = 0; $j < count($request->income_id); $j++) {
                $income = Income::where('id', $request->income_id[$j])->first();
                if ($income) {
                    if ($request->income_type_ids &&  isset($request->income_type_ids[$j])) {
                        $salary->income_type_id = $request->income_type_ids[$j];
                    }
                    $income->annual_income_value = $request->annual_income_values[$j];
                    $income->income_statement_detail = $request->income_statement_details[$j];
                    $income->receipt_id = $recipet->id;
                    $income->save();
                } else {
                    $income = new Income();
                    if ($request->income_type_ids &&  isset($request->income_type_ids[$j])) {
                        $salary->income_type_id = $request->income_type_ids[$j];
                    }
                    $income->annual_income_value = $request->annual_income_values[$j];
                    $income->income_statement_detail = $request->income_statement_details[$j];
                    $income->receipt_id = $recipet->id;
                    $income->save();
                }
            }
        }

        if (
            $request->installments[0] != null || $request->product_type_ids != null || $request->sponser_ids != null || $request->payment_status_ids != null
            || $request->early_repayments[0] != null || $request->commitment_totals[0] != null  || $request->commitment_start_dates[0] != null  ||
            $request->commitment_end_dates[0] != null || $request->remaining_installments_counts[0] != null || $request->last_payment_dates[0] != null
            || $request->commitment_notess[0] != null
        ) {

            $old_commitments = Commitment::where('receipt_id', $recipet->id)->pluck('id')->toArray();
            $new_commitment = $request->commitment_id;
            $remove_ids = array_diff($old_commitments, $new_commitment);
            $deleted_commitment = Commitment::whereIn('id', $remove_ids)->get();
            $deleted_commitment->each->delete();
            for ($j = 0; $j < count($request->installments); $j++) {
                $commitments = Commitment::where('id', $request->commitment_id[$j])->first();
                if ($commitments) {
                    $commitments->installment = $request->installments[$j];
                    if ($request->product_type_ids &&  isset($request->product_type_ids[$j])) {
                        $commitments->product_type_id = $request->product_type_ids[$j];
                    }
                    if ($request->sponser_ids &&  isset($request->sponser_ids[$j])) {
                        $commitments->sponser_id = $request->sponser_ids[$j];
                    }
                    if ($request->payment_status_ids &&  isset($request->payment_status_ids[$j])) {
                        $commitments->payment_status_id = $request->payment_status_ids[$j];
                    }
                    $commitments->early_repayment = $request->early_repayments[$j];
                    $commitments->total = $request->commitment_totals[$j];
                    $commitments->commitment_start_date = $request->commitment_start_dates[$j];
                    $commitments->commitment_end_date = $request->commitment_end_dates[$j];
                    $commitments->remaining_installments_count = $request->remaining_installments_counts[$j];
                    $commitments->last_payment_date = $request->last_payment_dates[$j];
                    $commitments->notes = $request->commitment_notess[$j];
                    $commitments->receipt_id = $recipet->id;
                    $commitments->save();
                } else {
                    $commitments = new Commitment();
                    $commitments->installment = $request->installments[$j];
                    if ($request->product_type_ids &&  isset($request->product_type_ids[$j])) {
                        $commitments->product_type_id = $request->product_type_ids[$j];
                    }
                    if ($request->sponser_ids &&  isset($request->sponser_ids[$j])) {
                        $commitments->sponser_id = $request->sponser_ids[$j];
                    }
                    if ($request->payment_status_ids &&  isset($request->payment_status_ids[$j])) {
                        $commitments->payment_status_id = $request->payment_status_ids[$j];
                    }
                    $commitments->early_repayment = $request->early_repayments[$j];
                    $commitments->total = $request->commitment_totals[$j];
                    $commitments->commitment_start_date = $request->commitment_start_dates[$j];
                    $commitments->commitment_end_date = $request->commitment_end_dates[$j];
                    $commitments->remaining_installments_count = $request->remaining_installments_counts[$j];
                    $commitments->last_payment_date = $request->last_payment_dates[$j];
                    $commitments->notes = $request->commitment_notess[$j];
                    $commitments->receipt_id = $recipet->id;
                    $commitments->save();
                }
            }
        }

        // dd($request->all());

        if ($request->real_estate_typess != null  || $request->real_planned_nums[0] != null || $request->real_piece_nums[0] != null) {
            $new_RealEstate = $request->real_stored_id;
            $old_RealEstate = RealEstate::where('receipt_id', $recipet->id)->pluck('id')->toArray();
            if ($old_RealEstate) {
                $remove_ids = array_diff($old_RealEstate, $new_RealEstate);
                $deleted_RealEstate = RealEstate::whereIn('id', $remove_ids)->get();
                $deleted_RealEstate->each->delete();
            }
            for ($j = 0; $j < count($request->real_estate_typess); $j++) {
                if ($request->real_estate_typess[$j] != null) {
                    if ($request->real_stored_id) {
                        $real_estate = RealEstate::where('id', $request->real_stored_id[$j])->first();
                        $real_estate->real_estate_type_id = $request->real_estate_typess[$j];
                        if ($request->real_estate_statuss &&  isset($request->real_estate_statuss[$j])) {
                            $real_estate->real_estate_status_id = $request->real_estate_statuss[$j];
                        }
                        if ($request->real_city_id &&  isset($request->real_city_id[$j])) {
                            $real_estate->real_city_id = $request->real_city_id[$j];
                        }
                        $real_estate->planned_num = $request->real_planned_nums[$j];
                        $real_estate->piece_num = $request->real_piece_nums[$j];
                        $real_estate->district = $request->real_districts[$j];
                        $real_estate->owner_num = $request->real_owner_nums[$j];
                        $real_estate->rate_num = $request->real_rate_nums[$j];
                        if ($request->real_license_type_id &&  isset($request->real_license_type_id[$j])) {
                            $real_estate->real_license_type_id = $request->real_license_type_id[$j];
                        }
                        $real_estate->license_issue_date = $request->real_license_issue_dates[$j];
                        $real_estate->license_expiration_date = $request->real_license_expiration_dates[$j];
                        $real_estate->property_price = $request->real_property_prices[$j];
                        $real_estate->property_notes = $request->real_property_notess[$j];
                        $real_estate->receipt_id = $recipet->id;
                        $real_estate->save();
                    } else {
                        $real_estate = new RealEstate();
                        $real_estate->real_estate_type_id = $request->real_estate_typess[$j];
                        if ($request->real_estate_statuss &&  isset($request->real_estate_statuss[$j])) {
                            $real_estate->real_estate_status_id = $request->real_estate_statuss[$j];
                        }
                        if ($request->real_city_id &&  isset($request->real_city_id[$j])) {
                            $real_estate->real_city_id = $request->real_city_id[$j];
                        }
                        $real_estate->planned_num = $request->real_planned_nums[$j];
                        $real_estate->piece_num = $request->real_piece_nums[$j];
                        $real_estate->district = $request->real_districts[$j];
                        $real_estate->owner_num = $request->real_owner_nums[$j];
                        $real_estate->rate_num = $request->real_rate_nums[$j];
                        if ($request->real_license_type_id &&  isset($request->real_license_type_id[$j])) {
                            $real_estate->real_license_type_id = $request->real_license_type_id[$j];
                        }
                        $real_estate->license_issue_date = $request->real_license_issue_dates[$j];
                        $real_estate->license_expiration_date = $request->real_license_expiration_dates[$j];
                        $real_estate->property_price = $request->real_property_prices[$j];
                        $real_estate->property_notes = $request->real_property_notess[$j];
                        $real_estate->receipt_id = $recipet->id;
                        $real_estate->save();
                    }
                    $deleted_RealEstate = RealEstateRate::where('real_estate_id', $real_estate->id)->get();
                    $deleted_RealEstate->each->delete();
                    if ($request->real_bank_ids) {
                        for ($j = 0; $j < count($request->real_bank_ids); $j++) {
                            $real_estate_rate = new RealEstateRate();
                            $real_estate_rate->real_bank_id = $request->real_bank_ids[$j];
                            if ($request->real_emp_rates &&  isset($request->real_emp_rates[$j])) {
                                $real_estate_rate->emp_rate_id = $request->real_emp_rates[$j];
                            }
                            $real_estate_rate->first_rate = $request->real_first_rates[$j];
                            $real_estate_rate->second_rate = $request->real_second_rates[$j];
                            $real_estate_rate->third_rate = $request->real_third_rates[$j];
                            $real_estate_rate->approved_rate = $request->real_approved_rates[$j];
                            $real_estate_rate->rate_notes = $request->real_rate_notess[$j];
                            $real_estate_rate->real_estate_id = $real_estate->id;
                            $real_estate_rate->receipt_id = $recipet->id;
                            $real_estate_rate->save();
                        }
                    }
                }
            }
        }

        if ($request->land_estate_typess != null) {
            $new_land = $request->land_stored_id;
            $old_land = Land::where('receipt_id', $recipet->id)->pluck('id')->toArray();
            if ($old_land) {
                $remove_ids = array_diff($old_land, $new_land);
                $deleted_land = Land::whereIn('id', $remove_ids)->get();
                $deleted_land->each->delete();
            }
            for ($j = 0; $j < count($request->land_estate_typess); $j++) {
                if ($request->land_estate_typess[$j] != null) {
                    if ($request->land_stored_id) {
                        $land = Land::where('id', $request->land_stored_id[$j])->first();
                        $land->land_type_id = $request->land_estate_typess[$j];
                        if ($request->land_estate_statuss &&  isset($request->land_estate_statuss[$j])) {
                            $land->land_status_id = $request->land_estate_statuss[$j];
                        }
                        if ($request->land_city_id &&  isset($request->land_city_id[$j])) {
                            $land->real_city_id = $request->land_city_id[$j];
                        }
                        $land->planned_num = $request->land_planned_nums[$j];
                        $land->piece_num = $request->land_piece_nums[$j];
                        $land->district = $request->land_districts[$j];
                        $land->owner_num = $request->land_owner_nums[$j];
                        $land->rate_num = $request->land_rate_nums[$j];
                        if ($request->land_license_type_id &&  isset($request->land_license_type_id[$j])) {
                            $land->real_license_type_id = $request->land_license_type_id[$j];
                        }
                        $land->license_issue_date = $request->land_license_issue_dates[$j];
                        $land->license_expiration_date = $request->land_license_expiration_dates[$j];
                        $land->property_price = $request->land_property_prices[$j];
                        $land->property_notes = $request->land_property_notess[$j];
                        $land->receipt_id = $recipet->id;
                        $land->save();
                    } else {
                        $land = new Land();
                        $land->land_type_id = $request->land_estate_typess[$j];
                        if ($request->land_estate_statuss &&  isset($request->land_estate_statuss[$j])) {
                            $land->land_status_id = $request->land_estate_statuss[$j];
                        }
                        if ($request->land_city_id &&  isset($request->land_city_id[$j])) {
                            $land->real_city_id = $request->land_city_id[$j];
                        }
                        $land->planned_num = $request->land_planned_nums[$j];
                        $land->piece_num = $request->land_piece_nums[$j];
                        $land->district = $request->land_districts[$j];
                        $land->owner_num = $request->land_owner_nums[$j];
                        $land->rate_num = $request->land_rate_nums[$j];
                        if ($request->land_license_type_id &&  isset($request->land_license_type_id[$j])) {
                            $land->real_license_type_id = $request->land_license_type_id[$j];
                        }
                        $land->license_issue_date = $request->land_license_issue_dates[$j];
                        $land->license_expiration_date = $request->land_license_expiration_dates[$j];
                        $land->property_price = $request->land_property_prices[$j];
                        $land->property_notes = $request->land_property_notess[$j];
                        $land->receipt_id = $recipet->id;
                        $land->save();
                    }
                    $deleted_LandRate = LandRate::where('land_id', $land->id)->get();
                    $deleted_LandRate->each->delete();
                    if ($request->land_bank_ids) {
                        for ($j = 0; $j < count($request->land_bank_ids); $j++) {
                            $landRate = new LandRate();
                            $landRate->land_bank_id = $request->land_bank_ids[$j];
                            if ($request->land_emp_rates &&  isset($request->land_emp_rates[$j])) {
                                $landRate->emp_rate_id = $request->land_emp_rates[$j];
                            }
                            $landRate->first_rate = $request->land_first_rates[$j];
                            $landRate->second_rate = $request->land_second_rates[$j];
                            $landRate->third_rate = $request->land_third_rates[$j];
                            $landRate->approved_rate = $request->land_approved_rates[$j];
                            $landRate->rate_notes = $request->land_rate_notess[$j];
                            $landRate->land_id = $land->id;
                            $landRate->receipt_id = $recipet->id;
                            $landRate->save();
                        }
                    }
                }
            }
        }

        return $recipet ? redirect(route('receipts.index'))->with(['success' => trans('general.receipts.receipts_updated')]) : redirect()->back();
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
        return redirect(route('receipts.index'))->with(['success' => trans('general.receipts.receipts_deleted')]);
    }
    public function employer_data(Request $request)
    {
        // dd($request->business_sector_id);
        $data = General::where('parent_id', $request->business_sector_id)->get();
        return response()->json($data);
    }
    public function bank_emp_data(Request $request)
    {
        $data = General::where('parent_id', $request->bank_val)->get();
        return response()->json($data);
    }
    public function real_estate_types(Request $request)
    {
        $receipt = $request->real_estate_type;
        return response()->json($receipt);
    }
    public function accept($id)
    {
        $general = Receipt::findorfail($id);
        $general->status = 'accept';
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.invoice.invoice_accepted')]);
    }

    public function reject($id)
    {
        $general = Receipt::findorfail($id);
        $general->status = 'reject';
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.invoice.invoice_rejected')]);
    }
    public function delay(Request $request)
    {
        $general = Receipt::findorfail($request->id);
        $general->status = 'delay';
        $general->delay = $request->delay;
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.invoice.delayed_successfully')]);
    }
    public function forward(Request $request)
    {
        $general = Receipt::findorfail($request->id);
        $general->redirected_to = $request->redirected_to;
        $general->save();
        return redirect(route('receipts.index'))->with(['success' => trans('general.invoice.redirected_successfully')]);
    }
}
