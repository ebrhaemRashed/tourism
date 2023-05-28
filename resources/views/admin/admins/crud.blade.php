@extends('admin.layouts.master')

@section('titleadmin')
{{ str_replace("-"," ",ucfirst($type.' Admin')) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')

<div class="content-body">
    <x-admin.route :route="route('admin.admins.index')" name="{{ TranslationHelper::translate('Index Admin') }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">

                <x-admin.crud name="{{ $type??'' }} {{ TranslationHelper::translate('Form Admin') }}"></x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{$action}}" enctype="multipart/form-data">
                            @include('components.admin.csrf')
                            <div class="row">
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="First Name {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'name.'.$item->key }}"
                                        name="{{ 'name'.'['.$item->key.']' }}" type="text"
                                        placeholder="First Name {{ ucfirst($item->name)  }}"
                                        :value="$admin->translate('name', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end
                                        name="Please Enter {{ ucfirst($item->name) }} Admin First Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Email"></x-admin.form.label-first>
                                    <x-admin.form.input old="email" :value="$admin->email" name="email" type="email"
                                        placeholder="Example@test.com"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ $item->name }} Admin First Name">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Password') }}"></x-admin.form.label-first>
                                    <x-admin.form.input old="password" name="password" type="password"
                                        placeholder="*********"></x-admin.form.input>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Enter Admin Password') }}"></x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">

                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('confirm Password') }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="confirm-password" name="confirm-password" type="password"
                                        placeholder="*********"></x-admin.form.input>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Enter Admin Confirm Password') }}">
                                    </x-admin.form.label-end>
                                </div>


                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('State') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :model="$admin" name="status"></x-admin.form.state>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose State') }}"> </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first name="{{ TranslationHelper::translate('Default file input Image') }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.image star="*" name="image" oldname="image" type="file"
                                        placeholder="{{ TranslationHelper::translate('Default file input Image') }}"></x-admin.form.image>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Upload file Image') }}"></x-admin.form.label-end>
                                    <img src="" id="mainThmb">
                                </div>



                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first name="Role"></x-admin.form.label-first>
                                    <div class="dropdown bootstrap-select default-select form-control wide">
                                        <select id="inputState" class="default-select form-control wide" value=""
                                            name="roles">
                                            @foreach ($roles as $role)
                                            <option value="" selected disabled="">{{ TranslationHelper::translate('Select roles') }}</option>
                                            @if (isset($model))
                                            {{-- edit --}}
                                            <option value="{{$role}}" {{ in_array($role, $AdminRole) ?'selected':''}}>
                                                {{$role}}</option>
                                            @else
                                            {{-- create --}}
                                            <option value="{{$role}}" @if (old('roles')==$role) {{ 'selected' }} @endif>
                                                {{$role}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Role') }}"> </x-admin.form.label-end>
                                </div>
                            </div>
                                <x-admin.form.submit :route="route('admin.admins.index')"></x-admin.form.submit>
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
