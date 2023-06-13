define("elgg/Plugin",function(require){function Plugin(spec){spec=spec||{};this._init=function(){if(spec.init){spec.init();}};}
return Plugin;});