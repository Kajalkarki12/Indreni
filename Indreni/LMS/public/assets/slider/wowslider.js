// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 2.7
jQuery.fn.wowSlider = function (d) {
    var e = jQuery;
    var h = this;
    var t = h.get(0);
    d = e.extend({
        prev: "",
        next: "",
        duration: 1000,
        delay: 20 * 100,
        width: 960,
        height: 360,
        controls: true,
        autoPlay: true,
        bullets: true,
    }, d);
    var a = e(".ws_images", h);
    var l = a.find("ul");

    function u(D) {
        l.css({
            left: -D + "00%"
        })
    }
    e("<div>")
        .css({
        width: "100%",
        visibility: "hidden",
        "font-size": 0,
        "line-height": 0
    })
        .append(a.find("li:first img:first")
        .clone()
        .css({
        width: "100%"
    }))
        .prependTo(a);
    l.css({
        position: "absolute",
        top: 0,
        animation: "none",
        "-moz-animation": "none",
        "-webkit-animation": "none"
    });
    var m = a.find("li");
    var v = m.length;

    function i(D) {
        return ((D || 0) + v) % v
    }
    var C = navigator.userAgent;
    if ((e.browser.msie && parseInt(e.browser.version, 10) < 8) || (/Safari/.test(C))) {
        var b = Math.pow(10, Math.ceil(Math.LOG10E * Math.log(v)));
        l.css({
            width: b + "00%"
        });
        m.css({
            width: 100 / b + "%"
        })
    } else {
        l.css({
            width: v + "00%",
            display: "table"
        });
        m.css({
            display: "table-cell",
            "float": "none",
            width: "auto"
        })
    }
    u(0);
    var k = [];
    m.each(function (D) {
        var F = e(">img:first,>a:first,>div:first", this)
            .get(0);
        var G = e("<div></div>");
        for (var E = 0; E < this.childNodes.length;) {
            if (this.childNodes[E] != F) {
                G.append(this.childNodes[E])
            } else {
                E++
            }
        }
        if (!e(this)
            .data("descr")) {
            e(this)
                .data("descr", G.html()
                .replace(/^\s+|\s+$/g, ""))
        }
        e(this)
            .css({
            "font-size": 0
        });
        k[k.length] = e(">a>img", this)
            .get(0) || e(">*", this)
            .get(0)
    });
    k = e(k);
    k.css("visibility", "visible");

    function f(F, D, E) {
        this.go = function (G) {
            E.find("ul")
                .stop(true)
                .animate({
                left: (G ? -G + "00%" : (/Safari/.test(navigator.userAgent) ? "0%" : 0))
            }, F.duration, "easeInOutExpo");
            return G
        }
    }
    var o = new f(d, k, a);
    var c = 0;

    function r(F, E, D) {
        if (isNaN(F)) {
            F = c + 1
        }
        F = i(F);
        if (c == F) {
            return
        }
        s(F, E, D)
    }
    function s(F, E, D) {
        var F = o.go(F, c, E, D);
        if (F < 0) {
            return
        }
        q(F);
        j(m[F]);
        c = F;
        z()
    }
    var B = h.find(".ws_bullets");

    function q(D) {
        if (B.length) {
            n(D)
        }
    }
    var p;

    function z(D) {
        w();
        if (d.autoPlay) {
            p = setTimeout(function () {
                r()
            }, d.delay + (D ? 0 : d.duration))
        }
    }
    function w() {
        if (p) {
            clearTimeout(p)
        }
        p = null
    }
    function y(G, F, E, D) {
        w();
        G.preventDefault();
        r(F, E, D);
        z()
    }
    if (d.controls) {
        var x = e('<a href="#" class="ws_next">' + d.next + "</a>");
        var g = e('<a href="#" class="ws_prev">' + d.prev + "</a>");
        h.append(x);
        h.append(g);
        x.bind("click", function (D) {
            y(D, c + 1)
        });
        g.bind("click", function (D) {
            y(D, c - 1)
        })
    }
    function A() {
        h.find(".ws_bullets a")
            .click(function (L) {
            y(L, e(this)
                .index())
        });
        if (B.length) {
            var F = B.find(">div");
            var K = e("a", B);
            var I = K.find("IMG");
            if (I.length) {
                var H = e('<div class="ws_bulframe"/>')
                    .appendTo(F);
                var E = e("<div/>")
                    .css({
                    width: I.length + 1 + "00%"
                })
                    .appendTo(e("<div/>")
                    .appendTo(H));
                I.appendTo(E);
                e("<span/>")
                    .appendTo(H);
                var G = -1;

                function J(N) {
                    if (N < 0) {
                        N = 0
                    }
                    e(K.get(G))
                        .removeClass("ws_overbull");
                    e(K.get(N))
                        .addClass("ws_overbull");
                    H.show();
                    var O = {
                        left: K.get(N)
                            .offsetLeft - H.width() / 2,
                        "margin-top": K.get(N)
                            .offsetTop - K.get(0)
                            .offsetTop + "px",
                        "margin-bottom": -K.get(N)
                            .offsetTop + K.get(K.length - 1)
                            .offsetTop + "px"
                    };
                    var M = I.get(N);
                    var L = {
                        left: -M.offsetLeft + (e(M)
                            .outerWidth(true) - e(M)
                            .outerWidth()) / 2
                    };
                    if (G < 0) {
                        H.css(O);
                        E.css(L)
                    } else {
                        if (!document.all) {
                            O.opacity = 1
                        }
                        H.stop()
                            .animate(O, "fast");
                        E.stop()
                            .animate(L, "fast")
                    }
                    G = N
                }
                K.hover(function () {
                    J(e(this)
                        .index())
                });
                var D;
                F.hover(function () {
                    if (D) {
                        clearTimeout(D);
                        D = 0
                    }
                    J(G)
                }, function () {
                    K.removeClass("ws_overbull");
                    if (document.all) {
                        if (!D) {
                            D = setTimeout(function () {
                                H.hide();
                                D = 0
                            }, 400)
                        }
                    } else {
                        H.stop()
                            .animate({
                            opacity: 0
                        }, {
                            duration: "fast",
                            complete: function () {
                                H.hide()
                            }
                        })
                    }
                });
                F.click(function (L) {
                    y(L, e(L.target)
                        .index())
                })
            }
        }
    }
    function n(D) {
        e("A", B)
            .each(function (E) {
            if (E == D) {
                e(this)
                    .addClass("ws_selbull")
            } else {
                e(this)
                    .removeClass("ws_selbull")
            }
        })
    }
    h.append("<div class='ws-title' style='display:none'></div>");

    function j(E) {
        var G = e("img", E)
            .attr("title");
        var F = e(E)
            .data("descr");
        var D = e(".ws-title", h);
        D.stop(1, 1)
            .stop(1, 1)
            .fadeOut(1000 / 3, function () {
            if (G || F) {
                D.html((G ? "<span>" + G + "</span>" : "") + (F ? "<div>" + F + "</div>" : ""));
                D.fadeIn(400, function () {
                    if (e.browser.msie) {
                        e(this)
                            .get(0)
                            .style.removeAttribute("filter")
                    }
                })
            }
        })
    }
    if (B.length) {
        A()
    }
    q(c);
    j(m[c]);
    z(1);
    return this
};
jQuery.extend(jQuery.easing, {
    easeInOutExpo: function (e, f, a, h, g) {
        if (f == 0) {
            return a
        }
        if (f == g) {
            return a + h
        }
        if ((f /= g / 2) < 1) {
            return h / 2 * Math.pow(2, 10 * (f - 1)) + a
        }
        return h / 2 * (-Math.pow(2, - 10 * --f) + 2) + a
    }
});


var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;