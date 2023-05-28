@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('frontend'))) }}
@endsection

@section('cssfrontend')
@endsection

@section('contentfrontend')
	<div class="global-wrap container-fluid">
		<div class="row">
			<div class="container-fluid">
				<div class="vc_row wpb_row st bg-holder vc_custom_1492539639025 vc_row-has-fill">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-2">
								<div class="vc_column-inner wpb_wrapper">
								</div>
							</div>

							<div class="wpb_column column_container col-md-8">
								<div class="vc_column-inner wpb_wrapper">

									<div
										class="wpb_text_column  ">
									<div
										class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
											<div
												style="text-align: center; background-color: rgba(255,255,255,0.75); padding: 10px; border-radius: 5px;">
												<h1>رحلتك كما تريدها أن تكون</h1>
												<h4>مع مستشارك الخاص لحجز وتنظيم إقامتك وتنقلاتك وبرنامجك في أوروبا.
												</h4>
											</div>
											<p>&nbsp;</p>
											<div style="text-align: center;"><strong><a
														style="text-align: center; font-size: 18px; color: #fff; background: #ffbb00; padding: 10px 100px; border-radius: 4px; margin: auto; margin-top: 10px; display: inline-block;"
														href="{{ route('index_survey') }}">ابدأ الآن</a></strong></div>

										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-2">
								<div class="vc_column-inner wpb_wrapper">
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div class="vc_row wpb_row st bg-holder vc_custom_1494696172891">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-12 vc_custom_1485769904882">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_text_column wpb_content_element  vc_custom_1487190057807">
										<div class="wpb_wrapper">
											<h3 style="text-align: center;">كيف يمكنك الحجز معنا</h3>

										</div>
									</div>
									<div class="vc_row wpb_row vc_inner">
										<div class="wpb_column column_container col-md-4 col-has-fill">
											<div class="vc_column-inner vc_custom_1486230379056">
												<div class="wpb_wrapper">
													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486743876667">
														<div class="wpb_wrapper">
															<i
																class="fa   fa-list box-icon-huge box-icon-border box-icon-center st_1684050749 round st_1684050748 animate-icon-border-fadein ">
															</i>

														</div>
													</div>

													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486231324553">
														<div class="wpb_wrapper">
															<h3 style="text-align: center;">1. شاركنا رغباتك</h3>

														</div>
													</div>

													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">
															<p style="text-align: center;">قم بالإجابة على أسئلة
																الإستطلاع. ساعدنا على التعرف إلى رحلتك المثلى وسيقوم
																فريق العمل بعملية البحث ومقارنة العروض المختلفة.</p>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column column_container col-md-4 col-has-fill">
											<div class="vc_column-inner vc_custom_1486230369315">
												<div class="wpb_wrapper">
													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486743868162">
														<div class="wpb_wrapper">
															<i
																class="fa   fa-user box-icon-huge box-icon-border box-icon-center st_1684050752 round st_1684050751 animate-icon-border-fadein ">
															</i>

														</div>
													</div>

													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486231305201">
														<div class="wpb_wrapper">
															<h3 style="text-align: center;">2. دعنا نساعدك</h3>

														</div>
													</div>

													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">
															<p style="text-align: center;">سيتواصل معك مستشارك الخاص
																لدراسة العروض الأنسب وتحديد خط سير الرحلة الذي يضمن لك
																أقصى درجات الراحة و الإستمتاع.</p>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column column_container col-md-4 col-has-fill">
											<div class="vc_column-inner vc_custom_1486230358494">
												<div class="wpb_wrapper">
													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486743859965">
														<div class="wpb_wrapper">
															<i
																class="fa   fa-plane box-icon-huge box-icon-border box-icon-center st_1684050755 round st_1684050754 animate-icon-border-fadein ">
															</i>

														</div>
													</div>

													<div
														class="wpb_text_column wpb_content_element  vc_custom_1486231314882">
														<div class="wpb_wrapper">
															<h3 style="text-align: center;">3. إحجز رحلتك</h3>

														</div>
													</div>

													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">
															<p style="text-align: center;">سنقوم بإجراء كافة الحجوزات و
																تزويدك بكل المعلومات اللازمة لتأكد من جميع خصائص الحجز
																وتجنب أي مفاجئات غير سارة أثناء الرحلة.</p>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
					class="vc_row wpb_row st bg-holder vc_custom_1486230303228 vc_row-no-padding">
					<div class='container-fluid'>
						<div class='row'>
							<div class="wpb_column column_container col-md-6 vc_custom_1486061226297">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_text_column wpb_content_element  vc_custom_1492352771271">
										<div class="wpb_wrapper">
											<div
												style="text-align: center; color: #fff; background-color: rgba(30,80,130,0.75); padding: 10px;">
												<h3><span style="color: #fff;">الخبرة</span></h3>
												<p>من أوروبا نقدم لك خبرة سنوات في مجال السياحة والسفر لأوروبا.</p>
											</div>

										</div>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1492353686299">
										<div class="wpb_wrapper">
											<div
												style="text-align: center; color: #fff; background-color: rgba(255,187,0,0.75); padding: 10px;">
												<h3><span style="color: #fff;">الخصوصية</span></h3>
												<p>العروض المقدمة يتم تصميمها لتناسب إحتياجاتك ومتطلباتك الخاصة.</p>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-6 vc_custom_1486061119698">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_text_column wpb_content_element  vc_custom_1492353702525">
										<div class="wpb_wrapper">
											<div
												style="text-align: center; color: #fff; background-color: rgba(255,187,0,0.75); padding: 10px;">
												<h3><span style="color: #ffffff;">التنظيم</span></h3>
												<p>سيتولى فريق العمل مهام البحث و التنظيم وتزويدك بتفاصيل الرحلة كاملة.
												</p>
											</div>

										</div>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1492352757840">
										<div class="wpb_wrapper">
											<div
												style="text-align: center; color: #fff; background-color: rgba(30,80,130,0.75); padding: 10px;">
												<h3><span style="color: #fff;">الدعم</span></h3>
												<p>ستتمكن من التواصل مع مستشارك الخاص أثناء الرحلة لتقديم الدعم اللازم.
												</p>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div class="vc_row-full-width vc_clearfix"></div>
				<div class="vc_row wpb_row st bg-holder vc_custom_1487189721331">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-3">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_single_image wpb_content_element vc_align_center">

										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img
													width="150" height="150"
													src="wp-content/uploads/2017/01/Foto_Nasser-150x150.jpg"
													class="vc_single_image-img attachment-thumbnail" alt=""
													srcset="https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Nasser-150x150.jpg 150w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Nasser-300x300.jpg 300w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Nasser-1024x1024.jpg 1024w"
													sizes="(max-width: 150px) 100vw, 150px" /></div>
										</figure>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1494350650735">
										<div class="wpb_wrapper">
											<p style="text-align: center;">&#8220;تعلّم من الأمس ، و عِش اليوم ، وتمنَّى
												الخير في الغَد&#8221;<br />
												<strong>محمد ناصر، فريق الحجز<br />
												</strong>
											</p>

										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-3">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_single_image wpb_content_element vc_align_center">

										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img
													width="150" height="150"
													src="wp-content/uploads/2017/01/Foto_yousef-150x150.jpg"
													class="vc_single_image-img attachment-thumbnail" alt=""
													srcset="https://www.travoneer.com/wp-content/uploads/2017/01/Foto_yousef-150x150.jpg 150w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_yousef-300x300.jpg 300w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_yousef-768x767.jpg 768w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_yousef-1024x1024.jpg 1024w"
													sizes="(max-width: 150px) 100vw, 150px" /></div>
										</figure>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1494350548099">
										<div class="wpb_wrapper">
											<p style="text-align: center;">&#8220;إفعل ما يعتقد الآخرون أنه ليس
												بإستطاعتك فعله&#8221;<br />
												<strong>يوسف عثمان، مستشار خاص</strong>
											</p>

										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-3">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_single_image wpb_content_element vc_align_center">

										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img
													width="150" height="150"
													src="wp-content/uploads/2017/01/Foto_Yaser-150x150.jpg"
													class="vc_single_image-img attachment-thumbnail" alt=""
													srcset="https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Yaser-150x150.jpg 150w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Yaser-300x300.jpg 300w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Yaser-768x767.jpg 768w, https://www.travoneer.com/wp-content/uploads/2017/01/Foto_Yaser-1024x1024.jpg 1024w"
													sizes="(max-width: 150px) 100vw, 150px" /></div>
										</figure>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1494350662506">
										<div class="wpb_wrapper">
											<p style="text-align: center;">&#8220;كُن سبباً في جعل شخص آخر يؤمن بوجود
												الخير في الناس&#8221;<br />
												<strong>ياسر إبراهيم، فريق التنفيذ<br />
												</strong>
											</p>

										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-3">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_single_image wpb_content_element vc_align_center">

										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"><img
													width="150" height="150"
													src="wp-content/uploads/2017/01/hijabi-150x150.png"
													class="vc_single_image-img attachment-thumbnail" alt=""
													srcset="https://www.travoneer.com/wp-content/uploads/2017/01/hijabi-150x150.png 150w, https://www.travoneer.com/wp-content/uploads/2017/01/hijabi-300x300.png 300w, https://www.travoneer.com/wp-content/uploads/2017/01/hijabi-768x768.png 768w, https://www.travoneer.com/wp-content/uploads/2017/01/hijabi-1024x1024.png 1024w, https://www.travoneer.com/wp-content/uploads/2017/01/hijabi.png 137w"
													sizes="(max-width: 150px) 100vw, 150px" /></div>
										</figure>
									</div>

									<div class="wpb_text_column wpb_content_element  vc_custom_1490722573084">
										<div class="wpb_wrapper">
											<p style="text-align: center;">&#8220;كل صباح تبدأ صفحة جديدة في قصة حياتك.
												إجعل صفحة اليوم رائعة&#8221;<br />
												<strong>ساره محمود، مستشارة خاصة</strong>
											</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div class="vc_row wpb_row st bg-holder vc_custom_1486233236583 vc_row-has-fill">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-6 vc_custom_1494087224444">
								<div class="vc_column-inner wpb_wrapper">
								</div>
							</div>

							<div class="wpb_column column_container col-md-6">
								<div class="vc_column-inner wpb_wrapper">

									<div class="wpb_text_column wpb_content_element  vc_custom_1494087212377">
										<div class="wpb_wrapper">
											<h4><strong>من نحن؟</strong></h4>
											<p>تخطیط رحلتك إلى أوروبا لا یجب أن یسلب منك متعة سفرك، كذلك أي صعوبات أو
												ظورف غیر متوقعة قد تقابلها أثناء رحلتك من مكتب ترافونییر في فیینا
												&#8211; قلب أوروبا یمكننا تقدیم المساعدة لك في أیًا من هذه المواقف
												والوصول إلیك أیًا كان مكانك في أوروبا على عكس أغلب الشركات التي تقع خارج
												القارة الأوروبیة.</p>
											<p>كذلك وبحكم تواجدنا في السوق الأوروبیة نتمكن من متابعة السوق وحركة الأسعار
												ونوفر لك الخدمات المطلوبة بأفضل سعر ممكن وبأقل مخاطرة ممكنة. ترافونییر
												ترافقك من بدایة رغبتك في السفر إلى أوروبا مرورا بمراحل تخطیط رحلتك حتى
												سفرك إلى أوروبا وعودتك ختامًا سالما إلى بلدك.</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div class="vc_row wpb_row st bg-holder">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-12">
								<div class="vc_column-inner wpb_wrapper">

									<div
										class="wpb_video_widget wpb_content_element vc_clearfix   vc_custom_1495129840625 vc_video-aspect-ratio-169 vc_video-el-width-50 vc_video-align-center">
										<div class="wpb_wrapper">

											<div class="wpb_video_wrapper"><iframe width="500" height="281"
													src="https://www.youtube.com/embed/TuB5U4JSvvU?feature=oembed"
													frameborder="0" allowfullscreen></iframe></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
				<div class="vc_row wpb_row st bg-holder">
					<div class='container '>
						<div class='row'>
							<div class="wpb_column column_container col-md-2">
								<div class="vc_column-inner wpb_wrapper">
								</div>
							</div>

							<div class="wpb_column column_container col-md-8">
								<div class="vc_column-inner wpb_wrapper">
									<div class="vc_tta-container vc_tta-o-non-responsive" data-vc-action="collapse">
										<div
											class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-has-pagination vc_tta-o-no-fill vc_tta-tabs-position-top  vc_tta-pageable">
											<div class="vc_tta-panels-container">
												<ul
													class="vc_general vc_pagination vc_pagination-style-outline vc_pagination-shape-round vc_pagination-color-grey">
													<li class="vc_pagination-item vc_active" data-vc-tab><a
															href="#1494086228032-5a977f67-ae2d"
															class="vc_pagination-trigger" data-vc-tabs
															data-vc-container=".vc_tta"></a></li>
													<li class="vc_pagination-item" data-vc-tab><a
															href="#1494086228174-ab202309-fec6"
															class="vc_pagination-trigger" data-vc-tabs
															data-vc-container=".vc_tta"></a></li>
													<li class="vc_pagination-item" data-vc-tab><a
															href="#1494086395559-cc2011dc-2c30"
															class="vc_pagination-trigger" data-vc-tabs
															data-vc-container=".vc_tta"></a></li>
													<li class="vc_pagination-item" data-vc-tab><a
															href="#1494086431931-eb5d3863-c7c5"
															class="vc_pagination-trigger" data-vc-tabs
															data-vc-container=".vc_tta"></a></li>
												</ul>
												<div class="vc_tta-panels">
													<div class="vc_tta-panel vc_active" id="1494086228032-5a977f67-ae2d"
														data-vc-content=".vc_tta-panel-body">
														<div class="vc_tta-panel-body">
															<span class="vc_tta-panel-title">
																<a data-vc-container=".vc_tta-container"
																	data-vc-accordion=""
																	data-vc-target="#1494086228032-5a977f67-ae2d"></a>
															</span>

															<div
																class="wpb_text_column wpb_content_element  vc_custom_1494086669181">
																<div class="wpb_wrapper">
																	<h4><strong>كيف يعمل موقع ترافونيير؟</strong></h4>
																	<p>ستقوم بالإجابة على أسئلة الإستطلاع لنتمكن من
																		التعرف على متطلبات رحلتك بشكل أفضل مما یساعدنا
																		على تقدیم عرض یتناسب مع إحتیاجتك ورغباتك الشخصیة
																		دون أن تضطر للتضحیة بأي منها.</p>

																</div>
															</div>
														</div>
													</div>
													<div class="vc_tta-panel" id="1494086228174-ab202309-fec6"
														data-vc-content=".vc_tta-panel-body">
														<div class="vc_tta-panel-body">
															<span class="vc_tta-panel-title">
																<a data-vc-container=".vc_tta-container"
																	data-vc-accordion=""
																	data-vc-target="#1494086228174-ab202309-fec6"></a>
															</span>

															<div
																class="wpb_text_column wpb_content_element  vc_custom_1494086648329">
																<div class="wpb_wrapper">
																	<h4><strong>ماذا يحدث بعد التسجيل؟</strong></h4>
																	<p>سیتواصل معك أحد مستشاري ترافونییر لیقدم لك عرض
																		مبدئي لرحلتك ومناقشة التفاصیل وأي إستفسارات لدیك
																		لنصل بالعرض لیتناسب مع رغباتك ومتطلبات سفرك
																		الشخصیة.</p>

																</div>
															</div>
														</div>
													</div>
													<div class="vc_tta-panel" id="1494086395559-cc2011dc-2c30"
														data-vc-content=".vc_tta-panel-body">
														<div class="vc_tta-panel-body">
															<span class="vc_tta-panel-title">
																<a data-vc-container=".vc_tta-container"
																	data-vc-accordion=""
																	data-vc-target="#1494086395559-cc2011dc-2c30"></a>
															</span>

															<div
																class="wpb_text_column wpb_content_element  vc_custom_1494086625025">
																<div class="wpb_wrapper">
																	<h4><strong>ماذا يحدث في حال قبولي للعرض؟</strong>
																	</h4>
																	<p>سیقوم مستشارك بإرسال العرض النهائي بشكل مفصل
																		للإطلاع علیه قبل إجراء الحجوزات. في حال حاذ
																		العرض النهائي على رضاك سیتم البدأ مباشرة في
																		یتنفیذ الحجوزات.</p>

																</div>
															</div>
														</div>
													</div>
													<div class="vc_tta-panel" id="1494086431931-eb5d3863-c7c5"
														data-vc-content=".vc_tta-panel-body">
														<div class="vc_tta-panel-body">
															<span class="vc_tta-panel-title">
																<a data-vc-container=".vc_tta-container"
																	data-vc-accordion=""
																	data-vc-target="#1494086431931-eb5d3863-c7c5"></a>
															</span>

															<div
																class="wpb_text_column wpb_content_element  vc_custom_1494086596152">
																<div class="wpb_wrapper">
																	<h4><strong>كيف تتم عملية الحجز؟</strong></h4>
																	<p>یقوم فریق ترافونییر بعمل كل الحجوزات المطلوبة
																		بالنیابة عنك موفرًا علیك بذلك عناء التواصل مع
																		أكثر من جهة (فنادق، شركات تأجیر إلخ). سیكون
																		مستشارك الخاص مصدر تعتمد علیه في إتمام الحجوزات
																		وتزویدك بكل التفاصیل اللازمة ومساعدتك في حال
																		حدوث أي تغیرات طارئة.</p>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="wpb_column column_container col-md-2">
								<div class="vc_column-inner wpb_wrapper">
								</div>
							</div>
						</div>
						<!--End .row-->
					</div>
					<!--End .container-->
				</div>
			</div>
		</div>
		<!-- end row -->
	</div>
@endsection


@section('jsfrontend')
@endsection
