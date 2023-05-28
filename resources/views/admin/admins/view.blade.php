@extends('admin.layouts.master')

@section('titleadmin')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('Admins'))) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')

<div class="content-body">
    <x-admin.route :route="route('admin.admins.create')" name="{{ TranslationHelper::translate('Create Admins') }}">
    </x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="">
            <div class="demo-view">
                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="row">
                        <!-- Column starts -->
                        <div class="col-xl-12">
                            <div class="card dz-card" id="accordion-one">
                                <div class="card-header flex-wrap">
                                    <x-admin.basic name="{{ TranslationHelper::translate('Admins') }}"></x-admin.basic>
                                    <x-admin.search :route="route('admin.admins.index')"></x-admin.search>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('admin.admins.create') }}" class="nav-link active"
                                            id="home-tab" data-bs-target="#BadgesSize" type="button" role="tab"
                                            aria-selected="true">{{ TranslationHelper::translate('Create') }}</a>
                                    </li>
                                </ul>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive ">
                                                <table id="example5" class="display table dataTable no-footer"
                                                    style="min-width: 845px" role="grid">
                                                    <thead>
                                                        <tr style="background-color: #F0F4F9;">
                                                            <x-admin.table th1='#'
                                                                th2="{{ TranslationHelper::translate('Name') }}"
                                                                th3="{{ TranslationHelper::translate('email') }}"
                                                                th4="{{ TranslationHelper::translate('Start date') }}"
                                                                th5="{{ TranslationHelper::translate('Role') }}"
                                                                th6="{{ TranslationHelper::translate('Status') }}"
                                                                th7="  "></x-admin.table>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $key => $admin)
                                                        <tr>
                                                            <td>{{++$key}}</td>
                                                            <td>
                                                                <x-admin.form.image-upload :model="$admin"
                                                                    :nameUser="$admin->name" name="admin">
                                                                </x-admin.form.image-upload>
                                                            </td>
                                                            <td>{{ $admin->email }}</td>
                                                            <td>{{ $admin->created_at->toFormattedDateString('Y-m-d') }}
                                                            </td>
                                                            <td>
                                                                @if(!empty($admin->getRoleNames()))
                                                                @foreach($admin->getRoleNames() as $v)
                                                                <label class="badge badge-success">{{ $v }}</label>
                                                                @endforeach
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <x-admin.status :status="$admin->status">
                                                                </x-admin.status>
                                                            </td>
                                                            <td>
                                                                <x-admin.edit
                                                                    :route="route('admin.admins.edit', $admin->id)">
                                                                </x-admin.edit>
                                                                <x-admin.delete-model :id="$admin->id"
                                                                    :name="$admin->name"
                                                                    :route="route('admin.admins.destroy', $admin->id)">
                                                                </x-admin.delete-model>
                                                            </td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr style="background-color: #F0F4F9;">
                                                            <x-admin.table th1='#'
                                                                th2="{{ TranslationHelper::translate('Name') }}"
                                                                th3="{{ TranslationHelper::translate('email') }}"
                                                                th4="{{ TranslationHelper::translate('Start date') }}"
                                                                th5="{{ TranslationHelper::translate('Role') }}"
                                                                th6="{{ TranslationHelper::translate('Status') }}"
                                                                th7="  "></x-admin.table>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                {{$data->links()}}
                                            </div>
                                        </div>
                                        <!-- /Default accordion -->
                                    </div>
                                </div>
                                <!--/tab-content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('jsadmin')
@endsection
