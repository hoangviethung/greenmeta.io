(function ($) {
    function scrollToSection() {
        $("#primary-menu .menu-item a")
            .not("[target='_blank'],[href='#']")
            .on("click", function (e) {
                e.preventDefault();
                var aid = $(this).attr("href");
                resetAsideMenuMobile();
                $("html,body").animate(
                    { scrollTop: $(aid).offset().top },
                    "slow",
                );
            });
    }
    function collapseAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").on("click", function (e) {
            $(this).toggleClass("active");
            $(".main-navigation").toggleClass("active");
            $("#page").toggleClass("overlay");
            $("body").toggleClass("no-scroll");
        });
        $(".overlay").on("click", function (e) {
            $(".js-collapse-aside-menu-mobile").trigger("click");
        });
        $(".close-nav-mobile").on("click", function (e) {
            $(".js-collapse-aside-menu-mobile").trigger("click");
        });
    }
    function resetAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").removeClass("active");
        $(".main-navigation").removeClass("active");
        $("#page").removeClass("overlay");
        $("body").removeClass("no-scroll");
    }
    function setVariableStyleNavMobile() {
        $(".main-navigation").attr(
            "style",
            `--height-header: ${getHeightHeader()}px`,
        );
    }
    function getHeightHeader() {
        return $("header.site-header").outerHeight();
    }
    $(document).ready(function () {
        scrollToSection();
        collapseAsideMenuMobile();
    });
    $(window).load(function () {
        setVariableStyleNavMobile();
    });
})(jQuery);
