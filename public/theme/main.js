!function (t) {
    "use strict";
    t(window).on("load", function () {
        t("#preloader").length && t("#preloader").delay(100).fadeOut("fast", function () {
            t(this).remove()
        })
    });
    var a = t("#header").outerHeight() - 1;
    t(document).on("click", ".nav-menu a, .mobile-nav a, .scrollto", function (e) {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var o = t(this.hash);
            if (o.length) {
                e.preventDefault();
                o = o.offset().top - a;
                return "#header" == t(this).attr("href") && (o = 0), t("html, body").animate({scrollTop: o}, 1500, "easeInOutExpo"), t(this).parents(".nav-menu, .mobile-nav").length && (t(".nav-menu .active, .mobile-nav .active").removeClass("active"), t(this).closest("li").addClass("active")), t("body").hasClass("mobile-nav-active") && (t("body").removeClass("mobile-nav-active"), t(".mobile-nav-toggle i").toggleClass("navigation-menu close"), t(".mobile-nav-overly").fadeOut()), !1
            }
        }
    }), t(document).ready(function () {
        var e;
        window.location.hash && (e = window.location.hash, t(e).length && (e = t(e).offset().top - a, t("html, body").animate({scrollTop: e}, 1500, "easeInOutExpo")))
    });
    var e, o = t("section"), l = t(".nav-menu, .mobile-nav");
    t(window).on("scroll", function () {
        var a = t(this).scrollTop() + 200;
        o.each(function () {
            var e = t(this).offset().top, o = e + t(this).outerHeight();
            e <= a && a <= o && (a <= o && l.find("li").removeClass("active"), l.find('a[href="#' + t(this).attr("id") + '"]').parent("li").addClass("active")), a < 300 && t(".nav-menu ul:first li:first, .mobile-nav ul:first li:first").addClass("active")
        })
    }), t(".nav-menu").length ? (e = t(".nav-menu").clone().prop({class: "mobile-nav d-lg-none"}), t("body").append(e), t("body").prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars" aria-hidden="true"></i></button>'), t("body").append('<div class="mobile-nav-overly"></div>'), t(document).on("click", ".mobile-nav-toggle", function (e) {
        t("body").toggleClass("mobile-nav-active"), t(".mobile-nav-toggle i").toggleClass("navigation-menu fa-close"), t(".mobile-nav-overly").toggle()
    }), t(document).on("click", ".mobile-nav .drop-down > a", function (e) {
        e.preventDefault(), t(this).next().slideToggle(300), t(this).parent().toggleClass("active")
    }), t(document).click(function (e) {
        var o = t(".mobile-nav, .mobile-nav-toggle");
        o.is(e.target) || 0 !== o.has(e.target).length || t("body").hasClass("mobile-nav-active") && (t("body").removeClass("mobile-nav-active"), t(".mobile-nav-toggle i").toggleClass("navigation-menu fa-close"), t(".mobile-nav-overly").fadeOut())
    })) : t(".mobile-nav, .mobile-nav-toggle").length && t(".mobile-nav, .mobile-nav-toggle").hide(), t(window).scroll(function () {
        100 < t(this).scrollTop() ? (t("#header").addClass("header-scrolled"), t("#topbar").addClass("topbar-scrolled")) : (t("#header").removeClass("header-scrolled"), t("#topbar").removeClass("topbar-scrolled"))
    }), 100 < t(window).scrollTop() && (t("#header").addClass("header-scrolled"), t("#topbar").addClass("topbar-scrolled")), t(window).scroll(function () {
        100 < t(this).scrollTop() ? t(".back-to-top").fadeIn("slow") : t(".back-to-top").fadeOut("slow")
    }), t(".back-to-top").click(function () {
        return t("html, body").animate({scrollTop: 0}, 1500, "easeInOutExpo"), !1
    }), t('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1e3
    }), t(".testimonials-carousel").owlCarousel({
        autoplay: !0,
        dots: !0,
        loop: !0,
        responsive: {0: {items: 1}, 768: {items: 1}, 900: {items: 2}}
    }), t(document).ready(function () {
        t(".venobox").venobox()
    }), t(document).ready(function () {
        t(".datepicker").datepicker({autoclose: !0})
    })
}(jQuery);
