@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('frontend'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')
@endsection


@section('jsfrontend')
@endsection

{{-- <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                class="text-danger ti-unlock"></i>logout</a>
<form id="logout-form" action="{{  \LaravelLocalization::localizeURL('logout') }}" method="POST" style="display: none;">
        @csrf
</form>


<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}