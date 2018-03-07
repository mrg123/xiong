
function lod() {
    var timezone = new Date().getTimezoneOffset() / 60 * -1;
    var MDate = new Date();

    var year = MDate.getFullYear().toString();
    var month = MDate.getMonth() + 1;
    var day = MDate.getDate();
    var hour = MDate.getHours();
    var minute = MDate.getMinutes();
    var second = MDate.getSeconds();

    var BrowserDate = year + month + day + hour + minute + second;
    var oSLang = navigator.language || window.navigator.systemLanguage;
    var browerLang = navigator.language || window.navigator.browserLanguage;
    var BrowserUserAgent = navigator.userAgent.toString();
    var brower = getBrowser();
    var resolution = getResolution();
    var os = getOS();

    document.getElementById("BrowserDate").value = BrowserDate;
    document.getElementById("BrowserDateTimezone").value = timezone;
    var aa = document.getElementById("BrowserDateTimezone").value;
    document.getElementById("BrowserUserAgent").value = BrowserUserAgent;
    document.getElementById("BrowserName").value = brower;
    document.getElementById("BrowserLanguage").value = browerLang;
    document.getElementById("BrowserSystemLanguage").value = oSLang;
    document.getElementById("BrowserSystem").value = os;
    document.getElementById("Resolution").value = resolution;

    lodLg();
    
//    $("#BrowserDate") = BrowserDate;
//    $("#BrowserDateTimezone").value = timezone;

//    $("#BrowserUserAgent").value = BrowserUserAgent;
//    $("#BrowserName").value = brower;
//    $("#BrowserLanguage").value = browerLang;
//    $("#BrowserSystemLanguage").value = oSLang;
//    $("#BrowserSystem").value = os;
//    $("#Resolution").value = resolution;
}
//记录卡号是直接输入还是粘贴复制
function PasteRecorded() {
   document.getElementById("CardCopy").value = 2;
}

function getResolution() {
    return window.screen.width + "x" + window.screen.height;
}
function getBrowser() {
    var userAgent = navigator.userAgent;
    var isOpera = userAgent.indexOf("Opera") > -1;

    if (isOpera) {
        return "Opera"
    }
    if (userAgent.indexOf("Chrome") > -1) {
        return "Chrome";
    }
    if (userAgent.indexOf("Firefox") > -1) {
        return "Firefox";
    }
    if (userAgent.indexOf("Safari") > -1) {
        return "Safari";
    }
    if (userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1
				&& !isOpera) {
        return "IE";
    }
}

function getOS() {
        var sUserAgent = navigator.userAgent;
        var isWin = (navigator.platform === "Win32") || (navigator.platform === "Windows");
        var isMac = (navigator.platform === "Mac68K") || (navigator.platform === "MacPPC") || (navigator.platform === "Macintosh") || (navigator.platform === "MacIntel");
        var bIsIpad = sUserAgent.match(/ipad/i) === "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) === "iphone os";
        var isUnix = (navigator.platform === "X11") && !isWin && !isMac;
        var isLinux = (String(navigator.platform).indexOf("Linux") > -1);
        var bIsAndroid = sUserAgent.toLowerCase().match(/android/i) === "android";
        var bIsCE = sUserAgent.match(/windows ce/i) === "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) === "windows mobile";
        if (isMac)
            return "Mac";
        if (isUnix)
            return "Unix";
        if (isLinux) {
            if (bIsAndroid)
                return "Android";
            else
                return "Linux";
        }
        if(bIsCE || bIsWM){
            return 'wm';
        }
        if (isWin) {
            var isWin2K = sUserAgent.indexOf("Windows NT 5.0") > -1 || sUserAgent.indexOf("Windows 2000") > -1;
            if (isWin2K)
                return "Win2000";
            var isWinXP = sUserAgent.indexOf("Windows NT 5.1") > -1 ||
                    sUserAgent.indexOf("Windows XP") > -1;
            if (isWinXP)
                return "WinXP";
            var isWin2003 = sUserAgent.indexOf("Windows NT 5.2") > -1 || sUserAgent.indexOf("Windows 2003") > -1;
            if (isWin2003)
                return "Win2003";
            var isWinVista = sUserAgent.indexOf("Windows NT 6.0") > -1 || sUserAgent.indexOf("Windows Vista") > -1;
            if (isWinVista)
                return "WinVista";
            var isWin7 = sUserAgent.indexOf("Windows NT 6.1") > -1 || sUserAgent.indexOf("Windows 7") > -1;
            if (isWin7)
                return "Win7";
            var isWin8 = sUserAgent.indexOf("Windows NT 6.2") > -1 || sUserAgent.indexOf("Windows 8") > -1;
            if (isWin8)
                return "Win8";
        }
    return "None";
}

function test() {
        var str = document.getElementById("txtCardNo");
            str.value = str.value.replace(/\D/g, "").replace(/(\d{4})(?=\d)/g, "$1 ");
};

function Lockdisabled() {
    if (document.getElementById("txtCardNo").value == "")
    {
        return;
    }
    if (document.getElementById("txtCVV").value == "") {
        return;
    }

    document.getElementById("Submit").disabled = true;
}

function NoLockdisabled() {

    document.getElementById("Submit").disabled = false;
}
