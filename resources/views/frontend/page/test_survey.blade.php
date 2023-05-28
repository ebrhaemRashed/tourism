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




<!-- start css hook filter -->
<style type="text/css" id="st_custom_css"></style>
<!-- end css hook filter -->


<style   id="st_enable_javascript">
    .search-tabs-bg > .tabbable >.tab-content > .tab-pane{display: none; opacity: 0;}.search-tabs-bg > .tabbable >.tab-content > .tab-pane.active{display: block;opacity: 1;}.search-tabs-to-top { margin-top: -120px;}            
</style>

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


<!-- style the form -->
<style>

    #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    }

    /* Style the input fields */
    input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
    background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
    display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
    opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
    background-color: #04AA6D;

    }

</style>




<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('boostrap/css/bootstrap.css')}}" >  </link>


<!-- bootstrap script -->
<script src="{{asset('bootstrap/css/bootstrap.js')}}" type='text/javascript'>  </script>



  
@endsection







<!-- multiple step form -->
@section('contentfrontend')


    <form id="regForm" action="{{route('signIn_survey')}}" method="get">
        @csrf
        @method('get')


        @foreach($questions as $q)
        
        <div class="tab">
        <h1 style="text-align:center;margin-bottom:75px;font-size:35px;">{{$q->question}} </h1>
            
                <!-- images -->
                @if($q->type == 'image')
                    <div class="row justify-content-between">
                        @foreach($q->answers as $a)
                            <div class="col-3">
                                <input name="q{{$q->id}}[]" value="{{$a->id}}" style="display:none" type='checkbox' id="image{{$a->id}}" oninput="this.className = ''" />
                                <label style="margin:10px" for="image{{$a->id}}">
                                    <img style="width:200px !important" class="image"  src="{{asset($a->image)}}" data="{{$a->id}}"> 
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endif

        </div>

        @endforeach

        



        <!-- <div style="overflow:auto;">
        <div style="float:right;"> -->

        <div class="row mt-5"   style="justify-content: center">


            <div class="col-3">
                <button style="width:100%;height:50px;font-size:25px;"type="button" id="nextBtn" onclick="nextPrev(1)">next</button>
            </div>


            <div class="col-3">
                <button style="width:100%;height:50px;font-size:25px;" type="button" id="prevBtn" onclick="nextPrev(-1)">previous</button>
            </div>

            
        </div>
        <!-- </div>
        </div> -->

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            @foreach($questions as $q)
                <span class="step"></span>
            @endforeach
        

        </div>

        
    

    </form>












<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){

// checkbox
  $('.image').click(function(event){
    var img_id = $(event.target).attr('data');

    if ($('#image'+img_id).is(':checked')) {
        $(event.target).css('opacity','1');
    }else{
        $(event.target).css('opacity','.5');
    }
  });




//   dateAndCounter_question
$('#q7_a34').click(function(){
    if ($('#q7_a34').is(':checked')) {
        $('.first').css('display','block');
        $('.second').css('display','none');
    }
});

$('#q7_a35').click(function(){
    if ($('#q7_a35').is(':checked')) {
        $('.first').css('display','none');
        $('.second').css('display','block');
    }
});





  
  

});
</script>


<!-- form script -->
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:

    // validation (checkbox and radio)
    if (y[0].getAttribute('type') == "checkbox" || y[0].getAttribute('type') == "radio"){
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].checked == 1) {
                valid = true;
                for(m = 0; m < y.length; m++){
                    y[m].className += "";
                }

                break;
            }
            else{
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
    }else{
        for (i = 0; i < y.length; i++) {
            if(y[i].value == ""){

                y[i].className += " invalid";
                valid = false;
            }
            
        }
    }
    
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
    }
</script>




@endsection


    