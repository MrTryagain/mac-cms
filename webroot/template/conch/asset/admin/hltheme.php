<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
