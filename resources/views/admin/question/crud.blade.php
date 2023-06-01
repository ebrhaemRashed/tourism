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
                                    <x-admin.form.label-first star="*" name="question"></x-admin.form.label-first>
                                    <x-admin.form.input old="question" :value="$Question->question" name="question" type="text"
                                        placeholder="question"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter question">
                                    </x-admin.form.label-end>
                                </div>



                                <!-- question_type -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="type"></x-admin.form.label-first>

                                    <select style="height:40px" name="type"> 
                                        <option value="radio"> Has One Answer</option>
                                        <option value="checkbox"> Has More than One Answer</option>
                                    </select>
                                    <br>

                                    <x-admin.form.label-end name="Select Enter type">
                                    </x-admin.form.label-end>
                                </div>



                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="max"></x-admin.form.label-first>
                                    <x-admin.form.input old="max" :value="$Question->days" name="max" type="number"
                                        placeholder="enter max number of answers"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter max">
                                    </x-admin.form.label-end>
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
