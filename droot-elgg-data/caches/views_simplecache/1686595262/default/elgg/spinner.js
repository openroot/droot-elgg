define("elgg/spinner",function(require){var $=require('jquery');var active=false;var SHOW_DELAY=20;$('body').append('<div class="elgg-spinner"><div class="elgg-ajax-loader"></div><div class="elgg-spinner-text elgg-subtext"></div></div>');var spinner={start:function(text){active=true;spinner.clearText();setTimeout(function(){if(active){$('body').addClass('elgg-spinner-active');$(spinner).triggerHandler('_testing_show');}},SHOW_DELAY);if(typeof text==='string'){spinner.setText(text);}else{spinner.setText('');}},stop:function(){active=false;$('body').removeClass('elgg-spinner-active');},setText:function(text){$('.elgg-spinner .elgg-spinner-text').text(text);},clearText:function(){$('.elgg-spinner .elgg-spinner-text').html('');}};return spinner;});