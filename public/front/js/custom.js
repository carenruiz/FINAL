jQuery(document).ready(function(){
    HOME.init();
    FOOTER.init();
});

var HOME={
    init:function(){
        //if(jQuery('body').hasClass('home')){
            this.slider();
            this.slidercomprar();
            this.stickyHeader();
            this.toggle();
        //}
    },


    slider:function(){
        jQuery('.owl-carousel.uno').owlCarousel({
            loop:true,
            dots:true,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:1,
                    dots:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:1,
                    dots:true,
                    loop:true

                }
            }
        })
    },
    slidercomprar: function(){
        jQuery('.owl-carousel.dos').owlCarousel({
            loop:true,
            nav:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    dots:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:4,
                    dots:true,
                    loop:true

                }
            }
        })
    },
    stickyHeader: function(){
        jQuery(window).scroll(function (){
            if(jQuery(this).scrollTop() > 150) {
                jQuery("#header,.nav-links").addClass('sticky');
            } 
            else{
                jQuery("#header,.nav-links").removeClass('sticky');
            }
        });
    },
    toggle:function(){
        jQuery(".my-acount").click(function(){
            jQuery("#header-acount").toggle();
        });
    }
}
var FOOTER ={
    init:function(){     
    },
    newsLeave: function(sender, defaultValue) {
        if (jQuery.trim(sender.value) == '') sender.value = defaultValue;
    },
    newsSelect: function(sender, defaultValue) {
        if (sender.value == defaultValue) sender.value = '';
        else sender.select();
    },
}