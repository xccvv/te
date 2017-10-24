<form target="canvas_iframe" method="POST" id="canvas_form" action="https://wc-kx-vip.sjc.kixeye.com/canvas?kixigned_request=S92uE2PAAF19BpyToI3fC0Fm-rOh7Nln_RVz06Lz4Ac=.eyJreGlkIjoiZjZlMDc1ZmZkZTA2NDM4OTk1NGFhYmJhIiwiYSI6IjIxNjg2MjQ2MTY1NzM3NSIsImciOiJ3YXJjb21tYW5kZXIiLCJ1c2VybmFtZSI6InBhcmFtZXRlcl81NTUiLCJlbWFpbCI6In41NTVfcGFyYW1ldGVyQGFwaS5raXhleWUuY29tIiwiZXhwaXJlQXQiOjE1MDg4NjE5OTksInN0YXR1cyI6ImFjdGl2ZSIsInVzZXJJcCI6IjE5Mi4xNjIuMjQyLjE2OSJ9&amp;kxlToken=a99ed12bc595de7ce4ba01179ee8c680dc901307af4e2cafd86429d144341a23&amp;kx_locale=en_US">
    <iframe name="canvas_iframe" id="canvas_iframe"></iframe>
    <script type="text/javascript">
        String.implement({parseQueryString:function(e,f){if(e==null)e=true;if(f==null)f=true;var g=this.split(/[&;]/),object={};if(!g.length)return object;g.each(function(c){var d=c.indexOf('=')+1,value=d?c.substr(d):'',keys=d?c.substr(0,d-1).match(/([^\]\[]+|(\B)(?=\]))/g):[c],obj=object;if(!keys)return;if(f)value=decodeURIComponent(value);keys.each(function(a,i){if(e)a=decodeURIComponent(a);var b=obj[a];if(i<keys.length-1)obj=obj[a]=b||{};else if(typeOf(b)=='array')b.push(value);else obj[a]=b!=null?[b,value]:value})});return object},cleanQueryString:function(c){return this.split('&').filter(function(a){var b=a.indexOf('='),key=b<0?'':a.substr(0,b),value=a.substr(b+1);return c?c.call(null,key,value):(value||value===0)}).join('&')}});

        var relayError = function(){
            try
            {
                if(window.console && console.log)
                {
                    console.log('ERROR: KXP-Relay iframe not accessible');
                }
            }
            catch(e){}
        };

        var iframe;
        var socket = new easyXDM.Socket({
            onReady: function(){

                var url = easyXDM.query.url;
//                var parts = url.split('?');
//                var url = parts[0];
//                var data = parts[1].parseQueryString();

                var form = document.id('canvas_form');
                form.action = url;

                var urlElement = new Element('input');
                urlElement.set('name', 'url');
                urlElement.set('type', 'hidden');
                urlElement.set('value', url);

//                Object.each(data, function (v, k) {
//                    var el = new Element('input');
//                    el.set('name', k);
//                    el.set('type', 'hidden');
//                    el.set('value', v);
//                    form.grab(el);
//                });

                form.submit();
            },
            onMessage: function(message, origin){

                var iFrameChecker = setInterval(function () {

                    var iframe = document.getElementById('canvas_iframe');
                    if (iframe != null) {

                        clearInterval(iFrameChecker);
                        iFrameChecker = null;

                        var eeChecker = setInterval(function() {
                            var cw = iframe.contentWindow;

                            if (cw.KXP !== undefined &&
                                cw.KXP.ready &&
                                cw.KXP.xframeMessager !== undefined &&
                                cw.KXP.xframeMessager.ready &&
                                cw.KXP.xframeMessager.ee !== undefined) {

                                message = JSON.decode(message);

                                clearInterval(eeChecker);
                                eeChecker = null;
                                
                                try {
                                    cw.KXP.xframeMessager.ee.emit(message[0],[null,message[1]]);
                                } 
                                catch(e) {
                                    relayError();
                                }
                                
                            }
                        }, 500);            
                    }
                }, 500);
            }
        });
    </script>

    <style type="text/css">
        html, body {
            overflow : hidden;
            margin   : 0px;
            padding  : 0px;
            width    : 100%;
            height   : 100%;
        }

        iframe {
            width  : 100%;
            height : 100%;
            border : 0px;
        }
    </style>




</form>
