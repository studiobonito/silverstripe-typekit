/*global window */
(function (window) {
    'use strict';

    window.tinymce.create('tinymce.plugins.TypeKitPlugin', {
        init: function (ed, url) {
            ed.onPreInit.add(function (ed) {

                var doc = ed.getDoc(),
                    js = "(function(d) {\nvar config = {\nkitId: '$TypeKitID',\nscriptTimeout: 3000\n},\nh=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,'')+' wf-inactive';},config.scriptTimeout),tk=d.createElement('script'),f=false,s=d.getElementsByTagName('script')[0],a;h.className+=' wf-loading';tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!='complete'&&a!='loaded')return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)\n})(document);\n",
                    script = doc.createElement("script");

                script.type = "text/javascript";
                script.appendChild(doc.createTextNode(js));

                doc.getElementsByTagName('head')[0].appendChild(script);
            });
        },

        getInfo: function () {
            return {
                longname: 'TypeKit Module',
                author: 'Studio Bonito Ltd',
                authorurl: 'http://www.studiobonito.co.uk',
                infourl: 'http://www.studiobonito.co.uk',
                version: '1.0.0'
            };
        }
    });

    // Register plugins
    window.tinymce.PluginManager.add('typekit', window.tinymce.plugins.TypeKitPlugin);
}(window));