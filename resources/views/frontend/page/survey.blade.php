@extends('frontend.layouts.master')

@section('titlefrontend')
{{ str_replace("-"," ",ucfirst(TranslationHelper::translate('frontend'))) }}
@endsection

@section('cssfrontend')

<script type='text/javascript'>
/* <![CDATA[ */
var list_location = {"list":"\"\""};
var st_checkout_text = {"without_pp":"\u064a\u0642\u062f\u0645 \u0637\u0644\u0628","with_pp":"\u062d\u062c\u0632 \u0627\u0644\u0622\u0646","validate_form":"\u064a\u0631\u062c\u0649 \u062a\u0639\u0628\u0626\u0629 \u062c\u0645\u064a\u0639 \u0627\u0644\u062d\u0642\u0648\u0644 \u0627\u0644\u0645\u0637\u0644\u0648\u0628\u0629","error_accept_term":"\u0648\u062a\u0641\u0636\u0644\u0648\u0627 \u0628\u0642\u0628\u0648\u0644 \u0627\u0644\u0628\u0646\u0648\u062f \u0648\u0627\u0644\u0634\u0631\u0648\u0637","adult_price":"\u0645\u0627\u0643\u0633 \u0627\u0644\u0643\u0628\u0627\u0631","child_price":"Child","infant_price":"Infant","adult":"\u0645\u0627\u0643\u0633 \u0627\u0644\u0643\u0628\u0627\u0631","child":"Child","infant":"Infant","price":"\u0627\u0644\u0633\u0639\u0631","origin_price":"Origin Price"};
var st_params = {"theme_url":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler","site_url":"https:\/\/www.travoneer.com","ajax_url":"https:\/\/www.travoneer.com\/wp-admin\/admin-ajax.php","loading_url":"https:\/\/www.travoneer.com\/wp-admin\/images\/wpspin_light.gif","st_search_nonce":"ee40d98abb","facebook_enable":"off","facbook_app_id":"","booking_currency_precision":"2","thousand_separator":".","decimal_separator":",","currency_symbol":"\u20ac","currency_position":"left","currency_rtl_support":"off","free_text":"\u0645\u0637\u0644\u0642 \u0627\u0644\u062d\u0631\u064a\u0629","date_format":"dd\/mm\/yyyy","date_format_calendar":"dd\/mm\/yyyy","time_format":"12h","mk_my_location":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/my_location.png","locale":"ar","header_bgr":{"background-color":"#215384","background-repeat":"","background-attachment":"","background-position":"","background-size":"","background-image":""},"text_refresh":"Refresh","date_fomat":"DD\/MM\/YYYY","text_loading":"Loading...","text_no_more":"No More","weather_api_key":"a82498aa9918914fa4ac5ba584a7e623"};
var st_timezone = {"timezone_string":""};
var st_list_map_params = {"mk_my_location":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/my_location.png","text_my_location":"3000 m radius","text_no_result":"No Result","cluster_0":"<div class='cluster cluster-1'>CLUSTER_COUNT<\/div>","cluster_20":"<div class='cluster cluster-2'>CLUSTER_COUNT<\/div>","cluster_50":"<div class='cluster cluster-3'>CLUSTER_COUNT<\/div>","cluster_m1":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/map\/m1.png","cluster_m2":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/map\/m2.png","cluster_m3":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/map\/m3.png","cluster_m4":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/map\/m4.png","cluster_m5":"https:\/\/www.travoneer.com\/wp-content\/themes\/traveler\/img\/map\/m5.png"};
var st_config_partner = {"text_er_image_format":""};
var st_location_from_to = {"lists":[]};
var st_hotel_localize = {"booking_required_adult":"\u0627\u0644\u0623\u0639\u0645\u0627\u0631 \u0645\u0646 \u0627\u0644\u0623\u0637\u0641\u0627\u0644","booking_required_children":"\u0627\u0644\u0623\u0639\u0645\u0627\u0631 \u0645\u0646 \u0627\u0644\u0623\u0637\u0641\u0627\u0644","booking_required_adult_children":"\u0627\u0644\u0623\u0639\u0645\u0627\u0631 \u0645\u0646 \u0627\u0644\u0623\u0637\u0641\u0627\u0644","room":"\u063a\u0631\u0641\u0629","is_aoc_fail":"\u0627\u0644\u0623\u0639\u0645\u0627\u0631 \u0645\u0646 \u0627\u0644\u0623\u0637\u0641\u0627\u0644","is_not_select_date":"\u064a\u0631\u062c\u0649 \u062a\u062d\u062f\u064a\u062f \u0645\u0648\u0639\u062f \u062a\u0633\u062c\u064a\u0644 \u0625\u062c\u0631\u0627\u0621\u0627\u062a \u0627\u0644\u0648\u0635\u0648\u0644 \u0648\u062a\u0627\u0631\u064a\u062e \u0627\u0644\u0645\u063a\u0627\u062f\u0631\u0629 \u062a\u0627\u0631\u064a\u062e","is_not_select_check_in_date":"Please select Check-in date","is_not_select_check_out_date":"Please select Check-out date","is_host_name_fail":"\u0645\u0646 \u0641\u0636\u0644\u0643\u060c \u062a\u0648\u0641\u064a\u0631 \u0627\u0633\u0645 \u0627\u0644\u0633\u0645\u0629\u060c \u0633\u0628\u064a\u0643\u0629 \u0648\u0627\u0644\u0646\u0648\u0639."};
var st_icon_picker = {"icon_list":["fa-glass","fa-music","fa-search","fa-envelope-o","fa-heart","fa-star","fa-star-o","fa-user","fa-film","fa-th-large","fa-th","fa-th-list","fa-check","fa-remove","fa-close","fa-times","fa-search-plus","fa-search-minus","fa-power-off","fa-signal","fa-gear","fa-cog","fa-trash-o","fa-home","fa-file-o","fa-clock-o","fa-road","fa-download","fa-arrow-circle-o-down","fa-arrow-circle-o-up","fa-inbox","fa-play-circle-o","fa-rotate-right","fa-repeat","fa-refresh","fa-list-alt","fa-lock","fa-flag","fa-headphones","fa-volume-off","fa-volume-down","fa-volume-up","fa-qrcode","fa-barcode","fa-tag","fa-tags","fa-book","fa-bookmark","fa-print","fa-camera","fa-font","fa-bold","fa-italic","fa-text-height","fa-text-width","fa-align-left","fa-align-center","fa-align-right","fa-align-justify","fa-list","fa-dedent","fa-outdent","fa-indent","fa-video-camera","fa-photo","fa-image","fa-picture-o","fa-pencil","fa-map-marker","fa-adjust","fa-tint","fa-edit","fa-pencil-square-o","fa-share-square-o","fa-check-square-o","fa-arrows","fa-step-backward","fa-fast-backward","fa-backward","fa-play","fa-pause","fa-stop","fa-forward","fa-fast-forward","fa-step-forward","fa-eject","fa-chevron-left","fa-chevron-right","fa-plus-circle","fa-minus-circle","fa-times-circle","fa-check-circle","fa-question-circle","fa-info-circle","fa-crosshairs","fa-times-circle-o","fa-check-circle-o","fa-ban","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrow-down","fa-mail-forward","fa-share","fa-expand","fa-compress","fa-plus","fa-minus","fa-asterisk","fa-exclamation-circle","fa-gift","fa-leaf","fa-fire","fa-eye","fa-eye-slash","fa-warning","fa-exclamation-triangle","fa-plane","fa-calendar","fa-random","fa-comment","fa-magnet","fa-chevron-up","fa-chevron-down","fa-retweet","fa-shopping-cart","fa-folder","fa-folder-open","fa-arrows-v","fa-arrows-h","fa-bar-chart-o","fa-bar-chart","fa-twitter-square","fa-facebook-square","fa-camera-retro","fa-key","fa-gears","fa-cogs","fa-comments","fa-thumbs-o-up","fa-thumbs-o-down","fa-star-half","fa-heart-o","fa-sign-out","fa-linkedin-square","fa-thumb-tack","fa-external-link","fa-sign-in","fa-trophy","fa-github-square","fa-upload","fa-lemon-o","fa-phone","fa-square-o","fa-bookmark-o","fa-phone-square","fa-twitter","fa-facebook-f","fa-facebook","fa-github","fa-unlock","fa-credit-card","fa-feed","fa-rss","fa-hdd-o","fa-bullhorn","fa-bell","fa-certificate","fa-hand-o-right","fa-hand-o-left","fa-hand-o-up","fa-hand-o-down","fa-arrow-circle-left","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-circle-down","fa-globe","fa-wrench","fa-tasks","fa-filter","fa-briefcase","fa-arrows-alt","fa-group","fa-users","fa-chain","fa-link","fa-cloud","fa-flask","fa-cut","fa-scissors","fa-copy","fa-files-o","fa-paperclip","fa-save","fa-floppy-o","fa-square","fa-navicon","fa-reorder","fa-bars","fa-list-ul","fa-list-ol","fa-strikethrough","fa-underline","fa-table","fa-magic","fa-truck","fa-pinterest","fa-pinterest-square","fa-google-plus-square","fa-google-plus","fa-money","fa-caret-down","fa-caret-up","fa-caret-left","fa-caret-right","fa-columns","fa-unsorted","fa-sort","fa-sort-down","fa-sort-desc","fa-sort-up","fa-sort-asc","fa-envelope","fa-linkedin","fa-rotate-left","fa-undo","fa-legal","fa-gavel","fa-dashboard","fa-tachometer","fa-comment-o","fa-comments-o","fa-flash","fa-bolt","fa-sitemap","fa-umbrella","fa-paste","fa-clipboard","fa-lightbulb-o","fa-exchange","fa-cloud-download","fa-cloud-upload","fa-user-md","fa-stethoscope","fa-suitcase","fa-bell-o","fa-coffee","fa-cutlery","fa-file-text-o","fa-building-o","fa-hospital-o","fa-ambulance","fa-medkit","fa-fighter-jet","fa-beer","fa-h-square","fa-plus-square","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-double-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-angle-down","fa-desktop","fa-laptop","fa-tablet","fa-mobile-phone","fa-mobile","fa-circle-o","fa-quote-left","fa-quote-right","fa-spinner","fa-circle","fa-mail-reply","fa-reply","fa-github-alt","fa-folder-o","fa-folder-open-o","fa-smile-o","fa-frown-o","fa-meh-o","fa-gamepad","fa-keyboard-o","fa-flag-o","fa-flag-checkered","fa-terminal","fa-code","fa-mail-reply-all","fa-reply-all","fa-star-half-empty","fa-star-half-full","fa-star-half-o","fa-location-arrow","fa-crop","fa-code-fork","fa-unlink","fa-chain-broken","fa-question","fa-info","fa-exclamation","fa-superscript","fa-subscript","fa-eraser","fa-puzzle-piece","fa-microphone","fa-microphone-slash","fa-shield","fa-calendar-o","fa-fire-extinguisher","fa-rocket","fa-maxcdn","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-circle-down","fa-html5","fa-css3","fa-anchor","fa-unlock-alt","fa-bullseye","fa-ellipsis-h","fa-ellipsis-v","fa-rss-square","fa-play-circle","fa-ticket","fa-minus-square","fa-minus-square-o","fa-level-up","fa-level-down","fa-check-square","fa-pencil-square","fa-external-link-square","fa-share-square","fa-compass","fa-toggle-down","fa-caret-square-o-down","fa-toggle-up","fa-caret-square-o-up","fa-toggle-right","fa-caret-square-o-right","fa-euro","fa-eur","fa-gbp","fa-dollar","fa-usd","fa-rupee","fa-inr","fa-cny","fa-rmb","fa-yen","fa-jpy","fa-ruble","fa-rouble","fa-rub","fa-won","fa-krw","fa-bitcoin","fa-btc","fa-file","fa-file-text","fa-sort-alpha-asc","fa-sort-alpha-desc","fa-sort-amount-asc","fa-sort-amount-desc","fa-sort-numeric-asc","fa-sort-numeric-desc","fa-thumbs-up","fa-thumbs-down","fa-youtube-square","fa-youtube","fa-xing","fa-xing-square","fa-youtube-play","fa-dropbox","fa-stack-overflow","fa-instagram","fa-flickr","fa-adn","fa-bitbucket","fa-bitbucket-square","fa-tumblr","fa-tumblr-square","fa-long-arrow-down","fa-long-arrow-up","fa-long-arrow-left","fa-long-arrow-right","fa-apple","fa-windows","fa-android","fa-linux","fa-dribbble","fa-skype","fa-foursquare","fa-trello","fa-female","fa-male","fa-gittip","fa-gratipay","fa-sun-o","fa-moon-o","fa-archive","fa-bug","fa-vk","fa-weibo","fa-renren","fa-pagelines","fa-stack-exchange","fa-arrow-circle-o-right","fa-arrow-circle-o-left","fa-toggle-left","fa-caret-square-o-left","fa-dot-circle-o","fa-wheelchair","fa-vimeo-square","fa-turkish-lira","fa-try","fa-plus-square-o","fa-space-shuttle","fa-slack","fa-envelope-square","fa-wordpress","fa-openid","fa-institution","fa-bank","fa-university","fa-mortar-board","fa-graduation-cap","fa-yahoo","fa-google","fa-reddit","fa-reddit-square","fa-stumbleupon-circle","fa-stumbleupon","fa-delicious","fa-digg","fa-pied-piper","fa-pied-piper-alt","fa-drupal","fa-joomla","fa-language","fa-fax","fa-building","fa-child","fa-paw","fa-spoon","fa-cube","fa-cubes","fa-behance","fa-behance-square","fa-steam","fa-steam-square","fa-recycle","fa-automobile","fa-car","fa-cab","fa-taxi","fa-tree","fa-spotify","fa-deviantart","fa-soundcloud","fa-database","fa-file-pdf-o","fa-file-word-o","fa-file-excel-o","fa-file-powerpoint-o","fa-file-photo-o","fa-file-picture-o","fa-file-image-o","fa-file-zip-o","fa-file-archive-o","fa-file-sound-o","fa-file-audio-o","fa-file-movie-o","fa-file-video-o","fa-file-code-o","fa-vine","fa-codepen","fa-jsfiddle","fa-life-bouy","fa-life-buoy","fa-life-saver","fa-support","fa-life-ring","fa-circle-o-notch","fa-ra","fa-rebel","fa-ge","fa-empire","fa-git-square","fa-git","fa-y-combinator-square","fa-yc-square","fa-hacker-news","fa-tencent-weibo","fa-qq","fa-wechat","fa-weixin","fa-send","fa-paper-plane","fa-send-o","fa-paper-plane-o","fa-history","fa-circle-thin","fa-header","fa-paragraph","fa-sliders","fa-share-alt","fa-share-alt-square","fa-bomb","fa-soccer-ball-o","fa-futbol-o","fa-tty","fa-binoculars","fa-plug","fa-slideshare","fa-twitch","fa-yelp","fa-newspaper-o","fa-wifi","fa-calculator","fa-paypal","fa-google-wallet","fa-cc-visa","fa-cc-mastercard","fa-cc-discover","fa-cc-amex","fa-cc-paypal","fa-cc-stripe","fa-bell-slash","fa-bell-slash-o","fa-trash","fa-copyright","fa-at","fa-eyedropper","fa-paint-brush","fa-birthday-cake","fa-area-chart","fa-pie-chart","fa-line-chart","fa-lastfm","fa-lastfm-square","fa-toggle-off","fa-toggle-on","fa-bicycle","fa-bus","fa-ioxhost","fa-angellist","fa-cc","fa-shekel","fa-sheqel","fa-ils","fa-meanpath","fa-buysellads","fa-connectdevelop","fa-dashcube","fa-forumbee","fa-leanpub","fa-sellsy","fa-shirtsinbulk","fa-simplybuilt","fa-skyatlas","fa-cart-plus","fa-cart-arrow-down","fa-diamond","fa-ship","fa-user-secret","fa-motorcycle","fa-street-view","fa-heartbeat","fa-venus","fa-mars","fa-mercury","fa-intersex","fa-transgender","fa-transgender-alt","fa-venus-double","fa-mars-double","fa-venus-mars","fa-mars-stroke","fa-mars-stroke-v","fa-mars-stroke-h","fa-neuter","fa-genderless","fa-facebook-official","fa-pinterest-p","fa-whatsapp","fa-server","fa-user-plus","fa-user-times","fa-hotel","fa-bed","fa-viacoin","fa-train","fa-subway","fa-medium","fa-yc","fa-y-combinator","fa-optin-monster","fa-opencart","fa-expeditedssl","fa-battery-4","fa-battery-full","fa-battery-3","fa-battery-three-quarters","fa-battery-2","fa-battery-half","fa-battery-1","fa-battery-quarter","fa-battery-0","fa-battery-empty","fa-mouse-pointer","fa-i-cursor","fa-object-group","fa-object-ungroup","fa-sticky-note","fa-sticky-note-o","fa-cc-jcb","fa-cc-diners-club","fa-clone","fa-balance-scale","fa-hourglass-o","fa-hourglass-1","fa-hourglass-start","fa-hourglass-2","fa-hourglass-half","fa-hourglass-3","fa-hourglass-end","fa-hourglass","fa-hand-grab-o","fa-hand-rock-o","fa-hand-stop-o","fa-hand-paper-o","fa-hand-scissors-o","fa-hand-lizard-o","fa-hand-spock-o","fa-hand-pointer-o","fa-hand-peace-o","fa-trademark","fa-registered","fa-creative-commons","fa-gg","fa-gg-circle","fa-tripadvisor","fa-odnoklassniki","fa-odnoklassniki-square","fa-get-pocket","fa-wikipedia-w","fa-safari","fa-chrome","fa-firefox","fa-opera","fa-internet-explorer","fa-tv","fa-television","fa-contao","fa-500px","fa-amazon","fa-calendar-plus-o","fa-calendar-minus-o","fa-calendar-times-o","fa-calendar-check-o","fa-industry","fa-map-pin","fa-map-signs","fa-map-o","fa-map","fa-commenting","fa-commenting-o","fa-houzz","fa-vimeo","fa-black-tie","fa-fonticons","fa-reddit-alien","fa-edge","fa-credit-card-alt","fa-codiepie","fa-modx","fa-fort-awesome","fa-usb","fa-product-hunt","fa-mixcloud","fa-scribd","fa-pause-circle","fa-pause-circle-o","fa-stop-circle","fa-stop-circle-o","fa-shopping-bag","fa-shopping-basket","fa-hashtag","fa-bluetooth","fa-bluetooth-b","fa-percent","fa-gitlab","fa-wpbeginner","fa-wpforms","fa-envira","fa-universal-access","fa-wheelchair-alt","fa-question-circle-o","fa-blind","fa-audio-description","fa-volume-control-phone","fa-braille","fa-assistive-listening-systems","fa-asl-interpreting","fa-american-sign-language-interpreting","fa-deafness","fa-hard-of-hearing","fa-deaf","fa-glide","fa-glide-g","fa-signing","fa-sign-language","fa-low-vision","fa-viadeo","fa-viadeo-square","fa-snapchat","fa-snapchat-ghost","fa-snapchat-square"]};
var st_timezone = {"timezone_string":""};
/* ]]> */
</script>
<script type='text/javascript' src='{{ asset('frontend/wp-includes/js/jquery/jquery.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-includes/js/jquery/jquery-migrate.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-content/plugins/travoneer-extend/public/js/jquery.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-content/plugins/travoneer-extend/public/js/wickedpicker.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-content/plugins/travoneer-extend/public/js/bootstrap-datepicker.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-content/plugins/travoneer-extend/public/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-content/plugins/travoneer-extend/public/js/function.js') }}'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/","uid":"0","time":"1684052835","secure":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='{{ asset('frontend/wp-includes/js/utils.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('frontend/wp-includes/js/plupload/plupload.full.min.js') }}'></script>

            <!-- End Custom_css.php-->
            <!-- start css hook filter -->
            <style type="text/css" id="st_custom_css">
                            </style>
            <!-- end css hook filter -->
            <!-- css disable javascript -->
                        <style type="text/css" id="st_enable_javascript">
                .search-tabs-bg > .tabbable >.tab-content > .tab-pane{display: none; opacity: 0;}.search-tabs-bg > .tabbable >.tab-content > .tab-pane.active{display: block;opacity: 1;}.search-tabs-to-top { margin-top: -120px;}            </style>

            <style>
                @font-face { font-family: 'arschrift';
             src: url('http://www.travoneer.com/arabicfont/arschrift.otf') format('opentype'); }

.car_booking_row1{
    border: 1px !important;
    padding: 10px !important;
    background-color: #f7f7f7 !important;
    border-color: #3d3d3d !important;
    border-style: solid !important;
}

.car_booking_row2{
    border: 1px !important;
    padding: 10px !important;
    background-color: #4d4d4d !important;
    border-color: #0a0a0a !important;
    border-style: solid !important;
}
.car_booking_row3{
    border: 1px;
    padding: 10px;
    background-color: #fafafa;
    border-color: #d6d6d6;
    border-style: solid;
}
            </style>
  
@endsection

@section('contentfrontend')
  </div>
  </div>
  <div class="global-wrap container-fluid">
    <div class="row">


      <section class="s_step">
        <div class="container">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="item_step" id="item_step_head">
              <ol class="list-inline text-center step-indicator">
                <li class="complete">
                  <div class="step">الاسئلة</span></div>
                </li>
                <li id="step_2_head" class="inactive ">
                  <div class="step">المواعيد</div>
                </li>
                <li class="inactive">
                  <div class="step">بياناتك</div>
                </li>
              </ol>
            </div>
          </div>
          <div class="col-md-3">
            <span class="list_number" id="ques_counter"><span id="num_of_question">1</span>/<strong>5</strong>
              <p>السؤال</p>
            </span>
          </div>
        </div>
      </section>
      <section class="question1">
        <div class="container">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="chek_item_img">
              <div style="display: none;" id="alert_answer" class="alert alert-danger alert_answer" role="alert">عليك
                اختار او ادخال الإجابة.</div>
              <div style="display: none;" id="alert_error" class="alert alert-danger alert_error" role="alert">حدثت
                مشكلة ما في الاتصال, الرجاء حدث الصفحة و حاول مرة اخرى</div>
              <div class="question_container" id="question_container">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
              </div>
              <div style="width:100%;text-align:center">
                <a class="last nextpevbtn pevbtn" href="#" id="prev_question">السابق<span class="loader"
                    id="loader_pre"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span></a>
                <a class="next nextpevbtn" href="#" id="ans_question">التالي<span class="loader" id="loader"><i
                      class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </section>

    </div>
    <!-- end row -->
  </div>



@endsection


@section('jsfrontendspcial')

<script type="text/javascript">
  jQuery(document).ready(function ($) {
    var prev = '';
    var q_id = parseInt("0");
    var num_of_ques = parseInt("5");
    var register_url = 'http://www.travoneer.com/sign-in/';
    var all_anses = [];
    var page_id = '8143';
    function TN_Get_question($data, $id) {
      if($data == null){ 
//         window.location.replace(register_url); 
//         console.log(register_url);
        return 'next'; 
      }
      var $result = '';
      var PLUGIN_URL = 'https://www.travoneer.com/wp-content/plugins/travoneer-extend/';
      switch($data.question_type){
        case 'type_1':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';
          $result += '<ul class="selimgsul ansies-cont" data-limit="'+$data.answers_limit+'" data-count="0">';
          var answers = $data.answers_image;
          for (var $key = 0; $key < answers.length; $key++) { 
            var $val = answers[$key];
            $result += '<li><div class="slideThree">';

            $result += '<input class="checkbox_ans type_1_answer" type="checkbox" value="'+$val.text+'" data-img="'+$val.img+'" id="check_'+$id+'ans_'+$key+'" name="check_ans_img"/>';
            $result += '<label for="check_'+$id+'ans_'+$key+'"><img src="'+$val.img+'" alt="'+$val.text+'" title="'+$val.text+'"></label>';

            $result += '</div></li>';
          }

          $result += '<li><div class="slideThree dislike">  ';

          $result += '<input class="type_1_answer uncheckall" type="checkbox" value="ليس مما سبق" id="slideThree'+$id+'" name="slideThree8"/>';
          $result += ' <label for="slideThree'+$id+'"><img src="'+PLUGIN_URL+'/public/icon/dislike.png"><h3>ليس مما سبق</h3></label>';

          $result += '</div></li>';
          $result += '</ul>';
          $result += '</div>';
          break;
        case 'type_2':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';
          $result += '<ul>';

          var answers = $data.answers_image;
          for (var $key = 0; $key < answers.length; $key++) { 
            var $val = answers[$key];
            $result += '<li><div class="slideThree">';

            $result += '<input class="radio_image type_2_answer" type="checkbox" value="'+$val.text+'" data-img="'+$val.img+'" id="check_'+$id+'ans_'+$key+'" name="check_ans_img"/>';
            $result += '<label for="check_'+$id+'ans_'+$key+'"><img src="'+$val.img+'" alt="'+$val.text+'" title="'+$val.text+'"></label>';

            $result += '</div></li>';
          }
          
          $result += '</div>';
          break;
        case 'type_3':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';
          $result += '<div class="ansies-cont" data-limit="'+$data.answers_limit+'" data-count="0">';

          var answers = $data.answers_text;
          for (var $key = 0; $key < answers.length; $key++) { 
            var $val = answers[$key];
            $result += '<div class="slideTows">';

            $result += '<input class="radio_ans type_3_answer" type="checkbox" value="'+$val+'" id="checktxt_'+$id+'ans_'+$key+'" name="check_ans_txt"/>';
            $result += '<label for="checktxt_'+$id+'ans_'+$key+'">'+$val+'</label>';

            $result += '</div>';
          }
          $result += '</div>';
          $result += '</div>';
          break;
        case 'type_4':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';
          
          var answers = $data.answers_text;
          for (var $key = 0; $key < answers.length; $key++) { 
            var $val = answers[$key];
            $result += '<div class="slideTow">';

            $result += '<input class="radio_ans type_4_answer" type="radio" value="'+$val+'" id="radio_'+$id+'ans_'+$key+'" name="radio_ans"/>';
            $result += '<label for="radio_'+$id+'ans_'+$key+'">'+$val+'</label>';

            $result += '</div>';
          }
          
          $result += '</div>';
          break;

        case 'type_5':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';

          $result += '<div class="col-md-3">';
          $result += '</div>';
          $result += '<div class="col-md-6">';
          $result += '<input class="chek_item_imginput" type="text" name="" placeholder="ادخل الاجابة">';
          $result += '</div>';
          $result += '<div class="col-md-3">';
          $result += '</div>';
          
          $result += '</div>';
          break;
		case 'type_6':

          $result += '<div class="question_cont" id="qid_'+$id+'">';
          $result += '<input type="hidden" id="question_type_'+$id+'" value="'+$data.question_type+'" />';
          $result += '<input type="hidden" id="question_text_'+$id+'" value="'+$data.question_text+'" />';
          $result += '<h2>';
          $result += $data.question_text;
          $result += '</h2>';

          $result += '<div class="col-md-3">';
          $result += '</div>';
          $result += '<div class="col-md-6">';
          $result += '<input class="chek_item_imginput" type="text" name="" placeholder="ادخل الاجابة">';
          $result += '</div>';
          $result += '<div class="col-md-3">';
          $result += '</div>';
          
          $result += '</div>';
          break;
        default:
          $result = '';
      }
//       $('#num_of_question').empty().append(q_id+1);
      return $result;
    }
    
    
    var error_msg = '<div class="alert alert-danger alert_answer" role="alert">عليك اختار او ادخال الإجابة.</div>';
    var all_question = JSON.parse('[{"id":0,"question_type":"type_1","question_text":"\u0623\u0647\u0644\u064b\u0627 \u0628\u0643 \u0639\u0644\u0649 \u062a\u0631\u0627\u0641\u0648\u0646\u064a\u064a\u0631 <br>\u0628\u0639\u062f \u0623\u0646 \u062a\u0634\u0627\u0631\u0643\u0646\u0627 \u0631\u063a\u0628\u0627\u062a\u0643 \u0644\u0631\u062d\u0644\u062a\u0643 \u0627\u0644\u0642\u0627\u062f\u0645\u0629 \u0633\u064a\u0642\u0648\u0645 \u0645\u0633\u062a\u0634\u0627\u0631\u0643 \u0627\u0644\u0633\u064a\u0627\u062d\u064a \u0627\u0644\u062e\u0627\u0635 \u0628\u0627\u0644\u062a\u0648\u0627\u0635\u0644 \u0645\u0639\u0643<br>\u0623\u0646\u0627 \u0623\u0628\u062d\u062b \u0639\u0646:","answers_limit":"5","answers_image":[{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_rentacar-1.jpg","text":"\u062a\u0623\u062c\u064a\u0631 \u0633\u064a\u0627\u0631\u0629"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_limousine.jpg","text":"\u0633\u064a\u0627\u0631\u0629 \u0645\u0639 \u0633\u0627\u0626\u0642"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_hotel.jpg","text":"\u0641\u0646\u0627\u062f\u0642"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_apartment.jpg","text":"\u0634\u0642\u0642 \u0648\u0623\u0643\u0648\u0627\u062e"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_transfer.jpg","text":"\u062a\u0646\u0642\u0644\u0627\u062a"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_tour_new.jpg","text":"\u062c\u0648\u0644\u0629 \u0633\u064a\u0627\u062d\u064a\u0629"}]},{"id":1,"question_type":"type_1","question_text":"\u0623\u0631\u064a\u062f \u0632\u064a\u0627\u0631\u0629 ...","answers_limit":"5","answers_image":[{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_spain.jpg","text":"\u0625\u0633\u0628\u0627\u0646\u064a\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_germany.jpg","text":"\u0623\u0644\u0645\u0627\u0646\u064a\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_italy.jpg","text":"\u0625\u064a\u0637\u0627\u0644\u064a\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_switzerland.jpg","text":"\u0633\u0648\u064a\u0633\u0631\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_france.jpg","text":"\u0641\u0631\u0646\u0633\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_austria.jpg","text":"\u0627\u0644\u0646\u0645\u0633\u0627"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_Bosnia.jpg","text":"\u0627\u0644\u0628\u0648\u0633\u0646\u0629"}]},{"id":2,"question_type":"type_1","question_text":"\u0623\u062b\u0646\u0627\u0621 \u0631\u062d\u0644\u062a\u064a \u0623\u0641\u0636\u0644 \u0632\u064a\u0627\u0631\u0629 ...","answers_limit":"1","answers_image":[{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_capital.jpg","text":"\u0645\u062f\u0646 \u0648\u0639\u0648\u0627\u0635\u0645"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_village.jpg","text":"\u0642\u0631\u0649 \u0648 \u0623\u0631\u064a\u0627\u0641"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_both.jpg","text":"\u0643\u0644\u0627\u0647\u0645\u0627"}]},{"id":3,"question_type":"type_1","question_text":"\u0623\u062b\u0646\u0627\u0621 \u0631\u062d\u0644\u062a\u064a \u0623\u062d\u0631\u0635 \u0639\u0644\u0649 ... (\u0663 \u0625\u062e\u062a\u064a\u0627\u0631\u0627\u062a)","answers_limit":"3","answers_image":[{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_mat7af.jpg","text":"\u0632\u064a\u0627\u0631\u0629 \u0627\u0644\u0645\u062a\u0627\u062d\u0641 \u0648 \u0627\u0644\u0622\u062b\u0627\u0631"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_relaxation.jpg","text":"\u0627\u0644\u0631\u0627\u062d\u0629 \u0648\u0627\u0644\u0625\u0633\u062a\u0631\u062e\u0627\u0621"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_romantic1.jpg","text":"\u0623\u0646\u0634\u0637\u0647 \u0631\u0648\u0645\u0627\u0646\u0633\u064a\u0629"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_family.jpg","text":"\u0627\u0646\u0634\u0637\u0629 \u0623\u0633\u0631\u064a\u0629"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_3stars.jpg","text":"\u0627\u0644\u062a\u0645\u062a\u0639 \u0645\u0639 \u0623\u0642\u0644 \u062a\u0643\u0644\u0641\u0629 - 3 \u0646\u062c\u0648\u0645"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_4stars.jpg","text":"\u0627\u0644\u062a\u0645\u062a\u0639 \u0645\u0639 \u0623\u0646\u0633\u0628 \u0627\u0644\u062e\u062f\u0645\u0627\u062a - 4 \u0646\u062c\u0648\u0645"},{"img":"index.html\/\/www.travoneer.com\/wp-content\/uploads\/2017\/02\/survey_5stars.jpg","text":"\u0627\u0644\u062a\u0645\u062a\u0639 \u0645\u0639 \u0627\u0641\u0636\u0644 \u0627\u0644\u0645\u0645\u064a\u0632\u0627\u062a - 5 \u0646\u062c\u0648\u0645"}]},{"id":4,"question_type":"type_4","question_text":"\u0623\u0646\u0627 \u0623\u0633\u0627\u0641\u0631 \u0625\u0644\u0649 \u0623\u0648\u0631\u0648\u0628\u0627 ...","answers_text":["\u0645\u0631\u0629 \u0643\u0644 \u0633\u0646\u0629","\u0645\u0631\u062a\u064a\u0646 \u0641\u064a \u0627\u0644\u0633\u0646\u0629","\u0663 \u0645\u0631\u0627\u062a \u0641\u064a \u0627\u0644\u0633\u0646\u0629","\u0623\u0643\u062b\u0631 \u0645\u0646 \u0663 \u0645\u0631\u0627\u062a \u0633\u0646\u0648\u064a\u0627","\u0647\u0630\u0647 \u062a\u062c\u0631\u0628\u062a\u064a \u0627\u0644\u0623\u0648\u0644\u0649 \u0641\u064a \u0627\u0644\u0633\u0641\u0631"]}]');
//     console.log(TN_Get_question(all_question[q_id]));
    
//     $('#question_container').empty().append(TN_Get_question(all_question[q_id]));

    
    $(document).on( "change", '.uncheckall',function(e){
      if ($(this).is(':checked')) {
        $(document).find('.alert_answer').hide();
        $(document).find('.alert_error').hide();
//         console.log('uncheck all');
        $(this).parents('.selimgsul').find('.checkbox_ans').prop('checked', false);
        $(this).parents('.ansies-cont').data('count', 0);
      }
    });
    $(document).on( "change", '.checkbox_ans',function(e){
      if ($(this).is(':checked')) {
        var lmt = $(this).parents('.ansies-cont').data('limit');
        var cnt = $(this).parents('.ansies-cont').data('count');
        var sdas = cnt + 1;
        $(this).parents('.ansies-cont').data('count', sdas);
        cnt = $(this).parents('.ansies-cont').data('count');
//         console.log('count: '+cnt + ' limit: '+lmt);
        if(parseInt(cnt) > parseInt(lmt)) { 
          var sdas = cnt - 1;
          $(this).parents('.ansies-cont').data('count', sdas);
          $(this).prop('checked', false);
          return;
        }
        $(document).find('.alert_answer').hide();
        $(document).find('.alert_error').hide();
        $(this).parents('.selimgsul').find('.uncheckall').prop('checked', false);
      }else{
        var cnt = $(this).parents('.ansies-cont').data('count');
        var sdas = 0;
        if(parseInt(cnt) > 0) sdas = cnt - 1;
//         console.log('count: '+cnt );
        $(this).parents('.ansies-cont').data('count', sdas);
      }
    });
    $(document).on( "change", '.radio_image',function(e){
      if ($(this).is(':checked')) {
        $(document).find('.alert_answer').hide();
        $(document).find('.alert_error').hide();
        $('.radio_image').prop('checked', false);
        $(this).prop('checked', true);
      }
    });
    var allow_click = true;
    var questions_end = false;
    function TN_get_answers(q_id) {
      var qtype = $(document).find('#question_type_'+q_id).val();
      var qtext = $(document).find('#question_text_'+q_id).val();
//       console.log($(document).find('#qid_'+q_id));
      var $result = '';
      switch(qtype){
        case 'type_1':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('input.type_1_answer').each(function(index, elm){
            if ($(this).is(':checked')) {
              no_ans_exists = false;
              var anstxt = $(this).val();
              var ansimg = $(this).data('img');
              if(in_index == 0){
                $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'", "ans_img": "'+ansimg+'"}';
              }else{
              $result += ', {"id": "'+index+'", "ans_txt": "'+anstxt+'", "ans_img": "'+ansimg+'"}';
              }
              in_index++;
            }
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          break;
        case 'type_2':

          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('input.type_2_answer').each(function(index, elm){
            if ($(this).is(':checked')) {
              no_ans_exists = false;
              var anstxt = $(this).val();
              var ansimg = $(this).data('img');
              if(in_index == 0){
                $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'", "ans_img": "'+ansimg+'"}';
              }else{
                $result += ', {"id": "'+index+'", "ans_txt": "'+anstxt+'", "ans_img": "'+ansimg+'"}';
              }
              in_index++;
            }
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          break;
        case 'type_3':

          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('input.type_3_answer').each(function(index, elm){
            if ($(this).is(':checked')) {
              no_ans_exists = false;
              var anstxt = $(this).val();
              if(in_index == 0){
                $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
              }else{
                $result += ', {"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
              }
              in_index++;
            }
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          break;
        case 'type_4':
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('input.type_4_answer').each(function(index, elm){
            if ($(this).is(':checked')) {
              no_ans_exists = false;
              var anstxt = $(this).val();
              if(in_index == 0){
                $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
              }else{
                $result += ', {"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
              }
              in_index++;
            }
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';

          break;

        case 'type_5':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          $(document).find('#qid_'+q_id).find('input.chek_item_imginput').each(function(index, elm){
            var anstxt = $(this).val();
            if(anstxt != ''){ no_ans_exists = false; }
            $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          
          break;
        case 'type_6':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          $(document).find('#qid_'+q_id).find('input.chek_item_imginput').each(function(index, elm){
            var anstxt = $(this).val();
            if(anstxt != ''){ no_ans_exists = false; }
            $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          
          break;
        case 'number_of_prsns':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('.number_of_prsns_ans').each(function(index, elm){
              var anstxt = $(this).val();
              var qtxt = $(this).data('txt');
              if(anstxt != ''){ no_ans_exists = false; }
              if(in_index == 0){
                $result += '{"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }else{
                $result += ', {"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }
              in_index++;
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          
          $result += '}';
          
          break;

        case 'travel_date':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('.travel_date_ans').each(function(index, elm){
              var anstxt = $(this).val();
              var qtxt = $(this).data('txt');
              if(anstxt != ''){ no_ans_exists = false; }
              if(in_index == 0){
                $result += '{"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }else{
                $result += ', {"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }
              in_index++;
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          
          $result += '}';
          
          break;
        case 'contact_time':
          
          $result += '{';
          $result += '"id":"'+q_id+'", ';
          $result += '"page_id":"'+page_id+'", ';
          $result += '"q_type":"'+qtype+'", ';
          $result += '"q_text":"'+qtext+'", ';
          
          $result += '"q_anses":[';
          var no_ans_exists = true;
          var in_index = 0;
          $(document).find('#qid_'+q_id).find('.contact_time_ans').each(function(index, elm){
              var anstxt = $(this).val();
              var qtxt = $(this).data('txt');
              if(anstxt != ''){ no_ans_exists = false; }
              if(in_index == 0){
                $result += '{"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }else{
                $result += ', {"id": "'+index+'", "q_txt": "'+qtxt+'", "ans_txt": "'+anstxt+'"}';
              }
              in_index++;
            
          });
          if(no_ans_exists){ return false; }
          $result += ']';
          
          $result += '}';
          
          break;
          
        default: 
          
          $result = '';
          
//           $result += '{';
//           $result += '"id":"'+num_of_ques+'", ';
//           $result += '"page_id":"'+page_id+'", ';
//           $result += '"q_type":"calendar", ';
//           $result += '"q_text":"الرجاء اختيار الأيام التي ترغب في السفر بها", ';
          
//           $result += '"q_anses":[';
//           var no_ans_exists = true;
//           var in_index = 0;
//           $(document).find('#active_dates span').each(function(index, elm){
//             var anstxt = $(this).text();
//             no_ans_exists = false;
//               if(in_index == 0){
//                 $result += '{"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
//               }else{
//                 $result += ', {"id": "'+index+'", "ans_txt": "'+anstxt+'"}';
//               }
            
//               in_index++;
//           });
//           if(no_ans_exists){ return false; }
//           $result += ']';
          
//           $result += '}';
      }
      
//       console.log($result);
      return $result;
    }
    
      var frstq_id = num_of_ques;
      var scndq_id = num_of_ques + 1;
//       var thrd_id = num_of_ques + 2;
    function TN_last_ques(){
      var $result = '';
      
          $result += '<div id="qid_'+frstq_id+'" class="question_cont">';
      
          $result += '<input type="hidden" id="question_type_'+frstq_id+'" value="number_of_prsns" />';
          $result += '<input type="hidden" id="question_text_'+frstq_id+'" value="عدد المسافرين" />';
          $result += '<h2>عدد الأشخاص المسافرين</h2>';
      
          $result += '<div class="item_tsw">';
          $result += '<div class="col-md-4">';
          $result += '<label>عدد الكبار</label>';
          $result += '</div>';
          $result += '<div class="col-md-8">';
          $result += '<div class="plus_input">';
          $result += '<span class="input-group-btn mins">';
          $result += '<button type="button" class="btn btn-default btn-number minus" data-type="project-day0"><span class="glyphicon glyphicon-minus"></span></button>';
          $result += '</span>';
          $result += '<input type="text" name="quant[1]" class="number_of_prsns_ans input-number project-day0" data-txt="عدد الكبار" value="2" min="1">';
          $result += '<span class="input-group-btn plusq"><button type="button" class="btn btn-default btn-number plus" data-type="project-day0"><span class="glyphicon glyphicon-plus"></span></button></span>';
          $result += '</div>';
          $result += '</div>';
          $result += '<div class="col-md-4">';
          $result += '<label>عدد الاطفال <span>اقل من 14 سنة</span></label>';
          $result += '</div>';
          $result += '<div class="col-md-8">';
          $result += '<div class="plus_input">';
          $result += '<span class="input-group-btn mins">';
          $result += '<button type="button" class="btn btn-default btn-number minus" data-type="project-day">';
          $result += '<span class="glyphicon glyphicon-minus"></span>';
          $result += '</button>';
          $result += '</span>';
          $result += '<input type="text" name="quant[2]" class="number_of_prsns_ans input-number project-day" data-txt="عدد الاطفال" value="0" min="0">';
          $result += '<span class="input-group-btn plusq">';
          $result += '<button type="button" class="btn btn-default btn-number plus" data-type="project-day">';
          $result += '<span class="glyphicon glyphicon-plus"></span>';
          $result += '</button>';
          $result += '</span>';
          $result += '</div>';
          $result += '</div>';
          $result += '</div>';
        
          $result += '</div>';
      
      
          $result += '<div id="qid_'+scndq_id+'" class="question_cont">';
        
          $result += '<input type="hidden" id="question_type_'+scndq_id+'" value="travel_date" />';
          $result += '<input type="hidden" id="question_text_'+scndq_id+'" value="الموعد المناسب للسفر" />';
          $result += '<h2>الوقت المفضل للسفر</h2>';
      
          $result += '<div class="slideTows">';
          $result += '<input class="travel_date_ans travel_date_check" data-txt="موعد سفر محدد؟" type="checkbox" value="لا" id="slideTows" name="check"/>';
          $result += '<label for="slideTows">موعد محدد للسفر</label>';
          $result += '<div class="date_idk" id="date_idk" style="display: none;">';
          $result += '<div class="input-group input-daterange">';
          $result += '<div class="input-group-addon">من:</div>';
          $result += '<input data-txt="موعد السفر التقريبي من" type="text" class="travel_date_ans form-control">';
          $result += '<div class="input-group-addon">الى: </div>';
          $result += '<input data-txt="موعد السفر التقريبي الى" type="text" class="travel_date_ans form-control">';
          $result += '</div>';
          $result += '</div>';
      
          $result += '</div>';
      
          $result += '<div class="slideTows">';
          $result += '<input class="travel_date_ans travel_date_check" data-txt="موعد سفر تقريبي؟" type="checkbox" value="لا" id="slideTows2" name="check"/>';
          $result += '<label for="slideTows2">موعد سفر تقريبي</label>';
          $result += '<div class="date_ex" id="date_ex"  style="display: none;">';
          $result += '<div class="col-md-6">';
          $result += '<div class="row">';
          $result += '<div class="col-md-5">';
          $result += '<label for="trav_days_in">عدد الايام</label>';
          $result += '</div>';
          $result += '<div class="col-md-7">';
          $result += '<div class="plus_input">';
          $result += '<span class="input-group-btn mins">';
          $result += '<button type="button" class="btn btn-default btn-number minus" data-type="project-day2">';
          $result += '<span class="glyphicon glyphicon-minus"></span>';
          $result += '</button>';
          $result += '</span>';
          $result += '<input id="trav_days_in" data-txt="عدد الايام" type="text" name="quant[3]" class="travel_date_ans input-number project-day2" value="1" min="1">';
          $result += '<span class="input-group-btn plusq">';
          $result += '<button type="button" class="btn btn-default btn-number plus" data-type="project-day2">';
          $result += '<span class="glyphicon glyphicon-plus"></span>';
          $result += '</button>';
          $result += '</span>';
          $result += '</div>';
          $result += '</div>';
          $result += '</div>';
          $result += '</div>';
      
          $result += '<div class="col-md-6">';
          $result += '<div class="row">';
          $result += '<div class="col-md-3">';
          $result += '<label for="travel_month">الشهر:</label>';
          $result += '</div>';
          $result += '<div class="col-md-9">';
          $result += '<select style="width: 100%;" class="selectpicker travel_date_ans" id="travel_month" data-txt="الشهر المناسب للسفر">';
          $result += '<option value="يناير">يناير</option>';
          $result += '<option value="فبراير">فبراير</option>';
          $result += '<option value="مارس">مارس</option>';
          $result += '<option value="أبريل">أبريل</option>';
          $result += '<option value="مايو">مايو</option>';
          $result += '<option value="يونيو">يونيو</option>';
          $result += '<option value="يوليو">يوليو</option>';
          $result += '<option value="أغسطس">أغسطس</option>';
          $result += '<option value="سبتمبر">سبتمبر</option>';
          $result += '<option value="أكتوبر">أكتوبر</option>';
          $result += '<option value="نوفمبر">نوفمبر</option>';
          $result += '<option value="ديسمبر">ديسمبر</option>';
          $result += '</select>';
          $result += '</div>';
          $result += '</div>';
          $result += '</div>';
      
          $result += '</div>';
          $result += '</div>';
      
          $result += '</div>';
      
      
      return $result;
    }
    
//     var test_id_end = false;
    $('#prev_question').click(function(e){
      e.preventDefault();
        if(allow_click){
        allow_click = false;
        $('#loader_pre').show();
        // Do Answer Proccess
          if((q_id > 0)&&(q_id > num_of_ques)){
            q_id--;
//             q_id--;
          }else if(q_id > 0){
            q_id--;
          }
          $('#num_of_question').empty().append(q_id+1);
//           if(q_id == num_of_ques+1){ 
//             test_id_end = true;
//           }else{
//             test_id_end = false;
//           }
          
          if(q_id < num_of_ques){ 
            $('#step_2_head').removeClass('complete');
            $('#ques_counter').show();
          }
          $(document).find('.question_cont').hide();
        
            $(document).find('#qid_'+q_id).show();
          $('#loader_pre').hide();
          allow_click = true;
          $('html, body').animate({
            scrollTop: $("#item_step_head").offset().top
          }, 300);
      }
    });
    $('#question_container').empty();
    for (var ii = 0; ii < all_question.length; ii++) {
        $('#question_container').append(TN_Get_question(all_question[ii], ii));
    }
    
    $('#question_container').append(TN_last_ques());
    var options = { 
      now: "10:00", //hh:mm 24 hour format only, defaults to current time
      title: 'المواعيد', //The Wickedpicker's title,
      }; 
    var options2 = { 
      now: "16:00", //hh:mm 24 hour format only, defaults to current time
      title: 'المواعيد', //The Wickedpicker's title,
      }; 

    var communicate_hour_from = $(document).find('#communicate_hour_from').wickedpicker(options);
    var communicate_hour_to = $(document).find('#communicate_hour_to').wickedpicker(options2);
    $('#qid_'+q_id).show();
    $('#num_of_question').empty().append(q_id+1);
    $('#ans_question').click(function(e){
      e.preventDefault();
      if(allow_click){
        allow_click = false;
        $('#loader').show();
        // Do Answer Proccess
        var anses = TN_get_answers(q_id);
        var json_ans = '';
        if(anses != false){
//           console.log(JSON.stringify(anses));
          json_ans = anses;
          if(q_id <= (num_of_ques+1)){
              q_id++;
          }
          if(q_id == num_of_ques){ 
            $('#step_2_head').addClass('complete');
            $('#ques_counter').hide();
          }
          $('#num_of_question').empty().append(q_id+1);
//           if(q_id == num_of_ques+1){ ques_counter
//             test_id_end = true;
//           }else{
//             test_id_end = false;
//           }
          all_anses[q_id-1] = anses;
          if(q_id > num_of_ques+1){ 
//             console.log(all_anses);
          $.ajax({
            url: "https://www.travoneer.com/wp-admin/admin-ajax.php",
            type:'POST',
            data: "action=tn_answer_survey&json_ans="+all_anses,
            success: function(html){
//               console.log(html);
              var rq_res = JSON.parse(html);
              if(rq_res.state == true){
                if(rq_res.redirect){
                  setTimeout(function(){  window.location.href = rq_res.redirect; }, 100);
                }else{
                  setTimeout(function(){  window.location.href = register_url; }, 100);
                }
              }else{
                $(document).find('.alert_error').show();
                $('html, body').animate({
                  scrollTop: $("#alert_error").offset().top
                }, 500);
              }
            },
            complete: function(thml){
              $('#loader').hide();
              allow_click = true;
            }
          });
          
            return;
          }
          $(document).find('.question_cont').hide();
            $(document).find('#qid_'+q_id).show();
          $('#loader').hide();
          allow_click = true;

          $('html, body').animate({
            scrollTop: $("#item_step_head").offset().top
          }, 300);
        }else{
          $(document).find('.alert_answer').show();
          $('html, body').animate({
            scrollTop: $("#alert_answer").offset().top
          }, 500);
          $('#loader').hide();
          allow_click = true;
        }
//         allow_click = true;
        
        
      }
    });
    $(function(){
      function incrementValue(e){ console.log('click');
          var class_t = $(document).find(this).attr('data-type');
          var valueElement = $(document).find('.'+class_t);
          valueElement.val(Math.max(parseInt(valueElement.val()) + e.data.increment, 0));
          return false;
      }
      $(document).find('.plus').bind('click', {increment: 1}, incrementValue);
      $(document).find('.minus').bind('click', {increment: -1}, incrementValue);
  });
    $(document).find('.input-daterange').datepicker({format: 'dd/mm/yyyy'});
    

    $(document).find('#slideTows').change(function(e){
      if ($(this).is(':checked')) {
        $('.travel_date_check').attr('checked', false);
        $('.travel_date_check').val('لا');
        $('.travel_date_check').removeClass('checked');
        $(this).addClass('checked');
        $(this).val('نعم');
        $('#date_idk').show();
        $('#date_ex').hide();
      }
    });
    $(document).find('#slideTows2').change(function(e){
      if ($(this).is(':checked')) {
        $('.travel_date_check').attr('checked', false);
        $('.travel_date_check').val('لا');
        $('.travel_date_check').removeClass('checked');
        $(this).addClass('checked');
        $(this).val('نعم');
        $('#date_idk').hide();
        $('#date_ex').show();
      }
    });
  });
</script>
@endsection