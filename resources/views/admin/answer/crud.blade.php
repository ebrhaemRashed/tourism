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
                        <form method="post" action="{{$action}}" enctype="multipart/form-data">
                            @include('components.admin.csrf')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="answer"></x-admin.form.label-first>
                                    <x-admin.form.input old="answer" :value="$Answer->answer" name="answer" type="text"
                                        placeholder="answer"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter answer">
                                    </x-admin.form.label-end>
                                </div>



                                <!-- choose the question -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="quqestion"></x-admin.form.label-first>

                                    <select style="height:40px" name="question_id"> 
                                        @foreach($questions as $q)
                                            <option value="{{$q->id}}"> {{$q->question}}  </option>
                                        @endforeach
                                    </select>

                                    <x-admin.form.label-end name="Choose the question">
                                    </x-admin.form.label-end>

                                </div>

                                

                                <!-- upload the image for answer -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first name="image">
                                    </x-admin.form.label-first>
                                    <x-admin.form.image star="*" name="image" oldname="image" type="file"
                                        placeholder="Select an image"></x-admin.form.image>
                                    <x-admin.form.label-end name="Please Upload file Image"></x-admin.form.label-end>
                                    <img src="" id="mainThmb">
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
