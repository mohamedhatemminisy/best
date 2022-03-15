<div class="row">

    <div class="col-12 form-group">
        <h2>
            @lang('receipts.personal_info')
        </h2>
        <hr>
    </div>
    <div class="col-3 form-group">
        <label>@lang('receipts.client_name') </label>
        <input type="text" name="name" id="name" placeholder="@lang('receipts.client_name')" class="form-control"
            value="{{ old('name') }}">
        @error('name')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-3 form-group">
        <label>@lang('receipts.cid') </label>
        <input type="text" name="identity" id="identity" placeholder="@lang('receipts.cid')" class="form-control"
            value="{{ old('identity') }}">
        @error('identity')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.phone_one') </label>
        <input type="text" name="phone_one" id="phone_one" placeholder="@lang('receipts.phone_one')"
            class="form-control" value="{{ old('phone_one') }}">
        @error('phone_one')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.phone_two') </label>
        <input type="text" name="phone_two" id="phone_two" placeholder="@lang('receipts.phone_two')"
            class="form-control" value="{{ old('phone_two') }}">
        @error('phone_two')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.Hijri_date_of_birth') </label>
        <input type="text" name="Hijri_date_of_birth" id="hijri-date-input"
            placeholder="@lang('receipts.Hijri_date_of_birth')" class="form-control disable-date"
            value="{{ old('Hijri_date_of_birth') }}">

        @error('Hijri_date_of_birth')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.birthday') </label>
        <input type="text" name="birthday" id="datepicker" placeholder="@lang('receipts.birthday')"
            class="form-control " value="{{ old('birthday') }}">
        @error('birthday')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.Hijri_age') </label>
        <input type="text" name="Hijri_age" id="Hijri_age" placeholder="@lang('receipts.Hijri_age')"
            class="form-control" value="{{ old('Hijri_age') }}">
        @error('Hijri_age')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.birth_age') </label>
        <input type="text" name="birth_age" id="birth_age" placeholder="@lang('receipts.birth_age')"
            class="form-control" value="{{ old('birth_age') }}">
        @error('birth_age')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.city') </label>
        <select class="form-control" name="city_id" id='city'>
            <option disabled selected>@lang('receipts.city')</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>
                    {{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.clinet_bank') </label>
        <select class="form-control" name="bank_id" id='bank'>
            <option disabled selected>@lang('receipts.clinet_bank')</option>
            @foreach ($banks as $bank)
                <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
                    {{ $bank->name }}</option>
            @endforeach
        </select>
        @error('bank_id')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.family_members') </label>
        <input type="text" name="family_members" id="family_members" placeholder="@lang('receipts.family_members')"
            class="form-control" value="{{ old('family_members') }}">
        @error('family_members')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="col-3 form-group">
        <label>@lang('receipts.notes') </label>
        <textarea name="notes" class="form-control" type="text" rows="2" cols="2"
            placeholder="@lang('receipts.notes')">
                {{ old('notes') }} </textarea>
        @error('notes')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


</div>
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            let dateObj = new Date();
            let thisYear = dateObj.getUTCFullYear();
            let dateObject;
            $("#datepicker").datepicker({
                onSelect: function() {
                    var dateObject = $(this).datepicker('getDate');
                   
                    
                }
            });
            $("#datepicker").change(function(){
               let brithVal = $(this).val();
               let brithYear = new Date(brithVal).getUTCFullYear();
                $('#Hijri_age').val(thisYear - brithYear);
                $('#birth_age').val(thisYear - brithYear);
            });
            
        });
    </script>
@endpush
