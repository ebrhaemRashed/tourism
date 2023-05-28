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
                                <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                                    <thead>
                                    <tr>
                                        <th> {{ TranslationHelper::translate('Name')}}</th>
                                        <th> {{ TranslationHelper::translate('Social Media')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{$Setting->key}}</td>
                                                <td>
                                                    <x-admin.form.input old="value" :value="$Setting->value" name="value" type="text" placeholder="value"></x-admin.form.input>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>
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
