/*********************************************************************
 * #### jQuery Awesome Sosmed Share Button / AyoShare.js v17 ####
 * Coded by Ican Bachors 2014.
 * https://github.com/bachors/jQuery-Awesome-Sosmed-Share-Button
 * Updates will be posted to this site.
 *********************************************************************/
jQuery.fn.ayoshare = function(opt) {
    var defaultopt = {
		counter: false,
		button: {
			google: false,
			stumbleupon: false,
			facebook: false,
			linkedin: false,
			pinterest: false,
			bufferapp: false,
			reddit: false,
			vk: false,
			pocket: false,
			twitter: false,
			flipboard: false,
			digg: false,
			email: false,
			whatsapp: false,
			telegram: false,
			viber: false,
			line: false,
			bbm: false,
			sms: false
		}
    };
    opt.counter = (opt.counter == undefined ? defaultopt.counter : opt.counter);
    opt.button.google = (opt.button.google == undefined ? defaultopt.button.google : opt.button.google);
    opt.button.stumbleupon = (opt.button.stumbleupon == undefined ? defaultopt.button.stumbleupon : opt.button.stumbleupon);
    opt.button.facebook = (opt.button.facebook == undefined ? defaultopt.button.facebook : opt.button.facebook);
    opt.button.linkedin = (opt.button.linkedin == undefined ? defaultopt.button.linkedin : opt.button.linkedin);
    opt.button.pinterest = (opt.button.pinterest == undefined ? defaultopt.button.pinterest : opt.button.pinterest);
    opt.button.bufferapp = (opt.button.bufferapp == undefined ? defaultopt.button.bufferapp : opt.button.bufferapp);
    opt.button.reddit = (opt.button.reddit == undefined ? defaultopt.button.reddit : opt.button.reddit);
    opt.button.vk = (opt.button.vk == undefined ? defaultopt.button.vk : opt.button.vk);
    opt.button.pocket = (opt.button.pocket == undefined ? defaultopt.button.pocket : opt.button.pocket);
    opt.button.twitter = (opt.button.twitter == undefined ? defaultopt.button.twitter : opt.button.twitter);
    opt.button.flipboard = (opt.button.flipboard == undefined ? defaultopt.button.flipboard : opt.button.flipboard);
    opt.button.digg = (opt.button.digg == undefined ? defaultopt.button.digg : opt.button.digg);
    opt.button.email = (opt.button.email == undefined ? defaultopt.button.email : opt.button.email);
    opt.button.whatsapp = (opt.button.whatsapp == undefined ? defaultopt.button.whatsapp : opt.button.whatsapp);
    opt.button.telegram = (opt.button.telegram == undefined ? defaultopt.button.telegram : opt.button.telegram);
    opt.button.viber = (opt.button.viber == undefined ? defaultopt.button.viber : opt.button.viber);
    opt.button.line = (opt.button.line == undefined ? defaultopt.button.line : opt.button.line);
    opt.button.bbm = (opt.button.bbm == undefined ? defaultopt.button.bbm : opt.button.bbm);
    opt.button.sms = (opt.button.sms == undefined ? defaultopt.button.sms : opt.button.sms);
	var ua = navigator.userAgent;
    jQuery(this).each(function(i, d) {
        var b = jQuery(this).data('ayoshare'),
            html = '';
        var c = (jQuery(this).attr('id') != null && jQuery(this).attr('id') != undefined ? '#' + jQuery(this).attr('id') : '.' + jQuery(this).attr('class'));
        if (opt.button.facebook) {
			html += '<div class="facebook button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'facebook\');" title="Facebook">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-facebook"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_facebook(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-facebook"></i></i></a></div>';
			}
        }
        if (opt.button.reddit) {
			html += '<div class="reddit button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'reddit\');" title="Reddit">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-reddit"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_reddit(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-reddit"></i></i></a></div>';
			}
        }
        if (opt.button.linkedin) {
			html += '<div class="linkedin button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'linkedin\');" title="Linkedin">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-linkedin"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_linkedin(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-linkedin"></i></i></a></div>';
			}
        }
        if (opt.button.pinterest) {
			html += '<div class="pinterest button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'pinterest\');" title="Pinterest">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-pinterest"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_pinterest(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-pinterest"></i></i></a></div>';
			}
        }
        if (opt.button.stumbleupon) {
			html += '<div class="stumbleupon button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'stumbleupon\');" title="Stumbleupon">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-stumbleupon"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_stumbleupon(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-stumbleupon"></i></i></a></div>';
			}
        }
        if (opt.button.bufferapp) {
			html += '<div class="bufferapp button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'bufferapp\');" title="Bufferapp">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-bufferapp"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_bufferapp(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-bufferapp"></i></i></a></div>';
			}
        }
        if (opt.button.vk) {
			html += '<div class="vk button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'vk\');" title="VK">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-vk"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_vk(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-vk"></i></i></a></div>';
			}
        }
        if (opt.button.pocket) {
			html += '<div class="pocket button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'pocket\');" title="Pocket">';
			if(opt.counter){
				html += '<i class="icon"><i class="fa fa-get-pocket"></i></i><div class="counter"><p><i class="fa fa-spinner fa-spin"></i></p></div></a></div>';
				ayo_pocket(b, c, i);
			}else{
				html += '<i class="mobile"><i class="fa fa-get-pocket"></i></i></a></div>';
			}
        }
        if (opt.button.google) {
            html += '<div class="google button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'google\');" title="Google+">';
            html += '<i class="mobile"><i class="fa fa-google-plus"></i></i></a></div>';
        }
        if (opt.button.twitter) {
            html += '<div class="twitter button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'twitter\');" title="Twitter">';
            html += '<i class="mobile"><i class="fa fa-twitter"></i></i></a></div>';
        }
        if (opt.button.flipboard) {
            html += '<div class="flipboard button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'flipboard\');" title="Flipboard">';
            html += '<i class="mobile"><i class="fa fa-flipboard"></i></i></a></div>'
        }
        if (opt.button.digg) {
            html += '<div class="digg button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'digg\');" title="Digg">';
            html += '<i class="mobile"><i class="fa fa-digg"></i></i></a></div>'
        }
        if (opt.button.email) {
            html += '<div class="email button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'email\');" title="Email">';
            html += '<i class="mobile"><i class="fa fa-envelope"></i></i></a></div>';
        }
		if(ua.match(/mobile/i)){
			if (opt.button.whatsapp) {
				html += '<div class="whatsapp button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'whatsapp\');" title="Whatsapp">';
				html += '<i class="mobile"><i class="fa fa-whatsapp"></i></i></a></div>';
			}
			if (opt.button.telegram) {
				html += '<div class="telegram button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'telegram\');" title="Telegram">';
				html += '<i class="mobile"><i class="fa fa-telegram"></i></i></a></div>';
			}
			if (opt.button.viber) {
				html += '<div class="viber button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'viber\');" title="Viber">';
				html += '<i class="mobile"><i class="fa fa-volume-control-phone"></i></i></a></div>';
			}
			if (opt.button.line) {
				html += '<div class="line button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'line\');" title="Line">';
				html += '<i class="mobile"><i class="fa fa-line"></i></i></a></div>';
			}
			if (opt.button.bbm) {
				html += '<div class="bbm button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'bbm\');" title="BBM">';
				html += '<i class="mobile"><i class="fa fa-bbm"></i></i></a></div>';
			}
			if (opt.button.sms) {
				html += '<div class="sms button' + (opt.counter ? '' : ' small') + '"><a onclick="ayo_share_og(\'' + b + '\', \'sms\');" title="SMS">';
				html += '<i class="mobile"><i class="fa fa-comment"></i></i></a></div>';
			}
		}
        jQuery(this).html('<div class="ayoshare">' + html + '</div>');
    });

    function ayo_bufferapp(c, d, z) {
        jQuery.ajax({
            url: 'https://api.bufferapp.com/1/links/shares.json?url=' + encodeURIComponent(c),
            crossDomain: true,
            dataType: 'jsonp'
        }).done(function(a) {
            var b = ayo_num(a.shares);
            jQuery(d + ':eq(' + z + ') .ayoshare .bufferapp .counter p').html(b);
        }).fail(function() {
            jQuery(d + ':eq(' + z + ') .ayoshare .bufferapp .counter p').html(0);

        })
    }

    function ayo_facebook(c, d, z) {

      var fb_token = "1738118726259396|a4572e8af0a1cda219bf55b03bd5e407";
      // var page_url = window.location.href;
      var pageURL = jQuery(location).attr("href");
      // console.log(page_url);
      // console.log(pageURL);

        jQuery.ajax({
            // url: 'https://graph.facebook.com/v2.7/?id=' + encodeURIComponent(c) + '&access_token=443213172472393|l2IEt1tuyYta_278fR5NAg8V1jI',
            url: 'https://graph.facebook.com/v2.8/?id=' + encodeURIComponent(c) + '&access_token='+fb_token,
            crossDomain: true,
            dataType: 'jsonp',
            data: {access_token: fb_token, id: pageURL},
        }).done(function(a) {
          console.log(a);
            // var b = ayo_num(a.share.share_count);
            var b = ayo_num(a.share_count);
            jQuery(d + ':eq(' + z + ') .ayoshare .facebook .counter p').html(b);
        }).fail(function() {
            jQuery(d + ':eq(' + z + ') .ayoshare .facebook .counter p').html(0);

        })
    }

    function ayo_linkedin(c, d, z) {
        jQuery.ajax({
            url: 'https://www.linkedin.com/countserv/count/share?url=' + encodeURIComponent(c) + '&callback=?',
            crossDomain: true,
            dataType: 'json'
        }).done(function(a) {
            var b = ayo_num(a.count);
            jQuery(d + ':eq(' + z + ') .ayoshare .linkedin .counter p').html(b);
        }).fail(function() {
            jQuery(d + ':eq(' + z + ') .ayoshare .linkedin .counter p').html(0);

        })
    }

    function ayo_pinterest(c, d, z) {
        jQuery.ajax({
            url: 'https://api.pinterest.com/v1/urls/count.json?url=' + encodeURIComponent(c) + '&callback=?',
            crossDomain: true,
            dataType: 'json'
        }).done(function(a) {
            var b = ayo_num(a.count);
            jQuery(d + ':eq(' + z + ') .ayoshare .pinterest .counter p').html(b);
        }).fail(function() {
            jQuery(d + ':eq(' + z + ') .ayoshare .pinterest .counter p').html(0);

        })
    }

    function ayo_vk(f, g, z) {
        jQuery.ajax({
            type: "GET",
            dataType: "xml",
            url: "https://query.yahooapis.com/v1/public/yql",
            data: {
                q: "SELECT content FROM data.headers WHERE url=\"http://vk.com/share.php?act=count&index=1&url=" + encodeURIComponent(f) + "\" and ua=\"#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36\"",
                format: "xml",
                env: "store://datatables.org/alltableswithkeys"
            }
        }).done(function(a) {
            var b = jQuery(a).find("content").text();
            var c = b.split(",");
            var d = c[1].split(")");
            var e = ayo_num(d[0]);
            jQuery(g + ':eq(' + z + ') .ayoshare .vk .counter p').html(e);
        }).fail(function() {
            jQuery(g + ':eq(' + z + ') .ayoshare .vk .counter p').html(0);

        })
    }

    function ayo_reddit(d, e, z) {
        jQuery.ajax({
            url: 'https://www.reddit.com/api/info.json?url=' + encodeURIComponent(d),
            crossDomain: true,
            dataType: 'json'
        }).done(function(a) {
            var b = (a.data.children != null) ? a.data.children.length : 0;
            var c = (b == 25) ? 25 + '+' : b;
            jQuery(e + ':eq(' + z + ') .ayoshare .reddit .counter p').html(c);
        }).fail(function() {
            jQuery(e + ':eq(' + z + ') .ayoshare .reddit .counter p').html(0);

        })
    }

    function ayo_stumbleupon(e, f, z) {
        jQuery.ajax({
            type: "GET",
            dataType: "xml",
            url: "https://query.yahooapis.com/v1/public/yql",
            data: {
                q: "SELECT content FROM data.headers WHERE url=\"http://www.stumbleupon.com/services/1.01/badge.getinfo?url=" + encodeURIComponent(e) + "\" and ua=\"#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36\"",
                format: "xml",
                env: "store://datatables.org/alltableswithkeys"
            }
        }).done(function(a) {
            var b = jQuery(a).find("content").text();
            var c = b.match(/views\":([0-9]+),/i);
            var d = (c !== null) ? ayo_num(c[1]) : 0;
            jQuery(f + ':eq(' + z + ') .ayoshare .stumbleupon .counter p').html(d);
        }).fail(function() {
            jQuery(f + ':eq(' + z + ') .ayoshare .stumbleupon .counter p').html(0);

        })
    }

    function ayo_pocket(e, f, z) {
        jQuery.ajax({
            type: "GET",
            dataType: "xml",
            url: "https://query.yahooapis.com/v1/public/yql",
            data: {
                q: "SELECT content FROM data.headers WHERE url=\"https://widgets.getpocket.com/v1/button?label=pocket&count=horizontal&v=1&url=" + encodeURIComponent(e) + "\" and ua=\"#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36\"",
                format: "xml",
                env: "store://datatables.org/alltableswithkeys"
            }
        }).done(function(a) {
            var b = jQuery(a).find("content").text();
            var c = b.match(/<em\sid=\"cnt\">([0-9]+)<\/em>/i);
            var d = (c !== null) ? ayo_num(c[1]) : 0;
            jQuery(f + ':eq(' + z + ') .ayoshare .pocket .counter p').html(d);
        }).fail(function() {
            jQuery(f + ':eq(' + z + ') .ayoshare .pocket .counter p').html(0);

        })
    }

    function ayo_num(a) {
        var b = parseInt(a, 10);
        if (b === null) {
            return 0;
        }
        if (b >= 1000000000) {
            return (b / 1000000000).toFixed(1).replace(/\.0jQuery/, "") + "g";
        }
        if (b >= 1000000) {
            return (b / 1000000).toFixed(1).replace(/\.0jQuery/, "") + "m";
        }
        if (b >= 1000) {
            return (b / 1000).toFixed(1).replace(/\.0jQuery/, "") + "k";
        }
        return b;
    }

}

function ayo_share_og(c, s) {
    var e = new RegExp(location.host);
    if (window.location.href == c) {
        var tit = (jQuery(document).attr('title') !== null && jQuery(document).attr('title') !== undefined ? jQuery(document).attr('title') : ''),
            des = (jQuery('meta[name="description"]').attr("content") != null && jQuery('meta[name="description"]').attr("content") != undefined ? jQuery('meta[name="description"]').attr("content") : ''),
            img = (jQuery('meta[property="og:image"]').attr("content") != null && jQuery('meta[property="og:image"]').attr("content") != undefined ? jQuery('meta[property="og:image"]').attr("content") : '');
        if (s == 'facebook') {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'google') {
            window.open('https://plus.google.com/share?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'linkedin') {
            window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + c + '&title=' + tit + '&summary=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'reddit') {
            window.open('http://reddit.com/submit?url=' + c + '&title=' + tit + '+-+via @bachors', 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'pinterest') {
            window.open('http://pinterest.com/pin/create/button/?url=' + c + '&media=' + img + '&description=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'stumbleupon') {
            window.open('http://www.stumbleupon.com/badge/?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'bufferapp') {
            window.open('https://bufferapp.com/add?url=' + c + '&text=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'vk') {
            window.open('http://vk.com/share.php?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'pocket') {
            window.open('https://getpocket.com/save?title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'twitter') {
            window.open('https://twitter.com/share?text=' + tit + '+-+via @bachors&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'flipboard') {
            window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'digg') {
            window.open('http://digg.com/submit?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        } else if (s == 'whatsapp') {
            window.location = 'whatsapp://send?text=' + tit + '%20' + c;
        } else if (s == 'telegram') {
            window.location = 'tg://msg_url?text=' + tit + '%20' + c;
        } else if (s == 'viber') {
            window.location = 'viber://forward?text=' + tit + '%20' + c;
        } else if (s == 'email') {
            window.location = 'mailto:?subject=' + tit + '&amp;body=' + des + '%20' + c;
        } else if (s == 'line') {
            window.location = 'line://msg/text/' + tit + '%20' + c;
        } else if (s == 'bbm') {
            window.location = 'bbmi://api/share?message=' + tit + '%20' + c;
        } else if (s == 'sms') {
            window.location = 'sms:?body=' + tit + '%20' + c;
        }
    } else if (e.test(c)) {
        jQuery.ajax({
            url: c
        }).done(function(a) {
            var tit = (jQuery(a).filter('title').text() != null && jQuery(a).filter('title').text() != undefined ? jQuery(a).filter('title').text() : ''),
                des = (jQuery(a).filter('meta[name="description"]').attr("content") != null && jQuery(a).filter('meta[name="description"]').attr("content") != undefined ? jQuery(a).filter('meta[name="description"]').attr("content") : ''),
                img = (jQuery(a).filter('meta[property="og:image"]').attr("content") != null && jQuery(a).filter('meta[property="og:image"]').attr("content") != undefined ? jQuery(a).filter('meta[property="og:image"]').attr("content") : '');
            if (s == 'facebook') {
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'google') {
                window.open('https://plus.google.com/share?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'linkedin') {
                window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + c + '&title=' + tit + '&summary=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'reddit') {
                window.open('http://reddit.com/submit?url=' + c + '&title=' + tit + '+-+via @bachors', 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pinterest') {
                window.open('http://pinterest.com/pin/create/button/?url=' + c + '&media=' + img + '&description=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'stumbleupon') {
                window.open('http://www.stumbleupon.com/badge/?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'bufferapp') {
                window.open('https://bufferapp.com/add?url=' + c + '&text=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'vk') {
                window.open('http://vk.com/share.php?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pocket') {
                window.open('https://getpocket.com/save?title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'twitter') {
                window.open('https://twitter.com/share?text=' + tit + '+-+via @bachors&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'flipboard') {
				window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
			} else if (s == 'digg') {
                window.open('http://digg.com/submit?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'whatsapp') {
                window.location = 'whatsapp://send?text=' + tit + '%20' + c;
            } else if (s == 'telegram') {
                window.location = 'tg://msg_url?text=' + tit + '%20' + c;
            } else if (s == 'viber') {
                window.location = 'viber://forward?text=' + tit + '%20' + c;
            } else if (s == 'email') {
                window.location = 'mailto:?subject=' + tit + '&amp;body=' + des + '%20' + c;
            } else if (s == 'line') {
                window.location = 'line://msg/text/' + tit + '%20' + c;
            } else if (s == 'bbm') {
                window.location = 'bbmi://api/share?message=' + tit + '%20' + c;
            } else if (s == 'sms') {
				window.location = 'sms:?body=' + tit + '%20' + c;
			}
        });
    } else {
        jQuery.ajax({
            type: "GET",
            dataType: "xml",
            url: "https://query.yahooapis.com/v1/public/yql",
            data: {
                q: "SELECT content FROM data.headers WHERE url=\"" + c + "\" and ua=\"#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36\"",
                format: "xml",
                env: "store://datatables.org/alltableswithkeys"
            }
        }).done(function(x) {
            var a = jQuery(x).find("content").text(),
                tit = (jQuery(a).filter('title').text() != null && jQuery(a).filter('title').text() != undefined ? jQuery(a).filter('title').text() : ''),
                des = (jQuery(a).filter('meta[name="description"]').attr("content") != null && jQuery(a).filter('meta[name="description"]').attr("content") != undefined ? jQuery(a).filter('meta[name="description"]').attr("content") : ''),
                img = (jQuery(a).filter('meta[property="og:image"]').attr("content") != null && jQuery(a).filter('meta[property="og:image"]').attr("content") != undefined ? jQuery(a).filter('meta[property="og:image"]').attr("content") : '');
            if (s == 'facebook') {
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'google') {
                window.open('https://plus.google.com/share?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'linkedin') {
                window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + c + '&title=' + tit + '&summary=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'reddit') {
                window.open('http://reddit.com/submit?url=' + c + '&title=' + tit + '+-+via @bachors', 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pinterest') {
                window.open('http://pinterest.com/pin/create/button/?url=' + c + '&media=' + img + '&description=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'stumbleupon') {
                window.open('http://www.stumbleupon.com/badge/?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'bufferapp') {
                window.open('https://bufferapp.com/add?url=' + c + '&text=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'vk') {
                window.open('http://vk.com/share.php?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pocket') {
                window.open('https://getpocket.com/save?title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'twitter') {
                window.open('https://twitter.com/share?text=' + tit + '+-+via @bachors&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'flipboard') {
				window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
			} else if (s == 'digg') {
                window.open('http://digg.com/submit?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'whatsapp') {
                window.location = 'whatsapp://send?text=' + tit + '%20' + c;
            } else if (s == 'telegram') {
                window.location = 'tg://msg_url?text=' + tit + '%20' + c;
            } else if (s == 'viber') {
                window.location = 'viber://forward?text=' + tit + '%20' + c;
            } else if (s == 'email') {
                window.location = 'mailto:?subject=' + tit + '&amp;body=' + des + '%20' + c;
            } else if (s == 'line') {
                window.location = 'line://msg/text/' + tit + '%20' + c;
            } else if (s == 'bbm') {
                window.location = 'bbmi://api/share?message=' + tit + '%20' + c;
            } else if (s == 'sms') {
				window.location = 'sms:?body=' + tit + '%20' + c;
			}
        }).fail(function() {
            var tit = (jQuery(document).attr('title') !== null && jQuery(document).attr('title') !== undefined ? jQuery(document).attr('title') : ''),
                des = (jQuery('meta[name="description"]').attr("content") != null && jQuery('meta[name="description"]').attr("content") != undefined ? jQuery('meta[name="description"]').attr("content") : ''),
                img = (jQuery('meta[property="og:image"]').attr("content") != null && jQuery('meta[property="og:image"]').attr("content") != undefined ? jQuery('meta[property="og:image"]').attr("content") : '');
            if (s == 'facebook') {
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'google') {
                window.open('https://plus.google.com/share?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'linkedin') {
                window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + c + '&title=' + tit + '&summary=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'reddit') {
                window.open('http://reddit.com/submit?url=' + c + '&title=' + tit + '+-+via @bachors', 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pinterest') {
                window.open('http://pinterest.com/pin/create/button/?url=' + c + '&media=' + img + '&description=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'stumbleupon') {
                window.open('http://www.stumbleupon.com/badge/?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'bufferapp') {
                window.open('https://bufferapp.com/add?url=' + c + '&text=' + des, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'vk') {
                window.open('http://vk.com/share.php?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'pocket') {
                window.open('https://getpocket.com/save?title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'twitter') {
                window.open('https://twitter.com/share?text=' + tit + '+-+via @bachors&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'flipboard') {
				window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=' + tit + '&url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
			} else if (s == 'digg') {
                window.open('http://digg.com/submit?url=' + c, 'bachors.com', 'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            } else if (s == 'whatsapp') {
                window.location = 'whatsapp://send?text=' + tit + '%20' + c;
            } else if (s == 'telegram') {
                window.location = 'tg://msg_url?text=' + tit + '%20' + c;
            } else if (s == 'viber') {
                window.location = 'viber://forward?text=' + tit + '%20' + c;
            } else if (s == 'email') {
                window.location = 'mailto:?subject=' + tit + '&amp;body=' + des + '%20' + c;
            } else if (s == 'line') {
                window.location = 'line://msg/text/' + tit + '%20' + c;
            } else if (s == 'bbm') {
                window.location = 'bbmi://api/share?message=' + tit + '%20' + c;
            } else if (s == 'sms') {
				window.location = 'sms:?body=' + tit + '%20' + c;
			}
        });
    }
}
