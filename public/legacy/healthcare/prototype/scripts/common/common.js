/*******************************************************************************
* string prototype
* trim, removeTag, toCurrency, toBytes
*******************************************************************************/
String.prototype = {
    'trim': function () {
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
            if (i % 3)
                str[number.length - i] = number.charAt(number.length - i);
            else
                str[number.length - i] = ',' + number.charAt(number.length - i);
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

function log(obj) {

    try {
        console.log(obj);
    } catch (e) { }
}
