!function($){$(document).ready((function(){var headerHeight=$(".page__header, .home__hero").outerHeight();$(window).on("scroll",(function(event){$(window).scrollTop()>=headerHeight?$(".header__main").addClass("is--floating"):$(".header__main").removeClass("is--floating")}))}))}(jQuery);