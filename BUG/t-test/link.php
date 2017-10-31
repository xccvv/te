
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1059.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
	<script type="text/javascript">
        var canvasInitTime = new Date().getTime();
        // AVG (Anti-Virus) can redefine the Function prototype.  This sets it back.
        Function.prototype.constructor = Function;
	</script>
	<title>War Commander</title>
			<link rel="stylesheet" type="text/css" href="/assets/style/wc-kx-vip.sjc-0-secure.v199.css" id="style-default" />
		<link rel="manifest" href="/manifest.json" />
</head>
<body id="body">
		<script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"></script>
	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		    <script type="text/javascript" src="https://static.pbc.com/js/ultimatepay-api.js"></script>
	
	<script>
	        //no conflict jquery
	        jQuery.noConflict();
	</script>
	
		<!-- /* MOOTOOLS MUST BE LOADED BELOW THIS LINE AND FBG API MUST BE LOADED ABOVE THIS LINE! */ -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js"></script>
	<script type="text/javascript" src="/assets/script/mtmore14.v199.js"></script>
	<script type="text/javascript" src="https://s-assets.tp-cdn.com/static3/js/api/payment_overlay.js"></script>	

	<script type="text/javascript">
		var baseurl  = 'https://www.kixeye.com/game/warcommander';
		var localurl = 'https://wc-kx-vip.sjc.kixeye.com/';
		var cdnurl   = 'https://wc-fb-cdn7.kixeye.com/';
		var logurl   = 'https://debuglog-lb2.sjc.kixeye.com/';
		var gamename = 'War Commander';
		var user     = {"id":31987464,"ip":"36.79.124.193","uid":null,"fbid":null,"kxid":"f6e075ffde064389954aabba","tpid":false,"first_name":null,"last_name":""};
		var fbdata   = 'kxid=f6e075ffde064389954aabba&a=216862461657375&g=warcommander&username=parameter_555&email=%7E555_parameter%40api.kixeye.com&expireAt=1509438808&status=active&userIp=36.79.124.193&signed_request=L3g1O0av9GJ51SFUM8HSvUrLPUj5NtHJw8LNcRmPJ0I%3D.eyJreGlkIjoiZjZlMDc1ZmZkZTA2NDM4OTk1NGFhYmJhIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6InBhcmFtZXRlcl81NTUiLCJlbWFpbCI6In41NTVfcGFyYW1ldGVyQGFwaS5raXhleWUuY29tIiwiZXhwaXJlQXQiOjE1MDk0Mzg4MDgsInN0YXR1cyI6ImFjdGl2ZSIsInVzZXJJcCI6IjM2Ljc5LjEyNC4xOTMifQ%3D%3D';

		window.KXPoptions = { 
			namespace: 'bpfb', 
			auth_data: {
                "kixigned_request": "L3g1O0av9GJ51SFUM8HSvUrLPUj5NtHJw8LNcRmPJ0I=.eyJreGlkIjoiZjZlMDc1ZmZkZTA2NDM4OTk1NGFhYmJhIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6InBhcmFtZXRlcl81NTUiLCJlbWFpbCI6In41NTVfcGFyYW1ldGVyQGFwaS5raXhleWUuY29tIiwiZXhwaXJlQXQiOjE1MDk0Mzg4MDgsInN0YXR1cyI6ImFjdGl2ZSIsInVzZXJJcCI6IjM2Ljc5LjEyNC4xOTMifQ=="            },
			urls: {php: 'https://api.kixeye.com/'},
			noSocket: true
		};
	</script>
	
	<script type="text/javascript" src="/assets/script/jquery.countdown.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/style/jquery.countdown.css" />

    <script type="text/javascript" src="/assets/script/browserdetect.js"></script>
	<script type="text/javascript" src="/assets/script/Array.Math.min.js"></script>    
	<script type="text/javascript" src="/assets/script/fb.v199.js"></script>
	<script type="text/javascript" src="/assets/script/cc-framework.v27502.js"></script>
	<script type="text/javascript" src="/assets/script/rightclick.v199.js"></script>
	<script type="text/javascript">
	
		var kxLogger = new KxLogger({
			'kx_logger_url':'https://bi-logging.sjc.kixeye.com/log',
			'kx_logger_key':'qwerty',
			'kx_logger_env':'prod',
			'logsessionid':'319874641509425432',
			'integ':'kxp',
			'game':'wc',
			'user':user,
			'userid':'31987464',
			'appname':'warcommander',
			'userlevel':'35'
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
				'appname'                   :'warcommander',
				'fbog_localurl'             :'http://wc-kx-vip.sjc.kixeye.com/',
				'gamenamesh'                :'Wc',
				'twitterurl'                :'',
				'app_id'                    :'216862461657375',
				'jflashvars'                :{"kxid":"f6e075ffde064389954aabba","a":"216862461657375","g":"warcommander","username":"parameter_555","email":"~555_parameter@api.kixeye.com","expireAt":1509438808,"status":"active","userIp":"36.79.124.193","signed_request":"L3g1O0av9GJ51SFUM8HSvUrLPUj5NtHJw8LNcRmPJ0I=.eyJreGlkIjoiZjZlMDc1ZmZkZTA2NDM4OTk1NGFhYmJhIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6InBhcmFtZXRlcl81NTUiLCJlbWFpbCI6In41NTVfcGFyYW1ldGVyQGFwaS5raXhleWUuY29tIiwiZXhwaXJlQXQiOjE1MDk0Mzg4MDgsInN0YXR1cyI6ImFjdGl2ZSIsInVzZXJJcCI6IjM2Ljc5LjEyNC4xOTMifQ==","userid":31987464,"newuser":0,"apiurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/api\/","wmbasemanurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/wmbaseman\/","baseurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/api\/wc\/base\/","cdnurl":"https:\/\/wc-fb-cdn7.kixeye.com\/","gameurl":"https:\/\/wc-fb-cdn7.kixeye.com\/game\/","statsurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/recordstats.php","logurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recorddebugdata\/","probeurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recordloadtime\/","mapurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/worldmapv2\/","gamenamesh":"wc","integ":"kxp","low_level_min_userid":9378000,"low_level_rollout_userid":19767782,"platform_api_url":"https:\/\/api.kixeye.com\/","app_enable_response_checksum":1,"app_enable_encrypt_body":1,"locale":"en_US","splashloader":0,"siu":"https:\/\/wc-kx-vip.sjc.kixeye.com\/","worldmap_servers":"%5B%5B%22wc-fb-gsvip1.sjc.kixeye.com%22%2C2%2C%2280%2C8080%2C8000%2C50000%2C53%2C443%22%5D%2C%5B%22wc-fb-gsvip2.sjc.kixeye.com%22%2C3%2C%2280%22%5D%5D","logsessionid":"319874641509425432","user_level":35,"tutorialstage":"1000","abtests":"{\"NUB\":null,\"LogLoadPerformance\":\"1\",\"NCP\":\"1\",\"NetPromoter\":\"4\",\"OperationAttackSplit\":\"E\",\"OperationDefenseSplit\":\"E\",\"TimeAndGoldToRepairSplit\":\"-35\"}"},
				'jflashvarsf'               :{"kxid":"f6e075ffde064389954aabba","a":"216862461657375","g":"warcommander","username":"parameter_555","email":"~555_parameter@api.kixeye.com","expireAt":1509438808,"status":"active","userIp":"36.79.124.193","signed_request":"L3g1O0av9GJ51SFUM8HSvUrLPUj5NtHJw8LNcRmPJ0I=.eyJreGlkIjoiZjZlMDc1ZmZkZTA2NDM4OTk1NGFhYmJhIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6InBhcmFtZXRlcl81NTUiLCJlbWFpbCI6In41NTVfcGFyYW1ldGVyQGFwaS5raXhleWUuY29tIiwiZXhwaXJlQXQiOjE1MDk0Mzg4MDgsInN0YXR1cyI6ImFjdGl2ZSIsInVzZXJJcCI6IjM2Ljc5LjEyNC4xOTMifQ==","userid":31987464,"newuser":0,"apiurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/api\/","wmbasemanurl":"https:\/\/wc-kx-vip.sjc.kixeye.com\/wmbaseman\/","baseurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/api\/wc\/base\/","cdnurl":"https:\/\/wc-fb-cdn7.kixeye.com\/","gameurl":"https:\/\/wc-fb-cdn7.kixeye.com\/game\/","statsurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/recordstats.php","logurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recorddebugdata\/","probeurl":"https:\/\/debuglog-lb2.sjc.kixeye.com\/debug\/recordloadtime\/","mapurl":"http:\/\/wc-kx-vip.sjc.kixeye.com\/worldmapv2\/","gamenamesh":"wc","integ":"kxp","low_level_min_userid":9378000,"low_level_rollout_userid":19767782,"platform_api_url":"https:\/\/api.kixeye.com\/","app_enable_response_checksum":1,"app_enable_encrypt_body":1,"locale":"en_US","splashloader":0,"siu":"https:\/\/wc-kx-vip.sjc.kixeye.com\/","worldmap_servers":"%5B%5B%22wc-fb-gsvip1.sjc.kixeye.com%22%2C2%2C%2280%2C8080%2C8000%2C50000%2C53%2C443%22%5D%2C%5B%22wc-fb-gsvip2.sjc.kixeye.com%22%2C3%2C%2280%22%5D%5D","logsessionid":"319874641509425432","user_level":35,"tutorialstage":"1000","abtests":"{\"NUB\":null,\"LogLoadPerformance\":\"1\",\"NCP\":\"1\",\"NetPromoter\":\"4\",\"OperationAttackSplit\":\"E\",\"OperationDefenseSplit\":\"E\",\"TimeAndGoldToRepairSplit\":\"-35\"}","visitBtn":"Visit","homeBtn":"Home","inviteBtn":"Invite a friend"},
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
				'logsessionid'              :'319874641509425432',
				'log_h'                     :'',
				'log_hn'                    :'',
				'canvas_init_time'          :canvasInitTime,
				'canvas_load_time'          :loadDiff,
				'sourcestr'                 :'',
				'installts'                 :'1409904433',
				'fb_access_token'           :'',
				'adid'                      : '-1',
				'userid'                    :'31987464',
				'userlevel'                 :'35',
				'kx_biapp_url'              :'https://bi-logging.sjc.kixeye.com/kx/www/sr.php',
                'short_invite_flow'         :'0',
				'ipaddr'                    : '36.79.124.193',
                'fanpageurl'                :'http://www.facebook.com/warcommander',
                'local_currency'            :1,
				'fromstr'                   :'',
				'timeplayed'                :595411,
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
		    <script type="text/javascript" src="https://kxl-cdn-static.kixeye.com/kxpprod/script/kxp-client.min.v203.js"></script>
	
	<script type='text/javascript'>
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
	
		
		
		
		<div style="margin: 5px 0 8px; text-align: center; color:#FFFFFF;" id="above-game-message">
							<font size="3"><b> <a href="https://www.kixeye.com/forum/discussion/715159" target="KIXEYE">Nightmare: Resurrection</a> has begun! Watch the <a href="https://www.youtube.com/watch?v=_lpT4w7eAX4&index=135&list=PL36F9D0C0C33F3A9B" target="KIXEYE">Event Video</a>!</font>					</div>
		
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

				
		<script type="text/javascript" src="/assets/script/message-sauce.v199.js?t=1509425432"></script>

		
		
		<div id="allianceNotifications" style="display:none;"></div>
		
		<div id="topnavbar_back" style="background: url(https://wc-fb-cdn7.kixeye.com/images/navbar2/background_tile.png) bottom center repeat-x;">
			<div id="topnavbar_test" style="min-width: 740px; margin: auto; overflow: hidden; background: url(https://wc-fb-cdn7.kixeye.com/images/navbar2/background_metal.png) bottom center no-repeat; height: 37px;">
                <div style='width: 690px; margin: auto; padding-top:6px; padding-left:70px;'>

                    <img style='float: left; display: inline; ' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_cap_left.png' border='0'/>
                                                            <a style='float: left; display: inline; ' href="#" onclick="cc.showGiftsDialog('gift_select');return false;"><img id="topnav_gift_button" class='topnavmenuassets' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_gifts_reg.png' border='0'/></a>
                    <a style='float: left; display: inline; ' href="#" onclick="cc.showAttackLog();return false;"><img class='topnavmenuassets' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_attacklog_reg.png' border='0'/></a>
                    <a style='float: left; display: inline; ' href="#" onclick="cc.showLeaderboard();return false;"><img class='topnavmenuassets' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_leaderboard_reg.png' border='0'/></a>
                    <a style='float: left; display: inline; ' href="https://www.kixeye.com/forum/discussion/610994" target="_new"><img class='topnavmenuassets' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_fieldmanual_reg.png' border='0'/></a>
                    <a style='float: left; display: inline; ' href="http://play.kixeye.com/forum/categories/war-commander" target="_blank"><img class='topnavmenuassets' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_discuss_reg.png' border='0'/></a>

                    <img style='float: left; display: inline; ' src='https://wc-fb-cdn7.kixeye.com/images/navbar2/button_cap_right.png' border='0'/>
                    <a style='float: left; display: inline;'href='http://www.kixeye.com/' target='_new'><img src='https://wc-fb-cdn7.kixeye.com/images/navbar2/kixeye_logo.png' border='0'/></a>

                </div>
			</div>
		</div>

		<div id="content">

			<div id="game"></div>

</div>



<script type="text/javaScript">
	window.addEvent('load',function(){
		cc.options.loadready = true;
	}); 

	window.addEvent('ccfready',function(){
		if(!cc.checkFlashVersion(11)) $('game').set('html','<h2 style="font-size: 14pt;text-align:center;margin:30px;font-family:Tahoma;">War Commander requires Flash Player 11.2 or greater.<br /><a href="http://get.adobe.com/flashplayer/" target="_blank">Click here to download the latest flash player</a></h2>');
		else
		{
			cc.loadGame($('game'),{'gameurl':'https://wc-fb-cdn7.kixeye.com/game/','loaderversion':27502,'gameversion':7,'softversion':27502,'game_width':'100%','game_height':'750'});
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
						   ID: 31987464					</b></div>
					
					<div class="kxp-footer">
						<ul>
							<li><a href="http://www.kixeye.com/help/tos" target="_blank">Terms</a></li>
							<li class="last"><a href="http://www.kixeye.com/help/privacypolicy" target="_blank">Privacy Policy</a></li>
							<li class="last">&copy; 2017 KIXEYE Inc. All rights reserved.</li>
						</ul>
					</div>
					
					<br style="clear:both;">
				</div>
			</div>
			
		
		
	<script type="text/javascript">        
        window.addEvent('domready',function() {
			cc.startSessionPolling();

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

    <script language="JavaScript" src="https://mpsnare.iesnare.com/snare.js"></script>

			<div id="div_b" style="display:none;padding:10px;position:absolute;top: 50%;left: 50%; margin-top: -312px; margin-left: -351px; z-index: 999999;"></div>
        
    

	<link rel="stylesheet" href="/assets/style/appboy.min.css" />
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
			appboy.initialize("f3ccf438-98be-4588-b19b-053ec75f3a71", { enableLogging: 0 } );
			appboy.display.automaticallyShowNewInAppMessages();
			appboy.changeUser("31987464");
			appboy.openSession();
			if (appboy.isPushSupported()) {
				appboy.registerAppboyPushMessages();
			}
			appboy.requestInAppMessageRefresh();
		});
	</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ac9b709c97","applicationID":"1747218","transactionName":"NQdQNkIAXxEFUUZdDgxNcRdDFV4PSxg=","queueTime":0,"applicationTime":351,"atts":"GUBTQAoaTB8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
