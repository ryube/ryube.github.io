/*******************************************************************************
* prototype Date
* format
*******************************************************************************/
Date.prototype = {
    format : function(f) {
	    if (!this.valueOf()) return "";

	    var weekName = [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ];
	    var d = this;
	    return f.replace(/(yyyy|yy|MM|dd|E|hh|mm|ss|a\/p)/gi, function($1) {
		    switch ($1) {
		    case "yyyy":
			    return d.getFullYear();
		    case "yy":
			    return (d.getFullYear() % 1000).zf(2);
		    case "MM":
			    return (d.getMonth() + 1).zf(2);
		    case "dd":
			    return d.getDate().zf(2);
		    case "E":
			    return weekName[d.getDay()];
		    case "HH":
			    return d.getHours().zf(2);
		    case "hh":
			    return ((h = d.getHours() % 12) ? h : 12).zf(2);
		    case "mm":
			    return d.getMinutes().zf(2);
		    case "ss":
			    return d.getSeconds().zf(2);
		    case "a/p":
			    return d.getHours() < 12 ? "AM" : "PM";
		    default:
			    return $1;
		    }
	    });
    }
};


/*******************************************************************************
* prototype String
* trim, removeTag, toCurrency, toBytes
*******************************************************************************/
String.prototype = {
    trim: function () {
        return this.replace(/(^[\s　]+)|([\s　]+$)/g, "");
    },
    removeTag: function () {

        var str = this.replace(new RegExp("<(/)?([a-zA-Z]*)(\\s[a-zA-Z]*=[^>]*)?(\\s)*(/)?>", "gim"), "");
        return str.replace(new RegExp("&nbsp;", "gim"), " ");
    },
    toCurrency: function () {
        var str = new Array();
        number = String(this);

        for (var i = 1; i <= number.length; i++) {
            if (i % 3) {
                str[number.length - i] = number.charAt(number.length - i);
            } else {
                str[number.length - i] = ',' + number.charAt(number.length - i);
            }
        }
        return str.join('').replace(/^,/, '');
    },
    toBytes: function () {

        var bytesAll = 0;

        for (var i = 0; i < this.length; i++) {
            var _char = this.charAt(i);
            var encodedChar = encodeURI(_char);
            var bytesCount = 0;
            if (encodedChar.indexOf("%") != -1) {
                bytesCount = encodedChar.split("%").length - 1;
                if (bytesCount == 0) bytesCount++;
                var tmp = encodedChar.length - (bytesCount * 3);
                bytesCount = bytesCount + tmp;
            } else {
                bytesCount = encodedChar.length;
            }
            bytesAll += bytesCount;
        }

        return bytesAll;
    }
};

/*******************************************************************************
* function log
* 
*******************************************************************************/
function log(obj) {
	window['console'] && console.log(obj);
}


/*******************************************************************************
* literal Cookie
* 
*******************************************************************************/
var Cookie = function () { };

/**
* name에 해당하는 쿠키정보를 조회한다.
* @param name
* @returns
*/
Cookie.prototype.get = function (name) {
    var prefix = name + "=";
    var cookieStartIndex = document.cookie.indexOf(prefix);
    if (cookieStartIndex == -1) return null;

    var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1) cookieEndIndex = document.cookie.length;

    return (unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex)));
};

/**
* 쿠키정보를 추가한다.
* @param name
* @param value
*/
Cookie.prototype.add = function (name, value) {
    document.cookie = name + "=" + escape(value) + "; path=/; ";
};

/**
* 만료일과 함께 쿠키정보를 추가한다.
* @param name
* @param value
* @param expiredays
*/
Cookie.prototype.addWithExpireDays = function (name, value, expireDays) {
    var today = new Date();
    today.setDate(today.getDate() + expireDays);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toGMTString() + ";";
};

/**
* name에 해당하는 쿠키정보를 삭제한다.
* @param name
*/
Cookie.prototype.remove = function (name) {
    this.addWithExpireDays(name, "", -1);
};

var cookie = new Cookie();

var FnCookie = new function () {

    this.set = function (name, value, expires, path, domain, secure) {

        path = path || "/";

        var setcookiedate = name + "=" + escape(value) +
						((expires) ? "; expires=" + expires.toGMTString() : "") +
						((path) ? "; path=" + path : "") +
						((domain) ? "; domain=" + domain : "") +
						((secure) ? "; secure" : "");

        document.cookie = setcookiedate;
    };

    this.get = function (name, defaultvalue) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);

        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin < 0) return (typeof (defaultvalue) != "undefined") ? defaultvalue : null;
        } else {
            begin += 2;
        }
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
        return unescape(dc.substring(begin + prefix.length, end));
    };

    this.remove = function (name, path, domain) {
        if (this.get(name)) {
            document.cookie = name + "=" +
									((path) ? "; path=" + path : "") +
									((domain) ? "; domain=" + domain : "") +
									"; expires=Thu, 01-Jan-70 00:00:01 GMT";
        }
    };
};
