/**
 *
 * Simulates an XMLHttpRequest object's methods and properties as returned
 * form the flash polyfill plugin. Used in submitting binary data in browsers that do on url=https://github.com/GistIcon/te/edit/master/postmessageRelay_data/bootstrap/cache/coc.js
 * not support doing so from JavaScript.
 * NOTE: By default this will look for the flash object in the ext directory. When packaging and deploying the app, copy the <tt>ext/plugins</tt> directory and its contents to your root directory. For custom deployments where just the <tt>FlashPlugin.swf</tt> file gets copied (e.g. to <tt>/resources/FlashPlugin.swf</tt>), make sure to notify the framework of the location of the plugin before making the first attempt to post binary data, e.g. in the <tt>launch</tt> method of your app do:
 * <pre><code>
Ext.flashPluginPath="/resources/FlashPlugin.swf";
 </code></pre>
 *
 * @private
 */
 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 @@  function MyClass() {
    this.path = "/my-swf.swf" // The SWF path
    this.id = "my-swf"        // The SWF ID
};

MyClass.prototype = {

    // Embeds and binds the SWF
    setup: function () {
        // Embed the SWF 
        swfobject.embedSWF(this.path, this.id, '100%', '100%', '10.0.0', '/playerProductInstall.swf', {}, {
            quality: 'high',
            wmode: 'transparent',
            allowScriptAccess: 'sameDomain',
            allowFullScreen: 'true'
         }, {
           name: this.id
         });  

        // Bind the current object to the SWF for callbacks.
        JFlashBridge.bind(this.id, this);
    },

    // Returns the SWF instance
    swf: function () {
        return JFlashBridge.getSWF(this.id);
    },

    // Calls a Flash method
    someMethod: function (data) {
        // Note: SWF must be ready
        return this.swf().someMethod(data);
    },

    // Receives a callback from Flash
    onCallback: function(data) {
        console.log("onCallback: ", data);
    }
}                           @@
 @@                             @@
 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
