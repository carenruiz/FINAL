$(document).ready(function(){
    HOME.init();



});

var HOME = {
    init:function(){
        // if(jQuery('body').hasClass('home')){
            this.slider();
             // this.slidercomprar();
        // }
    },


    slider: function(){
    $('.owl-carousel').owlCarousel({
            loop:true,
            dots:true,
            responsiveClass:true,
            // autoplay:true,
            // autoplayTimeout:3000,
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
    $('.owl-carouseldos').owlCarousel({
            loop:true,
            dots:true,
            responsiveClass:true,
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