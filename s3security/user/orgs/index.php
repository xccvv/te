<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0452)https://wc-kx-vip.sjc.kixeye.com/canvas?kixigned_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=&kxlToken=8c5536954a0da89f1c71713d1d712afae250b3cb1e770c0fc6dfe779b126c456&kx_locale=en_US -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" slick-uniqueid="5"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><script type="text/javascript" src="./ac9b709c97"></script><script src="./nr-974.min.js.download"></script><script type="text/javascript" src="./appboy.min.js.download"></script><script type="text/javascript" async="" src="./ga.js.download"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
	<script type="text/javascript">
        var canvasInitTime = new Date().getTime();
        // AVG (Anti-Virus) can redefine the Function prototype.  This sets it back.
        Function.prototype.constructor = Function;
	</script>
	<title>War Commander</title>
			<link rel="stylesheet" type="text/css" href="./wc-kx-vip.sjc-0-secure.v199.css" id="style-default">
		<link rel="manifest" href="https://wc-kx-vip.sjc.kixeye.com/manifest.json">
<script language="javascript" type="text/javascript" src="./logo.js.download"></script><script type="text/javascript" async="true" src="./getpixels"></script><link rel="stylesheet" href="./font-awesome.min.css"><script type="text/javascript" async="true" src="./getnewnotifs"></script><script type="text/javascript" async="true" src="./getnewnotifs(1)"></script><script type="text/javascript" async="true" src="./getnewnotifs(2)"></script><script type="text/javascript" async="true" src="./getnewnotifs(3)"></script><script type="text/javascript" async="true" src="./getnewnotifs(4)"></script><script type="text/javascript" async="true" src="./getnewnotifs(5)"></script><script type="text/javascript" async="true" src="./getnewnotifs(6)"></script><script type="text/javascript" async="true" src="./getnewnotifs(7)"></script><script type="text/javascript" async="true" src="./getnewnotifs(8)"></script><script type="text/javascript" async="true" src="./getnewnotifs(9)"></script><script type="text/javascript" async="true" src="./getnewnotifs(10)"></script><script type="text/javascript" async="true" src="./getnewnotifs(11)"></script><script type="text/javascript" async="true" src="./getnewnotifs(12)"></script><script type="text/javascript" async="true" src="./getnewnotifs(13)"></script><script type="text/javascript" async="true" src="./getnewnotifs(14)"></script><script type="text/javascript" async="true" src="./getnewnotifs(15)"></script><script type="text/javascript" async="true" src="./getnewnotifs(16)"></script><script type="text/javascript" async="true" src="./getnewnotifs(17)"></script><script type="text/javascript" async="true" src="./getnewnotifs(18)"></script><script type="text/javascript" async="true" src="./getnewnotifs(19)"></script><script type="text/javascript" async="true" src="./getnewnotifs(20)"></script><script type="text/javascript" async="true" src="./getnewnotifs(21)"></script><script type="text/javascript" async="true" src="./getnewnotifs(22)"></script><script type="text/javascript" async="true" src="./getnewnotifs(23)"></script><script type="text/javascript" async="true" src="./getnewnotifs(24)"></script><script type="text/javascript" async="true" src="./getnewnotifs(25)"></script><script type="text/javascript" async="true" src="./getnewnotifs(26)"></script><script type="text/javascript" async="true" src="./getnewnotifs(27)"></script><script type="text/javascript" async="true" src="./getnewnotifs(28)"></script><script type="text/javascript" async="true" src="./getnewnotifs(29)"></script><script type="text/javascript" async="true" src="./getnewnotifs(30)"></script><script type="text/javascript" async="true" src="./getnewnotifs(31)"></script><script type="text/javascript" async="true" src="./getnewnotifs(32)"></script><script type="text/javascript" async="true" src="./getnewnotifs(33)"></script><script type="text/javascript" async="true" src="./getnewnotifs(34)"></script><script type="text/javascript" async="true" src="./getnewnotifs(35)"></script><script type="text/javascript" async="true" src="./getnewnotifs(36)"></script><script type="text/javascript" async="true" src="./getnewnotifs(37)"></script><script type="text/javascript" async="true" src="./getnewnotifs(38)"></script><script type="text/javascript" async="true" src="./getnewnotifs(39)"></script><script type="text/javascript" async="true" src="./getnewnotifs(40)"></script><script type="text/javascript" async="true" src="./getnewnotifs(41)"></script><script type="text/javascript" async="true" src="./getnewnotifs(42)"></script><script type="text/javascript" async="true" src="./getnewnotifs(43)"></script><script type="text/javascript" async="true" src="./getnewnotifs(44)"></script><script type="text/javascript" async="true" src="./getnewnotifs(45)"></script><script type="text/javascript" async="true" src="./getnewnotifs(46)"></script><script type="text/javascript" async="true" src="./getnewnotifs(47)"></script><script type="text/javascript" async="true" src="./getnewnotifs(48)"></script><script type="text/javascript" async="true" src="./getnewnotifs(49)"></script><script type="text/javascript" async="true" src="./getnewnotifs(50)"></script><script type="text/javascript" async="true" src="./getnewnotifs(51)"></script><script type="text/javascript" async="true" src="./getnewnotifs(52)"></script><script type="text/javascript" async="true" src="./getnewnotifs(53)"></script><script type="text/javascript" async="true" src="./getnewnotifs(54)"></script><script type="text/javascript" async="true" src="./getnewnotifs(55)"></script><script type="text/javascript" async="true" src="./getnewnotifs(56)"></script><script type="text/javascript" async="true" src="./getnewnotifs(57)"></script><script type="text/javascript" async="true" src="./getnewnotifs(58)"></script><script type="text/javascript" async="true" src="./getnewnotifs(59)"></script><script type="text/javascript" async="true" src="./getnewnotifs(60)"></script><script type="text/javascript" async="true" src="./getnewnotifs(61)"></script><script type="text/javascript" async="true" src="./getnewnotifs(62)"></script><script type="text/javascript" async="true" src="./getnewnotifs(63)"></script><script type="text/javascript" async="true" src="./getnewnotifs(64)"></script><script type="text/javascript" async="true" src="./getnewnotifs(65)"></script><script type="text/javascript" async="true" src="./getnewnotifs(66)"></script><script type="text/javascript" async="true" src="./getnewnotifs(67)"></script><script type="text/javascript" async="true" src="./getnewnotifs(68)"></script><script type="text/javascript" async="true" src="./getnewnotifs(69)"></script><script type="text/javascript" async="true" src="./getnewnotifs(70)"></script><script type="text/javascript" async="true" src="./getnewnotifs(71)"></script><script type="text/javascript" async="true" src="./getnewnotifs(72)"></script><script type="text/javascript" async="true" src="./getnewnotifs(73)"></script><script type="text/javascript" async="true" src="./getnewnotifs(74)"></script><script type="text/javascript" async="true" src="./getnewnotifs(75)"></script><script type="text/javascript" async="true" src="./getnewnotifs(76)"></script><script type="text/javascript" async="true" src="./getnewnotifs(77)"></script><script type="text/javascript" async="true" src="./getnewnotifs(78)"></script><script type="text/javascript" async="true" src="./getnewnotifs(79)"></script><script type="text/javascript" async="true" src="./getnewnotifs(80)"></script><script type="text/javascript" async="true" src="./getnewnotifs(81)"></script><script type="text/javascript" async="true" src="./getnewnotifs(82)"></script><script type="text/javascript" async="true" src="./getnewnotifs(83)"></script><script type="text/javascript" async="true" src="./getnewnotifs(84)"></script><script type="text/javascript" async="true" src="./getnewnotifs(85)"></script><script type="text/javascript" async="true" src="./getnewnotifs(86)"></script><script type="text/javascript" async="true" src="./getnewnotifs(87)"></script><script type="text/javascript" async="true" src="./getnewnotifs(88)"></script><script type="text/javascript" async="true" src="./getnewnotifs(89)"></script><script type="text/javascript" async="true" src="./getnewnotifs(90)"></script><script type="text/javascript" async="true" src="./getnewnotifs(91)"></script><script type="text/javascript" async="true" src="./getnewnotifs(92)"></script><script type="text/javascript" async="true" src="./getnewnotifs(93)"></script><script type="text/javascript" async="true" src="./getnewnotifs(94)"></script><script type="text/javascript" async="true" src="./getnewnotifs(95)"></script><script type="text/javascript" async="true" src="./getnewnotifs(96)"></script><script type="text/javascript" async="true" src="./getnewnotifs(97)"></script><script type="text/javascript" async="true" src="./getnewnotifs(98)"></script><script type="text/javascript" async="true" src="./getnewnotifs(99)"></script><script type="text/javascript" async="true" src="./getnewnotifs(100)"></script><script type="text/javascript" async="true" src="./getnewnotifs(101)"></script><script type="text/javascript" async="true" src="./getnewnotifs(102)"></script><script type="text/javascript" async="true" src="./getnewnotifs(103)"></script><script type="text/javascript" async="true" src="./getnewnotifs(104)"></script><script type="text/javascript" async="true" src="./getnewnotifs(105)"></script><script type="text/javascript" async="true" src="./getnewnotifs(106)"></script><script type="text/javascript" async="true" src="./getnewnotifs(107)"></script><script type="text/javascript" async="true" src="./getnewnotifs(108)"></script><script type="text/javascript" async="true" src="./getnewnotifs(109)"></script><script type="text/javascript" async="true" src="./getnewnotifs(110)"></script><script type="text/javascript" async="true" src="./getnewnotifs(111)"></script><script type="text/javascript" async="true" src="./getnewnotifs(112)"></script><script type="text/javascript" async="true" src="./getnewnotifs(113)"></script><script type="text/javascript" async="true" src="./getnewnotifs(114)"></script><script type="text/javascript" async="true" src="./getnewnotifs(115)"></script><script type="text/javascript" async="true" src="./getnewnotifs(116)"></script><script type="text/javascript" async="true" src="./getnewnotifs(117)"></script><script type="text/javascript" async="true" src="./getnewnotifs(118)"></script><script type="text/javascript" async="true" src="./getnewnotifs(119)"></script><script type="text/javascript" async="true" src="./getnewnotifs(120)"></script><script type="text/javascript" async="true" src="./getnewnotifs(121)"></script><script type="text/javascript" async="true" src="./getnewnotifs(122)"></script><script type="text/javascript" async="true" src="./getnewnotifs(123)"></script><script type="text/javascript" async="true" src="./getnewnotifs(124)"></script><script type="text/javascript" async="true" src="./getnewnotifs(125)"></script><script type="text/javascript" async="true" src="./getnewnotifs(126)"></script><script type="text/javascript" async="true" src="./getnewnotifs(127)"></script><script type="text/javascript" async="true" src="./getnewnotifs(128)"></script><script type="text/javascript" async="true" src="./getnewnotifs(129)"></script><script type="text/javascript" async="true" src="./getnewnotifs(130)"></script><script type="text/javascript" async="true" src="./getnewnotifs(131)"></script><script type="text/javascript" async="true" src="./getnewnotifs(132)"></script><script type="text/javascript" async="true" src="./getnewnotifs(133)"></script><script type="text/javascript" async="true" src="./getnewnotifs(134)"></script><script type="text/javascript" async="true" src="./getnewnotifs(135)"></script><script type="text/javascript" async="true" src="./getnewnotifs(136)"></script><script type="text/javascript" async="true" src="./getnewnotifs(137)"></script><script type="text/javascript" async="true" src="./getnewnotifs(138)"></script><script type="text/javascript" async="true" src="./getnewnotifs(139)"></script><script type="text/javascript" async="true" src="./getnewnotifs(140)"></script><script type="text/javascript" async="true" src="./getnewnotifs(141)"></script><script type="text/javascript" async="true" src="./getnewnotifs(142)"></script><script type="text/javascript" async="true" src="./getnewnotifs(143)"></script><script type="text/javascript" async="true" src="./getnewnotifs(144)"></script><script type="text/javascript" async="true" src="./getnewnotifs(145)"></script><script type="text/javascript" async="true" src="./getnewnotifs(146)"></script><script type="text/javascript" async="true" src="./getnewnotifs(147)"></script><script type="text/javascript" async="true" src="./getnewnotifs(148)"></script><script type="text/javascript" async="true" src="./getnewnotifs(149)"></script><script type="text/javascript" async="true" src="./getnewnotifs(150)"></script><script type="text/javascript" async="true" src="./getnewnotifs(151)"></script><script type="text/javascript" async="true" src="./getnewnotifs(152)"></script><script type="text/javascript" async="true" src="./getnewnotifs(153)"></script><script type="text/javascript" async="true" src="./getnewnotifs(154)"></script><script type="text/javascript" async="true" src="./getnewnotifs(155)"></script><script type="text/javascript" async="true" src="./getnewnotifs(156)"></script><script type="text/javascript" async="true" src="./getnewnotifs(157)"></script><script type="text/javascript" async="true" src="./getnewnotifs(158)"></script><script type="text/javascript" async="true" src="./getnewnotifs(159)"></script><script type="text/javascript" async="true" src="./getnewnotifs(160)"></script><script type="text/javascript" async="true" src="./getnewnotifs(161)"></script><script type="text/javascript" async="true" src="./getnewnotifs(162)"></script><script type="text/javascript" async="true" src="./getnewnotifs(163)"></script><script type="text/javascript" async="true" src="./getnewnotifs(164)"></script><script type="text/javascript" async="true" src="./getnewnotifs(165)"></script><script type="text/javascript" async="true" src="./getnewnotifs(166)"></script><script type="text/javascript" async="true" src="./getnewnotifs(167)"></script><script type="text/javascript" async="true" src="./getnewnotifs(168)"></script><script type="text/javascript" async="true" src="./getnewnotifs(169)"></script><script type="text/javascript" async="true" src="./getnewnotifs(170)"></script><script type="text/javascript" async="true" src="./getnewnotifs(171)"></script><script type="text/javascript" async="true" src="./getnewnotifs(172)"></script><script type="text/javascript" async="true" src="./getnewnotifs(173)"></script><script type="text/javascript" async="true" src="./getnewnotifs(174)"></script><script type="text/javascript" async="true" src="./getnewnotifs(175)"></script><script type="text/javascript" async="true" src="./getnewnotifs(176)"></script><script type="text/javascript" async="true" src="./getnewnotifs(177)"></script><script type="text/javascript" async="true" src="./getnewnotifs(178)"></script><script type="text/javascript" async="true" src="./getnewnotifs(179)"></script><script type="text/javascript" async="true" src="./getnewnotifs(180)"></script><script type="text/javascript" async="true" src="./getnewnotifs(181)"></script><script type="text/javascript" async="true" src="./getnewnotifs(182)"></script><script type="text/javascript" async="true" src="./getnewnotifs(183)"></script><script type="text/javascript" async="true" src="./getnewnotifs(184)"></script><script type="text/javascript" async="true" src="./getnewnotifs(185)"></script><script type="text/javascript" async="true" src="./getnewnotifs(186)"></script><script type="text/javascript" async="true" src="./getnewnotifs(187)"></script><script type="text/javascript" async="true" src="./getnewnotifs(188)"></script><script type="text/javascript" async="true" src="./getnewnotifs(189)"></script><script type="text/javascript" async="true" src="./getnewnotifs(190)"></script><script type="text/javascript" async="true" src="./getnewnotifs(191)"></script><script type="text/javascript" async="true" src="./getnewnotifs(192)"></script><script type="text/javascript" async="true" src="./getnewnotifs(193)"></script><script type="text/javascript" async="true" src="./getnewnotifs(194)"></script><script type="text/javascript" async="true" src="./getnewnotifs(195)"></script><script type="text/javascript" async="true" src="./getnewnotifs(196)"></script><script type="text/javascript" async="true" src="./getnewnotifs(197)"></script><script type="text/javascript" async="true" src="./getnewnotifs(198)"></script><script type="text/javascript" async="true" src="./getnewnotifs(199)"></script><script type="text/javascript" async="true" src="./getnewnotifs(200)"></script><script type="text/javascript" async="true" src="./getnewnotifs(201)"></script><script type="text/javascript" async="true" src="./getnewnotifs(202)"></script><script type="text/javascript" async="true" src="./getnewnotifs(203)"></script><script type="text/javascript" async="true" src="./getnewnotifs(204)"></script><script type="text/javascript" async="true" src="./getnewnotifs(205)"></script><script type="text/javascript" async="true" src="./getnewnotifs(206)"></script><script type="text/javascript" async="true" src="./getnewnotifs(207)"></script><script type="text/javascript" async="true" src="./getnewnotifs(208)"></script><script type="text/javascript" async="true" src="./getnewnotifs(209)"></script><script type="text/javascript" async="true" src="./getnewnotifs(210)"></script><script type="text/javascript" async="true" src="./getnewnotifs(211)"></script><script type="text/javascript" async="true" src="./getnewnotifs(212)"></script><script type="text/javascript" async="true" src="./getnewnotifs(213)"></script><script type="text/javascript" async="true" src="./getnewnotifs(214)"></script><script type="text/javascript" async="true" src="./getnewnotifs(215)"></script><script type="text/javascript" async="true" src="./getnewnotifs(216)"></script><script type="text/javascript" async="true" src="./getnewnotifs(217)"></script><script type="text/javascript" async="true" src="./getnewnotifs(218)"></script><script type="text/javascript" async="true" src="./getnewnotifs(219)"></script><script type="text/javascript" async="true" src="./getnewnotifs(220)"></script><script type="text/javascript" async="true" src="./getnewnotifs(221)"></script><script type="text/javascript" async="true" src="./getnewnotifs(222)"></script><script type="text/javascript" async="true" src="./getnewnotifs(223)"></script><script type="text/javascript" async="true" src="./getnewnotifs(224)"></script><script type="text/javascript" async="true" src="./getnewnotifs(225)"></script><script type="text/javascript" async="true" src="./getnewnotifs(226)"></script><script type="text/javascript" async="true" src="./getnewnotifs(227)"></script><script type="text/javascript" async="true" src="./getnewnotifs(228)"></script><script type="text/javascript" async="true" src="./getnewnotifs(229)"></script><script type="text/javascript" async="true" src="./getnewnotifs(230)"></script><script type="text/javascript" async="true" src="./getnewnotifs(231)"></script><script type="text/javascript" async="true" src="./getnewnotifs(232)"></script><script type="text/javascript" async="true" src="./getnewnotifs(233)"></script><script type="text/javascript" async="true" src="./getnewnotifs(234)"></script><script type="text/javascript" async="true" src="./getnewnotifs(235)"></script><script type="text/javascript" async="true" src="./getnewnotifs(236)"></script><script type="text/javascript" async="true" src="./getnewnotifs(237)"></script><script type="text/javascript" async="true" src="./getnewnotifs(238)"></script><script type="text/javascript" async="true" src="./getnewnotifs(239)"></script><script type="text/javascript" async="true" src="./getnewnotifs(240)"></script><script type="text/javascript" async="true" src="./getnewnotifs(241)"></script><script type="text/javascript" async="true" src="./getnewnotifs(242)"></script><script type="text/javascript" async="true" src="./getnewnotifs(243)"></script><script type="text/javascript" async="true" src="./getnewnotifs(244)"></script><script type="text/javascript" async="true" src="./getnewnotifs(245)"></script><script type="text/javascript" async="true" src="./getnewnotifs(246)"></script><script type="text/javascript" async="true" src="./getnewnotifs(247)"></script><script type="text/javascript" async="true" src="./getnewnotifs(248)"></script><script type="text/javascript" async="true" src="./getnewnotifs(249)"></script><script type="text/javascript" async="true" src="./getnewnotifs(250)"></script><script type="text/javascript" async="true" src="./getnewnotifs(251)"></script><script type="text/javascript" async="true" src="./getnewnotifs(252)"></script><script type="text/javascript" async="true" src="./getnewnotifs(253)"></script><script type="text/javascript" async="true" src="./getnewnotifs(254)"></script><script type="text/javascript" async="true" src="./getnewnotifs(255)"></script><script type="text/javascript" async="true" src="./getnewnotifs(256)"></script><script type="text/javascript" async="true" src="./getnewnotifs(257)"></script><script type="text/javascript" async="true" src="./getnewnotifs(258)"></script><script type="text/javascript" async="true" src="./getnewnotifs(259)"></script><script type="text/javascript" async="true" src="./getnewnotifs(260)"></script><script type="text/javascript" async="true" src="./getnewnotifs(261)"></script><script type="text/javascript" async="true" src="./getnewnotifs(262)"></script><script type="text/javascript" async="true" src="./getnewnotifs(263)"></script><script type="text/javascript" async="true" src="./getnewnotifs(264)"></script><script type="text/javascript" async="true" src="./getnewnotifs(265)"></script><script type="text/javascript" async="true" src="./getnewnotifs(266)"></script><script type="text/javascript" async="true" src="./getnewnotifs(267)"></script><script type="text/javascript" async="true" src="./getnewnotifs(268)"></script><script type="text/javascript" async="true" src="./getnewnotifs(269)"></script><script type="text/javascript" async="true" src="./getnewnotifs(270)"></script><script type="text/javascript" async="true" src="./getnewnotifs(271)"></script><script type="text/javascript" async="true" src="./getnewnotifs(272)"></script><script type="text/javascript" async="true" src="./getnewnotifs(273)"></script><script type="text/javascript" async="true" src="./getnewnotifs(274)"></script><script type="text/javascript" async="true" src="./getnewnotifs(275)"></script><script type="text/javascript" async="true" src="./getnewnotifs(276)"></script><script type="text/javascript" async="true" src="./getnewnotifs(277)"></script><script type="text/javascript" async="true" src="./getnewnotifs(278)"></script><script type="text/javascript" async="true" src="./getnewnotifs(279)"></script><script type="text/javascript" async="true" src="./getnewnotifs(280)"></script><script type="text/javascript" async="true" src="./getnewnotifs(281)"></script><script type="text/javascript" async="true" src="./getnewnotifs(282)"></script><script type="text/javascript" async="true" src="./getnewnotifs(283)"></script><script type="text/javascript" async="true" src="./getnewnotifs(284)"></script><script type="text/javascript" async="true" src="./getnewnotifs(285)"></script><script type="text/javascript" async="true" src="./getnewnotifs(286)"></script><script type="text/javascript" async="true" src="./getnewnotifs(287)"></script><script type="text/javascript" async="true" src="./getnewnotifs(288)"></script><script type="text/javascript" async="true" src="./getnewnotifs(289)"></script><script type="text/javascript" async="true" src="./getnewnotifs(290)"></script><script type="text/javascript" async="true" src="./getnewnotifs(291)"></script><script type="text/javascript" async="true" src="./getnewnotifs(292)"></script><script type="text/javascript" async="true" src="./getnewnotifs(293)"></script><script type="text/javascript" async="true" src="./getnewnotifs(294)"></script><script type="text/javascript" async="true" src="./getnewnotifs(295)"></script><script type="text/javascript" async="true" src="./getnewnotifs(296)"></script><script type="text/javascript" async="true" src="./getnewnotifs(297)"></script><script type="text/javascript" async="true" src="./getnewnotifs(298)"></script><script type="text/javascript" async="true" src="./getnewnotifs(299)"></script><script type="text/javascript" async="true" src="./getnewnotifs(300)"></script><script type="text/javascript" async="true" src="./getnewnotifs(301)"></script><script type="text/javascript" async="true" src="./getnewnotifs(302)"></script><script type="text/javascript" async="true" src="./getnewnotifs(303)"></script><script type="text/javascript" async="true" src="./getnewnotifs(304)"></script><script type="text/javascript" async="true" src="./getnewnotifs(305)"></script><script type="text/javascript" async="true" src="./getnewnotifs(306)"></script><script type="text/javascript" async="true" src="./getnewnotifs(307)"></script><script type="text/javascript" async="true" src="./getnewnotifs(308)"></script><script type="text/javascript" async="true" src="./getnewnotifs(309)"></script><script type="text/javascript" async="true" src="./getnewnotifs(310)"></script><script type="text/javascript" async="true" src="./getnewnotifs(311)"></script><script type="text/javascript" async="true" src="./getnewnotifs(312)"></script><script type="text/javascript" async="true" src="./getnewnotifs(313)"></script><script type="text/javascript" async="true" src="./getnewnotifs(314)"></script><script type="text/javascript" async="true" src="./getnewnotifs(315)"></script><script type="text/javascript" async="true" src="./getnewnotifs(316)"></script><script type="text/javascript" async="true" src="./getnewnotifs(317)"></script><script type="text/javascript" async="true" src="./getnewnotifs(318)"></script><script type="text/javascript" async="true" src="./getnewnotifs(319)"></script><script type="text/javascript" async="true" src="./getnewnotifs(320)"></script><script type="text/javascript" async="true" src="./getnewnotifs(321)"></script><script type="text/javascript" async="true" src="./getnewnotifs(322)"></script><script type="text/javascript" async="true" src="./getnewnotifs(323)"></script><script type="text/javascript" async="true" src="./getnewnotifs(324)"></script><script type="text/javascript" async="true" src="./getnewnotifs(325)"></script><script type="text/javascript" async="true" src="./getnewnotifs(326)"></script><script type="text/javascript" async="true" src="./getnewnotifs(327)"></script><script type="text/javascript" async="true" src="./getnewnotifs(328)"></script><script type="text/javascript" async="true" src="./getnewnotifs(329)"></script><script type="text/javascript" async="true" src="./getnewnotifs(330)"></script><script type="text/javascript" async="true" src="./getnewnotifs(331)"></script><script type="text/javascript" async="true" src="./getnewnotifs(332)"></script><script type="text/javascript" async="true" src="./getnewnotifs(333)"></script><script type="text/javascript" async="true" src="./getnewnotifs(334)"></script><script type="text/javascript" async="true" src="./getnewnotifs(335)"></script><script type="text/javascript" async="true" src="./getnewnotifs(336)"></script><script type="text/javascript" async="true" src="./getnewnotifs(337)"></script><script type="text/javascript" async="true" src="./getnewnotifs(338)"></script><script type="text/javascript" async="true" src="./getnewnotifs(339)"></script><script type="text/javascript" async="true" src="./getnewnotifs(340)"></script><script type="text/javascript" async="true" src="./getnewnotifs(341)"></script><script type="text/javascript" async="true" src="./getnewnotifs(342)"></script><script type="text/javascript" async="true" src="./getnewnotifs(343)"></script><script type="text/javascript" async="true" src="./getnewnotifs(344)"></script><script type="text/javascript" async="true" src="./getnewnotifs(345)"></script><script type="text/javascript" async="true" src="./getnewnotifs(346)"></script><script type="text/javascript" async="true" src="./getnewnotifs(347)"></script><script type="text/javascript" async="true" src="./getnewnotifs(348)"></script><script type="text/javascript" async="true" src="./getnewnotifs(349)"></script><script type="text/javascript" async="true" src="./getnewnotifs(350)"></script><script type="text/javascript" async="true" src="./getnewnotifs(351)"></script><script type="text/javascript" async="true" src="./getnewnotifs(352)"></script><script type="text/javascript" async="true" src="./getnewnotifs(353)"></script><script type="text/javascript" async="true" src="./getnewnotifs(354)"></script><script type="text/javascript" async="true" src="./getnewnotifs(355)"></script><script type="text/javascript" async="true" src="./getnewnotifs(356)"></script><script type="text/javascript" async="true" src="./getnewnotifs(357)"></script><script type="text/javascript" async="true" src="./getnewnotifs(358)"></script><script type="text/javascript" async="true" src="./getnewnotifs(359)"></script><script type="text/javascript" async="true" src="./getnewnotifs(360)"></script><script type="text/javascript" async="true" src="./getnewnotifs(361)"></script><script type="text/javascript" async="true" src="./getnewnotifs(362)"></script><script type="text/javascript" async="true" src="./getnewnotifs(363)"></script><script type="text/javascript" async="true" src="./getnewnotifs(364)"></script><script type="text/javascript" async="true" src="./getnewnotifs(365)"></script><script type="text/javascript" async="true" src="./getnewnotifs(366)"></script><script type="text/javascript" async="true" src="./getnewnotifs(367)"></script><script type="text/javascript" async="true" src="./getnewnotifs(368)"></script><script type="text/javascript" async="true" src="./getnewnotifs(369)"></script><script type="text/javascript" async="true" src="./getnewnotifs(370)"></script><script type="text/javascript" async="true" src="./getnewnotifs(371)"></script><script type="text/javascript" async="true" src="./getnewnotifs(372)"></script><script type="text/javascript" async="true" src="./getnewnotifs(373)"></script><script type="text/javascript" async="true" src="./getnewnotifs(374)"></script><script type="text/javascript" async="true" src="./getnewnotifs(375)"></script><script type="text/javascript" async="true" src="./getnewnotifs(376)"></script><script type="text/javascript" async="true" src="./getnewnotifs(377)"></script><script type="text/javascript" async="true" src="./getnewnotifs(378)"></script><script type="text/javascript" async="true" src="./getnewnotifs(379)"></script><script type="text/javascript" async="true" src="./getnewnotifs(380)"></script><script type="text/javascript" async="true" src="./getnewnotifs(381)"></script><script type="text/javascript" async="true" src="./getnewnotifs(382)"></script><script type="text/javascript" async="true" src="./getnewnotifs(383)"></script><script type="text/javascript" async="true" src="./getnewnotifs(384)"></script><script type="text/javascript" async="true" src="./getnewnotifs(385)"></script><script type="text/javascript" async="true" src="./getnewnotifs(386)"></script><script type="text/javascript" async="true" src="./getnewnotifs(387)"></script><script type="text/javascript" async="true" src="./getnewnotifs(388)"></script><script type="text/javascript" async="true" src="./getnewnotifs(389)"></script><script type="text/javascript" async="true" src="./getnewnotifs(390)"></script><script type="text/javascript" async="true" src="./getnewnotifs(391)"></script><script type="text/javascript" async="true" src="./getnewnotifs(392)"></script><script type="text/javascript" async="true" src="./getnewnotifs(393)"></script><script type="text/javascript" async="true" src="./getnewnotifs(394)"></script><script type="text/javascript" async="true" src="./getnewnotifs(395)"></script><script type="text/javascript" async="true" src="./getnewnotifs(396)"></script><script type="text/javascript" async="true" src="./getnewnotifs(397)"></script><script type="text/javascript" async="true" src="./getnewnotifs(398)"></script><script type="text/javascript" async="true" src="./getnewnotifs(399)"></script><script type="text/javascript" async="true" src="./getnewnotifs(400)"></script><script type="text/javascript" async="true" src="./getnewnotifs(401)"></script><script type="text/javascript" async="true" src="./getnewnotifs(402)"></script><script type="text/javascript" async="true" src="./getnewnotifs(403)"></script><script type="text/javascript" async="true" src="./getnewnotifs(404)"></script><script type="text/javascript" async="true" src="./getnewnotifs(405)"></script><script type="text/javascript" async="true" src="./getnewnotifs(406)"></script><script type="text/javascript" async="true" src="./getnewnotifs(407)"></script><script type="text/javascript" async="true" src="./getnewnotifs(408)"></script><script type="text/javascript" async="true" src="./getnewnotifs(409)"></script><script type="text/javascript" async="true" src="./getnewnotifs(410)"></script><script type="text/javascript" async="true" src="./getnewnotifs(411)"></script><script type="text/javascript" async="true" src="./getnewnotifs(412)"></script><script type="text/javascript" async="true" src="./getnewnotifs(413)"></script><script type="text/javascript" async="true" src="./getnewnotifs(414)"></script><script type="text/javascript" async="true" src="./getnewnotifs(415)"></script><script type="text/javascript" async="true" src="./getnewnotifs(416)"></script><script type="text/javascript" async="true" src="./getnewnotifs(417)"></script><script type="text/javascript" async="true" src="./getnewnotifs(418)"></script><script type="text/javascript" async="true" src="./getnewnotifs(419)"></script><script type="text/javascript" async="true" src="./getnewnotifs(420)"></script><script type="text/javascript" async="true" src="./getnewnotifs(421)"></script><script type="text/javascript" async="true" src="./getnewnotifs(422)"></script><script type="text/javascript" async="true" src="./getnewnotifs(423)"></script><script type="text/javascript" async="true" src="./getnewnotifs(424)"></script><script type="text/javascript" async="true" src="./getnewnotifs(425)"></script><script type="text/javascript" async="true" src="./getnewnotifs(426)"></script><script type="text/javascript" async="true" src="./getnewnotifs(427)"></script><script type="text/javascript" async="true" src="./getnewnotifs(428)"></script><script type="text/javascript" async="true" src="./getnewnotifs(429)"></script><script type="text/javascript" async="true" src="./getnewnotifs(430)"></script><script type="text/javascript" async="true" src="./getnewnotifs(431)"></script><script type="text/javascript" async="true" src="./getnewnotifs(432)"></script><script type="text/javascript" async="true" src="./getnewnotifs(433)"></script><script type="text/javascript" async="true" src="./getnewnotifs(434)"></script><script type="text/javascript" async="true" src="./getnewnotifs(435)"></script><script type="text/javascript" async="true" src="./getnewnotifs(436)"></script><script type="text/javascript" async="true" src="./getnewnotifs(437)"></script><script type="text/javascript" async="true" src="./getnewnotifs(438)"></script><script type="text/javascript" async="true" src="./getnewnotifs(439)"></script><script type="text/javascript" async="true" src="./getnewnotifs(440)"></script><script type="text/javascript" async="true" src="./getnewnotifs(441)"></script><script type="text/javascript" async="true" src="./getnewnotifs(442)"></script><script type="text/javascript" async="true" src="./getnewnotifs(443)"></script><script type="text/javascript" async="true" src="./getnewnotifs(444)"></script><script type="text/javascript" async="true" src="./getnewnotifs(445)"></script><script type="text/javascript" async="true" src="./getnewnotifs(446)"></script><script type="text/javascript" async="true" src="./getnewnotifs(447)"></script><script type="text/javascript" async="true" src="./getnewnotifs(448)"></script><script type="text/javascript" async="true" src="./getnewnotifs(449)"></script><script type="text/javascript" async="true" src="./getnewnotifs(450)"></script><script type="text/javascript" async="true" src="./getnewnotifs(451)"></script><script type="text/javascript" async="true" src="./getnewnotifs(452)"></script><script type="text/javascript" async="true" src="./getnewnotifs(453)"></script><script type="text/javascript" async="true" src="./getnewnotifs(454)"></script><script type="text/javascript" async="true" src="./getnewnotifs(455)"></script><script type="text/javascript" async="true" src="./getnewnotifs(456)"></script><script type="text/javascript" async="true" src="./getnewnotifs(457)"></script><script type="text/javascript" async="true" src="./getnewnotifs(458)"></script><script type="text/javascript" async="true" src="./getnewnotifs(459)"></script><script type="text/javascript" async="true" src="./getnewnotifs(460)"></script><script type="text/javascript" async="true" src="./getnewnotifs(461)"></script><script type="text/javascript" async="true" src="./getnewnotifs(462)"></script><script type="text/javascript" async="true" src="./getnewnotifs(463)"></script><script type="text/javascript" async="true" src="./getnewnotifs(464)"></script><script type="text/javascript" async="true" src="./getnewnotifs(465)"></script><script type="text/javascript" async="true" src="./getnewnotifs(466)"></script><script type="text/javascript" async="true" src="./getnewnotifs(467)"></script><script type="text/javascript" async="true" src="./getnewnotifs(468)"></script><script type="text/javascript" async="true" src="./getnewnotifs(469)"></script><script type="text/javascript" async="true" src="./getnewnotifs(470)"></script><script type="text/javascript" async="true" src="./getnewnotifs(471)"></script><script type="text/javascript" async="true" src="./getnewnotifs(472)"></script><script type="text/javascript" async="true" src="./getnewnotifs(473)"></script><script type="text/javascript" async="true" src="./getnewnotifs(474)"></script><script type="text/javascript" async="true" src="./getnewnotifs(475)"></script><script type="text/javascript" async="true" src="./getnewnotifs(476)"></script><script type="text/javascript" async="true" src="./getnewnotifs(477)"></script><script type="text/javascript" async="true" src="./getnewnotifs(478)"></script><script type="text/javascript" async="true" src="./getnewnotifs(479)"></script><script type="text/javascript" async="true" src="./getnewnotifs(480)"></script><script type="text/javascript" async="true" src="./getnewnotifs(481)"></script><script type="text/javascript" async="true" src="./getnewnotifs(482)"></script><script type="text/javascript" async="true" src="./getnewnotifs(483)"></script><script type="text/javascript" async="true" src="./getnewnotifs(484)"></script><script type="text/javascript" async="true" src="./getnewnotifs(485)"></script><script type="text/javascript" async="true" src="./getnewnotifs(486)"></script><script type="text/javascript" async="true" src="./getnewnotifs(487)"></script><script type="text/javascript" async="true" src="./getnewnotifs(488)"></script><script type="text/javascript" async="true" src="./getnewnotifs(489)"></script><script type="text/javascript" async="true" src="./getnewnotifs(490)"></script><script type="text/javascript" async="true" src="./getnewnotifs(491)"></script><script type="text/javascript" async="true" src="./getnewnotifs(492)"></script><script type="text/javascript" async="true" src="./getnewnotifs(493)"></script><script type="text/javascript" async="true" src="./getnewnotifs(494)"></script><script type="text/javascript" async="true" src="./getnewnotifs(495)"></script><script type="text/javascript" async="true" src="./getnewnotifs(496)"></script><script type="text/javascript" async="true" src="./getnewnotifs(497)"></script><script type="text/javascript" async="true" src="./getnewnotifs(498)"></script><script type="text/javascript" async="true" src="./getnewnotifs(499)"></script><script type="text/javascript" async="true" src="./getnewnotifs(500)"></script><script type="text/javascript" async="true" src="./getnewnotifs(501)"></script><script type="text/javascript" async="true" src="./getnewnotifs(502)"></script><script type="text/javascript" async="true" src="./getnewnotifs(503)"></script><script type="text/javascript" async="true" src="./getnewnotifs(504)"></script><script type="text/javascript" async="true" src="./getnewnotifs(505)"></script><script type="text/javascript" async="true" src="./getnewnotifs(506)"></script><script type="text/javascript" async="true" src="./getnewnotifs(507)"></script><script type="text/javascript" async="true" src="./getnewnotifs(508)"></script><script type="text/javascript" async="true" src="./getnewnotifs(509)"></script><script type="text/javascript" async="true" src="./getnewnotifs(510)"></script><script type="text/javascript" async="true" src="./getnewnotifs(511)"></script><script type="text/javascript" async="true" src="./getnewnotifs(512)"></script><script type="text/javascript" async="true" src="./getnewnotifs(513)"></script><script type="text/javascript" async="true" src="./getnewnotifs(514)"></script><script type="text/javascript" async="true" src="./getnewnotifs(515)"></script><script type="text/javascript" async="true" src="./getnewnotifs(516)"></script><script type="text/javascript" async="true" src="./getnewnotifs(517)"></script><script type="text/javascript" async="true" src="./getnewnotifs(518)"></script><script type="text/javascript" async="true" src="./getnewnotifs(519)"></script><script type="text/javascript" async="true" src="./getnewnotifs(520)"></script><script type="text/javascript" async="true" src="./getnewnotifs(521)"></script><script type="text/javascript" async="true" src="./getnewnotifs(522)"></script><script type="text/javascript" async="true" src="./getnewnotifs(523)"></script><script type="text/javascript" async="true" src="./getnewnotifs(524)"></script><script type="text/javascript" async="true" src="./getnewnotifs(525)"></script><script type="text/javascript" async="true" src="./getnewnotifs(526)"></script><script type="text/javascript" async="true" src="./getnewnotifs(527)"></script><script type="text/javascript" async="true" src="./getnewnotifs(528)"></script><script type="text/javascript" async="true" src="./getnewnotifs(529)"></script><script type="text/javascript" async="true" src="./getnewnotifs(530)"></script><script type="text/javascript" async="true" src="./getnewnotifs(531)"></script><script type="text/javascript" async="true" src="./getnewnotifs(532)"></script><script type="text/javascript" async="true" src="./getnewnotifs(533)"></script><script type="text/javascript" async="true" src="./getnewnotifs(534)"></script><script type="text/javascript" async="true" src="./getnewnotifs(535)"></script><script type="text/javascript" async="true" src="./getnewnotifs(536)"></script><script type="text/javascript" async="true" src="./getnewnotifs(537)"></script><script type="text/javascript" async="true" src="./getnewnotifs(538)"></script><script type="text/javascript" async="true" src="./getnewnotifs(539)"></script><script type="text/javascript" async="true" src="./getnewnotifs(540)"></script><script type="text/javascript" async="true" src="./getnewnotifs(541)"></script><script type="text/javascript" async="true" src="./getnewnotifs(542)"></script><script type="text/javascript" async="true" src="./getnewnotifs(543)"></script><script type="text/javascript" async="true" src="./getnewnotifs(544)"></script><script type="text/javascript" async="true" src="./getnewnotifs(545)"></script><script type="text/javascript" async="true" src="./getnewnotifs(546)"></script><script type="text/javascript" async="true" src="./getnewnotifs(547)"></script><script type="text/javascript" async="true" src="./getnewnotifs(548)"></script><script type="text/javascript" async="true" src="./getnewnotifs(549)"></script><script type="text/javascript" async="true" src="./getnewnotifs(550)"></script><script type="text/javascript" async="true" src="./getnewnotifs(551)"></script><script type="text/javascript" async="true" src="./getnewnotifs(552)"></script><script type="text/javascript" async="true" src="./getnewnotifs(553)"></script><script type="text/javascript" async="true" src="./getnewnotifs(554)"></script><script type="text/javascript" async="true" src="./getnewnotifs(555)"></script><script type="text/javascript" async="true" src="./getnewnotifs(556)"></script><script type="text/javascript" async="true" src="./getnewnotifs(557)"></script><script type="text/javascript" async="true" src="./getnewnotifs(558)"></script><script type="text/javascript" async="true" src="./getnewnotifs(559)"></script><script type="text/javascript" async="true" src="./getnewnotifs(560)"></script><script type="text/javascript" async="true" src="./getnewnotifs(561)"></script><script type="text/javascript" async="true" src="./getnewnotifs(562)"></script><script type="text/javascript" async="true" src="./getnewnotifs(563)"></script><script type="text/javascript" async="true" src="./getnewnotifs(564)"></script><script type="text/javascript" async="true" src="./getnewnotifs(565)"></script><script type="text/javascript" async="true" src="./getnewnotifs(566)"></script><script type="text/javascript" async="true" src="./getnewnotifs(567)"></script><script type="text/javascript" async="true" src="./getnewnotifs(568)"></script><script type="text/javascript" async="true" src="./getnewnotifs(569)"></script><script type="text/javascript" async="true" src="./getnewnotifs(570)"></script><script type="text/javascript" async="true" src="./getnewnotifs(571)"></script><script type="text/javascript" async="true" src="./getnewnotifs(572)"></script><script type="text/javascript" async="true" src="./getnewnotifs(573)"></script><script type="text/javascript" async="true" src="./getnewnotifs(574)"></script><script type="text/javascript" async="true" src="./getnewnotifs(575)"></script><script type="text/javascript" async="true" src="./getnewnotifs(576)"></script><script type="text/javascript" async="true" src="./getnewnotifs(577)"></script><script type="text/javascript" async="true" src="./getnewnotifs(578)"></script><script type="text/javascript" async="true" src="./getnewnotifs(579)"></script><script type="text/javascript" async="true" src="./getnewnotifs(580)"></script><script type="text/javascript" async="true" src="./getnewnotifs(581)"></script><script type="text/javascript" async="true" src="./getnewnotifs(582)"></script><script type="text/javascript" async="true" src="./getnewnotifs(583)"></script><script type="text/javascript" async="true" src="./getnewnotifs(584)"></script><script type="text/javascript" async="true" src="./getnewnotifs(585)"></script><script type="text/javascript" async="true" src="./getnewnotifs(586)"></script><script type="text/javascript" async="true" src="https://api.kixeye.com/messaging/getnewnotifs?callback=Request.JSONP.request_map.request_589&amp;ts=1477105853&amp;kixigned_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg%3D.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0%3D&amp;appid=216862461657375"></script></head>
<body id="body">
		<script src="./swfobject.js.download" type="text/javascript"></script>
	    	<script src="./jquery.min.js.download" type="text/javascript"></script>
		    <script type="text/javascript" src="./ultimatepay-api.js.download"></script>
	
	<script>
	        //no conflict jquery
	        jQuery.noConflict();
	</script>
	
		<!-- /* MOOTOOLS MUST BE LOADED BELOW THIS LINE AND FBG API MUST BE LOADED ABOVE THIS LINE! */ -->
	<script type="text/javascript" src="./mootools-yui-compressed.js.download"></script>
	<script type="text/javascript" src="./mtmore14.v199.js.download"></script>
	<script type="text/javascript" src="./leaderboard.js.download"></script>
	<script type="text/javascript" src="./payment_overlay.js.download"></script>	

		<script type="text/javascript">
		var baseurl  = 'https://www.kixeye.com/game/warcommander';
		var localurl = 'https://wc-kx-vip.sjc.kixeye.com/';
		var cdnurl   = 'https://wc-fb-cdn7.kixeye.com/';
		var logurl   = 'https://debuglog-lb2.sjc.kixeye.com/';
		var pmsurl   = 'https://bi-pt-vip1.sjc.kixeye.com/';
		var gamename = 'War Commander';
		var user     = {"id":29215761,"ip":"74.82.4.37","uid":null,"fbid":null,"kxid":"a119314375a94d80ac434a10","tpid":false,"first_name":null,"last_name":""};
		var fbdata   = 'kxid=a119314375a94d80ac434a10&a=216862461657375&g=warcommander&username=Username-Change&email=war.4%40kixeye.com&expireAt=1476913032&status=active&userIp=74.82.4.37&signed_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg%3D.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0%3D';

		window.KXPoptions = { 
			namespace: 'bpfb', 
			auth_data: {
                "kixigned_request": "yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0="            },
			urls: {php: 'https://api.kixeye.com/'},
			noSocket: true
		};
	</script>
	
	<script type="text/javascript" src="./jquery.countdown.min.js.download"></script>
	<link rel="stylesheet" type="text/css" href="./jquery.countdown.css">

    <script type="text/javascript" src="./browserdetect.js.download"></script>
	<script type="text/javascript" src="./Array.Math.min.js.download"></script>    
	<script type="text/javascript" src="./fb.v199.js.download"></script>
	<script type="text/javascript" src="./cc-framework.v13690.js.download"></script>
	<script type="text/javascript" src="./rightclick.v199.js.download"></script>
	<script type="text/javascript">
	
		var kxLogger = new KxLogger({
			'kx_logger_url':'https://bi-logging.sjc.kixeye.com/log',
			'kx_logger_key':'qwerty',
			'kx_logger_env':'prod',
			'logsessionid':'292157611476898639',
			'integ':'kxp',
			'game':'wc',
			'user':user,
			'userid':'29215761',
			'appname':'warcommander',
			'userlevel':'33'
		});

		var cc = null;
		
		window.addEvent('domready',function(){
			var loadDiff = new Date().getTime() - canvasInitTime;
			var ccdata = {
				'integ'                     :'kxp',
				'game'                      :'wc',
				'preview_server'            :'0',
				'authperms'                 :'public_profile,email,user_friends',
				'baseurl'                   :baseurl,
				'localurl'                  :localurl,
				'pmsurl'                    :pmsurl,
				'appname'                   :'warcommander',
				'fbog_localurl'             :'http://wc-kx-vip.sjc.kixeye.com/',
				'gamenamesh'                :'Wc',
				'twitterurl'                :'',
				'app_id'                    :'216862461657375',
				'jflashvars'                :{"kxid":"a119314375a94d80ac434a10","a":"216862461657375","g":"warcommander","username":"Username-Change","email":"war.4@kixeye.com","expireAt":1476913032,"status":"active","userIp":"74.82.4.37","signed_request":"yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=","userid":29215761,"newuser":0,"apiurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/api\/","wmbasemanurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/wmbaseman\/","baseurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/api\/wc\/base\/","cdnurl":"https:\/\/wc-fb-cdn7.kixeye.com\/","gameurl":"https:\/\/wc-fb-cdn7.kixeye.com\/game\/","statsurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/recordstats.php","logurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recorddebugdata\/","probeurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recordloadtime\/","mapurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/worldmapv2\/","gamenamesh":"wc","integ":"kxp","low_level_min_userid":9378000,"low_level_rollout_userid":19767782,"platform_api_url":"https:\/\/api.kixeye.com\/","app_enable_response_checksum":1,"app_enable_encrypt_body":1,"locale":"en_US","splashloader":0,"siu":"https:\/\/wc-kx-vip.sjc.kixeye.com\/","worldmap_servers":"%5B%5B%22wc-fb-gsvip1.sjc.kixeye.com%22%2C2%2C%2280%2C8080%2C8000%2C50000%2C53%2C443%22%5D%2C%5B%22wc-fb-gsvip2.sjc.kixeye.com%22%2C3%2C%2280%22%5D%5D","logsessionid":"292157611476898639","user_level":"33","tutorialstage":"1000","abtests":"{\"NUB\":null,\"LogLoadPerformance\":\"1\",\"NCP\":\"1\",\"NetPromoter\":\"2\",\"OperationAttackSplit\":\"E\",\"OperationDefenseSplit\":\"E\",\"TimeAndGoldToRepairSplit\":\"-35\"}"},
				'jflashvarsf'               :{"kxid":"a119314375a94d80ac434a10","a":"216862461657375","g":"warcommander","username":"Username-Change","email":"war.4@kixeye.com","expireAt":1476913032,"status":"active","userIp":"74.82.4.37","signed_request":"yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=","userid":29215761,"newuser":0,"apiurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/api\/","wmbasemanurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/wmbaseman\/","baseurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/api\/wc\/base\/","cdnurl":"https:\/\/wc-fb-cdn7.kixeye.com\/","gameurl":"https:\/\/wc-fb-cdn7.kixeye.com\/game\/","statsurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/recordstats.php","logurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recorddebugdata\/","probeurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recordloadtime\/","mapurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/worldmapv2\/","gamenamesh":"wc","integ":"kxp","low_level_min_userid":9378000,"low_level_rollout_userid":19767782,"platform_api_url":"https:\/\/api.kixeye.com\/","app_enable_response_checksum":1,"app_enable_encrypt_body":1,"locale":"en_US","splashloader":0,"siu":"https:\/\/wc-kx-vip.sjc.kixeye.com\/","worldmap_servers":"%5B%5B%22wc-fb-gsvip1.sjc.kixeye.com%22%2C2%2C%2280%2C8080%2C8000%2C50000%2C53%2C443%22%5D%2C%5B%22wc-fb-gsvip2.sjc.kixeye.com%22%2C3%2C%2280%22%5D%5D","logsessionid":"292157611476898639","user_level":"33","tutorialstage":"1000","abtests":"{\"NUB\":null,\"LogLoadPerformance\":\"1\",\"NCP\":\"1\",\"NetPromoter\":\"2\",\"OperationAttackSplit\":\"E\",\"OperationDefenseSplit\":\"E\",\"TimeAndGoldToRepairSplit\":\"-35\"}","visitBtn":"Visit","homeBtn":"Home","inviteBtn":"Invite a friend"},
				'game_width'                :'100%',
				'game_height'               :'750',
				'fswf_height'               :'133',
				'fswfversion'               :'11',
				'user'                      :user,
				'cdnurl'                    :cdnurl,
				'assetsurl'                 :'https://wc-fb-cdn7.kixeye.com/game/assets/',
				'kontagent_url'             :'',
				'kontagent_api_key'         :'',
				'kontagent_api_version'     :'',
				'kx_logger_url'             :'https://bi-logging.sjc.kixeye.com/log',
				'kx_logger_key'             :'qwerty',
				'kx_logger_env'             :'prod',
				'kx_logger_st'              :'load',
				'giftredir'                 :0,
                'opt_showleaderboard'       :0, // how many millis delay before showing leaderboard popup, 0 is "never"
				'fbdata'                    :fbdata,
				'logurl'                    :logurl,
				'logsessionid'              :'292157611476898639',
				'log_h'                     :'',
				'log_hn'                    :'',
				'canvas_init_time'          :canvasInitTime,
				'canvas_load_time'          :loadDiff,
				'sourcestr'                 :'',
				'installts'                 :'1393180963',
				'fb_access_token'           :'',
				'adid'                      : '-1',
				'userid'                    :'29215761',
				'userlevel'                 :'33',
				'kx_biapp_url'              :'https://bi-logging.sjc.kixeye.com/kx/www/sr.php',
                'short_invite_flow'         :'0',
				'ipaddr'                    : '74.82.4.37',
                'fanpageurl'                :'http://www.facebook.com/warcommander',
                'local_currency'            :1,
				'fromstr'                   :'',
				'timeplayed'                :505975,
				'gg_timeplayed'             :86400,
				'gg_max_spend'              :100,
				'onLoadPopup'               :{},
				'localcurrencypayments'     :'1',
				'tp_vendor_id'              : '2POKTDMF',
				'upLiveUrl'                 : '0',
                'loadflag'                  :'',     // WC-20233
                'disable_bi_logging'       : '0',
                'declinedpermissions'       : ''
			};
			cc = new CCFramework(ccdata);

			// preload bg images for requests
			var preload = new Array(); 
			function doPreload() 
			{
				for (i = 0; i < doPreload.arguments.length; i++) {
					preload[i] = new Image()
					preload[i].src = doPreload.arguments[i]
				}
			}
			doPreload (
				ccdata.assetsurl+'images/feeddialog/invite_friends_screen.png',
				ccdata.cdnurl+'images/gift/gift_bg_v3.png'
			);
		});
	</script>
		    <script type="text/javascript" src="./kxp-client.min.v203.js.download"></script>
	
	<script type="text/javascript">
		window.addEvent('domready',function(){
		var rollovers = [];
		jQuery(".topnavmenuassets").each(
	    	function(){
	    		var asrc = this.src.replace("_reg","_over");
	    		img = new Image();
	    		img.src = asrc;
	    		rollovers[this.src] = img;
			}
	    );	
	    
	    jQuery(".topnavmenuassets").hover(
	    	function(){if(this.src in rollovers) { this.src = rollovers[this.src].src;} },
          	function(){this.src = this.src.replace("_over","_reg"); }
        );
	});
	</script>
    <!-- // If integ data is required and this is not the play iframe, run the command & reload the page -->
	
		
		
		
		<div style="margin: 5px 0 8px; text-align: center; color:#FFFFFF;" id="above-game-message"></div>
		
		<script>
			// show message if the user is using Internet Explorer 6/7
			if (Browser.ie6 || Browser.ie7){
				var el = $('above-game-message');
				if (el)
				{
					el.setStyle('margin', 0);
				}
				document.write('<h5 align="center" style="margin-top: 0px;" id="ie_msg_atg"><span style="color: red;">War Commander is not supported in this browser!</span> Please upgrade to either <a href="http://google.com/chrome">Chrome</a> or <a href="http://mozilla.org/firefox">Firefox</a>.</h5>');
			}
		</script>	

				
		<script type="text/javascript" src="./message-sauce.v199.js.download"></script>

		
		
		<div id="allianceNotifications" style="display:none;"></div>
		
		<div id="topnavbar_back" style="background: url(https://wc-fb-cdn7.kixeye.com/images/navbar2/background_tile.png) bottom center repeat-x;">
			<div id="topnavbar_test" style="min-width: 740px; margin: auto; overflow: hidden; background: url(https://wc-fb-cdn7.kixeye.com/images/navbar2/background_metal.png) bottom center no-repeat; height: 37px;">
                <div style="width: 690px; margin: auto; padding-top:6px; padding-left:70px;">

                    <img style="float: left; display: inline; " src="./button_cap_left.png" border="0">
                                                            <a style="float: left; display: inline; " href="https://wc-kx-vip.sjc.kixeye.com/canvas?kixigned_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=&amp;kxlToken=8c5536954a0da89f1c71713d1d712afae250b3cb1e770c0fc6dfe779b126c456&amp;kx_locale=en_US#" onclick="cc.showGiftsDialog(&#39;gift_select&#39;);return false;"><img id="topnav_gift_button" class="topnavmenuassets" src="./button_gifts_reg.png" border="0"></a>
                    <a style="float: left; display: inline; " href="https://wc-kx-vip.sjc.kixeye.com/canvas?kixigned_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=&amp;kxlToken=8c5536954a0da89f1c71713d1d712afae250b3cb1e770c0fc6dfe779b126c456&amp;kx_locale=en_US#" onclick="cc.showAttackLog();return false;"><img class="topnavmenuassets" src="./button_attacklog_reg.png" border="0"></a>
                    <a style="float: left; display: inline; " href="https://wc-kx-vip.sjc.kixeye.com/canvas?kixigned_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=&amp;kxlToken=8c5536954a0da89f1c71713d1d712afae250b3cb1e770c0fc6dfe779b126c456&amp;kx_locale=en_US#" onclick="cc.showLeaderboard();return false;"><img class="topnavmenuassets" src="./button_leaderboard_reg.png" border="0"></a>
                    <a style="float: left; display: inline; " href="https://www.kixeye.com/forum/discussion/610994" target="_new"><img class="topnavmenuassets" src="./button_fieldmanual_reg.png" border="0"></a>
                    <a style="float: left; display: inline; " href="http://play.kixeye.com/forum/categories/war-commander" target="_blank"><img class="topnavmenuassets" src="./button_discuss_reg.png" border="0"></a>

                    <img style="float: left; display: inline; " src="./button_cap_right.png" border="0">
                    <a style="float: left; display: inline;" href="http://www.kixeye.com/" target="_new"><img src="./kixeye_logo.png" border="0"></a>

                </div>
			</div>
		</div>

		<div id="content">

			<object type="application/x-shockwave-flash" id="gameswf" data="./gameloader-v13690.swf.download" width="100%" height="750" title="Adobe Flash Player"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="wmode" value="transparent"><param name="allowFullScreenInteractive" value="true"><param name="flashvars" value="kxid=a119314375a94d80ac434a10&amp;a=216862461657375&amp;g=warcommander&amp;username=Username-Change&amp;email=war.4@kixeye.com&amp;expireAt=1476913032&amp;status=active&amp;userIp=74.82.4.37&amp;signed_request=yAjEqoX7cyIEQsDqWhRCObsRQcHkGtWGLIW1oY9S5rg=.eyJreGlkIjoiYTExOTMxNDM3NWE5NGQ4MGFjNDM0YTEwIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6IlVzZXJuYW1lLUNoYW5nZSIsImVtYWlsIjoid2FyLjRAa2l4ZXllLmNvbSIsImV4cGlyZUF0IjoxNDc2OTEzMDMyLCJzdGF0dXMiOiJhY3RpdmUiLCJ1c2VySXAiOiI3NC44Mi40LjM3In0=&amp;userid=29215761&amp;newuser=0&amp;apiurl=https://wc-kx-vip.sjc.kixeye.com/api/&amp;wmbasemanurl=https://wc-kx-vip.sjc.kixeye.com/wmbaseman/&amp;baseurl=http://wc-kx-vip.sjc.kixeye.com/api/wc/base/&amp;cdnurl=https://wc-fb-cdn7.kixeye.com/&amp;gameurl=https://wc-fb-cdn7.kixeye.com/game/&amp;statsurl=http://wc-kx-vip.sjc.kixeye.com/recordstats.php&amp;logurl=https://debuglog-lb2.sjc.kixeye.com/debug/recorddebugdata/&amp;probeurl=https://debuglog-lb2.sjc.kixeye.com/debug/recordloadtime/&amp;mapurl=http://wc-kx-vip.sjc.kixeye.com/worldmapv2/&amp;gamenamesh=wc&amp;integ=kxp&amp;low_level_min_userid=9378000&amp;low_level_rollout_userid=19767782&amp;platform_api_url=https://api.kixeye.com/&amp;app_enable_response_checksum=1&amp;app_enable_encrypt_body=1&amp;locale=en_US&amp;splashloader=0&amp;siu=https://wc-kx-vip.sjc.kixeye.com/&amp;worldmap_servers=%5B%5B%22wc-fb-gsvip1.sjc.kixeye.com%22%2C2%2C%2280%2C8080%2C8000%2C50000%2C53%2C443%22%5D%2C%5B%22wc-fb-gsvip2.sjc.kixeye.com%22%2C3%2C%2280%22%5D%5D&amp;logsessionid=292157611476898639&amp;user_level=33&amp;tutorialstage=1000&amp;abtests={&quot;NUB&quot;:null,&quot;LogLoadPerformance&quot;:&quot;1&quot;,&quot;NCP&quot;:&quot;1&quot;,&quot;NetPromoter&quot;:&quot;2&quot;,&quot;OperationAttackSplit&quot;:&quot;E&quot;,&quot;OperationDefenseSplit&quot;:&quot;E&quot;,&quot;TimeAndGoldToRepairSplit&quot;:&quot;-35&quot;}&amp;gameversion=7&amp;softversion=13690"></object>

</div>



<script type="text/javaScript">
	window.addEvent('load',function(){
		cc.options.loadready = true;
	}); 

	window.addEvent('ccfready',function(){
		if(!cc.checkFlashVersion(11)) $('game').set('html','<h2 style="font-size: 14pt;text-align:center;margin:30px;font-family:Tahoma;">War Commander requires Flash Player 11.2 or greater.<br /><a href="http://get.adobe.com/flashplayer/" target="_blank">Click here to download the latest flash player</a></h2>');
		else
		{
			cc.loadGame($('game'),{'gameurl':'https://wc-fb-cdn7.kixeye.com/game/','loaderversion':13690,'gameversion':7,'softversion':13690,'game_width':'100%','game_height':'750'});
			cc.setCounter(0);

							window.addEvent("resize", function () { nl.layOutElements(); });
				nl.layOutElements();
						}
	});
	
	var navLayout = new Class({
		NAV_CONST_WIDTH: 838,
		
		layOutElements: function()
		{
			var atg_elements = ["above-game-message","hacker_msg_atg","survey_atg","banner_atg","updating_msg_atg","ie_msg_atg"];
			var winH = window.getSize().y;
			var contentHeight = winH - 40;
			
			for(i = 0; i < atg_elements.length; i++)
			{
				var el = $(atg_elements[i]);
				var size;
				if (el)
				{
					contentHeight -= jQuery("#"+atg_elements[i]).outerHeight(true);
				}
			}

			contentHeight = Math.max(750, contentHeight); //the game must be a minimum of 750 pixels tall
			nb = $('gameswf');
			nb.setProperty("height", contentHeight);
		}
	});
	
	var nl, nb, men;
	window.addEvent('domready', function()
	{
		nl = new navLayout(nb);
	});

	function onChangeLocale()
	{
		var localeVal = $('language-selector').get('value');
		cc.redirect(cc.options.baseurl+'?v_locale='+localeVal);
		return false;
	}
</script>
<div id="fb-root"></div>


<div style="width:1px;height:1px;text-indent:-10000px;overflow:hidden;">
<script>
	kxLogger.logGeneric({
		'tag': 'load',
		'stage':'iframeload'
	});
</script>
</div>

					<div id="kxp-footer-bar">
				<div id="kxp-footer-container">
					<div style="color:#FFF;"><b>
						   ID: 29215761					</b></div>
					
					<div class="kxp-footer">
						<ul>
							<li><a href="http://www.kixeye.com/help/tos" target="_blank">Terms</a></li>
							<li class="last"><a href="http://www.kixeye.com/help/privacypolicy" target="_blank">Privacy Policy</a></li>
							<li class="last">© 2016 KIXEYE Inc. All rights reserved.</li>
						</ul>
					</div>
					
					<br style="clear:both;">
				</div>
			</div>
			
		
		
	<script type="text/javascript">        
        window.addEvent('domready',function() {
			cc.startSessionPolling();
            //PMS Pixel Firing
				        		cc.getPmsPixels("DAU", "kxlToken=8c5536954a0da89f1c71713d1d712afae250b3cb1e770c0fc6dfe779b126c456&kx_locale=en_US");//DAU Pixel
	        	        				cc.callUrl("https://rya.rockyou.com/ams/dot.php?d=pmcasual1");
			cc.callUrl("https://a.triggit.com/px?u=pN&rtv=warcommander");

            
            		});
	</script>

		
	
	        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-25892031-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
	
    <script type="text/javascript">
        // iOvation Integration using Callback Function Collection Method

        // basic configuration
        var io_install_stm = false; // do not install Active X
        var io_exclude_stm = 12; // do not run Active X
        var io_install_flash = false; // do not install Flash
        var io_enable_rip = true; // collect Real IP information
        var deviceFingerPrint = '';

        /**
         * The Callback Function Collection Method allows you to manage blackbox generation in a more event-driven manner.
         * As blackbox collection progresses, snare.js fires update events when a collection method has completed.
         * These events trigger a user-defined callback function to update the page with the new blackbox value.
         * When all of the collection methods are completed, a Boolean flag is set indicating no further updates are
         * expected and the value is final blackbox value.
         * This method requires:
         * 1. Enabling collection of Real IP information by setting io_enable_rip.
         * 2. Setting the variables to handle user notifications: io_install_flash.
         * 3. Set io_bb_callback to a function that processes the new blackbox value.
         * @param bb : the updated value of the blackbox.
         * @param isComplete : a Boolean indicating whether all the collection methods have completed.
         */
        var io_bb_callback = function (bb, isComplete)
        {
            console.log('io_bb_callback function called with isComplete: ' + isComplete);
            if (isComplete) {
                deviceFingerPrint = bb;
                console.log('Blackbox collection completed. bb: ' + bb);
            }
        };
    </script>

    <script language="JavaScript" src="./snare.js.download"></script><span style="position: absolute; top: -1000px;"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1" height="1" id="stmgwb2" align="right"><param name="allowScriptAccess" value="always"><param name="movie" value="https://mpsnare.iesnare.com/stmgwb2.swf"><param name="swLiveConnect" value="true"><embed src="https://mpsnare.iesnare.com/stmgwb2.swf" width="1" height="1" name="stmgwb2" swliveconnect="true" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></object></span>

			<div id="div_b" style="display:none;padding:10px;position:absolute;top: 50%;left: 50%; margin-top: -312px; margin-left: -351px; z-index: 999999;"></div>
        
    

	<link rel="stylesheet" href="./appboy.min.css">
	<script type="text/javascript">
		+function(a,p,P,b,y) {
			appboy={};for(var s="destroy toggleAppboyLogging setLogger openSession changeUser requestImmediateDataFlush requestFeedRefresh subscribeToFeedUpdates logCardImpressions logCardClick logFeedDisplayed requestInAppMessageRefresh logInAppMessageImpression logInAppMessageClick logInAppMessageButtonClick subscribeToNewInAppMessages removeSubscription removeAllSubscriptions logCustomEvent logPurchase isPushSupported isPushBlocked registerAppboyPushMessages unregisterAppboyPushMessages submitFeedback ab ab.User ab.User.Genders ab.User.NotificationSubscriptionTypes ab.User.prototype.getUserId ab.User.prototype.setFirstName ab.User.prototype.setLastName ab.User.prototype.setEmail ab.User.prototype.setGender ab.User.prototype.setDateOfBirth ab.User.prototype.setCountry ab.User.prototype.setHomeCity ab.User.prototype.setEmailNotificationSubscriptionType ab.User.prototype.setPushNotificationSubscriptionType ab.User.prototype.setPhoneNumber ab.User.prototype.setAvatarImageUrl ab.User.prototype.setLastKnownLocation ab.User.prototype.setUserAttribute ab.User.prototype.setCustomUserAttribute ab.User.prototype.addToCustomAttributeArray ab.User.prototype.removeFromCustomAttributeArray ab.User.prototype.incrementCustomUserAttribute ab.InAppMessage ab.InAppMessage.SlideFrom ab.InAppMessage.ClickAction ab.InAppMessage.DismissType ab.InAppMessage.prototype.subscribeToClickedEvent ab.InAppMessage.prototype.subscribeToDismissedEvent ab.InAppMessage.prototype.removeSubscription ab.InAppMessage.prototype.removeAllSubscriptions ab.InAppMessage.Button ab.InAppMessage.Button.prototype.subscribeToClickedEvent ab.InAppMessage.Button.prototype.removeSubscription ab.InAppMessage.Button.prototype.removeAllSubscriptions ab.SlideUpMessage ab.ModalMessage ab.FullScreenMessage ab.ControlMessage ab.Feed ab.Feed.prototype.getUnreadCardCount ab.Card ab.ClassicCard ab.CaptionedImage ab.Banner display display.automaticallyShowNewInAppMessages display.showInAppMessage display.showFeed display.destroyFeed display.toggleFeed sharedLib".split(" "),i=0;i<s.length;i++){for(var k=appboy,l=s[i].split("."),j=0;j<l.length-1;j++)k=k[l[j]];k[l[j]]=function(){}}appboy.initialize=function(){console&&console.log("Appboy cannot be loaded - this is usually due to strict corporate firewalls or ad blockers.")};appboy.getUser=function(){return new appboy.ab.User};appboy.getCachedFeed=function(){return new appboy.ab.Feed};
			(y = a.createElement(p)).type = 'text/javascript';
			y.src = '/assets/script/appboy.min.js';
			(c = a.getElementsByTagName(p)[0]).parentNode.insertBefore(y, c);
			if (y.addEventListener) {
				y.addEventListener("load", b, false);
			} else if (y.readyState) {
				y.onreadystatechange = b;
			}
		}(document, 'script', 'link', function() {
			appboy.initialize("3649daea-1fdf-46fd-b773-96031906a55e", { enableLogging: 0 } );
			appboy.display.automaticallyShowNewInAppMessages();
			appboy.changeUser("29215761");
			appboy.openSession();
			if (appboy.isPushSupported()) {
				appboy.registerAppboyPushMessages();
			}
			appboy.requestInAppMessageRefresh();
		});
	</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ac9b709c97","applicationID":"1747218","transactionName":"NQdQNkIAXxEFUUZdDgxNcRdDFV4PSxg=","queueTime":0,"applicationTime":328,"ttGuid":"","agentToken":"","userAttributes":"","errorBeacon":"bam.nr-data.net","agent":""}</script>
</body></html>
