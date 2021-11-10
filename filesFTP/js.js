// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
          updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

$(document).ready(function(){
         $('header .menu_desk li div.tit').on("click tap", function (event) {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).parent().children('.item-content').slideUp();
            } else {
                $(this).addClass('active');
                $(this).parent().children('.item-content').slideDown();
            }

        });

      SliderDefTop = $('.slider_deff').bxSlider({
            slideMargin: 0,
            controls: false,
            pager: true,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        });
      $('.slider-wrap').bxSlider({
        slideMargin: 0,
        controls: true,
        pager: false,
        useCSS: false,
        auto: true,
        autoStart: true,
        autoControls: false,
        pause: 5000,
        speed: 2000,
    });
    $('.slider-wrap').animate({opacity: 1}, 500);
        function sliderInit(initBlock, args){
            if(initBlock.children().length > 1){
                sliderInner = $('.umInnerSliderInit').bxSlider({
                  auto: true,
                  stopAutoOnClick: true,
                  pager: true
                });
            }
        }
        var sliderInnerArgs = {
            slideMargin: 0,
            controls: false,
            pager: true,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        }
        var sliderInnerInitBlock = $('.umInnerSliderInit');
        sliderInit(sliderInnerInitBlock, sliderInnerArgs);
        $('.inner-page-slider-wrap').animate({opacity: 1}, 500);
            var sliderCorprArgs = {
            mode: 'fade',
            slideMargin: 0,
            controls: false,
            pager: true,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        }

$(document).on('click','.slider-corporative-wrap .bx-pager-link',function(){
    var youtube_command = window.JSON.stringify( { event: 'command', func: 'stopVideo' } );

    $('.video_container_hatch').closest('.video_container_wrap').find('iframe').each(function() {
        $(this)[0].contentWindow.postMessage( youtube_command, 'https://www.youtube.com' );
        $(this).closest('.video_container_hatch').data('state','stopVideo');
    });

});

$('.video_container_hatch').click(function(){
    var player = $(this).closest('.video_container_wrap').find('iframe').first();
    var slider_control = $(this).closest('.slider-corporative-wrap').first();

    var youtube_command_play = window.JSON.stringify( { event: 'command', func: 'playVideo' } );
    var youtube_command_stop = window.JSON.stringify( { event: 'command', func: 'stopVideo' } );

    var state = $(this).data('state');

    if (state == 'playVideo') {
        $(this).data('state','stopVideo');
        $(slider_control).find('.bx-pager-link.active').click();
        player[0].contentWindow.postMessage( youtube_command_stop, 'https://www.youtube.com' );
    } else {
        $(this).data('state','playVideo');
        $(slider_control).find('.bx-pager-link.active').click();
        player[0].contentWindow.postMessage( youtube_command_play, 'https://www.youtube.com' );
    }
});


        $('.sliderCorpInit').bxSlider(sliderCorprArgs);

        $('.slider-corporative-wrap').animate({opacity: 1}, 300);
        // Слайдеры на внутренней странице услуг
        var sliderDesctopArgs = {
            slideWidth: 300,
            minSlides: 4,
            maxSlides: 4,
            moveSlides: 1,
            slideMargin: 0,
            loop: true,
            controls: false,
            pager: false,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        };
        var sliderTabletArgs = {
            slideWidth: 300,
            minSlides: 2,
            maxSlides: 2,
            moveSlides: 1,
            slideMargin: 0,
            loop: true,
            controls: false,
            pager: false,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        };
        var sliderMobileArgs = {
            slideMargin: 0,
            controls: false,
            pager: true,
            useCSS: false,
            auto: true,
            autoStart: true,
            autoControls: false,
            pause: 5000,
            speed: 1000,
        };
        var curSlider = null;
        var windowWidth = $(window).width();
        function getDeviceSliderArgs(){
            var windowWidth = $(window).width();
            if(windowWidth <= 650 && sliderMobileArgs) { return sliderMobileArgs; }
            else if(windowWidth > 650 && windowWidth <= 1024 && sliderTabletArgs) { return sliderTabletArgs; }
            else if(windowWidth > 1024 && sliderDesctopArgs){ return sliderDesctopArgs;}
        }
        function initBxSliderCarousel(sliderBlock){
            if(sliderBlock.length > 0){
                var sliderArgs = getDeviceSliderArgs();
                if(curSlider!==null){
                    curSlider.reloadSlider(sliderArgs);
                }
                else{
                    curSlider = sliderBlock.bxSlider(sliderArgs);
                }
            }
        }
        initBxSliderCarousel($('.beforeAfterSliderInit'));
        var articleSliderBlock = $('.articleSlider');
        var articleSlider = null;
        if(articleSliderBlock){
            if(windowWidth<=650){
                if(!articleSlider){
                    articleSlider = articleSliderBlock.bxSlider(sliderMobileArgs);
                }
            }
        }
        $(window).on('resize', function(){
            var windowWidth = $(window).width();
            initBxSliderCarousel($('.beforeAfterSliderInit'));
            if(windowWidth<=650){
                if(!articleSlider){
                    articleSlider = articleSliderBlock.bxSlider(sliderMobileArgs);
                } 
            }
            else{
                if(articleSlider!==null){
                    if (articleSlider.destroySlider!=undefined) {
                       articleSlider.destroySlider();
                    }
                    articleSlider = null;
                }
            }
        });

      $(".drop_down_account").click(function(){
            if($(this).find('.menu_hide_account').hasClass('active_form')){
                  $('.menu_hide_account').slideUp(300);
                  $(this).find('.menu_hide_account').removeClass('active_form');
            }
            else{
                  $('.menu_hide_account').removeClass('active_form');
                  $('.menu_hide_account').slideUp(300);
                  $(this).find('.menu_hide_account').slideDown(300);
                  $(this).find('.menu_hide_account').addClass('active_form');
            }
      });

      $(".forms").on('click','.menu_hide_account>ul>li', function(){
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var namber_tovars =  $(".drop_down_account input").val();
            var options_tovars = $(this).text();
            $(this).parents('.drop_down_account').find("input").val(options_tovars);
            $(".menu_hide_account").slideUp(300);
      });

                  /*


                               ct. prise


                  */
      $('.container_prise .sidebar .filters li').click(function(){
            if( $(this).hasClass('active')){
                  return false;
            }else{
                  $('.container_prise .sidebar .filters li').removeClass('active');
                  $(this).addClass('active');
            }
      })


/*
                        sidebar height
*/
      var sideHeight = $('.sidebar').height();
    //  console.log(sideHeight);
      $('.sideheight').css('min-height', sideHeight );

/*
                        mobile menu
*/
      $('.menuMain_mobile').click(function(){
          $(this).parents('body').toggleClass('menu_active');
      })
      $('.button_filter').click(function(){
          $(this).parents('body').toggleClass('filter_active');
      });
      var url = window.location.href;
        if(url.indexOf('?show=') != -1 || url.indexOf('&show=') != -1){
            var dataId = url.split('?show=')[1];
            var object = $('.filters li#s'+dataId);
            object.addClass('active');
            loadPrices(dataId, object);
        }
        /*Aside form*/
        $('.aside-form-close').click(function(){
            $('.aside-form-wrap').addClass('formClose');
            $('.callAsideForm').removeClass('active');
        });
        $('.fast-order-btn, .callAsideForm').click(function(){
            $('.aside-form-wrap').removeClass('formClose');
            $('.callAsideForm').addClass('active');
        });
        /*End of Aside form*/
        /*New form*/
        $('.aside-form-close').click(function(){
            $('.aside-form-wrap').addClass('formClose');
            $('.callPopupForm').removeClass('active');
            $('.um-popup-overlay').hide();
        });
        $('.callPopupForm').click(function(){
            $('.aside-form-wrap').removeClass('formClose');
            $('.um-popup-overlay').show();
            $('.callPopupForm').addClass('active');
        });
        /*End of New form*/
        $('.showForm').click(function(){
            $(this).toggleClass('active');
            var parentWrap = $('.um-btns-wrap');
            var windowWidth = $(window).width();
            parentWrap.find('.um-form-wrap').toggleClass('um-hidden');
            if (windowWidth < 525){
                $('.um-popup-overlay').show();
            }
        });
        $('.um-form-close').click(function(){
            var parentWrap = $('.um-btns-wrap');
            parentWrap.find('.um-form-wrap').toggleClass('um-hidden');
            $('.um-popup-overlay').hide();
        });
        $('.showHiddenForm, .umOrderBtn').click(function(){
            $(this).hide();
            var parentWrap = $(this).parents('.um-form-cont');
            parentWrap.find('.hidden-content').addClass('visibleForm');
        });
        /*Popup show */
        function callPopupFormById(){
            $('.callPopupFormById').click(function(e){
                e.preventDefault();
                $('.um-popup-overlay').show();
                var popupId = $(this).attr('popup-id'),
                targetObj = $('.popup-form-wrap[data-id='+ popupId +']');
                targetObj.show().animate({opacity: 1}, 500);
                $('.popup-close, .um-popup-overlay').click(function(){
                    $('.popup-form-wrap').animate({opacity: 0}, 300, function(){
                        $(this).hide();
                        $('.um-popup-overlay').hide();
                    });
                });
            });
        }
        
        var startDate = new Date();
        startDate.setDate(startDate.getDate() + 1);
        $.datetimepicker.setLocale('uk');
        $("#dataPicker").add('.dateTimePicker').datetimepicker({
            dateFormat: 'dd-mm-yy',
            minTime: (startDate.getHours()+1) + ":00",
            minDate: startDate
        });
        $(".datePicker").datetimepicker({
            minDate: startDate,
            timepicker:false,
            format:'d.m.Y'
        });
        
        
        $('.selectOpen').click(function(){
            var otherSelectors = $('.selectOpen').not(this);
            otherSelectors.parents('.select-wrap').removeClass('selectOpened');
            var clickedItem = $(this);
            clickedItem.parents('.select-wrap').toggleClass('selectOpened');
        });
        $('.select-wrap input[type="radio"]').change(function(){
            var changedItem = $(this);
            var smartParent = changedItem.parents('.select-wrap');
            smartParent.removeClass('selectOpened');
            smartParent.find('.selectOpen').html(changedItem.val());
            
        }); 
        $( "#stext" ).autocomplete({
            source: "/ajax.php?action=fast_search2&term=" + $("#stext").val(),
            minLength: 3,
            select: function( event, ui ) {
                $("#stext").val(ui.item.value);
                $("#sform").submit();
            }
        });
        $(function () {
                            
            $(".um-btn.btn-result").click(function(){
                $(this).toggleClass('active');
                $(".result_work_wrap.mob").toggleClass('active');
            });
            
        });
        $(function () {
            var windowWidth = $(window).width();
            $('.section-service-block').each(function(){
                var blockLength = $(this).find('.service-container-new .block_servise').length;
                if(blockLength <= 3 && windowWidth > 1024 || blockLength <= 2 && windowWidth < 1024){
                    $(this).addClass('moreIsHidden');
                }
            });
        });
        callPopupFormById();
        loadYoutubeVideo();
        showHiddenPrice();
        franColorBtns();
        franShowForm();
        showPopup();
        closePopup();
        showHiddenVacancy();
        showMeTip();
        animationQueue();
        startAnimation();
      // Страница онлайн-заказ
    $('.order_div .droplist span').on('click', function(){
        console.log($(this).text())
        $(this).parent().siblings('input').val($(this).text()).change();
        return false;
    });
    // Маска для инпутов с телефоном
    $('.setMask').each(function(){
        $(this).mask("+38(099)999-99-99");
    });
    //Калькулятор на внутренней странице услуг
    $('.service-inner .block_prise, .service-inner .block_prise_corporative').on('click', '.square_check', function(){
        $(this).parents('.check_block').addClass('check_active');
        $(this).parents('.check_block').find(".square_check").not("[data-id='"+$(this).attr("data-id")+"']").removeClass("active");
        $(this).toggleClass('active');
        var summa = 0;
        $(".square_check.active").not("#showSelected").each(function(){
            summa = summa + parseInt($(this).attr("data-price"));
        });
        $("#countPrice").html(summa + " грн");
    });
    function showHiddenContent(btn, containerAttr, blockAttr) {
        // btn - jquery object
        // containerAttr and blockAttr - strings like '#someId' or '.someClass'
        // showHiddenContent($('.showMoreBtn'), '.hideContainer', '.hiddenText');
        btn.click(function(){
           var clickedItem = $(this);
           var smartParent = clickedItem.parents(containerAttr);
           if (!smartParent) return;
           var hiddenBlock = smartParent.find(blockAttr);
           if (!hiddenBlock) return;
           clickedItem.hide();
           hiddenBlock.addClass('showHidden');

        });
    }
    showHiddenContent($('.showMoreBtn'), '.hideContainer', '.hiddenText');
});
$(window).load(function(){
    $('body').addClass('DOMisLoaded');
    var parent = $('header .menu_desk .sub_menu'),
    block = parent.find('.serviceID-3016').detach();;
    parent.append(block);
});
$(window).scroll(function(){    
    fixedOnScroll();
    caclBottomPosition();
    caclFixedOrderBtn();
});


var overlay = $('.um-popup-overlay');
var popupWrap = $('.um-popups-wrap');
var popupClose = $('.popup-close');
var btn = $('.showPopup');
function showPopup(){
    btn.click(function(e){
        e.preventDefault();
        var dataPopup = $(this).data('show');
        var targetBlock = popupWrap.find('[data-popup="'+ dataPopup + '"]');
        targetBlock.css('display', 'inline-block').animate({opacity: 1}, 300)
        .siblings().hide();
        popupWrap.show();
        overlay.show();
    });
}
function closePopup(){
    overlay.add(popupClose).click(function(){
        $('.popup').animate({opacity: 0}, 100,
        function(){
            popupWrap.hide();
            overlay.hide();
        });
    });
}

function showHiddenPrice(){
    var generalParent = $('.um-price-wrap');
    if(generalParent){
        var priceBlock = generalParent.find('.um-hidden-price'),
        priceTableRow = generalParent.find('.content_row'),
        priceCards = generalParent.find('.dostavka-price-col'),
        priceHiddenHeight = 0;
        if(priceCards.length>0){
            if(priceCards.length<=4){
                $('.showPriceBtn').hide();
                generalParent.addClass('show-hidden');
            }
        }
        if(priceTableRow.length>0){ 
            if(priceTableRow.length<=3){
                $('.showPriceBtn').hide();
                generalParent.addClass('show-hidden');  
            } else {
                priceTableRow.each(function(i){
                    if(i<3){
                        priceHiddenHeight+=$(this).height();
                    }
                });
                priceBlock.height(priceHiddenHeight);
            }
        }
        $('.showPriceBtn').click(function(e){
            e.preventDefault();
            $(this).hide();
            generalParent.addClass('show-hidden');  
            priceBlock.height('auto');  
            caclFixedOrderBtn();
        });
    }
}
function showHiddenVacancy(){
    $('.showVacancy').click(function(e){
        e.preventDefault();
        $(this).hide();
        $(this).parents('.one-vacancy-tab').addClass('hiddenOpened');
    });
}
function franShowForm(){
    $('.showFormData').click(function(){
        var parentWrap = $('.um-fran-form-wrap');
        if(parentWrap){
            var dataForm = $(this).data('form'),
            formWrap = parentWrap.find('#'+dataForm);
            $(this).toggleClass('active').siblings().removeClass('active');
            formWrap.toggleClass('um-hidden').siblings().addClass('um-hidden');
        }
    });
}
function franColorBtns(){
    var franSwitcherColor = $('.city_menu li a.active').css('background-color'),
        franBtnDefaultColor = 'rgb(0, 170, 79)';
    if(franSwitcherColor){
        var coloredBkgndElem = $('.coloredBkgnd');
        if(coloredBkgndElem){
            coloredBkgndElem.each(function(){
                coloredBgnd(coloredBkgndElem, franSwitcherColor);
            });
        }
        var coloredBorderElem = $('.coloredBorder');
        if(coloredBorderElem){
            coloredBorderElem.each(function(){
                coloredBorder(coloredBorderElem, franSwitcherColor);
            }); 
        }
    } else{
        var coloredBkgndElem = $('.coloredBkgnd');
        if(coloredBkgndElem){
            coloredBkgndElem.each(function(){
                coloredBgnd(coloredBkgndElem, franBtnDefaultColor);
            });             
        }
        var coloredBorderElem = $('.coloredBorder');
        if(coloredBorderElem){
            coloredBorderElem.each(function(){
                coloredBorder(coloredBorderElem, franBtnDefaultColor);
            });         
        }
    }
    hoverElemBkgnd = $('.um-fran-btn.coloredBkgnd');
    hoverElemBorder = $('.um-fran-btn.coloredBorder');
    if( hoverElemBkgnd ){
        reverseOnHover(hoverElemBkgnd, '#fff', franSwitcherColor);
    }
    if(hoverElemBorder){
        reverseOnHover(hoverElemBorder, franSwitcherColor, '#fff');
    }
}
function coloredBgnd(elem, color){
    elem.css('background-color', color);
    elem.css('border-color', color);
}
function coloredBorder(elem, color){
    elem.css('border-color', color);
    elem.css('color', color);
}
function reverseOnHover(elem, color, bgnd){
    elem.hover(function(){
        if(!elem.hasClass('active')){
            elem.css('background-color', color);
            elem.css('color', bgnd);
        }
    },function(){
        elem.css('background-color', bgnd);
        elem.css('color', color);
    });
}
function loadYoutubeVideo(){
    $('.loadOnClick').click(function(){
        $(this).addClass('videoOpen');
        var videoBlock = $(this).find('.video_container');
        videoBlock.animate({opacity: 0}, 500, function(){
            videoBlock.empty();
            var videoId = videoBlock.data('youtube');
            videoBlock.css('opacity', 1)
                      .append('<iframe src="https://www.youtube.com/embed/'+videoId+'?autoplay=1" frameborder="0" allowfullscreen=""></iframe>');
        });
    });     
}

function get_correct_str(num, str1, str2, str3) {
    var val = num % 100;

    if (val > 10 && val < 20) return num +' '+ str3;
    else {
        val = num % 10;
        if (val == 1) return num +' '+ str1;
        else if (val > 1 && val < 5) return num +' '+ str2;
        else return num +' '+ str3;
    }
}

function initTablePrices(){
    // Restore checked and recalculate summ
    let activePrices = {};

    $.post('/ajax.php',{
        'action': 'loadActivePrices',
    },function(data){

        let summa = 0;
        let countItem = 0;
    
        $.each(data, function(index, value) {
            var fId = fUsluga = '';
            [fId,fUsluga] = index.split("_");
    
            $('.table_prise').find('div[data-id="'+fId+'"].square_check').each(function() {
                if ($(this).attr('vid-uslug') == fUsluga) {
                    $(this).parents('.check_block').addClass('check_active')
                    $(this).addClass('active');
                }
            });
    
            summa = summa + parseInt(value.price);
            countItem++;
        });
    
        $("#countItem").html(get_correct_str(countItem,"вещь","вещи","вещей"));
        $("#countPrice").html(summa + " грн");

    },'json');


    // Event catcher
    $('.table_prise').on('click', '.square_check', function(){

        if( !$(this).parents('.check_block').hasClass('check_active')) {
            $(this).parents('.check_block').addClass('check_active');
        }

        $(this).parents('.check_block').find(".square_check").not("[data-id='"+$(this).attr("data-id")+"']").removeClass("active");
        $(this).toggleClass('active');

        var summa = 0;
        var countItem = 0;

        var activePrices = {};
        $.post('/ajax.php',{
            'action': 'loadActivePrices',
        },function(activePrices){

            $(".square_check").not("#showSelected").each(function(){
                if ($(this).hasClass('active')) {
                    activePrices[$(this).data('id')+'_'+$(this).attr('vid-uslug')] = {tovar:$(this).attr("data-tovar"), vid:$(this).attr("vid-uslug"), price: $(this).data('price')};
                } else {
                    if (activePrices[$(this).data('id')+'_'+$(this).attr('vid-uslug')]!==undefined) {
                        delete activePrices[$(this).data('id')+'_'+$(this).attr('vid-uslug')];
                    }
                }
            });
        
            $.post('/ajax.php',{
                action: 'saveActivePrices',
                prices: activePrices
            },function(){ },'json'
            );
        
            $.each(activePrices, function(index, value) {
                summa = summa + parseInt(value.price);
                countItem++;
            });
            
            $("#countPrice").html(summa + " грн");
            $("#countItem").html(get_correct_str(countItem,"вещь","вещи","вещей"));
        },'json');
    });

    $("#showSelected").click(function(){
        $(".content_row").not(".check_active").toggle();
        $(this).toggleClass('active');
    });
}

function loadPrices(id,obj,qq)
{
    $(".top_prise").html($(obj).html());
    $("#countItem").html(get_correct_str(0,"річ","речі","речей"));
    $("#countPrice").html("0 грн");
    $("#priceArea").load("/getPrices.php",{id:id},function(){

        initTablePrices();
        showMeTip();

        if(qq) {
            $(this).parents('body').toggleClass('filter_active');
        }

    },"html");
}

function setCookie(name, value, options) {
      options = options || {};

      var expires = options.expires;

      if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
      }
      if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
      }

      value = encodeURIComponent(value);

      var updatedCookie = name + "=" + value;

      for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
          updatedCookie += "=" + propValue;
        }
      }

      document.cookie = updatedCookie;
}
function fixedOnScroll(){
    var headerHeight = $('.header').height();
    if ($(this).scrollTop() > headerHeight) {
        $('body').addClass('fixed');
        } 
    else {
        $('body').removeClass('fixed');
        }
}
function caclBottomPosition(){
    // Для мигающей телефонной трубки
    var topScroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var footerHeight = $('footer').innerHeight();
    var documentHeight = $(document).height();
    var triggerPoint = documentHeight - footerHeight - windowHeight;
    var targetElem = $('#popup__toggle');
    if(topScroll >= triggerPoint){
        var leftToFooter = documentHeight - topScroll - footerHeight;
        targetElem.css('bottom', windowHeight - leftToFooter + 25 + 'px'); 
    } else{
        targetElem.css('bottom', '25px');
    }
}

function showMeTip(){
    $('.showMeTip').hover(
        function(){
            $(this).addClass('tipIsShown').siblings().removeClass('tipIsShown');
        },
        function(){
             $(this).removeClass('tipIsShown');
        }
    );
    $('.showMeTipMob').click(function(){
        $(this).toggleClass('tipIsShown').siblings().removeClass('tipIsShown');
    });
}
var isAnimationRun = false;
var isRepeated = false;
function animationQueue(){
    var animatedBlocks = document.querySelectorAll('.animate'); 
    if(animatedBlocks.length>0){
        var animatedTime = 2000;
        var i = 0;
        setTimeout(function run() {
            animatedBlocks[i].classList.add('animated');
            isRepeated = animatedBlocks[i].closest('.repeatAnimation')?true:false;
            if (i < animatedBlocks.length - 1) {
                isAnimationRun = true;
                setTimeout(run, animatedTime);
            }
            else{
                if(isRepeated){
                    setTimeout(function(){
                        animatedBlocks.forEach(function(animatedBlock){
                            animatedBlock.classList.remove('animated');
                            isAnimationRun = false;
                        });
                    }, 5000);
                }
            };
            i++;
        }, animatedTime);
    }
}
function startAnimation(){
    setInterval(function() {
        if(!isAnimationRun && isRepeated){animationQueue();}
    }, 1000);
}
function caclFixedOrderBtn(){
    // Кнопка "оформить заказ" фиксируется только до конца блока с прайсами
    var generalParent = $('.um-price-wrap');
    // Только, если прайс развернут
    if(!generalParent.hasClass('show-hidden')) return;
    var topScroll = $(window).scrollTop(),
    targetBlock = $('.priceResultBtnWrap'),
    windowHeight = $(window).height(),
    triggerBlockEndTop = $('[scrollId="endOfPrice"]').length>0?$('[scrollId="endOfPrice"]').offset().top:null,
    triggerStartPoint =  $('[scrollId="staftOfPrice"]').length>0?$('[scrollId="staftOfPrice"]').offset().top:null;
    if(!triggerStartPoint) return;
    if(!triggerBlockEndTop) return;
    var triggerEndPoint = triggerBlockEndTop - windowHeight;
    if(topScroll >= triggerEndPoint || topScroll < triggerStartPoint){
        targetBlock.removeClass('fixed');
    }
    else{
        targetBlock.addClass('fixed');
    }
}
// Страница онлайн-заказ
function show_select(obj,id)
{
    var parent = $(obj).position(); 
    var h = $(obj).outerHeight(); 
    var w = $(obj).outerWidth(); 
    $("#"+id).css("left",parent.left);
    $("#"+id).css("top",parent.top + h);
    $("#"+id).slideToggle();
}
function set_select_value(name,key,select)
{
    $("#"+key).html(name);
    $("#"+select).slideUp();
}   