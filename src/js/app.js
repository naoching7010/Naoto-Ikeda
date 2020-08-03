import $ from 'jquery';

$(function() {
    let height = $("#header").outerHeight();
    $("#main").css("margin-top", height);

    $('.js-nav-scroll').on('click', function() {
        $('.js-toggle-sp-menu').removeClass('active');
        $('.js-toggle-sp-menu-target').removeClass('active');
        const speed = 500;
        let href = $(this).attr("href");
        let position = $(href).offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    $('.js-toggle-sp-menu').on('click', function() {
        $(this).toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
    });

    // $('.js-close-sp-menu').on('click', function() {
    //     $('.js-toggle-sp-menu').removeClass('active');
    //     $('.js-toggle-sp-menu-target').removeClass('active');
    // });

    let $about = $('#about');
    if($about[0] !== undefined) {
        $("a[href$='#about']").addClass('active');
    }

    let $hobby = $('#hobby');
    if($hobby[0] !== undefined) {
        $("a[href$='#hobby']").addClass('active');
    }

    $(window).on('scroll', function() {
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        let $nowView;

        if($about[0] !== undefined) {
            $nowView = $("a[href$='#about']");
        }

        if($hobby[0] !== undefined) {
            $nowView = $("a[href$='#hobby']");
        }

        let $skills = $('#skills');
        if($skills[0] !== undefined) {
            let position_skills = $skills.offset().top;
            let languages = ['html', 'css', 'js', 'php', 'vue', 'laravel'];
            if(scroll > position_skills) {
                $nowView = $("a[href$='#skills']");
            }
            if(scroll > position_skills - windowHeight + windowHeight * 2 / 3){
                languages.forEach(function( value ){
                    $('.js-show-' + value).addClass('skills-' + value);
                    // let $target = $('.js-show-' + value);
                    // $target.delay(i * 300).queue(() => {
                    //     $target.addClass('skills-' + value).dequeue();
                    // })
                });
            }
        }
        
        
        let $works = $('#works');
        if($works[0] !== undefined) {
            let position_works = $works.offset().top;
            if(scroll > position_works) {
                $nowView = $("a[href$='#works']");
            }
            if(scroll > position_works - windowHeight + windowHeight * 2 / 3) {
                $works.find('.js-add-active').each(function(i) {
                    $(this).delay(i * 300).queue(() => {
                        $(this).addClass('active').dequeue();
                    })
                });
            } 
        }
        
        let $services = $('#services');
        if($services[0] !== undefined) {
            let position_services = $services.offset().top;
            if(scroll > position_services) {
                $nowView = $("a[href$='#services']");
            }
            if(scroll > position_services - windowHeight + windowHeight * 2 / 3) {
                $services.find('.js-add-active').each(function(i) {
                    $(this).delay(i * 300).queue(() => {
                        $(this).addClass('active').dequeue();
                    })
                });
            }
        }

        let $contact = $('#contact');
        if($contact[0] !== undefined) {
            let position_contact = $contact.offset().top;
            if(scroll > position_contact) {
                $nowView = $("a[href$='#contact']");
            }
        }

        let $career = $('#career');
        if($career[0] !== undefined) {
            let position_career = $career.offset().top;
            if(scroll > position_career) {
                $nowView = $("a[href$='#career']");
            }
            if(scroll > position_career - windowHeight + windowHeight / 2) {
                $career.find('.js-add-active').addClass('active')
            }
        }

        let $points = $('#points');
        if($points[0] !== undefined) {
            let position_points = $points.offset().top;
            if(scroll > position_points) {
                $nowView = $("a[href$='#points']");
            }
            if(scroll > position_points - windowHeight + windowHeight / 2) {
                $points.find('.js-add-active').each(function(i) {
                    $(this).addClass('active')
                });
            }
        }
        
        let $vision = $('#vision');
        if($vision[0] !== undefined) {
            let position_vision = $vision.offset().top;
            if(scroll > position_vision) {
                $nowView = $("a[href$='#vision']");
            }
            if(scroll > position_vision - windowHeight + windowHeight / 2) {
                $vision.find('.js-add-active').addClass('active');
            }
        }
        $('.js-nav-scroll').removeClass('active');
        $nowView.addClass('active');
    });
    

    let $jsPrevBtn = $('.js-prev-btn');
    let $jsNextBtn = $('.js-next-btn');
    let $jsSliderContainer = $('.js-slider-container');
    if($jsPrevBtn[0] !== undefined && $jsNextBtn[0] !== undefined && $jsSliderContainer[0] !== undefined) {
        let $jsSliderItemWidth = $('.js-slider-item').width();

        const autoTime = 3000;
        const speed = 600;
        const timing = "linear"
        const page = 1;
    
        let flag = true;
        let set;
    
        const autoPlay = () => {
            set = setInterval(() => {
                slideNext();
            },  autoTime);
        }
        autoPlay();
    
        $jsNextBtn.on('click', function() {
            slideNext();
        });
    
        $jsPrevBtn.on('click', function() {
            slidePrev();
        });
    
    
        function slideNext() {
            if(flag) {
                flag = false;
                clearInterval(set);
    
                $jsSliderContainer.animate({
                    left: -$jsSliderItemWidth * page
                }, speed, timing, function() {
                    for (let i = 0; i < page; i++) {
                        $jsSliderContainer.append($('.js-slider-item').eq(0));
                    }
                    $jsSliderContainer.css({
                        left: 0
                    });
        
                    flag = true;
                    autoPlay();
                });
            }
        }
    
        function slidePrev() {
            if(flag) {
                flag = false;
                clearInterval(set);
    
                for (let i = 0; i < page; i++) {
                    $jsSliderContainer.prepend($('.js-slider-item').eq(-1));
                }
    
                $jsSliderContainer.css({
                    left: -$jsSliderItemWidth * page
                }).animate({
                    left: 0
                }, speed, timing, function(){
          
                    flag = true;
                    autoPlay();
                });
            }
        }
    }
});