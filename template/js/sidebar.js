$(document).ready(function() {

    //Administrator panel sidebar
    $(".fa-times").on("click", function() {
        $(".sidebar").removeClass("active");
    });
    $(".burger-btn").on("click", function() {
        $(".sidebar").addClass("active");
    });

    //Main shop sidebar
    $(".burger-sidebar").on("click", function() {
        $(".sidebar").addClass("active");
        $(".menu-overlay").addClass("active");
        $("body").css("overflow", "hidden");
    });
    $(".cross-close").on("click", function() {
        $(".sidebar").removeClass("active");
        $(".menu-overlay").removeClass("active");
        $("body").css("overflow", "visible");
    });
    $(".menu-overlay").on("click", function() {
        $(".sidebar").removeClass("active");
        $(".menu-overlay").removeClass("active");
        $("body").css("overflow", "visible");
    });


    // $(".content").niceScroll({cursorcolor: "#40c3de"});
    // $(".sidebar").niceScroll({cursorcolor: "#40c3de"});

    jsNav();

    function jsNav(){
        var $link=$(".js-nav-link"),$subNav=$(".js-subnav");
        if($link.length){
            $link.on("click",function(){
                var self=$(this), thisNav=self.siblings(".js-subnav"), li=self.closest("li");
                $link.removeClass("active");
                if(li.hasClass("active")){
                    if(!li.hasClass("current")){
                        self.removeClass("active");
                        li.removeClass("active");
                        thisNav.slideUp(300);
                    }
                }else{
                    $subNav.each(function(){
                        var sli=$(this).closest("li");
                        if(sli.hasClass("active")&&!sli.hasClass("current")){
                            self.removeClass("active");
                            $(this).slideUp(300);
                            sli.removeClass("active");
                        }
                    });
                    $(".sidebar-nav-list-item").removeClass("active");
                    self.addClass("active");
                    li.addClass("active");
                    thisNav.slideDown(300);
                }
            });
        }
    }

    $(".board-stat").each(function () {
       $(this).prop("Counter", 0).animate({
           Counter: $(this).text()
       }, {
           duration: 1500,
           easing: 'swing',
           step: function (now) {
               $(this).text(Math.ceil(now));
           }
       });
    });
});
