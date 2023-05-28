<div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Country') }}"></x-admin.form.label-first>
        <x-admin.form.dropdown-livewire 
        disabled="disabled" namewire="selectedCountry" :model="$CityId"  :foreach="$Country" name="country_id" id="country_id"  nameselect="Country">
        </x-admin.form.dropdown-livewire>
            <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Country') }}"> </x-admin.form.label-end>
        </div>
        
        <div class="mb-3 col-md-6">
            <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('City') }}"></x-admin.form.label-first>
        <x-admin.form.dropdown-livewire
        disabled="disabled" namewire="filterCity" :model="$CityId"  :foreach="$city" name="city_id" id="city_id"  nameselect="City">
        </x-admin.form.dropdown-livewire>
            <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose City') }}"> </x-admin.form.label-end>
        </div>

        @if (isset($DistrictShow))
        <div class="mb-3 col-md-6">
            <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('District') }}"></x-admin.form.label-first>
        <x-admin.form.dropdown-livewire
        disabled="disabled" namewire="selectedDistrict" :model="$DistrictId"  :foreach="$district" name="district_id" id="district_id"  nameselect="District">
        </x-admin.form.dropdown-livewire>
            <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose District') }}"> </x-admin.form.label-end>
        </div>
        @endif

    </div>


</div>
