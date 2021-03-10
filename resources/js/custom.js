//Custom Scripts


$(document).ready(function() {
	
	$('a').each(function(){
		var languageUrl = '?language=en';
		var _href = $(this).attr('href');
		if(_href === 'https://portal.tmgm.com/register' || _href === 'https://portal.tmgm.com/login'){
			$(this).attr('href',_href + languageUrl);
		}
	});
	
	$("a.item-lang").on("click",function(){
		var Days = 30;
		var url = $(this).data("href");
		var exp = new Date(); 
		exp.setTime(exp.getTime() + Days*24*60*60*1000);
		var url_flag = url.replaceAll('/','');
		document.cookie = "cuslang="+url_flag+";expires=" + exp.toGMTString();
		window.location.href=url;
		return false;
	});

    $('.tm-tab-nav li').on('click', function () {
        $('li').removeClass('active-li');
       var clickedID = $(this).attr('data-id');
        $('.tm-tab-content').hide();
        $('#' + clickedID).show();
        $(this).addClass('active-li');
    });

    // setTimeout(function(){
    //     $(".tm-site-loader").fadeOut();
    // }, 400);

    $('.accordion-head').on('click', function () {
        $('.accordion-head').removeClass('active-header');
        $('.tm-tab-content').slideUp();
        $(this).addClass('active-header');
        $(this).next('.tm-tab-content').slideDown();
    });


    if($(window).width() <= 767){
        $('.has-submenu').on('click', function () {
            $('.tm-submenu').slideUp();
            $(this).find('.tm-submenu').slideDown();
        });
    }

    $('.tm-accordion .tm-question').first().addClass('expanded');
    $('.tm-accordion .tm-answer').first().show();
    $('.tm-question').on('click', function () {
        $('.tm-question').removeClass('expanded');
        $('.tm-answer').slideUp();
       $(this).addClass('expanded');
       $(this).next('.tm-answer').slideDown();
    });

    //product carousel
    $('#product-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        dots: false,
        dotsEach: true,
        autoHeight: false,
        autoplay: false,
        autoplayTimeout: 5400,
        autoplayHoverPause: true,
        navText: ["<i class=\"fa fa-chevron-left\"></i>", "<i class=\"fa fa-chevron-right\"></i>"],
        responsive:{
            0:{
                items:1
            },
            700:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });

    //Client carousel
    $('#tm-clients').owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        dots: false,
        dotsEach: true,
        autoHeight: false,
        autoplay: true,
        autoplayTimeout: 4400,
        autoplayHoverPause: false,
        navText: ["<i class=\"fa fa-chevron-left\"></i>", "<i class=\"fa fa-chevron-right\"></i>"],
        responsive:{
            0:{
                items:2
            },
            700:{
                items:3
            },
            1200:{
                items:5
            }
        }
    });

    //Timeline
    if($('#tm-timelines').length > 0){
        $('#tm-timelines').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            dots: false,
            dotsEach: true,
            autoHeight: true,
            autoplay: false,
            autoplayTimeout: 4400,
            autoplayHoverPause: false,
            navText: ["<i class=\"fa fa-chevron-left\"></i>", "<i class=\"fa fa-chevron-right\"></i>"],
            responsive:{
                0:{
                    items:1
                },
                700:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });
    }


    //TM product card
    $('.tm-product-card').each(function () {

    });


    //Deposit/transfer animation
    function animateLine(){
        setTimeout( function(){
            $('.line-1').fadeIn().delay(3000).fadeOut();
        }  , 1000 );

        setTimeout( function(){
            $('.line-2').fadeIn().delay(3000).fadeOut();
        }  , 5000 );

        setTimeout( function(){
            $('.line-3').fadeIn().delay(3000).fadeOut();
        }  , 9000 );
        setTimeout( function(){
            $('.line-4').fadeIn().delay(3000).fadeOut();
        }  , 13000 );
        setTimeout( function(){
            $('.line-5').fadeIn().delay(3000).fadeOut();
        }  , 17000 );
        setTimeout( function(){
            $('.line-6').fadeIn().delay(3000).fadeOut();
        }  , 21000 );
        setTimeout( function(){
            $('.line-7').fadeIn().delay(3000).fadeOut();
        }  , 25000 );
        setTimeout( function(){
            $('.line-8').fadeIn().delay(3000).fadeOut();
        }  , 29000 );
        setTimeout( function(){
            $('.line-9').fadeIn().delay(3000).fadeOut();
        }  , 33000 );
        setTimeout( function(){
            $('.line-10').fadeIn().delay(3000).fadeOut();
        }  , 37000 );
    }
    animateLine();
    setTimeout(function () {
        setInterval(function() {
            animateLine();
            $('.cls-1').toggleClass('cls-2');
        }, 39700);
    }, 2000);
    //Ends

    $('.menu-trigger').on('click', function () {
        $('.mobile-nav').fadeIn();
        $('body').css({
            'overflow':'hidden'
        })
    });
    $('.close-menu').on('click', function () {
        $('.mobile-nav').fadeOut();
        $('body').css({
            'overflow':'visible'
        })
    });


    //Home page Chart anim
    function changeLPs() {
        if($('.LP-chart').length > 0){
            setTimeout(function () {
                $('.LP-chart').removeClass('scene-1 scene-3 scene-4');
                $('.LP-chart').addClass('scene-2');
                $('.scene-2 .lp-1 > img').eq(1).show().siblings().hide();
                $('.scene-2 .lp-2 > img').eq(1).show().siblings().hide();
                $('.scene-2 .lp-3 > img').eq(1).show().siblings().hide();
                $('.scene-2 .lp-4 > img').eq(1).show().siblings().hide();
                $('.bid-card .bid-change').text('1.10004');
                $('.ask-card .ask-change').text('1.10004');
                $('.pips-card .pip-value').text('0.0');
            }, 1500);

            setTimeout(function () {
                $('.LP-chart').removeClass('scene-2 scene-3 scene-4');
                $('.LP-chart').addClass('scene-1');
                $('.scene-1 .lp-1 > img').eq(2).show().siblings().hide();
                $('.scene-1 .lp-2 > img').eq(2).show().siblings().hide();
                $('.scene-1 .lp-3 > img').eq(2).show().siblings().hide();
                $('.scene-1 .lp-4 > img').eq(2).show().siblings().hide();
                $('.bid-card .bid-change').text('1.10005');
                $('.ask-card .ask-change').text('1.10006');
                $('.pips-card .pip-value').text('0.1');
            }, 3000);

            setTimeout(function () {
                $('.LP-chart').removeClass('scene-2 scene-1 scene-3');
                $('.LP-chart').addClass('scene-4');
                $('.scene-4 .lp-1 > img').eq(3).show().siblings().hide();
                $('.scene-4 .lp-2 > img').eq(3).show().siblings().hide();
                $('.scene-4 .lp-3 > img').eq(3).show().siblings().hide();
                $('.scene-4 .lp-4 > img').eq(3).show().siblings().hide();
                $('.bid-card .bid-change').text('1.10005');
                $('.ask-card .ask-change').text('1.10005');
                $('.pips-card .pip-value').text('0.0');
            }, 4500);

            setTimeout(function () {
                $('.LP-chart').removeClass('scene-2 scene-1 scene-4');
                $('.LP-chart').addClass('scene-3');
                $('.scene-3 .lp-1 > img').eq(4).show().siblings().hide();
                $('.scene-3 .lp-2 > img').eq(4).show().siblings().hide();
                $('.scene-3 .lp-3 > img').eq(4).show().siblings().hide();
                $('.scene-3 .lp-4 > img').eq(4).show().siblings().hide();
                $('.bid-card .bid-change').text('1.10003');
                $('.ask-card .ask-change').text('1.10004');
                $('.pips-card .pip-value').text('0.1');
            }, 6000);

        }
    }
    changeLPs();
    setInterval(function () {
        changeLPs();
    }, 6000);

    // if ($('#lpAnimation').length > 0) {
    //     setInterval(function () {
    //         $.ajax({
    //             url: "lp-animation.php", success: function (result) {
    //                 $('#lpAnimation').html(result);
    //             }
    //         });
    //
    //     }, 500);
    // }

    function langAnim() {
        setTimeout(function () {
            $('.lang-en').fadeIn().delay(2000).fadeOut();
        },0);
        setTimeout(function () {
            $('.lang-cn').fadeIn().delay(2000).fadeOut();
        },3000);
        setTimeout(function () {
            $('.lang-es').fadeIn().delay(2000).fadeOut();
        },6000);
        setTimeout(function () {
            $('.lang-me').fadeIn().delay(2000).fadeOut();
        },9000);
    }

    langAnim();
    setInterval(function(){
        langAnim();
    }, 12000);

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        if(!$(this).hasClass('third-party-link')){
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 100
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        }

    });

    // if($(window).width() <= 1023){
    //     $('.fall-back-vid').attr('src', 'img/fallback.gif');
    // }

    //Simple Quiz

    $('.qtn-sectn').first().show();

    $('.trigger-quiz-result').on('click', function () {
        var ansA = $('input[name=QuestionOne]:checked').val();
        var ansB = $('input[name=QuestionTwo]:checked').val();
        var result = ansA + ansB;
        if(result === 'AA' || result === 'AC' || result === 'BA' || result === 'BC' || result === 'AB'){
            $('.result-value').text('EDGE Account');
            $('.open-account-btn').text('Open EDGE Account');
        } else if (result === 'CA' || result === 'CC'|| result === 'BB' || result === 'CB'){
            $('.result-value').text('Classic Account');
            $('.open-account-btn').text('Open Classic Account');
        } else{
            return false;
        }

        $(this).parents('.qtn-sectn').hide();
        $(this).parents('.qtn-sectn').next('.quiz-result').fadeIn();

    });

    // $('.tm-quiz input[type=radio]').on('change', function() {
    //     $('.tm-btn-wrapper').fadeIn();
    //     $('.quiz-result').hide();
    // });

    $('.btn-next').on('click', function () {
       $(this).parents('.qtn-sectn').hide();
       $(this).parents('.qtn-sectn').next('.qtn-sectn').fadeIn();
    });


    $('.tm-tab-content-wrap .tab-content').first().show();
    $('.nav-item').on('click', function () {
        var clickId = $(this).attr('data-rel');
        $('.nav-item').removeClass('active-nav');
        $('.tab-content').hide();
        $('#' + clickId).fadeIn();
        $(this).addClass('active-nav');
    });


    /////RANGE SLIDER

    function ManagedFund (){
        var managedFund =  parseInt($('#fund-managed').find('.value').attr('data-selected-value'));
        var managementFee =  parseInt($('#slider-mgmtfee').find('.value').attr('data-selected-value')) / 100;
        var profitSharing =  parseInt($('#profit-sharing').find('.value').attr('data-selected-value')) / 100;
        var averageProfit =  parseInt($('#average-profit').find('.value').attr('data-selected-value')) / 100 .toFixed(2);
        var averageProfitPow = Math.pow((averageProfit),12)
        var bracketCalc = managedFund * averageProfitPow * profitSharing;
        var earningResult = (managedFund * managementFee + bracketCalc).toFixed(2);
        $('.earning-result').text(earningResult)
    }
    ManagedFund();

    $('.slider').on('slidestop', function () {
        ManagedFund();
    });

    function LotCalc() {
        var lotStopValue =  parseInt($('#Lots').find('.value').attr('data-selected-value'));
        var lotCommission = 3;
        var earningResult = lotStopValue *  lotCommission
        $('.lot-earning-result').text('$' + earningResult)
    }

    LotCalc();

    $('.slider').on('slidestop', function () {
        LotCalc();
    });


    $('.lang-trigger').on('click', function () {
		var curlang = $(this).attr("rel");
		$(".select-language-drop").fadeIn();
		return false;
		//$('.tm-language-select-panel').fadeIn();
		//$('body').css({'overflow' : 'hidden'});
    });
    $('.close-lang-panel').on('click', function () {
        $('.tm-language-select-panel').fadeOut();
        $('body').css({'overflow' : 'auto'});
    });
	$("body").on("click",function(){
		$(".select-language-drop").fadeOut();
	});
	
	function makeTimer() {

        var endTime = new Date("8 February 2021 9:00:00 GMT+1000(AEDT)");
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days h4").html(days);
        $("#hours h4").html(hours);
        $("#minutes h4").html(minutes);
        $("#seconds h4").html(seconds);

    }

    setInterval(function() { makeTimer(); }, 1000);


});

$(function() {
    $('.box').mousemove(function(e) {
        var offset = $(this).offset(),
            /*try a random value here*/
            constante = 6,
            x = e.pageX - offset.left,
            y = e.pageY - offset.top,
            rx = (($(this).height()/2) - y) / ($(this).height() /2) * constante,
            ry = ( -1 * (($(this).width()/2) - x)) / ($(this).width()/2) * constante;

        /* $('span.box-info').text('( x, y ) : ( ' + x + ', ' + y + ' )');
         $('span.mouse-info').text('( x, y ) : ( ' + rx + ', ' + ry + ' )');*/

        $(this).css(
            { transform: 'rotateX(' + rx + 'deg)' +' ' + 'rotateY(' + ry + 'deg)'}
        )
    });
    $('.box').mouseleave(function(e) {
        $(this).css({ transform: 'rotateX(' + 0 + 'deg)' +' ' + 'rotateY(' + 0 + 'deg)'});
    });
});

$(window).bind('scroll', function () {
    var windowScroll = $(window).scrollTop();
    if(windowScroll >= 68){
        $('.tm-main-header').addClass('tm-sticky');
    } else{
        $('.tm-main-header').removeClass('tm-sticky');
    }
});



$(function () {
    if($('.js-markets').length){
        if ($(".tm-inner-section")[1]) {
            $(".tm-inner-section").eq(1).addClass("grey-color-light");
        }
        if ($(".tm-inner-section")[3]) {
            $(".tm-inner-section").eq(3).addClass("secondary-color-light");
        }
        if ($(".tm-inner-section")[6]) {
            $(".tm-inner-section").eq(6).addClass("primary-color-light");
        }
    }
    if( $('body').hasClass('page-17')){
        $('.js-thumb').each(function(i){
            if(i === 0){
                $(this).find('.js-hide').hide();
                $(this).removeClass('ea-anim');
            }
        });
        
    }
    if($('body').hasClass('page-18') || $('body').hasClass('page-15') || $('body').hasClass('page-22')){
        $('.js-hide').hide();
        $('.ea-anim').removeClass('ea-anim');
    }
	$(".policy-popups-checkbox .item").on("click",function(){
		$(this).find(".choose-icon").addClass("on").parent().siblings(".item").find(".choose-icon").removeClass("on");
	});

	$(".policy-popups-button").on("click",function(){
		$(".policy-popups,.popups-mask").stop().fadeOut(300);
	});
});

$(window).bind('scroll', function () {
	if($(".tm-global-sectn").length){
		var windowScroll = $(window).scrollTop();
		var getFormoffset = $(".tm-global-sectn").offset().top;
		if(windowScroll >= getFormoffset){
			$('.tm-btn-float').fadeOut();
		} else{
			$('.tm-btn-float').fadeIn();
		}
	}
});

//AO21 Form
if($('.tm-ao-form-container').length){
	$('.tm-ao-country-menu').on('click',function(){
		$(this).next('.tm-ao-country-drop').stop().slideToggle(200).parent().toggleClass('active');
		return false;
	});
	$(document).on('click','.tm-ao-country-drop a',function(){
		$(this).parent().stop().slideUp(200).prev('.tm-ao-country-menu').val($(this).text()).parent().removeClass('active');
		$('.tm-flags-tel .tm-tel-text').text($(this).attr('telcode'));
		$('.tm-flags-icon .iti-flag').attr('class','iti-flag '+$(this).attr('ref')+'');
		return false;
	});
	$("body").on("click",function(){
		$(".tm-ao-country-drop").fadeOut().parent().removeClass('active');
		$('.tm-flags-tel-drop').stop().fadeOut();
		$('.tm-flags-tel .arrow').removeClass('active');
		$(this).parents('.tm-flags-tel-drop').stop().slideUp(200).find('.tm-flags-tel-drop-search').val('');
		$('.tm-flags-tel-drop-menu li').show();
	});
	$.ajax({
		url:'/au/json/country.json',
		type: 'GET',
		dataType:'json',
		success: function(data){
			if(data){
				$.each(data.en,function(i,v){
					$('.tm-flags-tel-drop-menu ol').append('<li><div class="iti-flag '+v.classname+'"></div><b class="countryName">'+v.county+'</b><div class="phoneCo">'+v.phoneCo+'</div></li>');
					var _countryName = $('meta[name="country-code"]').attr('content');
					if(v.classname === _countryName.toLowerCase()){
						$('[name="country"]').val(v.county);
						$('.tm-flags-tel .tm-tel-text').text(v.phoneCo);
						$('.tm-flags-tel .iti-flag').attr('class','iti-flag '+v.classname+'');
						$('.tm-ao-country-drop').prepend('<a href="javascript:;" ref="'+v.classname+'" telcode="'+v.phoneCo+'">'+v.county+'</a>');
					}else{
						$('.tm-ao-country-drop').append('<a href="javascript:;" ref="'+v.classname+'" telcode="'+v.phoneCo+'">'+v.county+'</a>');
					}
				})
			}
		}
	});
	$('.tm-flags-tel').on('click',function(){
		$(this).siblings('.tm-flags-tel-drop').stop().slideToggle(200);
		$(this).find('.arrow').toggleClass('active');
		$('.tm-flags-tel-drop-menu li').show();
		$('.tm-flags-tel-drop-search').val('');
		$('.tm-flags-tel-mask').stop().fadeToggle(200);
		return false;
	});
	$(document).on('click','.tm-flags-tel-drop-menu li',function(){
		$(this).parents('.tm-flags-tel-box').find('.tm-tel-text').text($(this).find('.phoneCo').text()).prev().children().attr('class',$(this).find('.iti-flag').attr('class'));
		$(this).parents('.tm-flags-tel-box').find('.arrow').toggleClass('active');
		$(this).parents('.tm-flags-tel-drop').stop().slideUp(200).find('.tm-flags-tel-drop-search').val('');
		$('.tm-flags-tel-drop-menu li').show();
		$('.tm-flags-tel .arrow').removeClass('active');
		$('.tm-flags-tel-mask').stop().fadeToggle(200);
		return false;
	});
	$('.tm-flags-tel-drop-search').on('keyup',function(){
		var _val = $(this).val().toLowerCase();
		var _box = $(this).parent().siblings('.tm-flags-tel-drop-menu');
		_box.find('li').each(function(v){
			if($(this).text().toLowerCase().indexOf(_val) === -1){
				$(this).hide();
			}else{
				$(this).show();
			}
		});
	});
	$('.tm-flag-search').on('click',function(){
		return false;
	});
	function onSubmit(token) {
	 document.getElementById("demo-form").submit();
   }
	//submit
	var parmas; //key
	$('.tm-ao-form-submit').on('click',function(){
		var checkKey = true;
		var regName = /^[a-zA-Z]+$/;
		var regTel = /^[0-9]{7,32}$/;
		var regEmail = /^[A-Za-z0-9]+[A-Za-z0-9_\-\.\+]*\@[A-Za-z0-9\-\+]*[A-Za-z0-9]+(\.[A-Za-z0-9\-]+)+$/;
		var _this = $(this).parents('.tm-ao-form-container');
		_this.find('.form-list [name]').each(function(){
			var _name = $(this)[0].name;
			var _val = $(this).val();
			var errorKey;
			// empty
			if(_name !== 'middleName' && !_val){
				switch(_name){
					case 'firstName':
						errorKey = 'First Name';
						break;
					case 'lastName':
						errorKey = 'Last Name';
						break;
					case 'country':
						errorKey = 'Country';
						break;
					case 'tel':
						errorKey = 'Mobile';
						break;
					case 'email':
						errorKey = 'Email';
						break;
				}
				formTipsContent(''+errorKey+' cannot be empty.');
				checkKey = false;
				return false;
			}
			// name
			if(_name === 'firstName' || _name === 'middleName' || _name === 'lastName'){
				if(_val && !regName.test(_val)){
					formTipsContent('Please enter valid name.');
					checkKey = false;
					return false;
				}
			}
			// tel
			if(_name === 'tel' && !regTel.test(_val)){
				formTipsContent('Please enter a valid mobile number.');
				checkKey = false;
				return false;
			}
			// emial
			if(_name === 'email' && !regEmail.test(_val)){
				formTipsContent('Please enter a valid email.');
				checkKey = false;
				return false;
			}
			//agreement
			if($('.tm-tradingbonus-form').length && !$('.tm-form-agreement .checkbox').hasClass('active')){
                formTipsContent('Please agree to the terms and conditions.');
                checkKey = false;
                return false;
            }
		});
		if(checkKey){
			//验证成功
			$('#google_captcha').stop().fadeIn(300);
			$('.tm-ao-form,.tm-tradingbonus-form').addClass('isVerify');
			$('.google_captcha_mask').show();
			parmas = {
				first_name: _this.find('[name="firstName"]').val(),
				middle_name: _this.find('[name="middleName"]').val(),
				last_name: _this.find('[name="lastName"]').val(),
				country: _this.find('[name="country"]').val(),
				mobile: _this.find('[name="tel"]').val(),
				email: _this.find('[name="email"]').val(),
				country_code: _this.find('.tm-tel-text.arrow').text().trim(),
				send_email: 1,
				register_account_type: 1,
				language: 'en',
				referral_code: '',
				redirect: 'applyLiveTa'
			}
		}
	});
	var verifyCallback = function(response) {
	
		if(set_ReferralCode!=""){
			parmas.referral_code = set_ReferralCode;
		}
		if(set_SendEmail!=""){
			parmas.send_email = parseInt(set_SendEmail);
		}
		if(window.location.href.indexOf('referral_code') !== -1){
			parmas.referral_code = window.location.href.split('referral_code=')[1]
		}
		
		$('#google_captcha').stop().fadeOut(300);
		$('.google_captcha_mask').hide();
		$('.tmgm-ajax_loading').stop().fadeIn(300);
		$.post("/trans.aspx",parmas,function(res){
			var data = JSON.parse(res);
			if(data){
				if(!data.message){
					var _code = data.redirect_address.split('sign=');
					var _url = encodeURIComponent(_code[1]);
					if(data.redirect_address && $(window).width() > 1024) window.open(_code[0]+'sign='+_url+'&language=en');
					var _murl = data.redirect_address.split('/official-redirect')[1];
					if(data.redirect_address && $(window).width() < 1024) window.location.href = 'https://portal-m.tmgm.com/official-redirect'+_murl+'&language=en'; 
				}else{
					formTipsContent(data.message);
				}
				$('.tm-ao-form,.tm-tradingbonus-form').removeClass('isVerify');
				$('.tmgm-ajax_loading').stop().fadeOut(300);
			}
		});
		
	};
	function formTipsContent(_text){
		if($('.tm-form-tips').is(':hidden')){
			$('.tm-form-tips').text(_text).stop().fadeIn();
			setTimeout(function(){
				$('.tm-form-tips').stop().fadeOut();
			},3000)
		}
	}
	var onloadCallback = function() {
		grecaptcha.render('google_captcha', {
		  'sitekey' : '6LczFSgaAAAAAEzdB7Cnf0RgTWXbyovQcyYxKli3',
		  'callback' : verifyCallback
		});
	};
	$('.google_captcha_mask').on('click',function(){
		$(this).hide();
		$('#google_captcha').stop().fadeOut(300);
		$('.tm-ao-form,.tm-tradingbonus-form').removeClass('isVerify');
	});
	
	$('.tm-form-agreement .checkbox').on('click',function(){
        $(this).toggleClass('active');
    });
	
	
}
//trade width au open
if($('.australian-open-landing-language').length){
	AcuityWidgets.globals({
		apikey: '22d84346-074e-4e8f-b4e4-4ad585b26842',
		locale: 'en-GB' // en-GB for English & other languages
	});
	var urllink = window.location.href.split('type=');
	var urlQuery = urllink.length > 1 ? urllink[1] : 'men';
	var queryGroup = urlQuery === 'men' ? 'male' : 'female';
	if(queryGroup !== 'male'){
		$('.australian-open-landing-language a').addClass('female')
	}
	var widget = AcuityWidgets.CreateWidget(
		'australianopenlanding',
		document.getElementById('australian-open-landing'),
		{
			'gender': queryGroup, // male for men.  female for women
			'ctaLink': 'https://portal.tmgm.com/login?language=en' // the link need to be used with the correct language to portal register.
		}
	);
	widget.mount();
	$(function(){
		$('.australian-open-landing-language').addClass('show');
		$('.australian-open-landing-language a').on('click',function(){
			$(this).toggleClass('female');
			var _groupUrl = !$('.australian-open-landing-language a').hasClass('female') ? 'men' : 'women';
			window.open(''+window.location.href.replace('?type=men','').replace('?type=women','')+'?type='+_groupUrl+'','_self')
		});
	})
}
