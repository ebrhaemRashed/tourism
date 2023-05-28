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
                                        <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Group') }}"></x-admin.form.label-first>
                                    <x-admin.form.dropdown
                                    disabled="disabled"  :model="$GroupLocation" :foreach="$group" name="group_id" id="group_id"  nameselect="Group">
                                    </x-admin.form.dropdown>
                                        <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Group') }}"> </x-admin.form.label-end>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Location') }}"></x-admin.form.label-first>
                                    <x-admin.form.dropdown
                                    disabled="disabled"  :model="$GroupLocation" :foreach="$location" name="location_id" id="location_id"  nameselect="Location">
                                    </x-admin.form.dropdown>
                                        <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Location') }}"> </x-admin.form.label-end>
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
