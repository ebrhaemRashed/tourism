@extends('admin.layouts.master')

@section('titleadmin')
        {{ str_replace("-"," ",ucfirst('dashboard')) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')
        <!--**********************************
            Content body start
        ***********************************-->
        @include('admin.layouts.content.content_start')
        <!--**********************************
            Content body end
        ***********************************-->
        @include('admin.layouts.content.content_end')
        <!--**********************************
@endsection


@section('jsadmin')
   <script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
@endsection
