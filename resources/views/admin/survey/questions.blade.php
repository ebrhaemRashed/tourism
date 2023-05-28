@extends('admin.layouts.master')

@section('titleadmin')
{{ str_replace("-"," ",ucfirst($type.' '.$nameView)) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')

<div class="content-body">
    <x-admin.route :route="$RouteIndex" name="{{ TranslationHelper::translate($IndexView) }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <x-admin.crud name="{{ $type??'' }} {{ TranslationHelper::translate('Form '.$nameView) }}"></x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{$action}}">
                            @include('components.admin.csrf')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Price"></x-admin.form.label-first>
                                    <x-admin.form.input old="price" :value="$PublicTransportationCity->price" name="price" type="number"
                                        placeholder="Price"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Price">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="City From"></x-admin.form.label-first>
                                    <x-admin.form.input old="city_from" :value="$PublicTransportationCity->city_from" name="city_from" type="date"
                                        placeholder="City From"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter City From">
                                    </x-admin.form.label-end>
                                </div>
  
                                  <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="City To"></x-admin.form.label-first>
                                    <x-admin.form.input old="city_to" :value="$PublicTransportationCity->city_to" name="city_to" type="date"
                                        placeholder="City To"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter City To">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Sort"></x-admin.form.label-first>
                                    <x-admin.form.input old="sort" :value="$PublicTransportationCity->sort" name="sort" type="number"
                                        placeholder="Sort"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Sort">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Type') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :foreach="App\Models\PublicTransportationCity::TYPE"  :model="$PublicTransportationCity" name="type"></x-admin.form.state>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Type') }}"> </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('State') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :foreach="App\Models\StaticConst::STATUS" :model="$PublicTransportationCity" name="status"></x-admin.form.state>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose State') }}"> </x-admin.form.label-end>
                                </div>

                         
                                </div>
                            </div>
                                <x-admin.form.submit :route="$RouteIndex"></x-admin.form.submit>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('jsadmin')
@endsection
