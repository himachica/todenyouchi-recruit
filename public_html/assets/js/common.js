var loadStatus = false;

$(function() {

    // ====================================== contents
    var $window   = $(window),
        $body     = $('body'),
        $wrapper  = $('#wrapper'),
        $header   = $('#header'),
        $contents = $('#contents'),
        $footer   = $('#footer');

    // ====================================== data
    var windowW;
    var windowH;
    var wrapperH;
    var headerH;
    var footerH;
    var scrollT;

    // ====================================== dateAcquisition
    function dateAcquisition() {
        windowW  = $window.width();
        windowH  = $window.height();
        wrapperH = $wrapper.outerHeight();
        headerH  = $header.outerHeight();
        footerH  = $footer.outerHeight();
        scrollT  = $window.scrollTop();
    }

    // ====================================== value
    var breakpoint01 = 768;

    // ====================================== url
    var url     = location.origin,
        path    = location.pathname
        urlHash = location.hash;
    if(urlHash) {
        // anotherPageLink の時にスクロール前に移動しないように
        $('html, body').css('opacity', 0);
    }

    // ====================================== path
    var transitionEvent = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
        animationEvent  = 'animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd';

    // ====================================== contents
    function contentsH() {
        var footerMt = parseInt($footer.css('margin-top')),
            contentsH = windowH - headerH - footerMt - footerH;
        $contents.css('min-height', contentsH);
    }

    // ====================================== animationContents
    var $animationContents = $('.animation-contents');
    function animationContentsCheck(){
        $animationContents.each(function() {
            var fadeInPosition = $(this).offset().top;
            if(scrollT >= fadeInPosition - windowH + windowH/3) {
                $(this).addClass('-animation');
                $(this).find('.animation').addClass('-animation');
            } else {
                //$(this).removeClass('-animation');
            }
        });
    }

    // ====================================== loopSlider
    var $loopSlider         = $('.loop-slider'),
        $loopSliderContents = $loopSlider.find('.slider'),
        $loopSliderList     = $loopSliderContents.find('.list');
    $loopSliderList.each(function() {
        $(this).clone(true).insertBefore(this);
        $(this).clone(true).insertAfter(this);
    });
    function loopSlider() {
        $loopSliderList.each(function() {
            var $thisLoopSlider = $(this).closest('.loop-slider');
            if($thisLoopSlider.hasClass('-up') || $thisLoopSlider.hasClass('-down')) {
                var height = $(this).height(),
                    height = height * 3;
                $(this).parent('.slider').css('height', height);
                $(this).parent('.slider').addClass('-animation');
            } else {
                var width = $(this).width(),
                    width = width * 3;
                $(this).parent('.slider').css('width', width);
                $(this).parent('.slider').addClass('-animation');
            }
        });
    }

    // ====================================== splitTxt
    var $splitTxt = $('.split-txt');
    if($splitTxt.length) {
        $splitTxt.each(function() {
            var thisDelay  = 0,
                thisTxt    = $(this).html(),
                thisTxt    = thisTxt.replace(/<br>/g, '|'),
                thisTxt    = thisTxt.replace(/<br class="dsp-pc">/g, '↑'),
                thisTxt    = thisTxt.replace(/<br class="dsp-sp">/g, '↓'),
                thisTxt    = thisTxt.replace(/ /g, '*'),
                thisTxt    = thisTxt.replace(/&amp;/g, '&'),
                thisTxtBox = '';
            if($(this).is('[data-delay]')) {
                thisDelay = $(this).data('delay');
            }
            thisTxt.split('').forEach(function(t, i) {
                var delayNumber = (i / 10) + thisDelay;
                if(t !== '' && t !== '*' && t !== '|' && t !== '↑' && t !== '↓') {
                    thisTxtBox += '<span style="transition-delay:' + delayNumber + 's;">' + t + '</span>';
                } else if(t == '*') {
                    thisTxtBox += '<span style="transition-delay:' + delayNumber + 's;" class="-space"> </span>';
                } else if(t == '|') {
                    thisTxtBox += '<br>';
                } else if(t == '↑') {
                    thisTxtBox += '<br class="dsp-pc">';
                } else if(t == '↓') {
                    thisTxtBox += '<br class="dsp-sp">';
                }
            });
            $(this).html(thisTxtBox);
        });
    }

    // ====================================== select
    var $selectChange = $('.select-change');
    $selectChange.on('click', function() {
        var thisValue = $(this).val();
        if(thisValue == '' || thisValue == '選択してください') {
            $(this).removeClass('-active');
        } else {
            $(this).addClass('-active');
        }
    });
    $selectChange.on('change', function() {
        var thisValue = $(this).val();
        if(thisValue == '' || thisValue == '選択してください') {
            $(this).removeClass('-active');
        } else {
            $(this).addClass('-active');
        }
    });

    // ====================================== pagetop
    $("#pagetop").on("click", toTop);
    function toTop(){
        $('html,body').animate({ scrollTop: 0 },1000, 'easeOutQuart');
    }

    // ====================================== pageLink
    $(document).on('click', 'a[href*="#"]:not([data-no-smooth])', function(e) {
        const a = this;

        // 外部 or 別ページは対象外
        if (a.hostname !== location.hostname || a.pathname.replace(/\/+$/,'') !== location.pathname.replace(/\/+$/,'')) return;

        const hash = a.hash; // 例: "#a-gyo"
        if (!hash || hash === '#') return; // トップへ等は任意でスルー

        const targetEl = document.getElementById(decodeURIComponent(hash.slice(1)));
        if (!targetEl) return; // ターゲットが無い

        e.preventDefault();

        // クリック時点の最新値で毎回計算
        const headerH = $header.length ? $header.outerHeight() : 0;
        const $win = $(window), $doc = $(document);

        // レイアウトが動きやすいので rAF 後に測る
        requestAnimationFrame(() => {
            const targetTop = $(targetEl).offset().top;
            const maxScroll = $doc.height() - $win.height();
            let to = Math.max(0, Math.min(targetTop - headerH, maxScroll));

            //ブラウザ幅がSPの幅 + header内のナビをクリックした場合の判別
            if(windowW <= breakpoint01 && $(this).parents($headerNav).length) {
                $headerSpMenuItemMenu.click();
                $('html, body').stop(true).animate({ scrollTop: to }, 1000, 'easeOutQuart');
            } else {
                $('html, body').stop(true).animate({ scrollTop: to }, 1000, 'easeOutQuart');
            }
        });
    });

    // ====================================== anotherPageLink
    function anotherPageLink() {
        if(urlHash) {
            setTimeout(function() {
                $('html, body').scrollTop(0).css('opacity', 1);
            }, 0);
            setTimeout(function() {
                var target   = $(urlHash),
                    position = target.offset().top - headerH;
                if (position > wrapperH - windowH) {
                    position = wrapperH - windowH;
                }
                $('html, body').animate({ scrollTop : position }, 1000, 'easeOutQuart');
                return false;
            }, 1000);
        }
    }

    // ====================================== overImg
    $('.overImg a img').hover(function() {
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
    }, function() {
        if (!$(this).hasClass('currentPage')) {
            $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }
    });

    // ====================================== telLink
    function telLink() {
        var $tel = $('.tel');
        $tel.each(function() {
            var str = $(this).html();
            if ($(this).children().is('img')) {
                $(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
            } else {
                $(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
            }
        });
    }

    // ====================================== desvg
    var $svg = $('.svg');
    if($svg.length) {
        deSVG('.svg', true);
    }

    // ====================================== load
    function loadAction() {
        dateAcquisition();
        anotherPageLink();
        contentsH();
        animationContentsCheck();
        loopSlider();
    }
    $window.on('load', function() {
        loadAction();
    });
    if(loadStatus == true) {
        loadAction();
    }

    // ====================================== resize
    var loadingW = $window.width();
    $window.resize(function() {
        dateAcquisition();
        animationContentsCheck();
        if(loadingW != windowW) {
            contentsH();
            loadingW = windowW;
        }
    });

    // ====================================== scroll
    $window.on('scroll', function() {
        dateAcquisition();
        animationContentsCheck();
    });

    // ====================================== touchmove
    $window.on('touchmove', function() {
        dateAcquisition();
        animationContentsCheck();
    });

    // ====================================== smartphone
    if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
        telLink();
    }

});

$(window).on('load', function() {
    loadStatus = true;
});
