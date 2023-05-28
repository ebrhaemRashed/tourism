<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  <!-- meta -->  --}}
    <x-meta.meta></x-meta.meta>
    <!-- title-->
    <title>@yield('titleadmin')</title>
        <!-- css-->
    @include('admin.layouts.css.css')
@livewireStyles
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">
        {{--  <!-- preloader-->  --}}
    @include('admin.layouts.main.preloader')

    <!-- start content-->
    <div id="main-wrapper">
            {{--  Nav head start  --}}
        @include('admin.layouts.head.nav')
                {{--  Nav header start  --}}
            @include('admin.layouts.head.header')
                {{--  Nav header end  --}}
                {{--  sidebar start  --}}
            @include('admin.layouts.sidebar.sidebar')
                {{--  sidebar end  --}}
                    {{--  contenta start  --}}
                    @yield('contentadmin')
                    {{--  contenta end  --}}
            {{--  footer start  --}}
         @include('admin.layouts.footer.footer')
            {{--  footer end  --}}
    </div>
    <!-- end content-->

    <!-- Scripts-->
    @include('admin.layouts.js.js')

</body>
@livewireScripts
</html>
