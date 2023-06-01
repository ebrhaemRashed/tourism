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



                                <!-- choose the user -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="user"></x-admin.form.label-first>

                                    <select style="height:40px" name="user_id"> 
                                        @foreach($users as $u)
                                            <option value="{{$u->id}}"> {{$u->name}}  </option>
                                        @endforeach
                                    </select>

                                    <x-admin.form.label-end name="Choose the user">
                                    </x-admin.form.label-end>

                                </div>



                                <!-- choose the question -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="question"></x-admin.form.label-first>

                                    <select style="height:40px" name="question_id"> 
                                        @foreach($questions as $q)
                                            <option value="{{$q->id}}"> {{$q->question}}  </option>
                                        @endforeach
                                    </select>

                                    <x-admin.form.label-end name="Choose the question">
                                    </x-admin.form.label-end>

                                </div>

                                

                                <!-- choose the answer -->
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="answer"></x-admin.form.label-first>

                                    <select style="height:40px" name="answer_id"> 
                                        @foreach($answers as $q)
                                            <option value="{{$q->id}}"> {{$q->answer}}  </option>
                                        @endforeach
                                    </select>

                                    <x-admin.form.label-end name="Choose the answer">
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
