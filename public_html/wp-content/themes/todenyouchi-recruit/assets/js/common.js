var loadStatus = false;

$(function() {

    // ====================================== contents
    var $window                        = $(window),
        $body                          = $('body'),
        $wrapper                       = $('#wrapper'),
        $header                        = $('#header'),
        $contents                      = $('#contents'),
        $footer                        = $('#footer');

    var $headerInner                   = $header.find('.header-inner'),
        $headerNav                     = $headerInner.find('.nav'),
        $headerNavContents             = $headerNav.find('.nav-contents'),
        $headerNavInner                = $headerNavContents.find('.nav-inner'),
        $headerNavList                 = $headerNavInner.find('.nav-list'),
        $headerNavListLi               = $headerNavList.children('li'),
        $headerNavHead                 = $headerNavListLi.find('.nav-head'),
        $headerNavHeadAcod             = $headerNavHead.find('.nav-head-acod'),
        $headerSpMenu                  = $header.find('.sp-menu'),
        $headerSpMenuContents          = $headerSpMenu.find('.sp-menu-contents'),
        $headerSpMenuBars              = $headerSpMenuContents.find('.sp-menu-bars'),
        $headerSpMenuBar1              = $headerSpMenuBars.find('.sp-menu-bar:nth-child(1)');

    var $kv                            = $('#kv'),
        $kvLoopSlider                  = $kv.find('.loop-slider'),
        $kvSlider                      = $kvLoopSlider.find('.slider'),
        $kvSliderList                  = $kvSlider.find('.list'),
        $kvSliderListLi                = $kvSliderList.children('li'),
        $kvSwiper                      = $kvSliderListLi.find('.kv-swiper');

    var $peopleEmblaWrap               = $('.people-embla-wrap'),
        $peopleEmbla                   = $peopleEmblaWrap.find('.people-embla');

    var $recruitmentPage               = $('#recruitment-page'),
        $recruitmentPageInner          = $recruitmentPage.find('.inner'),
        $recruitmentPageInnerContents  = $recruitmentPageInner.find('.inner-contents'),
        $recruitmentPageLayout         = $recruitmentPageInnerContents.find('.layout'),
        $recruitmentPageLayoutBlockSub = $recruitmentPageLayout.find('.block.-sub'),
        $recruitmentPageNav            = $recruitmentPageLayoutBlockSub.find('.nav'),
        $recruitmentPageNavList        = $recruitmentPageNav.find('.nav-list'),
        $recruitmentPageNavListLi      = $recruitmentPageNavList.children('li'),
        $recruitmentPageNavListLiA     = $recruitmentPageNavListLi.find('a');
    var $sections = $recruitmentPageNavListLiA.map(function () {
        var id = $(this).attr('href');
        if (id && id.startsWith('#')) {
            return $(id);
        }
    });

    var $faq                           = $('#faq'),
        $faqInner                      = $faq.find('.inner'),
        $faqInnerContents              = $faqInner.find('.inner-contents'),
        $faqSectionWrap                = $faqInnerContents.find('.section-wrap'),
        $faqSection                    = $faqSectionWrap.find('.section'),
        $faqSectionBlockContents       = $faqSection.find('.section-block.-contents'),
        $faqItemWrap                   = $faqSectionBlockContents.find('.item-wrap'),
        $faqItem                       = $faqItemWrap.find('.item'),
        $faqItemDt                     = $faqItem.find('dt');

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

    // ====================================== header
    $headerSpMenu.on('click', function() {
        $header.toggleClass('-active');
        if($header.hasClass('-active')) {
            $headerNav.slideDown(600, 'easeOutQuart');
        } else {
            $headerNav.slideUp(600, 'easeOutQuart');
            $header.addClass('-inactive');
            $headerSpMenuBar1.on(animationEvent, function() {
                $headerSpMenuBar1.off(animationEvent);
                $header.removeClass('-inactive');
            });
        }
    });
    $headerNavHeadAcod.on('click', function() {
        var $thisLi      = $(this).closest('li'),
            $thisSubList = $thisLi.find('.nav-sub-list');
        $thisLi.toggleClass('-active');
        if($thisLi.hasClass('-active')) {
            $thisSubList.slideDown(600, 'easeOutQuart');
        } else {
            $thisSubList.slideUp(600, 'easeOutQuart');
        }
    });
    function headerReset() {
        if(windowW > breakpoint01) {
            if($header.hasClass('-active')) {
                $header.removeClass('-active');
            }
            $headerNav.show();
            $headerNavListLi.each(function() {
                if($(this).hasClass('-active')) {
                    var $thisSubList = $(this).find('.nav-sub-list');
                    $(this).removeClass('-active');
                    $thisSubList.hide();
                }
            });
        } else {
            if(!$header.hasClass('-active')) {
                $headerNav.hide();
            }
            $headerNavListLi.each(function() {
                if($(this).hasClass('-active')) {
                    var $thisSubList = $(this).find('.nav-sub-list');
                    $thisSubList.show();
                } else {
                    var $thisSubList = $(this).find('.nav-sub-list');
                    $thisSubList.hide();
                }
            });
        }
    }

    // ====================================== kv
    function kvSwiperStart() {
        if($kvSwiper.length) {
            const kvSwiper = new Swiper('.kv-swiper', {
                direction: 'vertical',
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true,
                },
                loop: true,
                simulateTouch: false,
                slidesPerView: 'auto',
                speed: 2000,
            });
        }
    }

    // ====================================== people
    if($peopleEmbla.length) {
        const peopleEmblaWrap    = document.querySelector('.people-embla-wrap');
        const peopleEmbla        = peopleEmblaWrap.querySelector('.people-embla');
        const peopleEmblaDots    = peopleEmblaWrap.querySelector('.people-embla-dots');
        const peopleEmblaOptions = {
            loop: true,
            align: 'center',
            duration: 20,
        };
        const peopleEmblaAutoplay = EmblaCarouselAutoplay({
            delay: 3000,
            stopOnMouseEnter: false,
            stopOnInteraction: true,
            stopOnFocusIn: true,
            rootNode: () => peopleEmblaWrap,
        });
        const peopleEmblaApi     = EmblaCarousel(peopleEmbla, peopleEmblaOptions, [peopleEmblaAutoplay]);

        // --- マウスイベントで制御 ---
        peopleEmblaWrap.addEventListener('mouseenter', () => peopleEmblaAutoplay.stop());
        peopleEmblaWrap.addEventListener('mouseleave', () => peopleEmblaAutoplay.play());

        // --- ドット生成 ---
        const dots = peopleEmblaApi.slideNodes().map((_, index) => {
          const button = document.createElement('button');
          button.classList.add('people-embla-dot');
          button.type = 'button';
          button.setAttribute('aria-label', `Go to slide ${index + 1}`);
          peopleEmblaDots.appendChild(button);
          button.addEventListener('click', () => peopleEmblaApi.scrollTo(index));
          return button;
        });

        // --- 選択状態の更新 ---
        const setSelectedDot = () => {
          const selected = peopleEmblaApi.selectedScrollSnap();
          dots.forEach((dot, i) => {
            dot.classList.toggle('-selected', i === selected);
          });
        };

        peopleEmblaApi.on('select', setSelectedDot);
        peopleEmblaApi.on('init', setSelectedDot);
        setSelectedDot();

        console.log(peopleEmblaApi.slideNodes()) // Access API
    }

    // ====================================== recruitmentPage
    function recruitmentPageScroll() {
        if($recruitmentPageNav.length) {
            var offset = headerH; // ナビ切り替えの余白（調整OK）
            var currentId = null;
            $sections.each(function () {
                var sectionTop = $(this).offset().top - offset;
                if (scrollT >= sectionTop) {
                    currentId = $(this).attr('id');
                }
            });
            if (currentId) {
              $recruitmentPageNavListLiA.parent().removeClass('-current');
              $recruitmentPageNavListLiA
                .filter('[href="#' + currentId + '"]')
                .parent()
                .addClass('-current');
            }
        }
    }

    // ====================================== faq
    $faqItemDt.on('click', function() {
        var $thisItem = $(this).closest('.item'),
            $thisDd   = $(this).next('dd');
        $thisItem.toggleClass('-active');
        if($thisItem.hasClass('-active')) {
            $thisDd.slideDown(600, 'easeOutQuart');
        } else {
            $thisDd.slideUp(600, 'easeOutQuart');
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
        kvSwiperStart();
        recruitmentPageScroll();
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
        recruitmentPageScroll();
        if(loadingW != windowW) {
            headerReset();
            contentsH();
            loadingW = windowW;
        }
    });

    // ====================================== scroll
    $window.on('scroll', function() {
        dateAcquisition();
        animationContentsCheck();
        recruitmentPageScroll();
    });

    // ====================================== touchmove
    $window.on('touchmove', function() {
        dateAcquisition();
        animationContentsCheck();
        recruitmentPageScroll();
    });

    // ====================================== smartphone
    if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
        telLink();
    }

});

$(window).on('load', function() {
    loadStatus = true;
});
