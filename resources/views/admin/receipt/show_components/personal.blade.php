<div class="card-header card-header-tabs-line">
    <div class="card-title">
        <h2 style="font-size: 2vh;
        font-weight: bold;" class="card-label">@lang('receipts.personal_info')</h2>
    </div>
</div>
<div class="card-body">
    <div class="row">

        <div class="col-3 form-group">
            <label>@lang('receipts.client_name')</label>
            <br>
            <p> {{ $general->name }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.cid')</label>
            <br>
            <p> {{ $general->identity }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.phone_one')</label>
            <br>
            <p> {{ $general->phone_one }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.phone_two')</label>
            <br>
            <p> {{ $general->phone_two }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.Hijri_date_of_birth')</label>
            <br>
            <p> {{ $general->Hijri_date_of_birth }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.birthday')</label>
            <br>
            <p> {{ $general->birthday }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.Hijri_age')</label>
            <br>
            <p> {{ $general->Hijri_age }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.birth_age')</label>
            <br>
            <p> {{ $general->birth_age }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.city')</label>
            <br>
            @if ($general->city != null)
                <p> {{ $general->city->name }}</p>
            @endif
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.clinet_bank')</label>
            <br>
            @if ($general->bank != null)
                <p> {{ $general->bank->name }}</p>
            @endif
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.family_members')</label>
            <br>
            <p> {{ $general->family_members }}</p>
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.notes')</label>
            <br>
            <p> {{ $general->notes }}</p>
        </div>

    </div>
</div>
