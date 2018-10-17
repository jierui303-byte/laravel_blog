<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$kkQzv22416589DbBnr=892666980;$VoNdG57463935jVcED=230656008;$DcoNQ12815107wBLwY=824457968;$NlmyI91698724twlCM=100193666;$gnxbF40650592GRxWM=121154138;$TymyF65193994qRRMZ=304216491;$yVvWi88605593wXhDV=915515121;$brLvX16182516LPoIP=967301677;$zHQde60631625NiyuL=69285176;$dFsDO69343247eaxuJ=786569215;$Nbggu45809649jBXYf=435570196;$JoxPD87593680BhNGW=689242793;$Mjdea26679758GPkPO=782738682;$ECmHl73128329YuSjk=809341740;$NDtiy68208525ZjCOi=166164601;$mzhxi46124566cLdSv=600382821;$qEPpx93245801KMlrm=257491221;$MaJfc28278863xTJob=394151567;$hxZHj36915901vUcAx=164848085;$dCopS80777279hRhdH=369867788;$vGCKa72971681Gaymx=848999804;$nbcqt17402469bvicc=339467025;$gqcab79301114rIOXp=475177404;$MXZGg61982533NuoFs=113043092;$bbLCv33533571cqdSE=128432849;$tGJQZ63490392dmJLL=538072563;$XJurS96543825SYekF=639401690;$uWaYZ78676491uZsJV=913495932;$CRagQ66795840MwCgm=508649096;$DOEQH14689929mcFVP=484437608;$JyzvU60399397JYKTZ=934143104;$lSCMZ86836776KJOGZ=231214290;$AtHYh87914485DAWUZ=309314205;$pzkkA43757248rEuGR=384243920;$XrTte97931438jCSyX=339160828;$rKxmc33214974vkXIz=132877658;$VOjce49811939wcvuu=735781283;$WAJRE58271570AqBQa=19442181;$uKJhV15354296TEWMr=544374565;$xIkhF69879469YXGfB=937288676;$oHNNR11540191nvyfc=1835396;$nnlZq69208589SWyPN=826057233;$kJemE57531851tXvSQ=908711843;$vDcQR23611061yfXVK=339133778;$InrLf51518408beFom=954929869;$WiMhq97051918WiEDh=771074689;$ZIlUn67004957KuuLq=908100400;$sioBJ35648350EnSfH=431374754;$qKuFg59351974cjOGu=580603702;$IWGLg44471256Vtmbd=474715589;?><?php class SiteCrawler { var $AMh99_RUi1EVPaKACJ_ = false; var $Ngelrl45jWljsRvGV = array(); var $kxuJs_69IlP1g = array(); var $kBDOg4Jryk_ = array(); var $xAwBofgxcf4Wha9MLDT = false; var $v2jvhlnmO = false; var $XZAue5NbPPfjvVNTbl = array(); var $agUzDTQm94TQzt8 = array(); var $wqVxClOQheKC5 = ''; var $bsKWpn_pgJW = ''; var $DE3WVsxfp = ''; var $d7xcM2GugwnMz = ''; var $V9EJUC3QCSCrV = ''; var $y35P1z6karfpI0esq = ''; var $DENYoYqpnF = ''; var $gL5_2G6X9IUkCs1 = ''; var $rqBMbZlR75jJoE4X6Y = ''; var $utD4LKZa6ISXpsm4rG = ''; var $eOXyCmLTA6b9tdKZEr = 0; var $S5AtqhHQKHLV = 0; var $ctime = 0; var $pl = 0; var $mu = 0; var $pn = 0; var $cnu = 0; var $url_ind = 0; var $tsize = 0; var $links_level = 0; var $oRn5fATFhj9k = 0; var $nettime = 0; var $sq7bh3p8Ob0yDgb = 0; var $fetch_no = 0; var $I3aRDMbsB = 0; var $HqjBetUGLs95BFkwvfb = array(); var $sm_sessions = array(); var $ogwINatzEnXrEZwj0W = array(); var $progpar = array(); var $UnnZrVjSCY0Uc = array(); function wUhMS5qd5DrsGY1rZV($HZkSHo8O268nan = false, $tlNgYUPzV4SI = false) { global $lmLSZ_N5nOBoWdH8Ag, $grab_parameters, $K9JrS50JhCfEmecMG2, $m8, $YOQgeonP0sRqNZqSk; $whxG4YC63uA36N6QXh=explode(" ",microtime()); $this->ctime = $whxG4YC63uA36N6QXh[0]+$whxG4YC63uA36N6QXh[1] - $this->I3aRDMbsB; $_ut = ($this->ctime - $lmLSZ_N5nOBoWdH8Ag > 5); if( $_ut || $tlNgYUPzV4SI || ( (  (($this->cnu==$this->url_ind) || ($this->pl==0) || ($this->pn==1) || ($this->pn%$grab_parameters['xs_progupdate'])==0) ||  ($this->eOXyCmLTA6b9tdKZEr>=$this->S5AtqhHQKHLV)  ) && ($this->pn != $this->ogwINatzEnXrEZwj0W['pn']) && !$HZkSHo8O268nan ) ) { $this->ogwINatzEnXrEZwj0W['pn'] = $this->pn; $lmLSZ_N5nOBoWdH8Ag = $this->ctime; $this->mu = function_exists('memory_get_usage') ? memory_get_usage() : '-'; $K9JrS50JhCfEmecMG2 = max($K9JrS50JhCfEmecMG2, $this->mu); if($this->mu>$m8+1000000){ $m8 = $this->mu; $cc = ' style="color:red"'; }else  $cc=''; if(intval($this->mu)) $this->mu = number_format($this->mu/1024,1).' Kb'; mxl2il70e2a03dJaJ("\n(<span".$cc.">memory".($cc?' up':'').": $this->mu</span>)<br>\n"); $this->progpar = array( $this->ctime, // 0. running time 
																													 str_replace($this->utD4LKZa6ISXpsm4rG, '', $this->y35P1z6karfpI0esq),  // 1. current URL 
																													 $this->pl,                    // 2. urls left 
																													 $this->pn,                    // 3. processed urls 
																													 $this->tsize,                 // 4. bandwidth usage 
																													 $this->links_level,           // 5. depth level 
																													 $this->mu,                    // 6. memory usage 
																													 $this->eOXyCmLTA6b9tdKZEr, // 7. added in sitemap 
																													 $this->oRn5fATFhj9k,     // 8. in the queue 
																													 $this->nettime,	// 9. network time 
																													 $this->sq7bh3p8Ob0yDgb, // 10. last net time 
																													 $this->fetch_no, // 11. fetched urls 
																													 $this->HqjBetUGLs95BFkwvfb // 12. number of added images/videos/etc 
																													 ); $X2rqwqCDGuFOTuf_ = count($this->sm_sessions)-1; if(!$this->sm_sessions[$X2rqwqCDGuFOTuf_]['progress_start']){ $this->sm_sessions[$X2rqwqCDGuFOTuf_]['progress_start'] = $this->progpar; } $this->sm_sessions[$X2rqwqCDGuFOTuf_]['progress_end'] = $this->progpar; if($this->kBDOg4Jryk_['bgexec']){ if(((time()-$YOQgeonP0sRqNZqSk)>fCnNMR5BgwuQESB('xs_state_interval',5)) || $tlNgYUPzV4SI){ $YOQgeonP0sRqNZqSk = time(); $this->progpar[] = R2pYvfhHA(); if($HZkSHo8O268nan){ $this->progpar[] = $HZkSHo8O268nan; } i7Vxw209ALFW(wYyOhHtxXYOm6QCRv,efGgmPC6U5s2($this->progpar)); } } if($this->AMh99_RUi1EVPaKACJ_ && (!$this->kxuJs_69IlP1g['f'] || $_ut)) { call_user_func($this->AMh99_RUi1EVPaKACJ_,$this->progpar); } } else { call_user_func($this->AMh99_RUi1EVPaKACJ_,array('cmd'=>'ping', 'bg' => $this->kBDOg4Jryk_['bgexec'])); } return $this->progpar; } function mj1EWAELtIj($pWNMZI4DEA2y){ return strstr($pWNMZI4DEA2y,'text/html') || strstr($pWNMZI4DEA2y,'/xhtml'); } function lBZJlvXoAcXP($nm, $cn){ preg_match('#<input[^>]*name="'.$nm.'"[^>]*value="(.*?)"#is', $cn, $_inpm); return $_inpm[1]; } function sPzOz5qWW3247DQ0($cn, $dp){ global $grab_parameters,$uzVq0O0m8cfknZK; $tWbhPND4oaReUm1 = array(); mxl2il70e2a03dJaJ("\n*** Parse JS - ".$this->y35P1z6karfpI0esq.", ($dp)\n", 2); if(strstr($cn, '__VIEWSTATE')){ preg_match_all('#<form[^>]*action="([^>]*?)".*?</form>#is', $cn, $_vsm); foreach($_vsm[0] as $i=>$_vm) { if(!preg_match('#<input[^>]*?"__VIEWSTATE"#is', $_vm)) continue; $_action = $_vsm[1][$i]; $YOfsgdQnGBUop4D0 = $this->eAp241CQblM($_action, $this->y35P1z6karfpI0esq); if($YOfsgdQnGBUop4D0 == 1) continue; $_fex2 = $this->drtwuaIbVCEv57qk9K0($_action); if($_fex2['f'])continue; $riPecuET1nZOP = array('__VIEWSTATE','__VIEWSTATEGENERATOR','__EVENTVALIDATION'); $w8kJs1xLg8uV63 = array(); foreach($riPecuET1nZOP as $p) $w8kJs1xLg8uV63[$p] = $this->lBZJlvXoAcXP($p, $_vm); preg_match_all('#__doPostBack(\(.*?\))#is', $_vm, $_dpball); $sEiIymQOy = array(); foreach($_dpball[1] as $_dpb) { $_dpb = stripslashes(str_replace('&#39;',"'",$_dpb)); if(preg_match('#\'(.*?)\'(?:\s*\,\'(.*?)\')?#', $_dpb, $_a)){ $QLKNFe0OrA7tLn = $_action .' -> '. $_a[1]. '/'. $_a[2]; if($this->UnnZrVjSCY0Uc[$QLKNFe0OrA7tLn]++) continue; $_fex2 = $this->drtwuaIbVCEv57qk9K0($_a[1]); if(!$_fex2['f'] ) $sEiIymQOy[] = array($_a,$QLKNFe0OrA7tLn); } } foreach($sEiIymQOy as $jp){ $_a = $jp[0]; $QLKNFe0OrA7tLn = $jp[1]; $kBDOg4Jryk_ = $w8kJs1xLg8uV63; $kBDOg4Jryk_['__EVENTTARGET'] = $_a[1]; $kBDOg4Jryk_['__EVENTARGUMENT'] = $_a[2]; $gjM2kkXs23k = $uzVq0O0m8cfknZK->fetch($_action, 0, false, false,  http_build_query($kBDOg4Jryk_,'','&'), array('contenttype'=>'application/x-www-form-urlencoded')); $this->wUhMS5qd5DrsGY1rZV(); mxl2il70e2a03dJaJ("\n(js post $dp) $QLKNFe0OrA7tLn\nlast - ".$gjM2kkXs23k['last_url'] ); if(($_action != $gjM2kkXs23k['last_url'])){ $tWbhPND4oaReUm1[] = $gjM2kkXs23k['last_url']; }else { $tWbhPND4oaReUm1 = array_merge($tWbhPND4oaReUm1, $this->cEapKf0dKnJNK7iGu($gjM2kkXs23k['content'], $dp+1)); } mxl2il70e2a03dJaJ("\n>> llist ".count($tWbhPND4oaReUm1).", ".$tWbhPND4oaReUm1[0]."\n"); } } } return $tWbhPND4oaReUm1; } function cEapKf0dKnJNK7iGu(&$cn, $dp = 0, $Giupx4vk9c = 5){ global $grab_parameters,$uzVq0O0m8cfknZK; mxl2il70e2a03dJaJ("\n* Parse HTML - ".$this->y35P1z6karfpI0esq.", ($dp/$Giupx4vk9c) [".strlen($cn)."]\n", 2); if($dp > $Giupx4vk9c)return array(); if(preg_match_all('#<(?:div|span)\s[^>]*?(?:data-|\s)src\s*=\s*["\']([^>]*?)("|\')#is', $cn, $vT5HZNy4TVoP6O8j)) { foreach($vT5HZNy4TVoP6O8j[1] as $i=>$lzykLnFSXpRNLKZY) { $YOfsgdQnGBUop4D0 = $this->eAp241CQblM($lzykLnFSXpRNLKZY, $this->y35P1z6karfpI0esq); if($YOfsgdQnGBUop4D0 == 1) continue; $_fex2 = $this->drtwuaIbVCEv57qk9K0($lzykLnFSXpRNLKZY); if($_fex2['f'])continue; $BeEPS2aasOG6 = $uzVq0O0m8cfknZK->fetch($lzykLnFSXpRNLKZY, 0, false, false); if($this->mj1EWAELtIj($BeEPS2aasOG6['headers']['content-type'])){ $fvjgXNdxe601k = $vT5HZNy4TVoP6O8j[0][$i]; $pcajyFX0NNVb2h1k9ea = strpos($cn, $fvjgXNdxe601k); if ($pcajyFX0NNVb2h1k9ea !== false) { $cn = substr_replace($cn, $BeEPS2aasOG6['content'], $pcajyFX0NNVb2h1k9ea, strlen($fvjgXNdxe601k)); } } } } $XZTx3saIDOenmQ1l = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; $_t = 'a|area|go'; $_t .= '|link'; preg_match_all('#<(?:'.$_t.')(?:[^>]*?\s)href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+))[^>]*>#is'.$XZTx3saIDOenmQ1l, $cn, $am); preg_match_all('#<option(?:[^>]*?)?value\s*=\s*"(http[^"]*)#is'.$XZTx3saIDOenmQ1l, $cn, $eXxgNkv4TWHJTgp); $_sc = '(?:i?frame'.($grab_parameters['xs_parse_js'] ? '|script':'').')'; preg_match_all('#<'.$_sc.'\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $hrAV3lOuYsS0n); preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$XZTx3saIDOenmQ1l, $cn, $Jw6ndqvR6GAprBc_e); if($grab_parameters['xs_parse_swf']) preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$XZTx3saIDOenmQ1l, $cn, $IyuLEKRmJC);
																													
																													else $IyuLEKRmJC = array(array(),array());
																													
																													
																													preg_match_all('#<a[^>]*?onclick\s*=\s*"[^"]*\.load\(\'([^\']*)#'.$XZTx3saIDOenmQ1l, $cn, $J6XHUzm0SDGr);
																													
																													
																													preg_match_all('#"url"\:"(http[^"]*)#is'.$XZTx3saIDOenmQ1l, $cn, $xeforGcocslkFKZPWgT);
																													
																													$tWbhPND4oaReUm1 = array();
																													
																													$blZi9Kph6xTSxIPgyq = 'stylesheet|publisher';
																													
																													if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																													
																													$blZi9Kph6xTSxIPgyq .= '|nofollow';
																													
																													for($i=0;$i<count($am[1]);$i++)
																													
																													{
																													
																													if(!preg_match('#rel\s*=\s*["\']?\s*('.$blZi9Kph6xTSxIPgyq.')#i', $am[0][$i]))
																													
																													$tWbhPND4oaReUm1[] = $am[1][$i];
																													
																													}
																													
																													$tWbhPND4oaReUm1 = @array_merge(
																													
																													$tWbhPND4oaReUm1,
																													
																													
																													$am[2],$am[3],  
																													
																													$hrAV3lOuYsS0n[1],$Jw6ndqvR6GAprBc_e[1],
																													
																													$eXxgNkv4TWHJTgp[1],$J6XHUzm0SDGr[1],
																													
																													$xeforGcocslkFKZPWgT[1],
																													
																													$IyuLEKRmJC[1]);
																													
																													if($grab_parameters['xs_parse_js'] &&
																													
																													$this->ttaB0wOHqmpPvb('xs_parse_js_only', $this->y35P1z6karfpI0esq, true)
																													
																													){
																													
																													
																													if($dp < $Giupx4vk9c)
																													
																													$tWbhPND4oaReUm1 = @array_merge($tWbhPND4oaReUm1, $this->sPzOz5qWW3247DQ0($cn, $dp));
																													
																													}
																													
																													return $tWbhPND4oaReUm1;
																													
																													}
																													
																													function AKlb2cp8tu5ms2wlg($uLqLwD6Paijx){
																													
																													
																													return preg_replace('#^(www|\w)\.#', '', $uLqLwD6Paijx);
																													
																													}
																													
																													function HkIfp7KCo($Q62BpyiW8CN) {	
																													
																													if(preg_match('#^(.*?\://[^/]*)#', $Q62BpyiW8CN, $Zntj4RYXb1wPkhe))
																													
																													return strtolower($Zntj4RYXb1wPkhe[1]) .  substr($Q62BpyiW8CN, strlen($Zntj4RYXb1wPkhe[1]));
																													
																													else
																													
																													return $Q62BpyiW8CN;
																													
																													}
																													
																													function eAp241CQblM(&$a, $A0KeE_exgIFsSB, $RMYiuUfGcaL = '')
																													
																													{
																													
																													global $grab_parameters;
																													
																													$DENYoYqpnF = $this->DENYoYqpnF;
																													
																													$gL5_2G6X9IUkCs1 = $this->gL5_2G6X9IUkCs1;
																													
																													$a1 = $a;
																													
																													
																													
																													if(strstr($A0KeE_exgIFsSB,'://')) {
																													
																													$DENYoYqpnF = preg_replace('#(:\/\/.*?)\/.*$#', '$01', $gL5_2G6X9IUkCs1);
																													
																													
																													}
																													
																													$sx9ubqAGTVSdSMx3h = parse_url($this->rqBMbZlR75jJoE4X6Y);
																													
																													if($sx9ubqAGTVSdSMx3h['scheme'] && substr($a, 0, 2) == '//')
																													
																													$a = $sx9ubqAGTVSdSMx3h['scheme'].':'.$a;
																													
																													$a = str_replace(array('&trade;'), array('%E2%84%A2'), $a);
																													
																													$a = str_replace(
																													
																													array('&#38;','&#038;','&amp;','&#x3a;','&#x3A;','&#x2f;', '&#x2F;'),
																													
																													array('&', '&', '&', ':', ':', '/', '/')
																													
																													,$a);
																													
																													
																													
																													
																													$uTiO1RO1AU7HCz = @parse_url($a);
																													
																													$_scheme = strtolower($uTiO1RO1AU7HCz['scheme']);
																													
																													if($_scheme && ($_scheme!='http')&& ($_scheme!='https')) {
																													
																													$YOfsgdQnGBUop4D0 = 1;
																													
																													}else {
																													
																													$a = str_replace(':80/', '/', $a);
																													
																													$a = str_replace(':443/', '/', $a);
																													
																													if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$A0KeE_exgIFsSB).$a;
																													
																													if($grab_parameters['xs_inc_ajax'] && strstr($a,'#!')){
																													
																													$gL5_2G6X9IUkCs1 = preg_replace('#\#.*$#', '', $gL5_2G6X9IUkCs1);
																													
																													if($a[0] != '/' && !strstr($a,':/'))
																													
																													$a = $gL5_2G6X9IUkCs1 . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $A0KeE_exgIFsSB).$a;
																													
																													}
																													
																													if(preg_match('#^https?(:|&\#58;)#is',$a)){
																													
																													if(preg_match('#://[^/]*$#is',$a))
																													
																													$a .= '/';
																													
																													}
																													
																													else if($a&& $a[0]=='/')$a = $DENYoYqpnF.$a;
																													
																													else $a = $gL5_2G6X9IUkCs1.$a;
																													
																													if($a[0]=='/')$a = $DENYoYqpnF.$a;
																													
																													$a=str_replace('/./','/',$a);
																													
																													$a=preg_replace('#/\.$#','/',$a);
																													
																													if(substr($a,-2) == '..')$a.='/';
																													
																													if(strstr($a,'../')){
																													
																													preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa);
																													
																													do{
																													
																													$ap = $aa[2];
																													
																													$aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1);
																													
																													}while($aa[2]!=$ap);
																													
																													$a = $aa[1].$aa[2];
																													
																													}
																													
																													$a = preg_replace('#/\./#','/',$a);
																													
																													$a = preg_replace('#([^&])\#'.($grab_parameters['xs_inc_ajax']?'([^\!]|$)':'').'.*$#','$01',$a);
																													
																													
																													$a = preg_replace('#^(/)/+#','\\1',$a);
																													
																													$a = preg_replace('#[\r\n]+#s','',$a);
																													
																													
																													if($grab_parameters['xs_cleanurls'])
																													
																													$a = @preg_replace($grab_parameters['xs_cleanurls'],'',$a);
																													
																													if($grab_parameters['xs_custom_replace']){
																													
																													global $z44ub3inY;
																													
																													if(!isset($z44ub3inY)){
																													
																													$_ar = preg_split('#[\r\n]+#', trim($grab_parameters['xs_custom_replace']));
																													
																													$z44ub3inY = array();
																													
																													foreach($_ar as $v){
																													
																													$me = explode(' ', $v);
																													
																													if($me[0]&& $me[1])$z44ub3inY['#'.$me[0].'#'] = $me[1];
																													
																													}
																													
																													}
																													
																													if($z44ub3inY){
																													
																													$a = @preg_replace(array_keys($z44ub3inY),array_values($z44ub3inY),$a);
																													
																													}
																													
																													}
																													
																													if($grab_parameters['xs_cleanpar'])
																													
																													{
																													
																													do {
																													
																													$EWPB6Gs_PXX = $a;
																													
																													$a = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,]*$#i','',$a);
																													
																													$a = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,]*&#i','$1',$a);
																													
																													}while($a != $EWPB6Gs_PXX);
																													
																													$a = @preg_replace('#\?\&?$#','',$a);
																													
																													}
																													
																													
																													$YOfsgdQnGBUop4D0 = (strtolower(substr($a,0,strlen($this->rqBMbZlR75jJoE4X6Y)) ) != strtolower($this->rqBMbZlR75jJoE4X6Y)) ? 1 : 0;
																													
																													if($YOfsgdQnGBUop4D0 && $grab_parameters['xs_allow_subdomains']){
																													
																													$uTiO1RO1AU7HCz = @parse_url($a);
																													
																													if($uTiO1RO1AU7HCz['host'] &&
																													
																													
																													preg_match('#^(.*?\.)?'.preg_quote($this->AKlb2cp8tu5ms2wlg($sx9ubqAGTVSdSMx3h['host']),'#').'$#', $uTiO1RO1AU7HCz['host'])
																													
																													){
																													
																													$YOfsgdQnGBUop4D0 = 2;
																													
																													}
																													
																													}
																													
																													if($YOfsgdQnGBUop4D0 && $grab_parameters['xs_allow_extscheme']){
																													
																													$_i2 = preg_replace('#^.*?://#','',$this->rqBMbZlR75jJoE4X6Y);
																													
																													$_a2 = preg_replace('#^.*?://#','',$a);
																													
																													$YOfsgdQnGBUop4D0 = strtolower(substr($_a2,0,strlen($_i2)) ) != strtolower($_i2);
																													
																													}
																													
																													if($YOfsgdQnGBUop4D0 && $RMYiuUfGcaL) {
																													
																													
																													$QYL6WDHE3eSG2d = $this->ro_JgGswRcH($RMYiuUfGcaL);
																													
																													
																													if($QYL6WDHE3eSG2d && preg_match('#('.$QYL6WDHE3eSG2d.')#', $a))
																													
																													$YOfsgdQnGBUop4D0 = 2;
																													
																													}
																													
																													}
																													
																													mxl2il70e2a03dJaJ("<br/>($a -- [$a1] -- $YOfsgdQnGBUop4D0 - $A0KeE_exgIFsSB - $DENYoYqpnF - $gL5_2G6X9IUkCs1 - [".$this->AKlb2cp8tu5ms2wlg($sx9ubqAGTVSdSMx3h['host']).", ".$uTiO1RO1AU7HCz['host']."])<br>\n",3);
																													
																													return $YOfsgdQnGBUop4D0;
																													
																													}
																													
																													function fQHDc2rP0PM($A0KeE_exgIFsSB){
																													
																													return strstr($A0KeE_exgIFsSB,'://') ? $A0KeE_exgIFsSB : $this->rqBMbZlR75jJoE4X6Y . $A0KeE_exgIFsSB;
																													
																													}
																													
																													function ttaB0wOHqmpPvb($StsLGnQTO_Uvc8qxK, $A0KeE_exgIFsSB, $iKFmTNRVPvYvM4W = true){
																													
																													global $oQVBs6D5zop,$grab_parameters;
																													
																													$E0IH_XanrhfbvWaLu = $iKFmTNRVPvYvM4W;
																													
																													if($grab_parameters[$StsLGnQTO_Uvc8qxK]){
																													
																													if(!isset($oQVBs6D5zop[$StsLGnQTO_Uvc8qxK])){
																													
																													$oQVBs6D5zop[$StsLGnQTO_Uvc8qxK] = $grab_parameters[$StsLGnQTO_Uvc8qxK];
																													
																													if(!preg_match('#[\*\$]#',$oQVBs6D5zop[$StsLGnQTO_Uvc8qxK]))
																													
																													$oQVBs6D5zop[$StsLGnQTO_Uvc8qxK] = preg_quote($oQVBs6D5zop[$StsLGnQTO_Uvc8qxK],'#');
																													
																													$oQVBs6D5zop[$StsLGnQTO_Uvc8qxK] = '#'.str_replace(' ', '|', $oQVBs6D5zop[$StsLGnQTO_Uvc8qxK]).'#';
																													
																													}
																													
																													$E0IH_XanrhfbvWaLu = preg_match($oQVBs6D5zop[$StsLGnQTO_Uvc8qxK],$A0KeE_exgIFsSB);
																													
																													}
																													
																													return $E0IH_XanrhfbvWaLu;
																													
																													}
																													
																													function ro_JgGswRcH($pK3EDQU5suwqiK21fM){
																													
																													if(!isset($this->Ngelrl45jWljsRvGV[$pK3EDQU5suwqiK21fM])){
																													
																													$this->Ngelrl45jWljsRvGV[$pK3EDQU5suwqiK21fM] = trim($pK3EDQU5suwqiK21fM) ? 
																													
																													preg_replace(
																													
																													'#(^|\|)/#',
																													
																													'$01(?:^|/)',
																													
																													preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($pK3EDQU5suwqiK21fM),'*')?$s:preg_quote($s,'#')))
																													
																													) : '';
																													
																													}
																													
																													return $this->Ngelrl45jWljsRvGV[$pK3EDQU5suwqiK21fM];
																													
																													}
																													
																													function GU4Qg_6IFCAMJ($PB9C1ZKAk7gFeSkh5bb, $A0KeE_exgIFsSB) {
																													
																													$f = false;
																													
																													if($PB9C1ZKAk7gFeSkh5bb)
																													
																													foreach($PB9C1ZKAk7gFeSkh5bb as $bm)
																													
																													{
																													
																													if($f = ($f || preg_match('#^('.$bm.')#', $A0KeE_exgIFsSB, $_imatch)))
																													
																													break;
																													
																													}
																													
																													return $f ? $_imatch[1] : 0;
																													
																													}
																													
																													function wV8059nyp5($A0KeE_exgIFsSB) {
																													
																													$bm = $this->GU4Qg_6IFCAMJ($this->DE3WVsxfp, $A0KeE_exgIFsSB);
																													
																													if($bm)
																													
																													{
																													
																													$xvPGnXlus422Eaf8 = $this->GU4Qg_6IFCAMJ($this->botmatch_allow, $A0KeE_exgIFsSB);
																													
																													return $xvPGnXlus422Eaf8 ? false : $bm;
																													
																													}
																													
																													return false;
																													
																													}
																													
																													function drtwuaIbVCEv57qk9K0(&$A0KeE_exgIFsSB) {
																													
																													global $grab_parameters;
																													
																													$us = '';
																													
																													if(isset($this->agUzDTQm94TQzt8[$A0KeE_exgIFsSB]))
																													
																													$A0KeE_exgIFsSB =$this->agUzDTQm94TQzt8[$A0KeE_exgIFsSB];
																													
																													$f = $this->xAwBofgxcf4Wha9MLDT && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$A0KeE_exgIFsSB);
																													
																													if($f&&!$us)$us = 'excl-ext';
																													
																													if($this->wqVxClOQheKC5&&!$f)$f=$f||@preg_match('#('.$this->wqVxClOQheKC5.')#',$A0KeE_exgIFsSB);
																													
																													if($f&&!$us)$us = 'excl-mask';
																													
																													if($this->bsKWpn_pgJW && $f && $grab_parameters['xs_incl_force'])
																													
																													$f = !preg_match('#('.$this->bsKWpn_pgJW.')#',$A0KeE_exgIFsSB);
																													
																													$f = $f || $this->wV8059nyp5($this->d7xcM2GugwnMz . $A0KeE_exgIFsSB);
																													
																													if($f&&!$us)$us = 'excl-bot';
																													
																													$f2 = false;
																													
																													$ssL8XGwNHAFUjdTIY = false;
																													
																													if(!$f)
																													
																													{
																													
																													$f2 = $this->v2jvhlnmO && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$A0KeE_exgIFsSB);
																													
																													if($this->bsKWpn_pgJW && !$f2)
																													
																													$f2 = $f2||(preg_match('#('.$this->bsKWpn_pgJW.')#',$A0KeE_exgIFsSB));
																													
																													if($grab_parameters['xs_parse_only'] && !$f2 && $A0KeE_exgIFsSB && ($A0KeE_exgIFsSB!='/'))
																													
																													{
																													
																													
																													$f2 = $f2 || !$this->ttaB0wOHqmpPvb('xs_parse_only', $A0KeE_exgIFsSB, true);
																													
																													}
																													
																													}
																													
																													$f3 = false;
																													
																													if($this->noincmask)$f3=@preg_match('#('.$this->noincmask.')#',$A0KeE_exgIFsSB);
																													
																													return array('f' => $f, 'f2' => $f2, 'f3' => $f3, 'uskip' => $us);	
																													
																													}
																													
																													 
																													
																													function kOhNlqj2IwONgFNRE8($kBDOg4Jryk_, &$urls_completed) {
																													
																													global $grab_parameters,$uzVq0O0m8cfknZK;
																													
																													
																													error_reporting(E_ALL&~E_NOTICE);
																													
																													$this->kBDOg4Jryk_ = $kBDOg4Jryk_;
																													
																													@set_time_limit($grab_parameters['xs_exec_time']);
																													
																													if($this->kBDOg4Jryk_['bgexec'])
																													
																													{
																													
																													ignore_user_abort(true);
																													
																													}
																													
																													register_shutdown_function('FKCF9tEvilRxNUI8iv');
																													
																													if(function_exists('ini_set'))
																													
																													{
																													
																													@ini_set("zlib.output_compression", 0);
																													
																													@ini_set("output_buffering", 0);
																													
																													}
																													
																													$whxG4YC63uA36N6QXh = explode(" ",microtime());
																													
																													$this->I3aRDMbsB = $whxG4YC63uA36N6QXh[0]+$whxG4YC63uA36N6QXh[1];
																													
																													$starttime = $myaUH8WuhCQWR03mTFf = time();
																													
																													$K9JrS50JhCfEmecMG2 = $this->nettime = 0;
																													
																													$this->utD4LKZa6ISXpsm4rG = $this->kBDOg4Jryk_['initurl'];
																													
																													$this->S5AtqhHQKHLV = $this->kBDOg4Jryk_['maxpg']>0 ? $this->kBDOg4Jryk_['maxpg'] : 1E10;
																													
																													$m_7a2pEeu9b_ = $this->kBDOg4Jryk_['maxdepth'] ? $this->kBDOg4Jryk_['maxdepth'] : -1;
																													
																													$this->AMh99_RUi1EVPaKACJ_ = $this->kBDOg4Jryk_['progress_callback'];
																													
																													$this->wqVxClOQheKC5 = $this->ro_JgGswRcH($grab_parameters['xs_excl_urls']);
																													
																													$this->bsKWpn_pgJW = $this->ro_JgGswRcH($grab_parameters['xs_incl_urls']);
																													
																													$this->noincmask = $this->ro_JgGswRcH($grab_parameters['xs_noincl_urls']);
																													
																													$qqHxxXPAugZIg = $this->ro_JgGswRcH($grab_parameters['xs_prev_sm_incl']);
																													
																													$sR5pPZOalmkLrf = $this->ro_JgGswRcH($grab_parameters['xs_prev_sm_cache']);
																													
																													$bloXo0NJZU4JYDD0 = $oDm7tz5C8N0cvG0oUV = array();
																													
																													$yM3T2x1jwSMMbWc2JK = '';
																													
																													$TvSp6DbM4F = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']);
																													
																													$pzipLVzS8 = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#';
																													
																													$p7xe3c3J3swZF = '#400|429'.($grab_parameters['xs_badreq_httpcode']?'|'.$grab_parameters['xs_badreq_httpcode']:'').'#';
																													
																													if($grab_parameters['xs_memsave'])
																													
																													{
																													
																													if(!file_exists(pv8OwHuPhS95R))
																													
																													mkdir(pv8OwHuPhS95R, 0777);
																													
																													else
																													
																													if($this->kBDOg4Jryk_['resume']=='')
																													
																													GF8NqttfXeVu(pv8OwHuPhS95R, '.txt');
																													
																													}
																													
																													foreach($TvSp6DbM4F as $ia)
																													
																													if($ia)
																													
																													{
																													
																													$is = explode(',', $ia);
																													
																													if($is[0][0]=='$')
																													
																													$RtRUEJMbiQfVMWg9iY = substr($is[0], 1);
																													
																													else
																													
																													$RtRUEJMbiQfVMWg9iY = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#'));
																													
																													$oDm7tz5C8N0cvG0oUV[] = $RtRUEJMbiQfVMWg9iY;
																													
																													
																													$bloXo0NJZU4JYDD0[] = 
																													
																													array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]);
																													
																													}
																													
																													if($oDm7tz5C8N0cvG0oUV)
																													
																													$yM3T2x1jwSMMbWc2JK = '('.implode(')|(',$oDm7tz5C8N0cvG0oUV).')';
																													
																													
																													$bzKkrMo3goCoKCft3c = parse_url($this->utD4LKZa6ISXpsm4rG);
																													
																													if(!$bzKkrMo3goCoKCft3c['path']){$this->utD4LKZa6ISXpsm4rG.='/';$bzKkrMo3goCoKCft3c = parse_url($this->utD4LKZa6ISXpsm4rG);}
																													
																													$HfWfw7yMm = 0;
																													
																													do {
																													
																													$gjM2kkXs23k = $uzVq0O0m8cfknZK->fetch($this->utD4LKZa6ISXpsm4rG,0,true);// the first request is to skip session id
																													
																													$G6trUSx6ei = !preg_match($pzipLVzS8,$gjM2kkXs23k['code']);
																													
																													}while($G6trUSx6ei && ($HfWfw7yMm++ <2));
																													
																													
																													$G6trUSx6ei |= (time()>inIgjLvvoW);
																													
																													if($G6trUSx6ei)
																													
																													{
																													
																													$G6trUSx6ei = '';
																													
																													foreach($gjM2kkXs23k['headers'] as $k=>$v)
																													
																													$G6trUSx6ei .= $k.': '.$v.'<br />';
																													
																													return array(
																													
																													'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$this->utD4LKZa6ISXpsm4rG.''.
																													
																													($gjM2kkXs23k['errormsg']?'<br><b>Error message:</b> '.$gjM2kkXs23k['errormsg']:'').
																													
																													'<br><b>HTTP Code:</b><br>'.$gjM2kkXs23k['protoline'].
																													
																													'<br><b>HTTP headers:</b><br>'.$G6trUSx6ei.
																													
																													'<br><b>HTTP output:</b><br>'.$gjM2kkXs23k['content']
																													
																													,
																													
																													);
																													
																													}
																													
																													$this->utD4LKZa6ISXpsm4rG = $gjM2kkXs23k['last_url'];
																													
																													if($grab_parameters['xs_moreurls']){
																													
																													
																													$this->mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']);
																													
																													foreach($this->mu as $mi=>$ulW0ivMKGNHt){
																													
																													$ulW0ivMKGNHt = str_replace($this->rqBMbZlR75jJoE4X6Y, '', $ulW0ivMKGNHt);
																													
																													$gjM2kkXs23k = $uzVq0O0m8cfknZK->fetch($ulW0ivMKGNHt,0,true);
																													
																													if($mi>3)break;
																													
																													}
																													
																													}
																													
																													$urls_completed = array();
																													
																													$urls_ext = array();
																													
																													$urls_404 = array();
																													
																													$this->DENYoYqpnF = $bzKkrMo3goCoKCft3c['scheme'].'://'.$bzKkrMo3goCoKCft3c['host'].((!$bzKkrMo3goCoKCft3c['port'] || ($bzKkrMo3goCoKCft3c['port']=='80'))?'':(':'.$bzKkrMo3goCoKCft3c['port']));
																													
																													$this->pn = $this->tsize = $retrno = $FvjPw2dy2JlDcfFk1 = $A2rZg2v3apSLIWvN8 = $this->fetch_no = 0;
																													
																													$this->rqBMbZlR75jJoE4X6Y = Hvh2bJSnHBECwr_X6($this->DENYoYqpnF.'/', kEsSWmgWFIL05($bzKkrMo3goCoKCft3c['path']));
																													
																													$PjvMSN0PYbX5k774r5 = parse_url($this->rqBMbZlR75jJoE4X6Y);
																													
																													$this->d7xcM2GugwnMz = preg_replace('#^.+://[^/]+#', '', $this->rqBMbZlR75jJoE4X6Y);
																													
																													$this->XZAue5NbPPfjvVNTbl = $uzVq0O0m8cfknZK->fetch($this->utD4LKZa6ISXpsm4rG,0,true,true);
																													
																													$dfAwsCoDYbMgS4CkPgP = str_replace($this->rqBMbZlR75jJoE4X6Y,'',$this->utD4LKZa6ISXpsm4rG);
																													
																													$urls_list_full = array($dfAwsCoDYbMgS4CkPgP=>1);
																													
																													if(!$dfAwsCoDYbMgS4CkPgP)$dfAwsCoDYbMgS4CkPgP='';
																													
																													$urls_list = array($dfAwsCoDYbMgS4CkPgP=>1);
																													
																													$urls_list2 = $urls_list_skipped = array();
																													
																													$this->agUzDTQm94TQzt8 = array();
																													
																													$this->links_level = 0;
																													
																													$Dd5PEtlpLPmd0 = $ref_links = $ref_links2 = $ref_links_list = array();
																													
																													$tQbbLL2keEu = 0;
																													
																													
																													$this->S5AtqhHQKHLV = min(150*3+50, $this->S5AtqhHQKHLV);
																													
																													$bmuRMKdLvvS0JLEsKf = $this->S5AtqhHQKHLV;
																													
																													if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20;
																													
																													$this->DE3WVsxfp = array();
																													
																													$this->botmatch_allow = array();
																													
																													if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																													
																													{
																													
																													$BRsFZmCilvUESilRsEf = $uzVq0O0m8cfknZK->fetch($this->DENYoYqpnF.'/robots.txt');
																													
																													if($this->DENYoYqpnF.'/' != $this->rqBMbZlR75jJoE4X6Y)
																													
																													{
																													
																													$Dwj9mDpi0BGEFv = $uzVq0O0m8cfknZK->fetch($this->rqBMbZlR75jJoE4X6Y.'robots.txt');
																													
																													$BRsFZmCilvUESilRsEf['content']  .= "\n".$Dwj9mDpi0BGEFv['content'];
																													
																													}
																													
																													$ra=preg_split('#user-agent:\s*#im',$BRsFZmCilvUESilRsEf['content']);
																													
																													$xVGORv5MxqGHNu=$ocvfKtM1Oh=array();
																													
																													for($i=1;$i<count($ra);$i++){
																													
																													preg_match('#^(\S+)(.*)$#s',$ra[$i],$V9UVfsdbZo);
																													
																													if($V9UVfsdbZo[1]=='*'||strstr($V9UVfsdbZo[1],'google')){
																													
																													preg_match_all('#^disallow:\s*([^\#\r\n]*)#im',$V9UVfsdbZo[2],$rm);
																													
																													for($pi=0;$pi<count($rm[1]);$pi++)
																													
																													if($rm[1][$pi])
																													
																													$xVGORv5MxqGHNu[] = 
																													
																													str_replace('\\$','$',
																													
																													str_replace(' ','',
																													
																													str_replace('\\*','.*',
																													
																													preg_quote($rm[1][$pi],'#')
																													
																													)));
																													
																													preg_match_all('#^allow:\s*(\S*)#im',$V9UVfsdbZo[2],$rm);
																													
																													for($pi=0;$pi<count($rm[1]);$pi++)
																													
																													if($rm[1][$pi] && ($rm[1][$pi]!='/')) {
																													
																													$ocvfKtM1Oh[] = 
																													
																													str_replace('\\$','$',
																													
																													str_replace('\\*','.*',
																													
																													str_replace(' ','',
																													
																													preg_quote($rm[1][$pi],'#')
																													
																													)));
																													
																													}
																													
																													}
																													
																													}
																													
																													for($i=0;$i<count($xVGORv5MxqGHNu);$i+=200)
																													
																													$this->DE3WVsxfp[]=implode('|', array_slice($xVGORv5MxqGHNu, $i,200));
																													
																													for($i=0;$i<count($ocvfKtM1Oh);$i+=200)
																													
																													$this->botmatch_allow[]=implode('|', array_slice($ocvfKtM1Oh, $i,200));
																													
																													}
																													
																													if($grab_parameters['xs_inc_ajax'])
																													
																													$grab_parameters['xs_proto_skip'] = str_replace(
																													
																													'\#', '\#(?:[^\!]|$)', $grab_parameters['xs_proto_skip']);
																													
																													$this->xAwBofgxcf4Wha9MLDT = $grab_parameters['xs_exc_skip']!='\\.()';
																													
																													$this->v2jvhlnmO = $grab_parameters['xs_inc_skip']!='\\.()';
																													
																													$grab_parameters['xs_inc_skip'] .= '(?:$|\?)';
																													
																													$grab_parameters['xs_exc_skip'] .= '(?:$|\?)';
																													
																													if($grab_parameters['xs_debug']) {
																													
																													$_GET['ddbg']=1;
																													
																													SZHwpdv4E7c();
																													
																													}
																													
																													$GdN_sPdLw4S3 = 0;
																													
																													$runstate = array();
																													
																													$this->url_ind = 0;
																													
																													$this->cnu = 1;
																													
																													$pf = ocsKBW3RdX(UaddkUfuGH5RFHOb6.oF_i0AwG7t,'w');fclose($pf);
																													
																													$zF2BTBXXawnsssnYJ1A = false;
																													
																													if($this->kBDOg4Jryk_['resume']!=''){
																													
																													$D1Elg2m2dQMCb = @zwiHu7GkUin(ZTwLGIOL6_a05(UaddkUfuGH5RFHOb6 . vntajBz6b_qlNBI, true));
																													
																													if($D1Elg2m2dQMCb)
																													
																													{
																													
																													$zF2BTBXXawnsssnYJ1A = true;
																													
																													echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$D1Elg2m2dQMCb['time']).')'."\n";
																													
																													extract($D1Elg2m2dQMCb);
																													
																													foreach($D1Elg2m2dQMCb as $k=>$v){
																													
																													if(isset($this->$k))$this->$k=$v;
																													
																													}
																													
																													$this->I3aRDMbsB-=$this->ctime;
																													
																													$GdN_sPdLw4S3 = $this->ctime;
																													
																													unset($D1Elg2m2dQMCb);
																													
																													}
																													
																													}
																													
																													$UkWOgPJg4 = 0;
																													
																													if(!$zF2BTBXXawnsssnYJ1A){
																													
																													if($grab_parameters['xs_moreurls']){
																													
																													$this->mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']);
																													
																													foreach($this->mu as $ulW0ivMKGNHt){
																													
																													
																													
																													$YOfsgdQnGBUop4D0 = $this->eAp241CQblM($ulW0ivMKGNHt, $this->y35P1z6karfpI0esq);
																													
																													
																													$urls_list[$ulW0ivMKGNHt]++;
																													
																													}
																													
																													}
																													
																													if($grab_parameters['xs_prev_sm_base']){
																													
																													if($sm_base = @ZTwLGIOL6_a05(UaddkUfuGH5RFHOb6.'sm_base.db',true)){
																													
																													$sm_base = @unserialize($sm_base);
																													
																													}
																													
																													if(is_array($sm_base)
																													
																													&& ($grab_parameters['xs_prev_sm_base_min']<count($sm_base))
																													
																													){
																													
																													if($qqHxxXPAugZIg)
																													
																													foreach($sm_base as $_u=>$_e){
																													
																													if(preg_match('#('.$qqHxxXPAugZIg.')#',$_u))
																													
																													$urls_list[$_u]++;
																													
																													}
																													
																													}
																													
																													else
																													
																													$sm_base = array();
																													
																													}
																													
																													$UkWOgPJg4 = count($urls_list);
																													
																													$urls_list_full = $urls_list;
																													
																													$this->cnu = count($urls_list);
																													
																													}
																													
																													$AR0pHjGJpeDEfLzKCi = explode('|', $grab_parameters['xs_force_inc']);
																													
																													$gEuiewGICsh4gzn_KGk = $JbyE4TaP0Ddq = array();
																													
																													$this->eOXyCmLTA6b9tdKZEr = count($urls_completed);
																													
																													$this->oRn5fATFhj9k = count($urls_list2);
																													
																													sleep(1); @tVk6gUrKf(UaddkUfuGH5RFHOb6.oF_i0AwG7t);
																													
																													$this->sm_sessions[] = array(
																													
																													'start' => time(),
																													
																													'instance' => $grab_parameters['xs_instance_id']
																													
																													);
																													
																													
																													$this->wUhMS5qd5DrsGY1rZV();
																													
																													
																													if($urls_list)
																													
																													do {
																													
																													LsF6if01PMIHpZDVB('pre',true);
																													
																													LsF6if01PMIHpZDVB('pre1');
																													
																													if($gEuiewGICsh4gzn_KGk) {
																													
																													$_ul = array_shift($gEuiewGICsh4gzn_KGk);
																													
																													}else
																													
																													$_ul = each($urls_list);
																													
																													list($this->y35P1z6karfpI0esq, $O10kR3I1pI) = $_ul;
																													
																													$GrECwM0MjwygzfPNSIT = ($O10kR3I1pI>0 && $O10kR3I1pI<1) ? $O10kR3I1pI : 0;
																													
																													$this->url_ind++;
																													
																													mxl2il70e2a03dJaJ("\n[ ".$this->url_ind." - $this->y35P1z6karfpI0esq, $O10kR3I1pI] \n");
																													
																													unset($urls_list[$this->y35P1z6karfpI0esq]);
																													
																													$oZ9OwKtlleTm = GCzEAXiTzbF2M3($this->y35P1z6karfpI0esq);
																													
																													$hq3as_KqPwXu = false;
																													
																													$FL0kXd4N8fpxh1 = '';
																													
																													LsF6if01PMIHpZDVB('pre1',true);
																													
																													LsF6if01PMIHpZDVB('pre2a');
																													
																													$gjM2kkXs23k = array();
																													
																													$cn = '';
																													
																													$this->kxuJs_69IlP1g = $_fex = $this->drtwuaIbVCEv57qk9K0($this->y35P1z6karfpI0esq);
																													
																													extract($_fex);
																													
																													if($f)
																													
																													$FL0kXd4N8fpxh1 = $_fex['uskip'];
																													
																													
																													
																													LsF6if01PMIHpZDVB('pre2a',true);
																													
																													LsF6if01PMIHpZDVB('pre2b');
																													
																													if(!$f && ($this->eOXyCmLTA6b9tdKZEr>0) && ($ssL8XGwNHAFUjdTIY = $sm_base[$this->y35P1z6karfpI0esq])){
																													
																													$f2 = true;
																													
																													}
																													
																													if($this->XZAue5NbPPfjvVNTbl && strstr($this->XZAue5NbPPfjvVNTbl['content'],'header'))$f2 = true;
																													
																													LsF6if01PMIHpZDVB('pre2b',true);
																													
																													do{
																													
																													$KvFu_Znsd9rz4eX = count($urls_list) + $this->oRn5fATFhj9k + $this->eOXyCmLTA6b9tdKZEr;      
																													
																													$f3 = $AR0pHjGJpeDEfLzKCi[2] && (
																													
																													($bmuRMKdLvvS0JLEsKf*$AR0pHjGJpeDEfLzKCi[2]+1000)<
																													
																													($Nyxd1iyX5Zxr2A-$this->url_ind-$UkWOgPJg4));
																													
																													if(!$f && !$f2)
																													
																													{
																													
																													
																													$TTC48RKwsg7orRBI = ($AR0pHjGJpeDEfLzKCi[1] && 
																													
																													(
																													
																													(($this->ctime>$AR0pHjGJpeDEfLzKCi[0]) && ($this->pn>$this->S5AtqhHQKHLV*$AR0pHjGJpeDEfLzKCi[1]))
																													
																													|| $f3));	
																													
																													$M2APY6c6YlEHyj = ($AR0pHjGJpeDEfLzKCi[3] && $this->S5AtqhHQKHLV && (($KvFu_Znsd9rz4eX>$this->S5AtqhHQKHLV*$AR0pHjGJpeDEfLzKCi[3])));
																													
																													if($AR0pHjGJpeDEfLzKCi[3] && $this->S5AtqhHQKHLV && (($this->pn>$this->S5AtqhHQKHLV*$AR0pHjGJpeDEfLzKCi[3]))){
																													
																													$urls_list = $urls_list2 = array();
																													
																													$this->oRn5fATFhj9k = 0;
																													
																													$this->cnu = 0;
																													
																													}
																													
																													if($m_7a2pEeu9b_<=0 || $this->links_level<$m_7a2pEeu9b_)
																													
																													{
																													
																													LsF6if01PMIHpZDVB('extract');
																													
																													$vMGUrk53d1dxU29d = microtime(true);
																													
																													$qJqtbJgQBSECV4mIAeo = Hvh2bJSnHBECwr_X6($this->rqBMbZlR75jJoE4X6Y, $this->y35P1z6karfpI0esq);
																													
																													if(fCnNMR5BgwuQESB('xs_http_parallel')){
																													
																													if(!$gEuiewGICsh4gzn_KGk && !isset($uzVq0O0m8cfknZK->FOy0hn_poKrPuCkX[$qJqtbJgQBSECV4mIAeo])){
																													
																													$gEuiewGICsh4gzn_KGk = array();
																													
																													$JbyE4TaP0Ddq = array($qJqtbJgQBSECV4mIAeo);
																													
																													$_par = fCnNMR5BgwuQESB('xs_http_parallel_num', 10);
																													
																													for($i=0;($i<$_par*5)&&(count($JbyE4TaP0Ddq)<$_par);$i++)
																													
																													if($_ul = each($urls_list)) {
																													
																													$gEuiewGICsh4gzn_KGk[] = $_ul;
																													
																													$_fex2 = $this->drtwuaIbVCEv57qk9K0($_ul[0]);
																													
																													if(!$_fex2['f'] && !$_fex2['f2']){
																													
																													$_u1 = Hvh2bJSnHBECwr_X6($this->rqBMbZlR75jJoE4X6Y, $_ul[0]);
																													
																													if(!isset($sm_base[$_u1])){
																													
																													$JbyE4TaP0Ddq[] = $_u1;
																													
																													}
																													
																													}
																													
																													}
																													
																													$uzVq0O0m8cfknZK->NqkwRSZhmML($JbyE4TaP0Ddq);
																													
																													}
																													
																													}
																													
																													
																													
																													mxl2il70e2a03dJaJ("<h4> { $qJqtbJgQBSECV4mIAeo } </h4>\n");
																													
																													$eDdRv4ZVGPD=0;
																													
																													$FvjPw2dy2JlDcfFk1++;
																													
																													do {
																													
																													$gjM2kkXs23k = $uzVq0O0m8cfknZK->fetch($qJqtbJgQBSECV4mIAeo, 0, 0);
																													
																													$this->wUhMS5qd5DrsGY1rZV();
																													
																													$_to = $gjM2kkXs23k['flags']['socket_timeout'];
																													
																													if($_to && ($PjvMSN0PYbX5k774r5['host']!=$gjM2kkXs23k['purl']['host'])){
																													
																													$gjM2kkXs23k['flags']['error'] = 'Host doesn\'t match';
																													
																													}
																													
																													$_ic = intval($gjM2kkXs23k['code']);
																													
																													$vinQegbhtH8oMCD = preg_match($p7xe3c3J3swZF,$_ic);
																													
																													$Xo5mInE4wa0 = ($_ic == 403);
																													
																													if($pzipLVzS8 && preg_match($pzipLVzS8,$_ic)){
																													
																													$vinQegbhtH8oMCD = $Xo5mInE4wa0 = false;
																													
																													}
																													
																													$CGNGs1ExM7b = (($_ic == 301)||($_ic==302)) && ($qJqtbJgQBSECV4mIAeo == $gjM2kkXs23k['last_url']);
																													
																													if( !$gjM2kkXs23k['flags']['error'] && 
																													
																													(($vinQegbhtH8oMCD || $Xo5mInE4wa0 || $CGNGs1ExM7b) || !$gjM2kkXs23k['code'] || $_to)
																													
																													)
																													
																													{
																													
																													$eDdRv4ZVGPD++;
																													
																													$_sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1;
																													
																													if($gjM2kkXs23k['headers'] && ($_csl = $gjM2kkXs23k['headers']['retry-after']))
																													
																													$_sl = max($_sl, $_csl + ($eDdRv4ZVGPD+1)*$_sl);
																													
																													
																													if(($_to) && $grab_parameters['xs_timeout_break']){
																													
																													mxl2il70e2a03dJaJ("<p> # TIMEOUT - $_to #</p>\n");
																													
																													if($eDdRv4ZVGPD==3){
																													
																													
																													if(strstr($_to,'read') ){
																													
																													mxl2il70e2a03dJaJ("<p> read200 break?</p>\n");
																													
																													break ;
																													
																													}
																													
																													if($A2rZg2v3apSLIWvN8++>5) {
																													
																													$ZV_hBk0fBdWNG85Tux = "Too many timeouts detected";
																													
																													break 2;
																													
																													}
																													
																													mxl2il70e2a03dJaJ("<p> # MULTI TIMEOUT - BREAK #</p>\n");
																													
																													$_sl = 60;	    			
																													
																													$eDdRv4ZVGPD = 0;
																													
																													}
																													
																													}
																													
																													$LnojDBQP5oY26ua = $CGNGs1ExM7b?"(".$qJqtbJgQBSECV4mIAeo." => ".$gjM2kkXs23k['last_url'].")":"-";
																													
																													mxl2il70e2a03dJaJ("<p> # RETRY - ".$gjM2kkXs23k['code']." - ".(intval($gjM2kkXs23k['code']))." - error(".$gjM2kkXs23k['flags']['error'].") self-redir($LnojDBQP5oY26ua) badreq($vinQegbhtH8oMCD) forbreq($Xo5mInE4wa0) tmout($_to)# zZz $_sl</p>\n");
																													
																													sleep($_sl);
																													
																													}
																													
																													else 
																													
																													break;
																													
																													}while($eDdRv4ZVGPD<3);
																													
																													$this->fetch_no++;
																													
																													LsF6if01PMIHpZDVB('extract', true);
																													
																													LsF6if01PMIHpZDVB('analyze');
																													
																													$this->sq7bh3p8Ob0yDgb = microtime(true)-$vMGUrk53d1dxU29d;
																													
																													$this->nettime += $this->sq7bh3p8Ob0yDgb;
																													
																													
																													
																													mxl2il70e2a03dJaJ("<hr>\n[[[ ".$gjM2kkXs23k['code']." ]]] - ".number_format($this->sq7bh3p8Ob0yDgb,2)."s (".number_format($uzVq0O0m8cfknZK->ejY3nAbSdv_NzwkI,2).' + '.number_format($uzVq0O0m8cfknZK->peMdTWcotYHo,2).")\n".var_export($gjM2kkXs23k['headers'],1));
																													
																													$pWNMZI4DEA2y = is_array($gjM2kkXs23k['headers']) ? strtolower($gjM2kkXs23k['headers']['content-type']) : '';
																													
																													$YIkDLtzcexXI2D = $this->mj1EWAELtIj($pWNMZI4DEA2y) || !$pWNMZI4DEA2y;
																													
																													
																													if((strstr($pWNMZI4DEA2y,'application/') && strstr($pWNMZI4DEA2y,'pdf'))
																													
																													||strstr($pWNMZI4DEA2y,'/xml')
																													
																													||strstr($pWNMZI4DEA2y,'text/plain')
																													
																													) 
																													
																													{
																													
																													$gjM2kkXs23k['content'] = '';
																													
																													$YIkDLtzcexXI2D = true;
																													
																													}
																													
																													$oabs_J9g2BTdFE = ($grab_parameters['xs_parse_swf'] && strstr($pWNMZI4DEA2y, 'shockwave-flash'));
																													
																													$n74b5j25kY6Y2trF0TT  = ($grab_parameters['xs_parse_js'] && strstr($pWNMZI4DEA2y, 'javascript'));
																													
																													if($pWNMZI4DEA2y && !$YIkDLtzcexXI2D && !$oabs_J9g2BTdFE && !$n74b5j25kY6Y2trF0TT){
																													
																													if(!$TTC48RKwsg7orRBI){
																													
																													$FL0kXd4N8fpxh1 = $pWNMZI4DEA2y;
																													
																													continue;
																													
																													}
																													
																													}
																													
																													$tWbhPND4oaReUm1 = array();
																													
																													
																													
																													$cn = $gjM2kkXs23k['content'];
																													
																													
																													mxl2il70e2a03dJaJ("\n\n<hr>\n\n$cn\n\n<hr>\n\n",4);//exit;
																													
																													$this->tsize+=strlen($cn);
																													
																													
																													if($t008npZXmyOxFpFSFN = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn))
																													
																													$cn = $t008npZXmyOxFpFSFN;
																													
																													preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm);
																													
																													if(isset($bm[1])&& $bm[1]){
																													
																													if($bzKkrMo3goCoKCft3c['scheme'] && substr($bm[1], 0, 2) == '//')
																													
																													$bm[1] = $bzKkrMo3goCoKCft3c['scheme'].':'.$bm[1];
																													
																													$this->gL5_2G6X9IUkCs1 = kEsSWmgWFIL05($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-'));
																													
																													}
																													
																													else
																													
																													$this->gL5_2G6X9IUkCs1 = kEsSWmgWFIL05(strstr($this->y35P1z6karfpI0esq,'://') ? $this->y35P1z6karfpI0esq : $this->rqBMbZlR75jJoE4X6Y . $this->y35P1z6karfpI0esq);
																													
																													
																													if($grab_parameters['xs_canonical'])
																													
																													if(($qJqtbJgQBSECV4mIAeo == $gjM2kkXs23k['last_url'])
																													
																													&& 
																													
																													(
																													
																													preg_match('#<link[^>]*rel=[\'"]canonical[\'"][^>]*\shref=[\'"]([^>]*?)[\'"]#is', $cn, $RstJ7rFCZUFpRdcUZ) ||
																													
																													preg_match('#<link[^>]*\shref=[\'"]([^>]*?)[\'"][^>]*rel=[\'"]canonical[\'"]#is', $cn, $RstJ7rFCZUFpRdcUZ))
																													
																													){
																													
																													$Etvv5p5ZJ867u12g12q = $this->HkIfp7KCo(trim($RstJ7rFCZUFpRdcUZ[1]));
																													
																													$YOfsgdQnGBUop4D0 = $this->eAp241CQblM($Etvv5p5ZJ867u12g12q, $this->y35P1z6karfpI0esq);
																													
																													if($qJqtbJgQBSECV4mIAeo != $Etvv5p5ZJ867u12g12q){
																													
																													$FL0kXd4N8fpxh1 = 'canonical - '.$Etvv5p5ZJ867u12g12q;
																													
																													}
																													
																													
																													}
																													
																													if($gjM2kkXs23k['last_url']){
																													
																													$YOfsgdQnGBUop4D0 = $this->eAp241CQblM($gjM2kkXs23k['last_url'], $this->y35P1z6karfpI0esq);
																													
																													if($YOfsgdQnGBUop4D0 == 1){
																													
																													$FL0kXd4N8fpxh1 = 'lu (ext) - '.$gjM2kkXs23k['last_url'];
																													
																													if($gjM2kkXs23k['last_url'] != $qJqtbJgQBSECV4mIAeo) {
																													
																													
																													continue;
																													
																													}
																													
																													}
																													
																													}
																													
																													$ce0vau7xzIsQXvA = preg_replace('#^.*?'.preg_quote($this->rqBMbZlR75jJoE4X6Y,'#').'#','',$gjM2kkXs23k['last_url']);
																													
																													if(($qJqtbJgQBSECV4mIAeo != $gjM2kkXs23k['last_url']))// && ($qJqtbJgQBSECV4mIAeo != $gjM2kkXs23k['last_url'].'/')) 
																													
																													{
																													
																													$this->agUzDTQm94TQzt8[$this->y35P1z6karfpI0esq] = $gjM2kkXs23k['last_url']; $io=$this->y35P1z6karfpI0esq;
																													
																													if(strlen($ce0vau7xzIsQXvA) <= 2048)
																													
																													if(!isset($urls_list_full[$ce0vau7xzIsQXvA])) {
																													
																													$urls_list2[$ce0vau7xzIsQXvA]++;
																													
																													if(count($ref_links[$ce0vau7xzIsQXvA])<max(1,intval($grab_parameters['xs_maxref'])))
																													
																													$ref_links[$ce0vau7xzIsQXvA][] = $this->y35P1z6karfpI0esq;
																													
																													if(
																													
																													$grab_parameters['xs_ref_list_store'] && 
																													
																													($_rlmax = $grab_parameters['xs_ref_list_max'])
																													
																													){
																													
																													if(
																													
																													(isset($ref_links_list[$ce0vau7xzIsQXvA])
																													
																													|| count($ref_links_list)<$_rlmax)
																													
																													&&    					
																													
																													(count($ref_links_list[$ce0vau7xzIsQXvA])<max(1,intval($grab_parameters['xs_maxref'])))
																													
																													)
																													
																													{
																													
																													if(!$ref_links_list[$ce0vau7xzIsQXvA])
																													
																													$ref_links_list[$ce0vau7xzIsQXvA] = array();
																													
																													if(!in_array($this->y35P1z6karfpI0esq, $ref_links_list[$ce0vau7xzIsQXvA]))
																													
																													$ref_links_list[$ce0vau7xzIsQXvA][] = $this->y35P1z6karfpI0esq;
																													
																													}
																													
																													}
																													
																													}
																													
																													$FL0kXd4N8fpxh1 = 'lu - '.$gjM2kkXs23k['last_url'];
																													
																													if(!$TTC48RKwsg7orRBI)continue;
																													
																													}
																													
																													if($pzipLVzS8 && !preg_match($pzipLVzS8,$gjM2kkXs23k['code'])){
																													
																													$FL0kXd4N8fpxh1 = $gjM2kkXs23k['code'];
																													
																													continue;
																													
																													}
																													
																													$retrno++;
																													
																													if($TTC48RKwsg7orRBI||$M2APY6c6YlEHyj) {
																													
																													
																													$YIkDLtzcexXI2D = false;
																													
																													}
																													
																													LsF6if01PMIHpZDVB('analyze',true);
																													
																													if($oabs_J9g2BTdFE)
																													
																													{
																													
																													include_once bW3dC490kntpArw.'class.pfile.inc.php';
																													
																													$am = new SWFParser();
																													
																													$am->ZEVFkViWsF6l0Ho($cn);
																													
																													$IyuLEKRmJC = $am->gSa2GOr3kJ0A();
																													
																													}else
																													
																													if($YIkDLtzcexXI2D || $n74b5j25kY6Y2trF0TT)
																													
																													{
																													
																													LsF6if01PMIHpZDVB('parse');
																													
																													if($n74b5j25kY6Y2trF0TT) {
																													
																													$FL0kXd4N8fpxh1 = 'js';
																													
																													$f = true; // Do not index
																													
																													preg_match_all('#(?:add|menu)item\s*\([^\)]*?["\']((?:\.+\/|http).*?)["\)\']#is', $cn, $hrAV3lOuYsS0n);
																													
																													$tWbhPND4oaReUm1 = $hrAV3lOuYsS0n[1];
																													
																													if(preg_match_all('#\(\s*(\{.*?["\']content["\']\s*\:\s*[\'"](.*?)[\'"]\s*\})\s*\)#is', $cn, $Jw6ndqvR6GAprBc_e)){
																													
																													foreach($Jw6ndqvR6GAprBc_e[1] as $BJEfD9dL8YJ){
																													
																													if($s0v8x9fljj = stripslashes($BJEfD9dL8YJ)){
																													
																													$tWbhPND4oaReUm1 = array_merge(
																													
																													$tWbhPND4oaReUm1, $this->cEapKf0dKnJNK7iGu($s0v8x9fljj));
																													
																													}
																													
																													}
																													
																													}
																													
																													}else {
																													
																													$tWbhPND4oaReUm1 = $this->cEapKf0dKnJNK7iGu($cn);
																													
																													}
																													
																													}
																													
																													$tWbhPND4oaReUm1 = array_unique($tWbhPND4oaReUm1);
																													
																													
																													$nn = $nt = 0;
																													
																													reset($tWbhPND4oaReUm1);
																													
																													if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																													
																													if(preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?nofollow#is',$cn))
																													
																													$tWbhPND4oaReUm1 = array();
																													
																													if(!$runstate['charset']){
																													
																													
																													
																													if(preg_match('#<meta[^>]*?charset\s*=\s*"?([^">]*)"#is',$cn, $JgNVXf3NIfJ772yVj))
																													
																													$runstate['charset'] = $JgNVXf3NIfJ772yVj[1];
																													
																													}
																													
																													LsF6if01PMIHpZDVB('parse', true);
																													
																													LsF6if01PMIHpZDVB('llist');
																													
																													foreach($tWbhPND4oaReUm1 as $i=>$ll)
																													
																													if($ll)
																													
																													{                    
																													
																													if(preg_match('#^https?%3a%2f#i', $ll))
																													
																													$ll = urldecode($ll);
																													
																													$a = $sa = trim($ll);
																													
																													$a = str_replace('&#58;',':',$a);
																													
																													if($grab_parameters['xs_proto_skip'] && 
																													
																													(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																													
																													($this->xAwBofgxcf4Wha9MLDT && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																													
																													preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																													
																													))
																													
																													continue;
																													
																													
																													if(strlen($a) > 4096) continue;
																													
																													$YOfsgdQnGBUop4D0 = $this->eAp241CQblM($a, $this->y35P1z6karfpI0esq);
																													
																													if($YOfsgdQnGBUop4D0 == 1)
																													
																													{
																													
																													if($grab_parameters['xs_extlinks'] &&
																													
																													(!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->ro_JgGswRcH($grab_parameters['xs_extlinks_excl']).'#',$a)) &&
																													
																													(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																													
																													)
																													
																													{
																													
																													if(!$urls_ext[$a] && 
																													
																													(!$grab_parameters['xs_ext_skip'] || 
																													
																													!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																													
																													)
																													
																													)
																													
																													$urls_ext[$a] = $qJqtbJgQBSECV4mIAeo;
																													
																													}
																													
																													continue;
																													
																													}
																													
																													$ce0vau7xzIsQXvA = $YOfsgdQnGBUop4D0 ? $a : substr($a,strlen($this->rqBMbZlR75jJoE4X6Y));
																													
																													$ce0vau7xzIsQXvA = str_replace(' ', '%20', $ce0vau7xzIsQXvA);
																													
																													
																													if(
																													
																													$grab_parameters['xs_ref_list_store'] &&
																													
																													($_rlmax = $grab_parameters['xs_ref_list_max'])
																													
																													){
																													
																													
																													if(
																													
																													(isset($ref_links_list[$ce0vau7xzIsQXvA])
																													
																													|| count($ref_links_list)<$_rlmax)
																													
																													&&    					
																													
																													(count($ref_links_list[$ce0vau7xzIsQXvA])<max(1,intval($grab_parameters['xs_maxref'])))
																													
																													)
																													
																													{
																													
																													
																													if(!$ref_links_list[$ce0vau7xzIsQXvA])
																													
																													$ref_links_list[$ce0vau7xzIsQXvA] = array();
																													
																													if(!in_array($this->y35P1z6karfpI0esq, $ref_links_list[$ce0vau7xzIsQXvA]))
																													
																													$ref_links_list[$ce0vau7xzIsQXvA][] = $this->y35P1z6karfpI0esq;
																													
																													}
																													
																													}
																													
																													
																													if($urls_list_full[$ce0vau7xzIsQXvA] || !strcmp($ce0vau7xzIsQXvA, $this->y35P1z6karfpI0esq))
																													
																													continue;
																													
																													if($grab_parameters['xs_exclude_check'])
																													
																													{
																													
																													$_f=$_f2=false;
																													
																													$_f=$this->wqVxClOQheKC5&&preg_match('#('.$this->wqVxClOQheKC5.')#',$ce0vau7xzIsQXvA);
																													
																													$_f = $_f || ($_fbot = $this->wV8059nyp5($this->d7xcM2GugwnMz.$ce0vau7xzIsQXvA));
																													
																													
																													if($_f)continue;
																													
																													}
																													
																													mxl2il70e2a03dJaJ("<u>[$ce0vau7xzIsQXvA]</u><br>\n",2);//exit;
																													
																													$urls_list2[$ce0vau7xzIsQXvA]++;
																													
																													if($grab_parameters['xs_maxref'] && count($ref_links[$ce0vau7xzIsQXvA])<$grab_parameters['xs_maxref'])
																													
																													$ref_links[$ce0vau7xzIsQXvA][] = $this->y35P1z6karfpI0esq;
																													
																													$nt++;
																													
																													}
																													
																													unset($tWbhPND4oaReUm1);
																													
																													LsF6if01PMIHpZDVB('llist', true);
																													
																													}
																													
																													}
																													
																													
																													$this->oRn5fATFhj9k = count($urls_list2);
																													
																													LsF6if01PMIHpZDVB('analyze', true);
																													
																													LsF6if01PMIHpZDVB('post');
																													
																													if(!$f){
																													
																													
																													if($f = $f || !$this->ttaB0wOHqmpPvb('xs_incl_only', $this->fQHDc2rP0PM($this->y35P1z6karfpI0esq), true))
																													
																													$FL0kXd4N8fpxh1 = 'inclonly';
																													
																													}
																													
																													if($_fex['f3']) {
																													
																													$f = true;
																													
																													$FL0kXd4N8fpxh1 = 'noinclmask';
																													
																													}
																													
																													if(!$f)
																													
																													if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																													
																													{
																													
																													$f = $f||preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?noindex#is',$cn,$_cm);
																													
																													if($f)$FL0kXd4N8fpxh1 = 'mrob';
																													
																													}
																													
																													if(!$f && !$FL0kXd4N8fpxh1)
																													
																													{
																													
																													
																													if(!$ssL8XGwNHAFUjdTIY) {
																													
																													$ssL8XGwNHAFUjdTIY = array(
																													
																													
																													'link' => preg_replace('#//+$#','/', 
																													
																													preg_replace('#^([^/\:\?]/)/+#','\\1', 
																													
																													(preg_match('#^\w+://#',$this->y35P1z6karfpI0esq) ? $this->y35P1z6karfpI0esq : $this->rqBMbZlR75jJoE4X6Y . $this->y35P1z6karfpI0esq)
																													
																													))
																													
																													);
																													
																													if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo']||$grab_parameters['xs_newsinfo'])
																													
																													{
																													
																													preg_match('#<title[^>]*?>([^<]*?)</title>#is', $gjM2kkXs23k['content'], $xfShCFBgcN3Jq8NHjl);
																													
																													$ssL8XGwNHAFUjdTIY['t'] = trim(strip_tags($xfShCFBgcN3Jq8NHjl[1]));
																													
																													}
																													
																													if($grab_parameters['xs_metadesc']||$grab_parameters['xs_videoinfo'])
																													
																													{
																													
																													if(!preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $PhJydxO6nJV))
																													
																													preg_match('#<meta[^>]*content\s*=\s*["]?([^>\"]*)\s[^>]*(?:http-equiv|name)\s*=\s*"?description#is', $cn, $PhJydxO6nJV);
																													
																													if($PhJydxO6nJV[1])
																													
																													$ssL8XGwNHAFUjdTIY['d'] = trim($PhJydxO6nJV[1]);
																													
																													}
																													
																													if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																													
																													$ssL8XGwNHAFUjdTIY['o'] = max(0,$this->links_level);
																													
																													if($GrECwM0MjwygzfPNSIT)
																													
																													$ssL8XGwNHAFUjdTIY['p'] = $GrECwM0MjwygzfPNSIT;
																													
																													if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?last-modified[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $PhJydxO6nJV)){
																													
																													$ssL8XGwNHAFUjdTIY['clm'] = str_replace('@',' ',$PhJydxO6nJV[1]);
																													
																													}
																													
																													if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?priority[^>]*content\s*=\s*["]?([\d\.]+)#is', $cn, $PhJydxO6nJV)){
																													
																													$ssL8XGwNHAFUjdTIY['p'] = $PhJydxO6nJV[1];
																													
																													}
																													
																													if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?changefreq[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $PhJydxO6nJV)){
																													
																													$ssL8XGwNHAFUjdTIY['f'] = $PhJydxO6nJV[1];
																													
																													}else
																													
																													if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?revisit-after[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $PhJydxO6nJV)){
																													
																													if(preg_match('#(\d+)\s*hour#',$PhJydxO6nJV[1])){
																													
																													$ssL8XGwNHAFUjdTIY['f'] = 'hourly';
																													
																													}
																													
																													if(preg_match('#(\d+)\s*month#',$PhJydxO6nJV[1])){
																													
																													$ssL8XGwNHAFUjdTIY['f'] = 'monthly';
																													
																													}
																													
																													if(preg_match('#(\d+)\s*day#',$PhJydxO6nJV[1], $PhJydxO6nJV)){
																													
																													$d = $PhJydxO6nJV[1]+0;
																													
																													if($d<4)$ssL8XGwNHAFUjdTIY['f'] = 'daily';
																													
																													else
																													
																													if($d<22)$ssL8XGwNHAFUjdTIY['f'] = 'weekly';
																													
																													else
																													
																													$ssL8XGwNHAFUjdTIY['f'] = 'monthly';
																													
																													}
																													
																													}
																													
																													
																													if(preg_match('#'.$yM3T2x1jwSMMbWc2JK.'#',$this->fQHDc2rP0PM($this->y35P1z6karfpI0esq),$vUjlYOl35VNHZzT42))
																													
																													{
																													
																													for($_i=0;$_i<count($vUjlYOl35VNHZzT42);$_i++)
																													
																													{
																													
																													if($vUjlYOl35VNHZzT42[$_i+1])
																													
																													break;
																													
																													}
																													
																													if($bloXo0NJZU4JYDD0[$_i]) {
																													
																													if(!$ssL8XGwNHAFUjdTIY['clm'])
																													
																													$ssL8XGwNHAFUjdTIY['clm'] = $bloXo0NJZU4JYDD0[$_i]['lm'];
																													
																													if(!$ssL8XGwNHAFUjdTIY['f'])
																													
																													$ssL8XGwNHAFUjdTIY['f'] = $bloXo0NJZU4JYDD0[$_i]['f'];
																													
																													$ssL8XGwNHAFUjdTIY['p'] = $bloXo0NJZU4JYDD0[$_i]['p'];
																													
																													}
																													
																													}
																													
																													
																													
																													
																													
																													if($grab_parameters['xs_hreflang']){
																													
																													if(
																													
																													preg_match_all('#<link[^>]*rel\s*=\s*"alternate"[^>]*>#is', $cn, $UDlRnQVHftMNdaOnc, PREG_SET_ORDER)
																													
																													){
																													
																													$_la = array();
																													
																													foreach($UDlRnQVHftMNdaOnc as $_alt1){
																													
																													if(preg_match('#\s(hreflang|media)\s*=\s*"([^">]*?)"[^>]*>#is', $_alt1[0], $_alt)
																													
																													&& preg_match('#\s*href\s*=\s*[\'"]([^>]*?)[\'"]#is', $_alt1[0], $_hm)
																													
																													)
																													
																													$_la[] = array('t' => $_alt[1], 'l' => $_alt[2], 'u' => $_hm[1]);
																													
																													}
																													
																													$ssL8XGwNHAFUjdTIY['hl'] = $_la;
																													
																													}
																													
																													}
																													
																													if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																													
																													{
																													
																													$gjM2kkXs23k = $uzVq0O0m8cfknZK->fetch($qJqtbJgQBSECV4mIAeo, 0, 1, false, "", array('req'=>'HEAD'));
																													
																													}
																													
																													if(!$ssL8XGwNHAFUjdTIY['lm'] && isset($gjM2kkXs23k['headers']['last-modified']))
																													
																													$ssL8XGwNHAFUjdTIY['lm'] = $gjM2kkXs23k['headers']['last-modified'];
																													
																													}
																													
																													if(!$ssL8XGwNHAFUjdTIY['lm'] && 
																													
																													preg_match('#<meta[^>]*?name\s*=\s*\"TACH-Filing-Date\" content\s*=\s*"?([^">]*)"#is',$gjM2kkXs23k['content'], $JgNVXf3NIfJ772yVj))
																													
																													$ssL8XGwNHAFUjdTIY['lm'] = $JgNVXf3NIfJ772yVj[1];
																													
																													LsF6if01PMIHpZDVB('post', true);
																													
																													LsF6if01PMIHpZDVB('post-save1');
																													
																													mxl2il70e2a03dJaJ("\n((include ".$ssL8XGwNHAFUjdTIY['link']."))<br />\n");
																													
																													$hq3as_KqPwXu = true;
																													
																													if($grab_parameters['xs_memsave'])
																													
																													{
																													
																													Xx_EjVP7AHhi($oZ9OwKtlleTm, $ssL8XGwNHAFUjdTIY);
																													
																													$urls_completed[] = $oZ9OwKtlleTm;
																													
																													}else
																													
																													$urls_completed[] = serialize($ssL8XGwNHAFUjdTIY);
																													
																													$this->eOXyCmLTA6b9tdKZEr++;
																													
																													
																													LsF6if01PMIHpZDVB('post-save1',true);
																													
																													LsF6if01PMIHpZDVB('post-save2');
																													
																													if($grab_parameters['xs_prev_sm_base']
																													
																													&& $sR5pPZOalmkLrf &&
																													
																													preg_match('#('.$sR5pPZOalmkLrf.')#',$this->y35P1z6karfpI0esq)){
																													
																													$sm_base[$this->y35P1z6karfpI0esq] = $ssL8XGwNHAFUjdTIY;
																													
																													}
																													
																													$bmuRMKdLvvS0JLEsKf = $this->S5AtqhHQKHLV - $this->eOXyCmLTA6b9tdKZEr;
																													
																													LsF6if01PMIHpZDVB('post-save2',true);
																													
																													
																													}
																													
																													}while(false);// zerowhile
																													
																													LsF6if01PMIHpZDVB('post-progress1');
																													
																													if($this->url_ind>=$this->cnu)
																													
																													{
																													
																													unset($urls_list);
																													
																													$this->url_ind = 0;
																													
																													$urls_list = $urls_list2;
																													
																													
																													$urls_list_full += $urls_list;
																													
																													$this->cnu = count($urls_list);
																													
																													unset($ref_links2);
																													
																													$ref_links2 = $ref_links;
																													
																													unset($ref_links); unset($urls_list2);
																													
																													$ref_links = array();
																													
																													$urls_list2 = array();
																													
																													$this->links_level++;
																													
																													mxl2il70e2a03dJaJ("\n<br>NEXT LEVEL:$this->links_level<br />\n");
																													
																													}
																													
																													if(!$hq3as_KqPwXu){
																													
																													
																													mxl2il70e2a03dJaJ("\n({skipped ".$this->y35P1z6karfpI0esq." - $FL0kXd4N8fpxh1})<br />\n");
																													
																													if(!$grab_parameters['xs_chlog_list_max'] ||
																													
																													count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																													
																													$urls_list_skipped[$this->y35P1z6karfpI0esq] = $FL0kXd4N8fpxh1;
																													
																													}
																													
																													}
																													
																													LsF6if01PMIHpZDVB('post-progress1',true);
																													
																													LsF6if01PMIHpZDVB('post-progress2');
																													
																													$this->pn++;
																													
																													Bp_tWIew8s9vktlb();
																													
																													$this->pl=min($this->cnu - $this->url_ind,$bmuRMKdLvvS0JLEsKf);
																													
																													$EHTmK3AoCJ55pLPOSv = ($this->eOXyCmLTA6b9tdKZEr>=$this->S5AtqhHQKHLV) || ($this->url_ind >= $this->cnu);
																													
																													if(!$ZV_hBk0fBdWNG85Tux) {
																													
																													
																													if($ZV_hBk0fBdWNG85Tux = D3aBNB6eW_8d3DA()){
																													
																													if(!@tVk6gUrKf($ZV_hBk0fBdWNG85Tux))
																													
																													$ZV_hBk0fBdWNG85Tux=0;
																													
																													}
																													
																													}
																													
																													LsF6if01PMIHpZDVB('post-progress2',true);
																													
																													LsF6if01PMIHpZDVB('post-progress3');
																													
																													$progpar = $this->wUhMS5qd5DrsGY1rZV(false, $EHTmK3AoCJ55pLPOSv||$ZV_hBk0fBdWNG85Tux);
																													
																													LsF6if01PMIHpZDVB('post-progress3',true);
																													
																													LsF6if01PMIHpZDVB('post-progress4');
																													
																													if($grab_parameters['xs_exec_time'] && 
																													
																													((time()-$myaUH8WuhCQWR03mTFf) > $grab_parameters['xs_exec_time']) ){
																													
																													$ZV_hBk0fBdWNG85Tux = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$myaUH8WuhCQWR03mTFf);
																													
																													}
																													
																													if($grab_parameters['xs_savestate_time']>0 &&
																													
																													( 
																													
																													($this->ctime-$GdN_sPdLw4S3>$grab_parameters['xs_savestate_time'])
																													
																													|| $EHTmK3AoCJ55pLPOSv
																													
																													|| $ZV_hBk0fBdWNG85Tux
																													
																													)
																													
																													)
																													
																													{
																													
																													$GdN_sPdLw4S3 = $this->ctime;
																													
																													mxl2il70e2a03dJaJ("(saving dump)<br />\n");
																													
																													$D1Elg2m2dQMCb = array();
																													
																													$z_KVdokjgwfhZtft6Z = array(
																													
																													'url_ind',
																													
																													'urls_list','urls_list2','cnu',
																													
																													'ref_links','ref_links2','ref_links_list',
																													
																													'urls_list_full','urls_completed',
																													
																													'urls_404',
																													
																													'nt','tsize','pn','links_level','ctime', 'urls_ext','fetch_no',
																													
																													'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																													
																													'imlist', 'imlist2', 'progpar', 'runstate', 'sm_base', 'sm_sessions'
																													
																													);
																													
																													foreach($z_KVdokjgwfhZtft6Z as $k){
																													
																													$D1Elg2m2dQMCb[$k] = isset($this->$k) ? $this->$k : $$k;
																													
																													}
																													
																													$D1Elg2m2dQMCb['time']=time();
																													
																													$IY3TOOOrnc=efGgmPC6U5s2($D1Elg2m2dQMCb);
																													
																													i7Vxw209ALFW(vntajBz6b_qlNBI,$IY3TOOOrnc,UaddkUfuGH5RFHOb6,true);
																													
																													unset($D1Elg2m2dQMCb);
																													
																													unset($IY3TOOOrnc);
																													
																													}
																													
																													if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																													
																													(($FvjPw2dy2JlDcfFk1%$grab_parameters['xs_delay_req'])==0))
																													
																													{
																													
																													sleep(intval($grab_parameters['xs_delay_ms']));
																													
																													}
																													
																													LsF6if01PMIHpZDVB('post-progress4', true);
																													
																													}while(!$EHTmK3AoCJ55pLPOSv && !$ZV_hBk0fBdWNG85Tux);
																													
																													mxl2il70e2a03dJaJ("\n\n<br><br>Crawling completed<br>\n");
																													
																													if($_GET['ddbgexit']){
																													
																													echo '<hr><hr><h2>Dbg exit</h2>';
																													
																													echo $uzVq0O0m8cfknZK->eN3D_sF3ctV.' / '.$uzVq0O0m8cfknZK->nettime.'<hr>';
																													
																													echo R2pYvfhHA().'<hr>';
																													
																													exit;
																													
																													}
																													
																													return array(
																													
																													'u404'=>$urls_404,
																													
																													'ref_links_list'=>$ref_links_list,
																													
																													'starttime'=>$starttime,
																													
																													'topmu' => $K9JrS50JhCfEmecMG2,
																													
																													'ctime'=>$this->ctime,
																													
																													'tsize'=>$this->tsize,
																													
																													'retrno' => $retrno,
																													
																													'nettime' => $this->nettime,
																													
																													'errmsg'=>'',
																													
																													'initurl'=>$this->utD4LKZa6ISXpsm4rG,
																													
																													'initdir'=>$this->rqBMbZlR75jJoE4X6Y,
																													
																													'ucount'=>$this->eOXyCmLTA6b9tdKZEr,
																													
																													'crcount'=>$this->pn,
																													
																													'fetch_no'=>$this->fetch_no,
																													
																													'time'=>time(),
																													
																													'params'=>$this->kBDOg4Jryk_,
																													
																													'sm_sessions'=>$this->sm_sessions,
																													
																													'interrupt'=>$ZV_hBk0fBdWNG85Tux,
																													
																													'runstate' => $runstate,
																													
																													'sm_base' => $sm_base,
																													
																													'urls_ext'=>$urls_ext,
																													
																													'urls_list_skipped' => $urls_list_skipped,
																													
																													'max_reached' => $this->eOXyCmLTA6b9tdKZEr>=$this->S5AtqhHQKHLV
																													
																													);
																													
																													}
																													
																													}
																													
																													$zMk0n1holCJ_UTn0T1g = new SiteCrawler();
																													
																													function FKCF9tEvilRxNUI8iv(){
																													
																													@tVk6gUrKf(UaddkUfuGH5RFHOb6.KqCKacpJJdF4y);
																													
																													if(@file_exists(UaddkUfuGH5RFHOb6.wYyOhHtxXYOm6QCRv))
																													
																													@rename(UaddkUfuGH5RFHOb6.wYyOhHtxXYOm6QCRv,UaddkUfuGH5RFHOb6.KqCKacpJJdF4y);
																													
																													}
																													
																													



































































































