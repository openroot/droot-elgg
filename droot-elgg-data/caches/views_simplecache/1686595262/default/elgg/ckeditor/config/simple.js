define("elgg/ckeditor/config/simple",function(require){require('elgg/init');var elgg=require('elgg');var $=require('jquery');return elgg.trigger_hook('config','ckeditor',{'editor':'simple'},{toolbar:[['Bold','Italic','Underline','Strike','RemoveFormat']],removeButtons:'Subscript,Superscript',allowedContent:true,entities:false,baseHref:elgg.get_site_url(),removePlugins:'elementspath',extraPlugins:'blockimagepaste',defaultLanguage:'en',language:elgg.get_language(),skin:'moono-lisa',contentsCss:elgg.get_simplecache_url('elgg/wysiwyg.css'),disableNativeSpellChecker:false,disableNativeTableHandles:false,removeDialogTabs:'image:advanced;image:Link;link:advanced;link:target',customConfig:false,stylesSet:false,});});