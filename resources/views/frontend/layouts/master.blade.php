<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<x-meta.meta></x-meta.meta>
	@include('frontend.layouts.css.stylecss')
	@include('frontend.layouts.css.css')
</head>

<body class="rtl page-template page-template-components page-template-tn-survey-template page-template-componentstn-survey-template-php page page-id-8143 menu-style-1  wide menu_style1 wpb-js-composer js-comp-ver-5.1.1 vc_responsive">
	@include('frontend.layouts.head.nav')
		{{--  contenta start  --}}
		@yield('contentfrontend')
		{{--  contenta end  --}}
	@include('frontend.layouts.footer.footer')
	</div>
	@include('frontend.layouts.js.js')
</body>

</html>