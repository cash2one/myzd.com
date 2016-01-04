(function() {
var e = [], t = parseFloat(seajs.version);
define([], function(n, r, i) {
var s = i.uri || i.id, o = s.split("?")[0].match(/^(.+\/)([^\/]*?)(?:\.js)?$/i), u = o && o[1], a = o && "./" + o[2], f = 0, l = e.length, c, h, p;
for (; f < l; f++) h = e[f], typeof h[0] == "string" && (a === h[0] && (c = h[2]), h[0] = u + h[0].replace("./", ""), t > 1 && define.apply(this, h));
return e = [], n.get = n, typeof c == "function" ? c.apply(this, arguments) : n;
}), define.pack = function() {
e.push(arguments), t > 1 || define.apply(null, arguments);
};
})(), define.pack("./ajax", [ "./util" ], function(e, t, n) {
var r = e("./util"), i = {};
i.request = function(e, t) {
var n = new XMLHttpRequest;
typeof n.timeout != "undefined" && (n.timeout = 6e3), n.open("get", e, !0), n.send(), n.onreadystatechange = function() {
if (n.readyState == 4 && n.status == 200) {
if (n.responseText == "success") {
t({
status: !0,
msg: "OK"
});
return;
}
var e = JSON.parse(n.responseText);
t({
status: !0,
msg: e
});
} else if (n.readyState == 4 && n.status != 200) {
var e = JSON.parse(n.responseText);
t({
status: !1,
msg: e.error.message
});
}
}, n.ontimeout = function(e) {
t({
status: !1,
msg: "请求超时，请稍后重试"
});
}, n.onerror = function(e) {
t({
status: !1,
msg: "network error"
});
};
}, i.post = function(e, t, n) {
var i = new XMLHttpRequest;
typeof i.timeout != "undefined" && (i.timeout = 6e3), i.open("post", e, !0), i.setRequestHeader("Content-Type", "application/json"), i.send(JSON.stringify(t)), i.onreadystatechange = function() {
i.readyState == 4 && n(i.responseText);
}, i.ontimeout = function(e) {
r.innerCallback({
status: !1,
msg: "请求超时，请稍后重试"
});
}, i.onerror = function(e) {
r.innerCallback({
status: !1,
msg: "network error"
});
};
}, n.exports = i;
}), define.pack("./ap", [], function(e, t, n) {
return new function() {
(function() {
var e = {}, t = {};
t.PADCHAR = "=", t.ALPHA = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", t.makeDOMException = function() {
var e, t;
try {
return new DOMException(DOMException.INVALID_CHARACTER_ERR);
} catch (t) {
var n = new Error("DOM Exception 5");
return n.code = n.number = 5, n.name = n.description = "INVALID_CHARACTER_ERR", n.toString = function() {
return "Error: " + n.name + ": " + n.message;
}, n;
}
}, t.getbyte64 = function(e, n) {
var r = t.ALPHA.indexOf(e.charAt(n));
if (r === -1) throw t.makeDOMException();
return r;
}, t.decode = function(e) {
e = "" + e;
var n = t.getbyte64, r, i, s, o = e.length;
if (o === 0) return e;
if (o % 4 !== 0) throw t.makeDOMException();
r = 0, e.charAt(o - 1) === t.PADCHAR && (r = 1, e.charAt(o - 2) === t.PADCHAR && (r = 2), o -= 4);
var u = [];
for (i = 0; i < o; i += 4) s = n(e, i) << 18 | n(e, i + 1) << 12 | n(e, i + 2) << 6 | n(e, i + 3), u.push(String.fromCharCode(s >> 16, s >> 8 & 255, s & 255));
switch (r) {
case 1:
s = n(e, i) << 18 | n(e, i + 1) << 12 | n(e, i + 2) << 6, u.push(String.fromCharCode(s >> 16, s >> 8 & 255));
break;
case 2:
s = n(e, i) << 18 | n(e, i + 1) << 12, u.push(String.fromCharCode(s >> 16));
}
return u.join("");
}, t.getbyte = function(e, n) {
var r = e.charCodeAt(n);
if (r > 255) throw t.makeDOMException();
return r;
}, t.encode = function(e) {
if (arguments.length !== 1) throw new SyntaxError("Not enough arguments");
var n = t.PADCHAR, r = t.ALPHA, i = t.getbyte, s, o, u = [];
e = "" + e;
var f = e.length - e.length % 3;
if (e.length === 0) return e;
for (s = 0; s < f; s += 3) o = i(e, s) << 16 | i(e, s + 1) << 8 | i(e, s + 2), u.push(r.charAt(o >> 18)), u.push(r.charAt(o >> 12 & 63)), u.push(r.charAt(o >> 6 & 63)), u.push(r.charAt(o & 63));
switch (e.length - f) {
case 1:
o = i(e, s) << 16, u.push(r.charAt(o >> 18) + r.charAt(o >> 12 & 63) + n + n);
break;
case 2:
o = i(e, s) << 16 | i(e, s + 1) << 8, u.push(r.charAt(o >> 18) + r.charAt(o >> 12 & 63) + r.charAt(o >> 6 & 63) + n);
}
return u.join("");
}, e.pay = function(e) {
var n = encodeURIComponent(t.encode(e));
//location.href = "pay.htm?goto=" + n;
location.href = "http://mingyizhudao.com/payment/alipayInWeixin?goto=" + n;
}, e.decode = function(e) {
return t.decode(decodeURIComponent(e));
}, window._AP = e;
})();
};
}), define.pack("./bind", [ "./tmpl", "./ajax", "./cache", "./util", "./success", "./tj", "./config" ], function(e, t, n) {
var r = e("./tmpl"), i = e("./ajax"), s = e("./cache"), o = e("./util"), u = e("./success"), a = e("./tj"), f = e("./config"), l = {};
l.buttonClickable = !0, l.moveFlag = !1, l.init = function() {
var e = this, t = o.Id("p_one_channelList");
t.addEventListener("click", function(t) {
t.preventDefault();
if (!e.buttonClickable) return;
o.showLoading("正在创建订单"), e.buttonClickable = !1;
var t = t || event, n = t.target, r = n.getAttribute("p_one_channel");
r == null && (r = n.parentNode.getAttribute("p_one_channel")), r == null && (r = n.parentNode.parentNode.getAttribute("p_one_channel"));
var u = {};
u.channel = r, u.order_no = s.userData.order_no, u.amount = s.userData.amount, r == "wx_pub" && (u.open_id = s.userData.open_id);
if (s.userData.charge_param) {
var f = s.userData.charge_param;
for (var l in f) u[l] = f[l];
}
i.post(s.userData.charge_url, u, function(t) {
o.hideLoading();
var n;
try {
n = JSON.parse(t);
} catch (i) {
o.innerCallback({
status: !1,
msg: "json decode fail",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
if (typeof n == "undefined") {
o.innerCallback({
status: !1,
msg: "json decode fail",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
if (typeof n.id == "undefined") {
o.innerCallback({
status: !1,
msg: "invalid_charge:no_charge_id",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
if (typeof n.channel == "undefined") {
o.innerCallback({
status: !1,
msg: "invalid_charge:no_channel",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
if (typeof n.credential == "undefined") {
o.innerCallback({
status: !1,
msg: "invalid_charge:no_credential",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
if (s.isDebugMode) {
e.buttonClickable = !0, s.result = n, s.channel = r, o.innerCallback({
status: !0,
msg: "success",
debug: s.isDebugMode,
chargeUrlOutput: t
});
return;
}
e.requestCallback({
status: !0,
msg: n
}, r);
}), s.isDebugMode || a.do({
app_id: s.userData.app_id,
type: "click",
desc: "channel_" + r,
time: (new Date).getTime()
});
});
var n;
"ontouchstart" in document ? n = "touchstart" : n = "click";
if (s.version == 1) {
var r = o.Id("p_one_close_btn");
r.addEventListener(n, function(t) {
e.buttonClickable = !0, o.pop.close();
});
} else s.version == 2 && (document.ontouchmove = function() {
e.moveFlag = !0;
}, document.ontouchend = function() {
e.moveFlag = !1;
}, setTimeout(function() {
o.Id("p_one_mask").addEventListener("touchend", function(t) {
e.buttonClickable = !0, e.moveFlag || (o.pop.close(), e.moveFlag = !0);
});
}, 400));
}, l.requestCallback = function(e, t) {
var n = this;
if (e.status) {
var r = e.msg, i = r.credential[t], u = r.app, l = r.order_no, c = r.amount;
o.cookie._set("PING_APPID_ORDER", u + f.seperator + l + f.seperator + c), r["livemode"] == 0 ? n.testModeNotify(r) : (a.do({
app_id: s.userData.app_id,
type: "charge_success",
desc: "charge_success_" + t,
time: (new Date).getTime()
}), n.chargeCallback(t, i));
} else n.buttonClickable = !0, a.do({
app_id: s.userData.app_id,
type: "charge_fail",
desc: "charge_fail_" + t,
time: (new Date).getTime()
}), o.innerCallback(e);
}, l.testModeNotify = function(e) {
var t = this;
if (e["channel"] == "wx_pub") confirm("模拟付款") && (o.pop.close(), o.hideLoading(), i.request(f.channelURLMap.pingpp_notify_url + e.id + "?livemode=false", function(e) {
e.status ? (t.buttonClickable = !0, o.innerCallback({
status: !0,
msg: "OK"
})) : o.innerCallback(e);
})); else {
var n = {
ch_id: e.id,
scheme: "http",
channel: e.channel
};
e.order_no && (n.order_no = e.order_no), e.extra && (n.extra = encodeURIComponent(JSON.stringify(e.extra))), window.location.href = f.channelURLMap.pingpp_mock_url + "?" + o.stringify_data(n);
}
}, l.chargeCallback = function(e, t) {
var n = this, t = t, r = f.channelURLMap[e];
if (e == "alipay_wap") {
t._input_charset = "utf-8";
var i = o.stringify_data(t, e, !0);
typeof _AP != "undefined" ? _AP.pay(r + "?" + i) : location.href = r + "?" + i;
} else if (e == "upacp_wap") o.form_submit(r, "post", t); else if (e == "upmp_wap") n.buttonClickable = !0, location.href = r + t.paydata; else if (e == "bfb_wap") {
var i = o.stringify_data(t, e);
location.href = t.url + "?" + i;
} else if (e == "wx_pub") {
var u = [ "appId", "timeStamp", "nonceStr", "package", "signType", "paySign" ];
for (var a in u) if (typeof u[a] != "function" && !t[u[a]]) {
o.innerCallback({
status: !1,
msg: "missing field " + u[a]
});
return;
}
n.callWXPay(t);
} else if (e == "jdpay_wap") o.form_submit(r, "post", t); else if (e == "yeepay_wap") {
var u = [ "merchantaccount", "encryptkey", "data" ];
for (var a in u) if (typeof u[a] != "function" && !t[u[a]]) {
o.innerCallback({
status: !1,
msg: "missing field " + u[a],
debug: s.isDebugMode
});
return;
}
var i = o.stringify_data(t, e, !0);
t.mode && t["mode"] == "test" ? window.location.href = f.channelURLMap.yeepay_wap_test + "?" + i : window.location.href = f.channelURLMap.yeepay_wap + "?" + i;
}
}, l.callWXPay = function(e) {
function n() {
WeixinJSBridge.invoke("getBrandWCPayRequest", e, function(e) {
e.err_msg != "get_brand_wcpay_request:ok" && e.err_msg != "get_brand_wcpay_request:cancel" && o.innerCallback({
status: !1,
msg: e.err_msg,
debug: s.isDebugMode
}), e.err_msg == "get_brand_wcpay_request:ok" && (t.buttonClickable = !0, o.innerCallback({
status: !0,
msg: "OK",
debug: s.isDebugMode,
wxSuccess: !0
}));
});
}
var t = this, e = e;
t.buttonClickable = !0, o.pop.close(), o.hideLoading(), typeof WeixinJSBridge == "undefined" ? document.addEventListener("WeixinJSBridgeReady", n, !1) : n();
}, n.exports = l;
}), define.pack("./cache", [], function(e, t, n) {
var r = {};
n.exports = r;
}), define.pack("./config", [], function(e, t, n) {
var r = {};
r.channelMap = {
alipay_wap: "alipay_wap",
upmp_wap: "upmp_wap",
upacp_wap: "upacp_wap",
bfb_wap: "bfb_wap",
wx_pub: "wx_pub",
jdpay_wap: "jdpay_wap",
yeepay_wap: "yeepay_wap"
}, r.channelURLMap = {
upacp_wap: "https://gateway.95516.com/gateway/api/frontTransReq.do",
alipay_wap: "http://wappaygw.alipay.com/service/rest.htm",
upmp_wap: "uppay://uppayservice/?style=token&paydata=",
jdpay_wap: "https://m.jdpay.com/wepay/web/pay",
yeepay_wap: "https://ok.yeepay.com/paymobile/api/pay/request",
yeepay_wap_test: "http://mobiletest.yeepay.com/paymobile/api/pay/request",
pingpp_notify_url: "https://api.pingxx.com/notify/charges/",
pingpp_mock_url: "http://sissi.pingxx.com/mock.php"
}, r.seperator = "###", n.exports = r;
}), define.pack("./init", [ "./config", "./tmpl", "./cache", "./util", "./ajax", "./tj", "./bind", "./ap" ], function(e, t, n) {
var r = e("./config"), i = e("./tmpl"), s = e("./cache"), o = e("./util"), u = e("./ajax"), a = e("./tj"), f = e("./bind"), l = {};
l.init = function(t, n) {
o.isInWeixin() && e("./ap"), o.hideLoading();
var u = t.channel || {}, l = t.charge_url;
s.userData = t, s.userCallback = n, s.isDebugMode = t.debug || !1, f.moveFlag = !1;
if (typeof t.app_id == "undefined") {
o.innerCallback({
status: !1,
msg: "缺少参数app_id",
debug: s.isDebugMode
});
return;
}
if (typeof t.amount == "undefined") {
o.innerCallback({
status: !1,
msg: "缺少参数 amount",
debug: s.isDebugMode
});
return;
}
if (typeof t.channel == "undefined") {
o.innerCallback({
status: !1,
msg: "缺少参数 channel",
debug: s.isDebugMode
});
return;
}
if (t.channel.length == 0) {
o.innerCallback({
status: !1,
msg: "请至少配置一个渠道",
debug: s.isDebugMode
});
return;
}
if (typeof t.charge_url == "undefined") {
o.innerCallback({
status: !1,
msg: "缺少参数 charge_url",
debug: s.isDebugMode
});
return;
}
for (var c = 0; c < u.length; c++) if (typeof r.channelMap[u[c]] == "undefined") {
o.innerCallback({
status: !1,
msg: "传入了非法渠道：" + u[c],
debug: s.isDebugMode
});
return;
}
var h = {};
for (var c = 0; c < u.length; c++) switch (u[c]) {
case "alipay_wap":
h.alipay_wap = "alipay_wap";
break;
case "upmp_wap":
h.upmp_wap = "upmp_wap";
break;
case "upacp_wap":
h.upacp_wap = "upacp_wap";
break;
case "bfb_wap":
h.bfb_wap = "bfb_wap";
break;
case "wx_pub":
h.wx_pub = "wx_pub";
break;
case "jdpay_wap":
h.jdpay_wap = "jdpay_wap";
break;
case "yeepay_wap":
h.yeepay_wap = "yeepay_wap";
}
h.wx_pub && !o.isInWeixin() && (u = o.removeFromArray(u, "wx_pub")), h.upmp_wap && o.isInWeixin() && (u = o.removeFromArray(u, "upmp_wap"));
if (h.wx_pub && o.isInWeixin()) if (!t.open_id || t.open_id == "") {
o.innerCallback({
status: !1,
msg: "缺少参数 open_id",
debug: s.isDebugMode
});
return;
}
var p = function() {
if (o.Id("p_one_frame") == null) {
var e = document.createElement("div");
e.id = "p_one_frame", e.innerHTML = v, document.body.appendChild(e);
}
};
s.version = 2;
var d = i.one_style_2(), v = i.one_2({
style: d,
channels: h,
channelArr: u
});
p(), document.getElementsByClassName("p_one_window")[0].style.height = u.length * 62 + 46 + "px", u.length === 1 && (document.getElementsByClassName("p_one_btn")[0].style.marginTop = "6px"), setTimeout(o.pop.open, 0), f.init();
var m = {
app_id: t.app_id,
type: "pv",
desc: "page_one",
time: (new Date).getTime()
};
a.do(m);
}, l.resume = function() {
f.requestCallback({
status: !0,
msg: s.result
}, s.channel);
}, n.exports = l;
}), define.pack("./md5", [], function(e, t, n) {
var r = {};
r.MD5 = function(e) {
function t(e, t) {
return e << t | e >>> 32 - t;
}
function n(e, t) {
var n, r, i, s, o;
return i = e & 2147483648, s = t & 2147483648, n = e & 1073741824, r = t & 1073741824, o = (e & 1073741823) + (t & 1073741823), n & r ? o ^ 2147483648 ^ i ^ s : n | r ? o & 1073741824 ? o ^ 3221225472 ^ i ^ s : o ^ 1073741824 ^ i ^ s : o ^ i ^ s;
}
function r(e, t, n) {
return e & t | ~e & n;
}
function i(e, t, n) {
return e & n | t & ~n;
}
function s(e, t, n) {
return e ^ t ^ n;
}
function o(e, t, n) {
return t ^ (e | ~n);
}
function u(e, i, s, o, u, a, f) {
return e = n(e, n(n(r(i, s, o), u), f)), n(t(e, a), i);
}
function a(e, r, s, o, u, a, f) {
return e = n(e, n(n(i(r, s, o), u), f)), n(t(e, a), r);
}
function f(e, r, i, o, u, a, f) {
return e = n(e, n(n(s(r, i, o), u), f)), n(t(e, a), r);
}
function l(e, r, i, s, u, a, f) {
return e = n(e, n(n(o(r, i, s), u), f)), n(t(e, a), r);
}
function c(e) {
var t, n = e.length, r = n + 8, i = (r - r % 64) / 64, s = (i + 1) * 16, o = Array(s - 1), u = 0, a = 0;
while (a < n) t = (a - a % 4) / 4, u = a % 4 * 8, o[t] = o[t] | e.charCodeAt(a) << u, a++;
return t = (a - a % 4) / 4, u = a % 4 * 8, o[t] = o[t] | 128 << u, o[s - 2] = n << 3, o[s - 1] = n >>> 29, o;
}
function h(e) {
var t = "", n = "", r, i;
for (i = 0; i <= 3; i++) r = e >>> i * 8 & 255, n = "0" + r.toString(16), t += n.substr(n.length - 2, 2);
return t;
}
function p(e) {
e = e.replace(/\r\n/g, "\n");
var t = "";
for (var n = 0; n < e.length; n++) {
var r = e.charCodeAt(n);
r < 128 ? t += String.fromCharCode(r) : r > 127 && r < 2048 ? (t += String.fromCharCode(r >> 6 | 192), t += String.fromCharCode(r & 63 | 128)) : (t += String.fromCharCode(r >> 12 | 224), t += String.fromCharCode(r >> 6 & 63 | 128), t += String.fromCharCode(r & 63 | 128));
}
return t;
}
var d = Array(), v, m, g, y, b, w, E, S, x, T = 7, N = 12, C = 17, k = 22, L = 5, A = 9, O = 14, M = 20, _ = 4, D = 11, P = 16, H = 23, B = 6, j = 10, F = 15, I = 21;
e = p(e), d = c(e), w = 1732584193, E = 4023233417, S = 2562383102, x = 271733878;
for (v = 0; v < d.length; v += 16) m = w, g = E, y = S, b = x, w = u(w, E, S, x, d[v + 0], T, 3614090360), x = u(x, w, E, S, d[v + 1], N, 3905402710), S = u(S, x, w, E, d[v + 2], C, 606105819), E = u(E, S, x, w, d[v + 3], k, 3250441966), w = u(w, E, S, x, d[v + 4], T, 4118548399), x = u(x, w, E, S, d[v + 5], N, 1200080426), S = u(S, x, w, E, d[v + 6], C, 2821735955), E = u(E, S, x, w, d[v + 7], k, 4249261313), w = u(w, E, S, x, d[v + 8], T, 1770035416), x = u(x, w, E, S, d[v + 9], N, 2336552879), S = u(S, x, w, E, d[v + 10], C, 4294925233), E = u(E, S, x, w, d[v + 11], k, 2304563134), w = u(w, E, S, x, d[v + 12], T, 1804603682), x = u(x, w, E, S, d[v + 13], N, 4254626195), S = u(S, x, w, E, d[v + 14], C, 2792965006), E = u(E, S, x, w, d[v + 15], k, 1236535329), w = a(w, E, S, x, d[v + 1], L, 4129170786), x = a(x, w, E, S, d[v + 6], A, 3225465664), S = a(S, x, w, E, d[v + 11], O, 643717713), E = a(E, S, x, w, d[v + 0], M, 3921069994), w = a(w, E, S, x, d[v + 5], L, 3593408605), x = a(x, w, E, S, d[v + 10], A, 38016083), S = a(S, x, w, E, d[v + 15], O, 3634488961), E = a(E, S, x, w, d[v + 4], M, 3889429448), w = a(w, E, S, x, d[v + 9], L, 568446438), x = a(x, w, E, S, d[v + 14], A, 3275163606), S = a(S, x, w, E, d[v + 3], O, 4107603335), E = a(E, S, x, w, d[v + 8], M, 1163531501), w = a(w, E, S, x, d[v + 13], L, 2850285829), x = a(x, w, E, S, d[v + 2], A, 4243563512), S = a(S, x, w, E, d[v + 7], O, 1735328473), E = a(E, S, x, w, d[v + 12], M, 2368359562), w = f(w, E, S, x, d[v + 5], _, 4294588738), x = f(x, w, E, S, d[v + 8], D, 2272392833), S = f(S, x, w, E, d[v + 11], P, 1839030562), E = f(E, S, x, w, d[v + 14], H, 4259657740), w = f(w, E, S, x, d[v + 1], _, 2763975236), x = f(x, w, E, S, d[v + 4], D, 1272893353), S = f(S, x, w, E, d[v + 7], P, 4139469664), E = f(E, S, x, w, d[v + 10], H, 3200236656), w = f(w, E, S, x, d[v + 13], _, 681279174), x = f(x, w, E, S, d[v + 0], D, 3936430074), S = f(S, x, w, E, d[v + 3], P, 3572445317), E = f(E, S, x, w, d[v + 6], H, 76029189), w = f(w, E, S, x, d[v + 9], _, 3654602809), x = f(x, w, E, S, d[v + 12], D, 3873151461), S = f(S, x, w, E, d[v + 15], P, 530742520), E = f(E, S, x, w, d[v + 2], H, 3299628645), w = l(w, E, S, x, d[v + 0], B, 4096336452), x = l(x, w, E, S, d[v + 7], j, 1126891415), S = l(S, x, w, E, d[v + 14], F, 2878612391), E = l(E, S, x, w, d[v + 5], I, 4237533241), w = l(w, E, S, x, d[v + 12], B, 1700485571), x = l(x, w, E, S, d[v + 3], j, 2399980690), S = l(S, x, w, E, d[v + 10], F, 4293915773), E = l(E, S, x, w, d[v + 1], I, 2240044497), w = l(w, E, S, x, d[v + 8], B, 1873313359), x = l(x, w, E, S, d[v + 15], j, 4264355552), S = l(S, x, w, E, d[v + 6], F, 2734768916), E = l(E, S, x, w, d[v + 13], I, 1309151649), w = l(w, E, S, x, d[v + 4], B, 4149444226), x = l(x, w, E, S, d[v + 11], j, 3174756917), S = l(S, x, w, E, d[v + 2], F, 718787259), E = l(E, S, x, w, d[v + 9], I, 3951481745), w = n(w, m), E = n(E, g), S = n(S, y), x = n(x, b);
var q = h(w) + h(E) + h(S) + h(x);
return q.toLowerCase();
}, n.exports = r;
}), define.pack("./success", [ "./tmpl", "./cache", "./config", "./util" ], function(e, t, n) {
var r = e("./tmpl"), i = e("./cache"), s = e("./config"), o = e("./util"), u = {};
u.init = function(e, t) {
i.userCallback = e;
if (typeof t != "function") {
o.innerCallback({
status: !1,
msg: "参数类型必须为 function"
});
return;
}
var n = "", a = r.one_style();
if (o.cookie._get("PING_APPID_ORDER") == "" || o.cookie._get("PING_APPID_ORDER") == null) n = r.ap_success({
style: a
}); else {
var f = o.cookie._get("PING_APPID_ORDER").split(encodeURIComponent(s.seperator)), l = f[0], c = f[1], h = f[2];
n = r.success({
style: a,
app_id: l,
order_no: c,
amount: o.formatNumber(h)
});
}
var p = document.createElement("div");
p.id = "p_one_frame", p.innerHTML = n, document.body.appendChild(p), o.pop.open(), u.bind(t);
}, u.bind = function(e) {
o.Id("p_one_goon").addEventListener("click", function() {
e();
});
}, n.exports = u;
}), define.pack("./tj", [ "./ajax", "./util", "./md5" ], function(e, t, n) {
var r = e("./ajax"), i = e("./util"), s = e("./md5"), o = {};
o.do = function(e) {
var t = e.app_id, n = e.type, o = e.desc, u = e.time, a = window.location.href, f = s.MD5(t + n + o + u);
e.token = f;
var l = "https://statistics.pingxx.com/tj?" + i.stringify_data(e, !1);
r.request(l, function(e) {
e.status;
});
}, n.exports = o;
}), define.pack("./util", [ "./cache", "./tmpl", "./config" ], function(e, t, n) {
var r = e("./cache"), i = e("./tmpl"), s = e("./config"), o = {};
o.stringify_data = function(e, t, n) {
typeof n == "undefined" && (n = !1);
var r = [];
for (var i in e) {
if (t == "bfb_wap" && i == "url") continue;
if (t == "yeepay_wap" && i == "mode") continue;
r.push(i + "=" + (n ? encodeURIComponent(e[i]) : e[i]));
}
return r.join("&");
}, o.removeFromArray = function(e, t) {
var n = e.length, r = [];
for (var i = 0; i < n; i++) e[i] != t && r.push(e[i]);
return r;
}, o.form_submit = function(e, t, n) {
var r = document.createElement("form");
r.setAttribute("method", t), r.setAttribute("action", e);
for (var i in n) {
var s = document.createElement("input");
s.setAttribute("type", "hidden"), s.setAttribute("name", i), s.setAttribute("value", n[i]), r.appendChild(s);
}
document.body.appendChild(r), r.submit();
}, o.Id = function(e) {
return document.getElementById(e);
}, o.innerCallback = function(e) {
r.userCallback(e);
}, o.formatNumber = function(e) {
var t = e.toString(), n = t.length, r = "", i = "";
return n == 1 ? (r = "0", i = "0" + t) : n == 2 ? (r = "0", i = t) : (r = t.substring(0, n - 2), i = t.substr(n - 2)), r + "." + i;
}, o.hasClass = function(e, t) {
return e.className.match(new RegExp("(\\s|^)" + t + "(\\s|$)"));
}, o.addClass = function(e, t) {
if (!o.hasClass(e, t)) {
var n = e.className ? " " + t : t;
e.className += n;
}
}, o.removeClass = function(e, t) {
if (o.hasClass(e, t)) {
var n = new RegExp("(\\s|^)" + t + "(\\s|$)");
e.className = e.className.replace(n, "");
}
}, o.pop = {
open: function() {
o.addClass(document.body, "p_one_open"), o.removeClass(document.getElementsByClassName("p_one_html")[0], "out"), o.addClass(document.getElementsByClassName("p_one_html")[0], "in");
},
close: function() {
o.removeClass(document.getElementsByClassName("p_one_html")[0], "in"), o.addClass(document.getElementsByClassName("p_one_html")[0], "out"), setTimeout(function() {
document.body.removeChild(document.getElementById("p_one_frame"));
}, 350), o.removeClass(document.body, "p_one_open");
}
}, o.showLoading = function(e) {
var t = i.loading({
text: e
}), n = document.createElement("div");
n.id = "p_one_loading", n.innerHTML = t, document.body.appendChild(n);
}, o.hideLoading = function() {
var e = this;
e.Id("p_one_loading") && document.body.removeChild(e.Id("p_one_loading"));
}, o.storage = {
_set: function(e, t) {
var n = window.localStorage;
n.setItem(e, t);
},
_get: function(e) {
var t = window.localStorage;
return t.getItem(e);
}
}, o.cookie = {
_get: function(e) {
var t = document.cookie.match(new RegExp("(?:^|;\\s)" + e + "=(.*?)(?:;\\s|$)"));
return t ? t[1] : "";
},
_set: function(e, t) {
var n = "/";
document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + "; path=" + n;
}
}, o.getToken = function(e) {}, o.isInWeixin = function() {
var e = navigator.userAgent.toLowerCase();
return e.match(/MicroMessenger/i) == "micromessenger" ? !0 : !1;
}, n.exports = o;
}), define.pack("./tmpl", [], function(e, t, n) {
var r = {
one_style: function(e) {
var t = [], n = function(e) {
t.push(e);
};
return t.push('<style type="text/css">\r\n    .p_one_window *{-webkit-font-smoothing:antialiased}.p_one_window *,.p_one_window *:before,.p_one_window *:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}@font-face{font-family:\'pingpp_one\';src:url(data:application/x-font-ttf;charset=utf-8;base64,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BAYCAQEBBQUZBgUGBwMEDAgICQIBCgwBAQISAxUTJgEBAQMCAgUDAwgFAgICBAMLAwUCBAEBAwQBAQYFHiUICAoS/sAECAQEBQIBAgMLBwgIBQZaBAMCCAYEBQUCAQUEAgIBCQgQAwYDBgUEAQUCAxMGBgECAQECAQUDAgUTDgcCAfQEBAEHBgUGAQEBAgUDAgIBCAcQAgMFAgEFBAIDAQEBAQIBAgIEAwQHBAQFAQEBAQMCBQEFBBEMBgE7AQUEAwcEBAUBAQEBAwICCAQFAQECAQEBAwUCBAIBAQIOCAsDAw0KCBoRBgQCAwMFBwIEBQEBBQUBAgEBAgEBAQEB/noOGAkKCQMDAwgGBQ0HChAGBgUCAwsJASkLFQsLAwcDCggICQICEggIAQECAQIHBQEBAgEGBQoLBAEDAv6NBwIIBgUFAQIBAgUDAQEICBACAQYGAQFaDw8GBAgEBAQODgYELQQfAQEBAUUGBw4BCgkKCgIBAwQPDBACAgIBBQQGBgMDBh4dBgQGAgEDAwIFAgIBFRIaBwMDAQEBAYgdAgEREAECAQEDAgIcDg4dAwMBAQQGAggLAwMJBgYCAQEBAgEBAwIDBQMKBAEBBAMEAQEBAg0CAyIEAQEHBw4CAhAOBAEBFxcvAgQQEgMDIAQBAQEIBwwGCAoCAgQCAwIBAQIDAQEODgMDBAICAwIDCwkJBAIEBAUOHSMGAgMBAQG4TwICEAQIBQUDAwQFCQMDAwECAg4MFgICAgEEAwcIAQEBAgQeAwECAQkIDgICHwZlCg0BBAMGDgwBAgMCCggICQIDAw0KAQEBAQUFCwwCAQEwAgMBAQcGDwoEBBQPCAbOBwUCBAQJBQMBAwIHBAE1BgYEBAQHAwMBAgIGBNILCwsMAQENCQ8GAwMCAgIILAIsAosFDAUFAgIDAwMGAwQDAQECCBkCAQIBAwMEBgMDAwEBAgISCBcCAwIYAvMBAQEBBhkTA4B8fIEEFhoEBBgUBH97e4EGChIICAkBnAEKIRkZHAMNDQ0NBSQeERgIAQEBAQMcGBgbAggIAQcHCDMrBAMBAQEBBAEGBQQMBwcVDg4iEwEBAQEBCAcOEQICAhQUFhsEMwECAQUDAwUCBAIDAggFAwQBCgIBAQEBAgMDBgILHBAGBwEBAQQOGwwCAhUUCQoBAQEDAwIDCgcVGAQIAQcCAgECAQIBAQECAQEBBQULHBAHCAEBAQYRGQcDAwEBAwIDBgQDDAgICQEBAQEBBQUGDwkRFAUEAQYCBgIBAQEBAQIBAgIIHRQUDgcKAwIBAgIBBAUGAQICAQMBBAIDAwMVERAtHgoKAQEBAQECAQgIAgUCAwMBAQEVFQIDBggJGA8GCQQDBQEBAQMNCQoTCgkMAgIFCxAQGwoFBgEBAwQCAgEBBwcKIhcCAgEBAgMBAgECAQ4BAgEBAQUFDRUJBQUBAQgGGxYDA2wBCgcGEgMCBQQCEwICAgICAQEgHx8jAwUGAgEBAQoFBgEBAQEBAQ8NEAICAgYEAgoHCA4HCAcEBAICAgMCAwEBBgE4NwICBAQKAgMBAgICAQECAgIBAgkICgwEBQIBAwEBAQEBCgUFAQEBBgUPAgQIBAQBAQIBBgUCCAQFAQoIAgcHCAQFAQoMDAEBAQICAgIBAS8vAQEBBAcJBQYCAQIKCgUEBgMDAQECAi0ECQUQAQEICAEBCAkLDQICAgoEBQEBAQEHBg0IAgQCAwECBwcSJgIEBAQMAh0QEQEBAQUKBQICAQUDBAQBAQkJAwPeCQsBAgEBAQEMCwwLARgkAwkMDQwIBAIMCgsLAQIEBQkIDwYGBAICDAkKDAJ8AQEBBQQCAwMBAQUFCBwICBIMAQEFCAMBAgEBAQYGGgYDBAECAgECAQEBBgYFBgE9FwIKCwAGADYANwPbA0IAKgA+AE8AfQCUAKgAAAE2FhceAR8BIyIGBw4BHwEjIiYvAQ8BNz4BNTQmJy4BJy4BNz4BNz4BNzEHLgEHDgEHBhYXHgE3PgEnNCYnMTMuAQcOARceARcWNjc2JicxFzYWFx4BFx4BFxYGBw4BBw4BBxQWFx4BFQYmLwEHBiYnLgEnJjY3PgE3PgE3MQcuASMOAQcOAQcGFhceATc+ATc2JicxFy4BBw4BBwYWFx4BNz4BNzYmJzEBP0SAOzxMEQYcSnkwMB8RBBAWMhoeOTcQBwcEBCk2Dw4DCwwvIyNWMhcIEgsKDwUMAw8OIBEKCwEMCu4LGQ0ODAECEA8UHgoJCRNsKU8mJTwXFiILCwELDCogBwcBBQYGBQEXFi4VRYE7PD4DAQ0ODygbGz0iBgULBwcMBAQHAgIBAwUSDg0RBAUHDMMGDwkKDgUHBAoKFw0JCgEBBwgDQg0UICFZOBMzMjJvPRYHBwggHS8VGAMEBgMbQykpTiYmRh8gKAmOBQMCAgoIEB8PDgILBxQODRQHCAEHCBcQEBUECAsUFB8MeAgEDAwkGRg3Hh4+HyA2FgYJAgIVERITAgELDRcFExAjI2A9HzkaGy0SEhgGggQDAQQEBAoGBQ0HDAsBAQ0MDhUIBAYEAQEKCAwXCgoDBwQOCgoQBwAAAAgAmwAlA5QDZgAfAEIAbgCIALoA1gD+AQ8AAAE+ATcyFhceARceAQcOAQcOAScuAScuATU0Njc+ATcxFzYWFx4BFxYGBw4BBw4BJy4BJy4BJzQ2Nz4BNz4BNz4BNzEFPgEzHgEXHgEXHgEVFAYHDgEHKgEnLgEnLgEnLgE3PgE3PgE3PgE3PgE3MQU+ATMeARceARUUBgcOAQcGJicuATU0NjcxBT4BFx4BFx4BFx4BFxYGBw4BBwYiJy4BBw4BBwYmJy4BJy4BNTQ2Nz4BNz4BNz4BNzEXLgErARUjIgYHDgEVFBYXHgEXHgE7AScuAScxFzUjIgYHDgEVFBYVHgEXHgEXHgE7ATI2Nz4BNzU3IxUjIiYnLgE1MSc+ARczFQcGJicuATc+ATcxAZkIDAMGEAsLDwUPDQMDFhQQIRERHAoHBxEQCRII+BIiEBAWBQQHDAweEw4dDw8WCAkJAQgJAwkHBw8HCAsD/kcKDgQFDgkTHQoFBAYGDCYcCA8GBQsGBQsGGAsOAQYDBAcEBAkFBAoEAi0IFw8cKQ4HBwoKCiIWHSoODAwaGv7XFiwWFCoVFVI+DhMGCQEKCyIYHU8yKk0kFjIbGyYLFSMNDQwKCgkqHyQ2Eg4iFA4DDQgSJRsrEAwNDg8IFQ0MJRk4AgEEBF0WDAwBAgIBAQQDBxAICCEZDBoeBAQGAQE4IRMVAwMEyggUDRgaGB8HBQIEAw4JA18CBAEHBwcNBxY3IB8xEA0GBgcbFRAiEyA0EwkMBBMDCg0NIxYULBcXHwcGAgUEEAsOIBMUJREGDggIDgYHBwGvBAMBBgUJHRQJHxUVIgwaGwIBAgQEAwoGHEouBQsGBgoEBQcEAwYBQQQDARwZDCIVHi0ODw8CAw4RDiweLjwNWQkCCAYiHB1VOQ0aDRs2HB0nDAwMCwQGBAUBAQIEBRoUFC4ZFSQPDysbHzoZFB4KgQICTRERDSQWFiUOCQwEAwSLRkgCk0QBAgEoJhsiBwcKBQkLAgICBQYGJyEQWJQGBgYkHxcEBAF0AgEPEAsXDAsSBgAAAAEARQAFA7sDewAMAAAJAQcJAScJATcJARcBAisBkCv+cP5wKwGQ/nArAZABkCv+cAHA/nArAZD+cCsBkAGQK/5wAZAr/nAAAAIAQAA8A8ADRAARAB0AAAEjLgEnLgEjIgYHDgEHIwMhAyUyHgIXIT4DMwNhLgUYFh96Z2d6HhYXBjBeA4Bf/p8+VzohCP4RCCE6Vj4CaRE2HSlOTikdNhH90wItoCMxNxUVNzEjAAAAAgAF/7kD+wOwABQAGwAAASIOAhUUHgIzMj4CNTQuAiMDJzcXARcBAgBpuYpPT4q5aWm5iVBQiblpSdlIkQEoQ/6VA69PirlpabmJUFCJuWlpuYpP/QjZSJABZEP+TgAAEAAVAHoD2gMGAAwAGgAoAEcAWABpAIUAkwCYAK4AtwDBAMoA1ADdAQAAAAEHJyMVMzUXNxUzNSMFIiY1NDYzMhYVFAYjMTUiBhUUFjMyNjU0JiMxBw4BIyImNTQ2MzIWHwE3Jy4BIyIGFRQWMzI2PwEnBwUOASsBNTMyFhceARUUBgcxNy4BKwEVMzI2Nz4BNTQmJzEHFAYHDgEHDgEHDgErARUzMDIxMjY3PgE9ASMVISIGFRQWMzI2NTQmIzETITUhFRc1IRUzFRQGBw4BIxUyNjc+AT0BMzEnIxUjFSE1IzUDMz4BMSMOAQcxJTAWFzMuAScjFzM+ATEjDgEHMSUwFhczLgEnIyc3IwcjFTMHMxUUBgcOASMVMjY3PgE9ATM1IzUjFSM3ITUhA7M+PSAfPj4fH/7uGicnGhsmJhsoOTkoKDk5KIYJFgwbJiYbDBYJBBYEDSISKDk5KBIiDgMWBP7bCh4TEhITHgoKCgoKFA4pGigoGikODg4ODr4BAQIEAwQJBQUNBwEBARUeCgoKHAERCg4OCgoPDwo//t8BITv+aqwFBQUPChonDAwMra09uwG0vPgiOCZDBiQTATQmNyMTJAZDwCM3JkMGJBMBNCY3IxMkBkObDD0MXEw9sQUFBQ8KGiYMDA2oqD1jLQEq/uUBM3NzsXBwcHCxmiYbGyYmGxsmojgoKDk5KCg4kQgIJhsaJggIAxcDDA04KCg5DQwEFgMFCQmTCgkIHRISHAl/DAzCDA0MJRcYJQxeCg4EBAcCAwUBAQIXCAkIGhF9dQ4KCg4OCgoOAaMpKSJtbWgOEAQEBSAMCgsgFly/GiIiGv6PMGswUBubazAbUDCbMGswUBubazAbUDC8Ghoig2gPDwQEBSAMCgsgFlwiSEhhIgAAAAABAAAAAQAArkSb7V8PPPUACwQAAAAAANGCAi8AAAAA0YICLwAA/7kD+wOwAAAACAACAAAAAAAAAAEAAAPA/8AAAAQAAAAAAAP7AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAABQD/wAkBAAANgQAAJsEAABFBAAAQAQAAAUEAAAVAAAAAAAKABQAHgDEBZQGlAggCEQIeAioCfwAAAABAAAADAOYABcAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEACgAAAAEAAAAAAAIABwB7AAEAAAAAAAMACgA/AAEAAAAAAAQACgCQAAEAAAAAAAUACwAeAAEAAAAAAAYACgBdAAEAAAAAAAoAGgCuAAMAAQQJAAEAFAAKAAMAAQQJAAIADgCCAAMAAQQJAAMAFABJAAMAAQQJAAQAFACaAAMAAQQJAAUAFgApAAMAAQQJAAYAFABnAAMAAQQJAAoANADIcGluZ3BwX29uZQBwAGkAbgBnAHAAcABfAG8AbgBlVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwcGluZ3BwX29uZQBwAGkAbgBnAHAAcABfAG8AbgBlcGluZ3BwX29uZQBwAGkAbgBnAHAAcABfAG8AbgBlUmVndWxhcgBSAGUAZwB1AGwAYQBycGluZ3BwX29uZQBwAGkAbgBnAHAAcABfAG8AbgBlRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==) format("truetype");font-weight:normal;font-style:normal}.p_one_icon{font-family:\'pingpp_one\';speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.p_one_icon_jdpay:before{content:"\\e607"}.p_one_icon_alipay:before{content:"\\e600"}.p_one_icon_unionpay:before{content:"\\e601"}.p_one_icon_wechat:before{content:"\\e602"}.p_one_icon_baidu:before{content:"\\e603"}.p_one_icon_close:before{content:"\\e604"}.p_one_icon_bag:before{content:"\\e605"}.p_one_icon_done:before{content:"\\e606"}@-webkit-keyframes p_one_fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0, 25%, 0);transform:translate3d(0, 25%, 0)}100%{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@-moz-keyframes p_one_fadeInUp{0%{opacity:0;-moz-transform:translate3d(0, 25%, 0)}100%{opacity:1;-moz-transform:translate3d(0, 0, 0)}}@-o-keyframes p_one_fadeInUp{0%{opacity:0;-o-transform:translate3d(0, 25%, 0)}100%{opacity:1;-o-transform:translate3d(0, 0, 0)}}@keyframes p_one_fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0, 25%, 0);transform:translate3d(0, 25%, 0)}100%{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@-webkit-keyframes fadeOutRight{0%{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}100%{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}@keyframes fadeOutRight{100%{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}@-webkit-keyframes fadeInRight{0%{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}100%{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInRight{0%{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}100%{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.p_one_mask{display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99980;background-color:#fff}.p_one_window{overflow:hidden;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99990;outline:0;color:#303233;font-weight:100;-webkit-overflow-scrolling:touch;-webkit-user-select:none;-moz-user-select:none;user-select:none}.p_one_window,.p_one_window dl,.p_one_window dt,.p_one_window dd,.p_one_window button{margin:0;padding:0;border:none}.p_one_window button,.p_one_window a{-webkit-tap-highlight-color:transparent}.p_one_window,.p_one_window button{font:16px/2 NotoSansHans-Regular,AvenirNext-Regular,"proxima-nova","Hiragino Sans GB","Microsoft YaHei","WenQuanYi Micro Hei","Open Sans","Helvetica Neue",Arial,sans-serif}.p_one_window .clearfix:before,.p_one_window .clearfix:after{content:" ";display:table}.p_one_window .clearfix:after{clear:both}.p_one_window .p_one_html{position:relative;width:auto;z-index:99995;min-height:100%;padding:0 16px;background-color:#fff;background-clip:padding-box}.p_one_window .p_one_body{position:relative;outline:0;z-index:99996;min-height:100vh}.p_one_window .p_one_body .p_one_head{position:absolute;top:0;right:0;width:100%;height:32px;z-index:99999;background-color:#fff}.p_one_window .p_one_body .p_one_head .p_one_close{float:right;padding:8px;line-height:1;color:#484b4d;background-color:transparent;border:none;outline:0}.p_one_window .p_one_body .p_one_head .p_one_close:active{background-color:#f5f5f5}.p_one_window .p_one_body .p_one_head .p_one_close .p_one_icon{display:block}.p_one_window .p_one_body .p_one_con{display:table;padding:32px 0 100px;min-height:100vh;width:100%;text-align:center;background-color:#f5f5f5}.p_one_window .p_one_body .p_one_con .p_one_order{display:table-cell;padding:32px 0 16px;vertical-align:middle}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title{padding-bottom:16px;font-weight:100}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title span{position:relative;display:inline-block;padding-left:32px;text-align:left}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title span .p_one_icon{position:absolute;left:0;top:4px;font-size:24px;color:#54D09F}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg{padding-bottom:64px;font-size:32px}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg span{padding-left:48px}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg span .p_one_icon{top:14px;font-size:32px}.p_one_window .p_one_body .p_one_con .p_one_order dl{display:inline-block;text-align:left}.p_one_window .p_one_body .p_one_con .p_one_order dl dt{width:70px;float:left;font-weight:bold}.p_one_window .p_one_body .p_one_con .p_one_order dl dd{margin-left:75px;color:#484b4d}.p_one_window .p_one_body .p_one_con .p_one_order dl dd.order_num{font-size:14px;font-family:"Courier New", Courier, monospace;max-width:200px;-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.p_one_window .p_one_body .p_one_con .p_one_order dl dd.amount{color:#000}.p_one_window .p_one_body .p_one_con .p_one_order dl dd.details dt{font-weight:100;width:auto;max-width:150px;-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.p_one_window .p_one_body .p_one_con .p_one_order dl dd.details dd{margin-left:160px}.p_one_window .p_one_body .p_one_con .p_one_order>table{margin:0 auto;border:none}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td{max-width:200px;text-align:left;vertical-align:top}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td.p_one_order_num{font-size:14px;vertical-align:middle;font-family:"Courier New", Courier, monospace}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td:first-child{min-width:75px;font-weight:bold}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td table td{max-width:140px}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td table td:last-child{text-align:right}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row td{-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;border:none}.p_one_window .p_one_body .p_one_foot{position:absolute;bottom:0;left:0;width:100%;padding-top:12px;text-align:center;z-index:99999;background-color:#fff}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn{display:block;width:100%;font-weight:normal;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid #f5f5f5;white-space:nowrap;padding:7px 13px;font-size:16px;line-height:2;color:#303233;background-color:#f5f5f5;outline:0;-webkit-transition:background-color 0.15s}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn:active{background-color:#b5b5b5}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn+.p_one_btn{margin-top:8px}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn.p_one_btn_success{color:#fff;background-color:#54D09F}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn.p_one_btn_success:active{background-color:#2ea979}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn>span{position:relative;display:inline-block;width:100px;padding-left:32px;text-align:left}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn>span .p_one_icon{position:absolute;left:0;top:4px;font-size:24px}.p_one_window .p_one_body .p_one_foot .p_one_footnote{padding:8px 0;font-size:12px;color:#969899;background-color:#fff}.p_one_window .p_one_html.in{-webkit-animation:fadeInRight .4s}.p_one_window .p_one_html.out{-webkit-animation:fadeOutRight .4s}body.p_one_open{overflow:hidden;position:relative}body.p_one_open .p_one_window{display:block;overflow-x:hidden;overflow-y:auto}body.p_one_open .p_one_mask{display:block}\r\n</style>'), t.join("");
},
one_style_2: function(e) {
var t = [], n = function(e) {
t.push(e);
};
return t.push('<style type="text/css">\r\n    .p_one_window *{-webkit-font-smoothing:antialiased}.p_one_window *,.p_one_window *:before,.p_one_window *:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}@font-face{font-family:\'pingpp_one\';src:url(data:application/x-font-ttf;charset=utf-8;base64,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GBYWHwkDCwgEBgIBAQEFBRkGBQYHAwQMCAgJAgEKDAEBAhIDFRMmAQEBAwICBQMDCAUCAgIEAwsDBQIEAQEDBAEBBgUeJQgIChL+wAQIBAQFAgECAwsHCAgFBloEAwIIBgQFBQIBBQQCAgEJCBADBgMGBQQBBQIDEwYGAQIBAQIBBQMCBRMOBwIB9AQEAQcGBQYBAQECBQMCAgEIBxACAwUCAQUEAgMBAQEBAgECAgQDBAcEBAUBAQEBAwIFAQUEEQwGATsBBQQDBwQEBQEBAQEDAgIIBAUBAQIBAQEDBQIEAgEBAg4ICwMDDQoIGhEGBAIDAwUHAgQFAQEFBQECAQECAQEBAQH+eg4YCQoJAwMDCAYFDQcKEAYGBQIDCwkBKQsVCwsDBwMKCAgJAgISCAgBAQIBAgcFAQECAQYFCgsEAQMC/o0HAggGBQUBAgECBQMBAQgIEAIBBgYBAVoPDwYECAQEBA4OBgQtBB8BAQEBRQYHDgEKCQoKAgEDBA8MEAICAgEFBAYGAwMGHh0GBAYCAQMDAgUCAgEVEhoHAwMBAQEBiB0CAREQAQIBAQMCAhwODh0DAwEBBAYCCAsDAwkGBgIBAQECAQEDAgMFAwoEAQEEAwQBAQECDQIDIgQBAQcHDgICEA4EAQEXFy8CBBASAwMgBAEBAQgHDAYICgICBAIDAgEBAgMBAQ4OAwMEAgIDAgMLCQkEAgQEBQ4dIwYCAwEBAbhPAgIQBAgFBQMDBAUJAwMDAQICDgwWAgICAQQDBwgBAQECBB4DAQIBCQgOAgIfBmUKDQEEAwYODAECAwIKCAgJAgMDDQoBAQEBBQULDAIBATACAwEBBwYPCgQEFA8IBs4HBQIEBAkFAwEDAgcEATUGBgQEBAcDAwECAgYE0gsLCwwBAQ0JDwYDAwICAggsAiwCiwUMBQUCAgMDAwYDBAMBAQIIGQIBAgEDAwQGAwMDAQECAhIIFwIDAhgC8wEBAQEGGRMDgHx8gQQWGgQEGBQEf3t7gQYKEggICQGcAQohGRkcAw0NDQ0FJB4RGAgBAQEBAxwYGBsCCAgBBwcIMysEAwEBAQEEAQYFBAwHBxUODiITAQEBAQEIBw4RAgICFBQWGwQzAQIBBQMDBQIEAgMCCAUDBAEKAgEBAQECAwMGAgscEAYHAQEBBA4bDAICFRQJCgEBAQMDAgMKBxUY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) format("truetype");font-weight:normal;font-style:normal}.p_one_icon{font-family:\'pingpp_one\';speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.p_one_icon_jdpay:before{content:"\\e607"}.p_one_icon_alipay:before{content:"\\e600"}.p_one_icon_unionpay:before{content:"\\e601"}.p_one_icon_wechat:before{content:"\\e602"}.p_one_icon_baidu:before{content:"\\e603"}.p_one_icon_yeepay:before{content:"\\e616"}.p_one_icon_kuaiqian:before{content:"\\e608"}.p_one_icon_close:before{content:"\\e604"}.p_one_icon_bag:before{content:"\\e605"}.p_one_icon_done:before{content:"\\e606"}@-webkit-keyframes fadeInUp{0%{-webkit-transform:translate3d(0, 100%, 0);-moz-transform:translate3d(0, 100%, 0);-o-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}@keyframes fadeInUp{0%{-webkit-transform:translate3d(0, 100%, 0);-moz-transform:translate3d(0, 100%, 0);-o-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}@-webkit-keyframes fadeOutDown{100%{-webkit-transform:translate3d(0, 100%, 0);-moz-transform:translate3d(0, 100%, 0);-o-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}@keyframes fadeOutDown{100%{-webkit-transform:translate3d(0, 100%, 0);-moz-transform:translate3d(0, 100%, 0);-o-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}.p_one_mask{overflow:hidden;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99980;opacity:0;background-color:#000;-webkit-transition:opacity .4s}.p_one_window{overflow:hidden;position:fixed;min-height:130px;right:0;bottom:0;width:100%;left:0;z-index:99990;outline:0;color:#303233;font-weight:100;-webkit-overflow-scrolling:touch;-webkit-user-select:none;-moz-user-select:none;user-select:none}.p_one_window,.p_one_window button{margin:0;padding:0;border:none}.p_one_window button,.p_one_window a{-webkit-tap-highlight-color:transparent}.p_one_window,.p_one_window button{font:16px/2 NotoSansHans-Regular,AvenirNext-Regular,"proxima-nova","Hiragino Sans GB","Microsoft YaHei","WenQuanYi Micro Hei","Open Sans","Helvetica Neue",Arial,sans-serif}.p_one_window .clearfix:before,.p_one_window .clearfix:after{content:" ";display:table}.p_one_window .clearfix:after{clear:both}.p_one_window .p_one_html{-webkit-transform:translate3d(0, 100%, 0);-moz-transform:translate3d(0, 100%, 0);-o-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}.p_one_window .p_one_body{position:relative;outline:0;z-index:99996}.p_one_window .p_one_body .p_one_head{position:absolute;top:0;right:0;width:100%;height:16px;z-index:99999;background-color:#fff}.p_one_window .p_one_body .p_one_con{display:table;padding:16px 0 108px;min-height:100vh;width:100%;text-align:center;background-color:#f5f5f5}.p_one_window .p_one_body .p_one_con .p_one_order{display:table-cell;padding:32px 0 16px;vertical-align:middle}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title{padding-bottom:16px;font-weight:100}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title span{position:relative;display:inline-block;padding-left:32px;text-align:left}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title span .p_one_icon{position:absolute;left:0;top:4px;font-size:24px;color:#54D09F}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg{padding-bottom:64px;font-size:32px}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg span{padding-left:48px}.p_one_window .p_one_body .p_one_con .p_one_order .p_one_con_title.lg span .p_one_icon{top:14px;font-size:32px}.p_one_window .p_one_body .p_one_con .p_one_order>table{margin:0 auto;border:none}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td{max-width:200px;text-align:left;vertical-align:top}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td.p_one_order_num{font-size:14px;vertical-align:middle;font-family:"Courier New", Courier, monospace}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td:first-child{min-width:75px;font-weight:bold}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td table td{max-width:140px}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row>td table td:last-child{text-align:right}.p_one_window .p_one_body .p_one_con .p_one_order>table .p_one_row td{-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;border:none}.p_one_window .p_one_body .p_one_foot{padding:14px 12px 0;text-align:center;z-index:99999;background-color:#fff}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn{min-height:76px}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn{display:inline-block;width:100%;font-weight:normal;cursor:pointer;background-image:none;border:1px solid #f5f5f5;white-space:nowrap;padding:7px 13px;font-size:16px;line-height:2.4;color:#303233;background-color:#f5f5f5;outline:0;-webkit-transition:background-color 0.15s}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn:active{background-color:#b5b5b5}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn+.p_one_btn{margin-top:8px}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn.p_one_btn_success{color:#fff;background-color:#54D09F}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn.p_one_btn_success:active{background-color:#2ea979}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn>span{position:relative;display:inline-block;width:100px;padding-left:32px;text-align:left}.p_one_window .p_one_body .p_one_foot .p_one_channel_btn .p_one_btn>span .p_one_icon{position:absolute;left:0;top:6px;font-size:24px}.p_one_window .p_one_body .p_one_foot .p_one_footnote{padding:8px 0;font-size:12px;color:#969899;background-color:#fff}.p_one_window .p_one_html.in{-webkit-animation:fadeInUp .4s;-moz-animation:fadeInUp .4s;-o-animation:fadeInUp .4s;animation:fadeInUp .4s;-webkit-transform:none;-moz-transform:none;-o-transform:none;transform:none}.p_one_window .p_one_html.out{-webkit-animation:fadeOutDown .4s;-moz-animation:fadeOutDown .4s;-o-animation:fadeOutDown .4s;animation:fadeOutDown .4s;-webkit-transform:none;-moz-transform:none;-o-transform:none;transform:none}body.p_one_open{overflow:hidden;position:relative}body.p_one_open .p_one_window{display:block}body.p_one_open .p_one_mask{opacity:0.4}\r\n</style>'), t.join("");
},
one_2: function(e) {
var t = [], n = function(e) {
t.push(e);
};
t.push("    "), n(e.style), t.push('    <div id="p_one_mask" class="p_one_mask"></div>\r\n    <div class="p_one_window">\r\n        <div class="p_one_html">\r\n            <div class="p_one_body">\r\n                <div class="p_one_foot">\r\n                    <div style="width: 100%;height:100%"></div>\r\n                    <div id="p_one_channelList" class="p_one_channel_btn">');
for (var r = 0; r < e.channelArr.length; r++) t.push("                        "), e.channelArr[r] == "alipay_wap" && t.push('                        <button p_one_channel="alipay_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_alipay"></i>支付宝</span></button>'), t.push("                        "), e.channelArr[r] == "wx_pub" && t.push('                        <button p_one_channel="wx_pub" class="p_one_btn"><span><i class="p_one_icon p_one_icon_wechat"></i>微信支付</span></button>'), t.push("                        "), e.channelArr[r] == "upacp_wap" && t.push('                        <button p_one_channel="upacp_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_unionpay"></i>银联支付</span></button>'), t.push("                        "), e.channelArr[r] == "upmp_wap" && t.push('                        <button p_one_channel="upmp_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_unionpay"></i>银联支付</span></button>'), t.push("                        "), e.channelArr[r] == "bfb_wap" && t.push('                        <button p_one_channel="bfb_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_baidu"></i>百度钱包</span></button>'), t.push("                        "), e.channelArr[r] == "jdpay_wap" && t.push('                        <button p_one_channel="jdpay_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_jdpay"></i>京东支付</span></button>'), t.push("                        "), e.channelArr[r] == "yeepay_wap" && t.push('                        <button p_one_channel="yeepay_wap" class="p_one_btn"><span><i class="p_one_icon p_one_icon_yeepay"></i>易宝支付</span></button>'), t.push("                        ");
return t.push('                    </div>\r\n                    <div class="p_one_footnote">支付接入由 Ping++ 提供</div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>'), t.join("");
},
success: function(e) {
var t = [], n = function(e) {
t.push(e);
};
return t.push("    "), n(e.style), t.push('    <div class="p_one_window">\r\n        <div class="p_one_html">\r\n            <div class="p_one_body">\r\n                <div class="p_one_head" style="height: 16px;">\r\n                </div>\r\n                <div class="p_one_con">\r\n                    <div class="p_one_order">\r\n                        <div class="p_one_con_title lg">\r\n                            <span><i class="p_one_icon p_one_icon_done"></i>支付完成</span>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class="p_one_foot">\r\n                    <div class="p_one_channel_btn">\r\n                        <button id="p_one_goon" class="p_one_btn p_one_btn_success">继续购物</button>\r\n                    </div>\r\n                    <div class="p_one_footnote">支付接入由 Ping++ 提供</div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>'), t.join("");
},
ap_success: function(e) {
var t = [], n = function(e) {
t.push(e);
};
return t.push("    "), n(e.style), t.push('    <div class="p_one_window">\r\n        <div class="p_one_html">\r\n            <div class="p_one_body">\r\n                <div class="p_one_head" style="height: 16px;">\r\n                </div>\r\n                <div class="p_one_con">\r\n                    <div class="p_one_order">\r\n                        <div class="p_one_con_title lg">\r\n                            <span><i class="p_one_icon p_one_icon_done"></i>支付完成</span>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class="p_one_foot">\r\n                    <div class="p_one_channel_btn">\r\n                        <button id="p_one_goon" class="p_one_btn p_one_btn_success">继续购物</button>\r\n                    </div>\r\n                    <div class="p_one_footnote">支付接入由 Ping++ 提供</div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>'), t.join("");
},
loading: function(e) {
var t = [], n = function(e) {
t.push(e);
};
return t.push('    <div style="position: fixed;top: 0;right: 0;bottom: 0;left: 0;background-color: rgba(0,0,0,.3);z-index: 999990;">\r\n        <div style="position: absolute;width: 150px;height: 105px;top: 0;right: 0;bottom: 0;left: 0;margin: auto;color: #fff;text-align: center;">\r\n            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiBmaWxsPSJ3aGl0ZSI+CiAgPGNpcmNsZSB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4IDApIiBjeD0iMCIgY3k9IjE2IiByPSIwIj4gCiAgICA8YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJyIiB2YWx1ZXM9IjA7IDQ7IDA7IDAiIGR1cj0iMS4ycyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGJlZ2luPSIwIgogICAgICBrZXl0aW1lcz0iMDswLjI7MC43OzEiIGtleVNwbGluZXM9IjAuMiAwLjIgMC40IDAuODswLjIgMC42IDAuNCAwLjg7MC4yIDAuNiAwLjQgMC44IiBjYWxjTW9kZT0ic3BsaW5lIiAvPgogIDwvY2lyY2xlPgogIDxjaXJjbGUgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTYgMCkiIGN4PSIwIiBjeT0iMTYiIHI9IjAiPiAKICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InIiIHZhbHVlcz0iMDsgNDsgMDsgMCIgZHVyPSIxLjJzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgYmVnaW49IjAuMyIKICAgICAga2V5dGltZXM9IjA7MC4yOzAuNzsxIiBrZXlTcGxpbmVzPSIwLjIgMC4yIDAuNCAwLjg7MC4yIDAuNiAwLjQgMC44OzAuMiAwLjYgMC40IDAuOCIgY2FsY01vZGU9InNwbGluZSIgLz4KICA8L2NpcmNsZT4KICA8Y2lyY2xlIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI0IDApIiBjeD0iMCIgY3k9IjE2IiByPSIwIj4gCiAgICA8YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJyIiB2YWx1ZXM9IjA7IDQ7IDA7IDAiIGR1cj0iMS4ycyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGJlZ2luPSIwLjYiCiAgICAgIGtleXRpbWVzPSIwOzAuMjswLjc7MSIga2V5U3BsaW5lcz0iMC4yIDAuMiAwLjQgMC44OzAuMiAwLjYgMC40IDAuODswLjIgMC42IDAuNCAwLjgiIGNhbGNNb2RlPSJzcGxpbmUiIC8+CiAgPC9jaXJjbGU+Cjwvc3ZnPgo=" width="64" height="64" />\r\n            <div>'), n(e.text), t.push("</div>\r\n        </div>\r\n    </div>"), t.join("");
}
};
return r;
});