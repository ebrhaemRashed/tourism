@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('frontend'))) }}
@endsection

@section('cssfrontend')
<style>
.wpb_single_image.vc_align_center{
    margin-top: 4rem;
}    
</style>
@endsection

@section('contentfrontend')
<div class="container-fluid"><div class="vc_row wpb_row st bg-holder"><div class="container "><div class="row">
	<div class="wpb_column column_container col-md-12"><div class="vc_column-inner wpb_wrapper">
			
	<div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1491933920746">
		
		<figure class="wpb_wrapper vc_figure">
			<a href="http://www.travoneer.com/sign-in/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="1024" height="300" src="../wp-content/uploads/2017/02/Thank-last-step.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://www.travoneer.com/wp-content/uploads/2017/02/Thank-last-step.jpg 1024w, https://www.travoneer.com/wp-content/uploads/2017/02/Thank-last-step-768x224.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px"></a>
		</figure>
	</div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: center;">الرجاء مراجعة البريد الألكتروني سيصلك عليه معلومات تسجيل الدخول في خلال دقائق</p>

		</div>
	</div>

	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			<!-- Google Code for Travo: Sign In site Conversion Page -->

		</div>
	</div>
</div>
	</div> 
</div><!--End .row--></div><!--End .container--></div>
 </div>
@endsection


@section('jsfrontend')
@endsection
