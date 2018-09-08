jQuery(document).ready(function(){
    HOME.init();
    FOOTER.init();
    PRODUCTO.init();
});
var HEADER={
    init:function(){
        this.menu();
        this.user();
    },
    menu:function(){
        jQuery("#menu").click(function(){
            jQuery("#nav").toggle();
        });
    },
    user:function(){
        jQuery("#pop-up").click(function () {
            jQuery("#popup-menu").fancybox();
        });
    },

}

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
                jQuery(".mini-menu").addClass('sticky');
            } 
            else{
                jQuery(".mini-menu").removeClass('sticky');
            }
        });
    },
    toggle:function(){
        jQuery("#menu").click(function(){
            jQuery("#nav").toggle();
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
var PRODUCTO ={
    init:function(){
        this.tabs();
    },

    tabs:function(){
        jQuery( 'li.center').click(function() {
            if(jQuery('li.center').hasClass('active')) {
                jQuery('li.center').removeClass('active');
            } 
            else{
                jQuery(this).addClass('active')
            }
        });
    }
}