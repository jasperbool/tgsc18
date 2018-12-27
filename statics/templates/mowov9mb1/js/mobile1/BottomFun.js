var Gobal = new Object();
function GetJPData(d, c, a, b) {
 
//alert(d + "/mobile/" + c + "/" + a );
//alert(b);
    //$.getJSON(d + "/JPData?action=" + c + "&" + a + "&fun=?", b)
    $.getJSON(d + "/mobile/" + c + "/" + a , b)
}
var mainHttp = "           "; (function() {
    if (window.self != window.top) {
        var b = mainHttp;
        if (typeof(window.location) == "object") {
            b = window.location.href
        }
        var a = $("<form name='toTopUrl' method='get' action='" + b + "' target='_top'></form>");
        a.appendTo("body").ready(function() {
            a.submit()
        })
    }
})();
function GetJPData1(d, c, a, b) {
    $.getJSON("/?/api/ajaxcount/buy_count/fun=?", b)
}
var loadImgFun = function() {
    var e = "src2";
    var b = $("#loadingPicBlock");
    if (b.length > 0) {
        var c = b.find("img");
        var d = function() {
            return Math.max(document.documentElement.scrollTop, document.body.scrollTop)
        };
        var a = function() {
            return document.documentElement.clientHeight + d() + 100
        };
        var f = d();
        var g = f;
        var h = function() {
            c.each(function() {
                if ($(this).parent().offset().top <= a()) {
                    var i = $(this).attr(e);
                    if (i) {
                        $(this).attr("src", i).removeAttr(e).show()
                    }
                }
            })
        };
        $(window).bind("scroll",
        function() {
            g = d();
            if (g - f > 50) {
                f = g;
                h()
            }
        });
        h()
    }
};
var _IsCartChanged = true;
var _IsBuySubmiting = false;
var _InsertIntoCart = function() {}; (function() {
    var L = mainHttp;
    var r = "";
    var c = function() {
        if ($.browser.msie && $(window).width() < 1190) {
            if (parseInt($.browser.version) < 9) {
                $("body").addClass("f-width-change")
            } else {
                $("body").removeClass("f-width-change")
            }
        } else {
            $("body").removeClass("f-width-change")
        }
    };
    var b = $("#ulHTotalBuy");
    var i = $("#spFundTotal");
    var S = 0;
    var ai = 2000;
    var f = function() {
        GetJPData1(r, "totalBuyCount", "",
        function(aw) {
            if (aw.state == 0) {
                i.html("￥" + aw.fundTotal);
                if (S != aw.count) {
                    if (S == 0) {
                        S = aw.count;
                        b.children("li.num").each(function() {
                            var ay = '<cite style="top:24px;">';
                            for (var az = 9; az >= 0; az--) {
                                ay += '<em t="' + az + '">' + az + "</em>"
                            }
                            ay += "</cite><i></i>";
                            $(this).html(ay)
                        });
                        var at = aw.count.toString();
                        var av = at.length;
                        var au = at.split("");
                        b.find("cite").each(function(aB, ay) {
                            var aA = $(this);
                            var az = parseInt(au[aB]);
                            aA.animate({
                                top: "-" + (27 * (9 - az)) + "px"
                            },
                            {
                                queue: false,
                                duration: ai,
                                complete: function() {}
                            })
                        })
                    } else {
                        var ax = S.toString().split("");
                        var ar = aw.count.toString().split("");
                        S = aw.count;
                        b.find("cite").each(function(aD, aA) {
                            var aE = 0;
                            var aC = parseInt(ax[aD]);
                            if (ax[aD] <= ar[aD]) {
                                aE = parseInt(ar[aD]) - parseInt(ax[aD])
                            } else {
                                aE = 10 + parseInt(ar[aD]) - parseInt(ax[aD])
                            }
                            if (aE != 0) {
                                var aF = $(this).children('em[t="' + aC + '"]');
                                var az = aF.nextAll();
                                for (var aB = az.length - 1; aB > -1; aB--) {
                                    $(this).prepend($(az[aB]))
                                }
                                var ay = -(243 - aE * 27);
                                $(this).css({
                                    top: "24px"
                                }).animate({
                                    top: ay
                                },
                                {
                                    queue: false,
                                    duration: ai,
                                    complete: function() {}
                                })
                            }
                        })
                    }
                }
            }
        });
        setTimeout(f, 5000)
    };
    if (b.length > 0 || i.length > 0) {
        f()
    }
    var A = $("#ulRToolList");
    var o = A.children("li.f-cart");
    var ac = o.children("a").find("em");
    var ab = $("#divCartBox");
    A.children("li.f-top").click(function() {
        $("body,html").animate({
            scrollTop: 0
        },
        0);
        return false
    })
})();
function loadImgFun(c) {
    var b = $("#loadingPicBlock");
    if (b.length > 0) {
        var i = "src2";
        Gobal.LoadImg = b.find("img[" + i + "]");
        var a = function() {
            return $(window).scrollTop()
        };
        var e = function() {
            return $(window).height() + a() + 50
        };
        var h = function() {
            Gobal.LoadImg.each(function(j) {
                if ($(this).offset().top <= e()) {
                    var k = $(this).attr(i);
                    if (k) {
                        $(this).attr("src", k).removeAttr(i).show()
                    }
                }
            })
        };
        var d = 0;
        var f = -100;
        var g = function() {
            d = a();
            if (d - f > 50) {
                f = d;
                h()
            }
        };
        if (c == 0) {
            $(window).bind("scroll", g)
        }
        g()
    }
}
String.prototype.trim = function() {
    return this.replace(/(\s*$)|(^\s*)/g, "")
};
String.prototype.trims = function() {
    return this.replace(/\s/g, "")
};
var addNumToCartFun = null; (function() {
   // Gobal.Skin = "http://www.modole.com";

    Gobal.Skin = Path.Skin; 
    Gobal.Webpath = Path.Webpath; 
    Gobal.imgpath = Path.imgpath;  //上传图片地址
    
    Gobal.LoadImg = null;
    Gobal.LoadHtml = '<div class="loadImg">正在加载</div>';
    Gobal.LoadPic = Gobal.Skin + "/images/loading.gif";
	 
    Gobal.NoneHtml = '<div class="haveNot z-minheight"><s></s><p>暂无记录</p></div>';
    Gobal.unlink = "javascript:void(0);";
    $("#tBtnReturn").click(function() {
        history.go( - 1);
        return false
    });
    var d = Gobal.Webpath+"/login";
    loadImgFun(0);
    var a = $("#fLoginInfo");
    GetJPData(Gobal.Webpath, "ajax", "init",
    function(h) {       
        var g = '<span><a href="'+Gobal.Webpath+'/mobile/mobile">首页</a><b></b></span><span><a href='+Gobal.Webpath+'/mobile/home/inviteshare>新手指南</a><b></b></span>';
        if (h.code == 0) {		   
            g = g + '<span><a href="'+Gobal.Webpath+'/mobile/home" class="Member">' + h.username + '</a><a href="'+Gobal.Webpath+'/mobile/user/cook_end" class="Exit">退出</a></span>'
        } else {
            g = g + '<span><a href="'+Gobal.Webpath+'/mobile/user/login">登录</a><b></b></span><span><a href="'+Gobal.Webpath+'/mobile/register">注册</a></span>'
        }
		 
        a.html(g)
    });
	//购物车网页顶部
    var c = $("#btnCart");
    if (c.length > 0) {
        GetJPData(Gobal.Webpath,"ajax","cartnum",
        function(g) {		   
            if (g.code == 0 && g.num > 0) {
                c.html("<em>" + g.num + "</em>")
            }
        })
    }
    addNumToCartFun = function(g) {
        c.html("<em>" + g + "</em>")
    };
    var e = function(h) {
        var g = new Date();		 
        h.attr("src", h.attr("data")).removeAttr("id").removeAttr("data")
    };
    var f = $("#pageJS", "head");
	
    if (f.length > 0) {
        e(f)
    } else {
        f = $("#pageJS", "body");
        if (f.length > 0) {
            e(f)
        }
    }
    var b = $("#btnTop");
    if ($(window).scrollTop() == 0) {
        b.hide()
    }
    b.css("zIndex", "99").click(function() {
        $("body,html").animate({
            scrollTop: 0
        },
        0)
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            b.show()
        } else {
            b.hide()
        }
    })
})();