jQuery(function ($) {
    $("#st_enable_javascript").each(function () {
        if ($(this).hasClass("allow")) {
            $("#st_enable_javascript").html(".search-tabs-bg > .tabbable >.tab-content > .tab-pane{display: none; opacity: 0;}" + ".search-tabs-bg > .tabbable >.tab-content > .tab-pane.active{display: block;opacity: 1;}" + ".search-tabs-to-top { margin-top: -120px;}")
        }
    })
});
jQuery(document).ready(function ($) {
    if (typeof $.fn.sticky != 'undefined') {
        var topSpacing = 0;
        if ($(window).width() > 481 && $('body').hasClass('admin-bar')) {
            topSpacing = $('#wpadminbar').height()
        }
        set_sticky()
    }
    function set_sticky() {
        var is_menu1 = $(".menu_style1").length;
        var is_menu2 = $(".menu_style2").length;
        var is_menu3 = $(".menu_style3").length;
        var is_menu4 = $(".menu_style4").length;
        var is_topbar = $("#top_toolbar").length;
        var sticky_topbar = $(".enable_sticky_topbar").length;
        var sticky_menu = $(".enable_sticky_menu").length;
        var sticky_header = $(".enable_sticky_header").length;
        if (sticky_header || (sticky_menu && sticky_topbar)) {
            $("#st_header_wrap_inner").sticky({topSpacing: topSpacing});
            return
        } else {
            if (sticky_topbar && is_topbar) {
                $("#top_toolbar").sticky({topSpacing: topSpacing})
            }
            if (sticky_menu && (is_menu1 || is_menu2 || is_menu3 || is_menu4)) {
                var topSpacing_topbar = topSpacing;
                if (is_topbar && sticky_topbar) {
                    topSpacing_topbar += $("#top_toolbar").height()
                }
                $("#menu1").sticky({topSpacing: topSpacing_topbar});
                $("#menu2").sticky({topSpacing: topSpacing_topbar});
                $("#menu3").sticky({topSpacing: topSpacing_topbar});
                $("#menu4").sticky({topSpacing: topSpacing_topbar});
                return
            }
        }
        return
    }

    function other_sticky(spacing) {
    }

    if ($('body').hasClass('search_enable_preload')) {
        window.setTimeout(function () {
            $('.full-page-absolute').fadeOut().addClass('.hidden')
        }, 1000)
    }
    $('#gotop').click(function () {
        $("body,html").animate({scrollTop: 0}, 1000, function () {
            $('#gotop').fadeOut()
        })
    });
    $(window).scroll(function () {
        var scrolltop = $(window).scrollTop();
        if (scrolltop > 200) {
            $('#gotop').fadeIn()
        } else {
            $('#gotop').fadeOut()
        }
        scroll_with_out_transparent()
    });
    scroll_with_out_transparent();
    function scroll_with_out_transparent() {
        var sdlfkjsdflksd_scrolltop = $(window).scrollTop();
        var header_bgr_default = {'background-color': ""};
        if ($("body").hasClass("menu_style2") && sdlfkjsdflksd_scrolltop != 0 && $('.enable_sticky_menu.header_transparent').length !== 0) {
            $(".header-top").css(st_params.header_bgr)
        } else {
            $(".header-top").css(header_bgr_default)
        }
    }

    var top_ajax_search = $('.st-top-ajax-search');
    if (top_ajax_search.length) {
        top_ajax_search.typeahead({hint: !0, highlight: !0, minLength: 3, limit: 8}, {
            source: function (q, cb) {
                $('.st-top-ajax-search').parent().addClass('loading');
                return $.ajax({
                    dataType: 'json',
                    type: 'get',
                    url: st_params.ajax_url,
                    data: {
                        security: st_params.st_search_nonce,
                        action: 'st_top_ajax_search',
                        s: q,
                        lang: top_ajax_search.data('lang')
                    },
                    cache: !0,
                    success: function (data) {
                        $('.st-top-ajax-search').parent().removeClass('loading');
                        var result = [];
                        if (data.data) {
                            $.each(data.data, function (index, val) {
                                result.push({
                                    value: val.title,
                                    location_id: val.id,
                                    type_color: 'success',
                                    type: val.type,
                                    url: val.url
                                })
                            });
                            cb(result);
                            console.log(result)
                        }
                    },
                    error: function (e) {
                        $('.st-top-ajax-search').parent().removeClass('loading')
                    }
                })
            },
            templates: {suggestion: Handlebars.compile('<p class="search-line-item"><label class="label label-{{type_color}}">{{type}}</label><strong> {{value}}</strong></p>')}
        });
        top_ajax_search.bind('typeahead:selected', function (obj, datum, name) {
            if (datum.url) {
                window.location.href = datum.url
            }
        })
    }
    if ($.fn.chosen) {
        $(".chosen_select").chosen()
    }
    $('.woocommerce-ordering .posts_per_page').change(function () {
        $('.woocommerce-ordering').submit()
    });
    var product_timeout;
    $('.woocommerce li.product').hover(function () {
        var me = $(this);
        product_timeout = window.setTimeout(function () {
            me.find('.product-info-hide').slideDown('fast')
        }, 250)
    }, function () {
        window.clearTimeout(product_timeout);
        var me = $(this);
        me.find('.product-info-hide').slideUp('fast')
    });
    var menu3_resize = null;
    $(window).resize(function (event) {
        clearTimeout(menu3_resize);
        if ($('header#menu3').length) {
            menu3_resize = setTimeout(function () {
                if (window.matchMedia("(min-width: 1200px)").matches) {
                    var container = $('#top_header .container').height();
                    var menu = $('#slimmenu').height();
                    $('header#menu3 .nav').css('margin-top', (container - menu) / 2)
                }
            }, 500)
        }
    }).resize();
    $('#search-icon').click(function (event) {
        $('.main-header-search').fadeIn('fast');
        return !1
    });
    $('#search-close').click(function (event) {
        $('.main-header-search').fadeOut('fast');
        return !1
    });
    if ($('.st-slider-list-hotel').length) {
        $('.st-slider-list-hotel').owlCarousel({
            items: 1,
            singleItem: !0,
            slideSpeed: 500,
            transitionStyle: $('.st-slider-list-hotel').data('effect'),
            autoHeight: !0
        })
    }
    if ($("#owl-twitter").length) {
        $("#owl-twitter").owlCarousel({
            navigation: !0,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: !0,
            navigationText: ["", ""],
            pagination: !1,
            autoPlay: !0
        })
    }
    var st_list_partner = $(".st_list_partner");
    setTimeout(function () {
        st_list_partner.each(function () {
            var items = $(this).data('items');
            var speed = $(this).data('speed');
            var autoplay = $(this).data('autoplay');
            autoplay = (autoplay == 'yes') ? !0 : !1;
            $(this).owlCarousel({
                slideSpeed: speed,
                paginationSpeed: 400,
                navigationText: ["", ""],
                pagination: !1,
                navigation: !1,
                autoPlay: autoplay,
                items: 4,
                itemsDesktop: [1000, 4],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [600, 1],
                itemsMobile: !1
            })
        })
    }, 500);
    $(".st_list_partner_nav .next").click(function () {
        st_list_partner.trigger('owl.next')
    });
    $(".st_list_partner_nav .prev").click(function () {
        st_list_partner.trigger('owl.prev')
    });
    $(".st_tour_ver_countdown").each(function () {
        $(this).syotimer({
            year: parseInt($(this).data('year')),
            month: parseInt($(this).data('month')),
            day: parseInt($(this).data('day')),
            hour: 0,
            minute: 0,
            lang: ($(this).data('lang')),
        })
    })
    if ($('.st_tour_ver_fotorama').length) {
        $('.st_tour_ver_fotorama').fotorama({nav: !1,})
    }
    var flag_ajax_coupon = !1;
    $('body').on('click', '.add-coupon-ajax', function () {
        var t = $(this), overlay = t.closest('.booking-item-payment').find('.overlay-form'), form = t.closest('form'), alert = $('.alert', form), data = form.serializeArray();
        if (flag_ajax_coupon) {
            return !1
        }
        flag_ajax_coupon = !0;
        overlay.fadeIn();
        alert.addClass('hidden').html('');
        $.post(st_params.ajax_url, data, function (respon, textStatus, xhr) {
            if (respon.status == 1) {
                overlay.fadeIn();
                var data = {'action': 'modal_get_cart_detail'};
                $.post(st_params.ajax_url, data, function (respon, textStatus, xhr) {
                    t.closest('.booking-item-payment').html(respon);
                    overlay.fadeOut();
                    flag_ajax_coupon = !1
                }, 'json')
            } else {
                alert.removeClass('hidden').html(respon.message);
                overlay.fadeOut();
                flag_ajax_coupon = !1
            }
        }, 'json');
        return !1
    });
    $('body').on('click', '.ajax-remove-coupon', function (event) {
        event.preventDefault();
        var t = $(this), overlay = t.closest('.booking-item-payment').find('.overlay-form'), form = t.closest('form'), alert = $('.alert', form);
        if (flag_ajax_coupon) {
            return !1
        }
        flag_ajax_coupon = !0;
        overlay.fadeIn();
        var data = {'action': 'ajax_remove_coupon', 'coupon': $(this).data('coupon')};
        $.post(st_params.ajax_url, data, function (respon, textStatus, xhr) {
            overlay.fadeIn();
            var data = {'action': 'modal_get_cart_detail'};
            $.post(st_params.ajax_url, data, function (respon, textStatus, xhr) {
                t.closest('.booking-item-payment').html(respon);
                overlay.fadeOut();
                flag_ajax_coupon = !1
            }, 'json')
        }, 'json')
    });
    $('#myModal').modal('show')
});
jQuery(document).ready(function ($) {
    $('.extra-collapse a').click(function (e) {
        e.preventDefault();
        var p = $(this).closest('.extra-price');
        if (p.find('.extra-collapse-control').hasClass('extra-none')) {
            $(this).find('i').removeClass('fa-angle-double-down');
            $(this).find('i').addClass('fa-angle-double-up');
            p.find('.extra-collapse-control').removeClass('extra-none')
        }
        else {
            $(this).find('i').removeClass('fa-angle-double-up');
            $(this).find('i').addClass('fa-angle-double-down');
            p.find('.extra-collapse-control').addClass('extra-none')
        }
    });
    if ($('.has-matchHeight', 'body').length) {
        $('.has-matchHeight', 'body').matchHeight()
    }
});


jQuery(function ($) {
    $('.ac-gallery').each(function () {
        var owl1 = $(this);
        owl1.owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            dots: false,
            pagination: false
        });
        $(this).parent().find(".owl-prev").click(function () {
            owl1.trigger('owl.prev');
        });
        $(this).parent().find(".owl-next").click(function () {
            owl1.trigger('owl.next');
        });
    });

    $('.accommodation-single-map .st_list_map .content_map #list_map').each(function () {
        var wh = $(window).height();
        var hh = $('#st_header_wrap').height();
        var full_height = wh - hh;
        if ($('#wpadminbar').length > 0) {
            full_height = full_height - $('#wpadminbar').height();
        }
        if (full_height < 480) {
            full_height = 480;
        }

        $(this).css({height: full_height + 'px'});
    });

    $('.on_the_map .btn-on-map').each(function () {
        $(this).on('click', function (e) {
            e.preventDefault();

            var p = $(this).parent().parent();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).text($(this).data('hide'));
            } else {
                $(this).text($(this).data('no-hide'));
            }
            p.find('.accommodation-single-map').toggleClass('active');
            p.find('.review-price').toggleClass('active');
        });
    });
});
