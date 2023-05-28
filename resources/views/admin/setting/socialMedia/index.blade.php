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
                <form class="kt-form kt-form--label-right" method="post" action="{{$action}}" enctype="multipart/form-data">
                    @include('components.admin.csrf')
                    <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th> {{ TranslationHelper::translate('Social Media') }}</th>
                            <th> {{ TranslationHelper::translate('Data') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{$Setting->key}}</td>
                                    <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="26" name="date">{{$Setting->value}}</textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                                <x-admin.form.submit :route="$RouteIndex"></x-admin.form.submit>
                        </div>
                    </div>
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
