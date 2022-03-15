@if ($general->realEstate->count() > 0)
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        @foreach ($general->realEstate as $estate)
            <h3>
                @lang('receipts.real_state_info')
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label>@lang('receipts.real_estate_types')</label>
                    <br>
                    @if ($estate->estate_type != null)
                        <p> {{ $estate->estate_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.real_estate_status')</label>
                    <br>
                    @if ($estate->estate_status != null)
                        <p> {{ $estate->estate_status->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.planned_num')</label>
                    <br>
                    <p> {{ $estate->planned_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.piece_num')</label>
                    <br>
                    <p> {{ $estate->piece_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.city')</label>
                    <br>
                    @if ($estate->city != null)
                        <p> {{ $estate->city->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.district')</label>
                    <br>
                    <p> {{ $estate->district }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.owner_num')</label>
                    <br>
                    <p> {{ $estate->owner_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.rate_num')</label>
                    <br>
                    <p> {{ $estate->rate_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_type')</label>
                    <br>
                    @if ($estate->license_type != null)
                        <p> {{ $estate->license_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_issue_date')</label>
                    <br>
                    <p> {{ $estate->license_issue_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_expiration_date')</label>
                    <br>
                    <p> {{ $estate->license_expiration_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.property_price')</label>
                    <br>
                    <p> {{ $estate->property_price }}</p>
                </div>


                <div class="col-3 form-group">
                    <label>@lang('receipts.property_notes')</label>
                    <br>
                    <p> {{ $estate->property_notes }}</p>
                </div>
                @if ($estate->rating->count() > 0)
                    @include('admin.receipt.show_components.real_rating')
                @endif

            </div>
        @endforeach
    </div>
@endif
