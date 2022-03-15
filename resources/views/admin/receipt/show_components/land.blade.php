@if ($general->land->count() > 0)
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        @foreach ($general->land as $land)
            <h3>
                @lang('receipts.land_info')
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label>@lang('receipts.land_type_id')</label>
                    <br>
                    @if ($land->land_type != null)
                        <p> {{ $land->land_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.land_status_ids')</label>
                    <br>
                    @if ($land->land_status != null)
                        <p> {{ $land->land_status->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.planned_num')</label>
                    <br>
                    <p> {{ $land->planned_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.piece_num')</label>
                    <br>
                    <p> {{ $land->piece_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.city')</label>
                    <br>
                    @if ($land->city != null)
                        <p> {{ $land->city->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.district')</label>
                    <br>
                    <p> {{ $land->district }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.owner_num')</label>
                    <br>
                    <p> {{ $land->owner_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.rate_num')</label>
                    <br>
                    <p> {{ $land->rate_num }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_type')</label>
                    <br>
                    @if ($land->license_type != null)
                        <p> {{ $land->license_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_issue_date')</label>
                    <br>
                    <p> {{ $land->license_issue_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.license_expiration_date')</label>
                    <br>
                    <p> {{ $land->license_expiration_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.property_price')</label>
                    <br>
                    <p> {{ $land->property_price }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.land_notes')</label>
                    <br>
                    <p> {{ $land->property_notes }}</p>
                </div>
                @if ($land->rating->count() > 0)
                    @include('admin.receipt.show_components.land_rating')
                @endif
            </div>
        @endforeach
    </div>
@endif
