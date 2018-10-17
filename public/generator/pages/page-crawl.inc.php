<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$ZJkHz23753630lOAFC=817670242;$DBGQc67023403QyywR=494168558;$IacMA19922041MweDT=12190858;$dKhOb56174436JNHFT=440340873;$AgjaR11780623wbLVf=710154388;$DREJk15198679xWbwd=541086263;$NkSvP29101093ojCjE=238843547;$JkWPe94975717sZRRd=691415515;$GVkJY81576591fHLGg=277979710;$HKqyH97905887vrbbe=306769077;$rYYtA47039499ohnqb=183679990;$FmpDM60734275zVDon=319867212;$zHzRe77622403SiyzV=981574765;$AHcpn60195106CHwtR=501619477;$HKRcQ69571791FPfGf=335512476;$WFxGm61766601cawdO=203491067;$nJDWo54249912BDJLd=981966714;$WEFSS24950570bSeWR=45864914;$yeVed26152103RwzbG=486779894;$LbZad83997147fkcqt=917335650;$VIeTV75740407ifrhp=830767134;$dZFWz17204844ddtRH=896296116;$CAbHn26191913esYsZ=280699335;$tRnIh62604744tQtrH=66469127;$iSqpi73887390atnUm=152344047;$Xwxma84429183YDdWQ=605052154;$TSfRj22217177zVwAI=902750007;$gQAIR48403449APFOU=87822708;$KJyQO22465342CpgDm=406324306;$fYmlw32146794dKjRU=179962571;$lBpHw73809042XeWul=82308144;$NxTpQ20019546OtQEJ=932359495;$xzjAp58911971NYXBh=993565760;$sJcsD27151822IQWmu=383188026;$jkgBx67513164vGGgM=9140075;$KLREy62732098zBbXr=187860661;$GBHTB19866698oDTea=447190630;$zasCW54531197VXlrU=990590459;$Wwjea99361000QRBJn=526170684;$DDvJL60623657cHaLZ=776855754;$FuCXO56900707XwsqG=780356688;$Iitjg29624593ncXQc=829474944;$MZNhv17398902DMaMF=395786682;$cbMDu81722032pJlVC=175739082;$cFUJe44993400mLJsA=976645322;$RhWui99515115MlMlT=677184130;$WVbbw17111439hSsvT=712848326;$zUchV78313082BDUmi=372091731;$eMrRN12199873zPOru=748704003;$HvFPp13828573RFBLp=960768890;?><?php include bW3dC490kntpArw.'page-top.inc.php'; $JAby_jJm0al6dPufE = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ i7Vxw209ALFW(oF_i0AwG7t,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2><a href="index.'.$nn4spiZL1.'?op=crawl">Return to crawler page</a>'; }else if(file_exists($fn=UaddkUfuGH5RFHOb6.wYyOhHtxXYOm6QCRv)&&(time()-filemtime($fn)<10*60)){ $tA4c4Tc7H_S=true; $JAby_jJm0al6dPufE = 1; } if($JAby_jJm0al6dPufE){ if($tA4c4Tc7H_S) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$nn4spiZL1.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																									<script type="text/javascript">
																									var lastupdate = 0;
																									var framegotsome = false;
																									function AIA1k0v7pg()
																									{
																									var cd = new Date();
																									if(!lastupdate)return false;
																									var df = (cd - lastupdate)/1000;
																									<?php if($grab_parameters['xs_autoresume']){?>
																									var re = document.getElementById('rlog');
																									re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																									var ifr = document.getElementById('cproc');
																									var frfr = window.frames['clog'];
																									
																									var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																									if(typeof frfr != 'undefined') {
																									if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																									!frfr.pageLoadCompleted) 
																									{
																									
																									framegotsome = true;
																									doresume = false;
																									}
																									
																									if(!frfr.document.getElementById('glog')) {	
																									
																									}
																									}
																									if(doresume)
																									{
																									var rle = document.getElementById('runlog');
																									lastupdate = cd;
																									if(rle)
																									{
																									rle.style.display  = '';
																									rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																									}
																									var lc = ifr.src;
																									lc = lc.replace(/resume=\d*/,'resume=1')
																									lc = lc.replace(/seed=\d*/,'seed='+Math.random())
																									
																									ifr.src = lc;
																									}
																									<?php } ?>
																									}
																									window.setInterval('AIA1k0v7pg()', 1000);
																									</script>
																									<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $nn4spiZL1?>?op=crawlproc&bg=<?php echo $_REQUEST['bg']?>&resume=<?php echo $_REQUEST['resume']?>&seed=<?php echo rand(1E8,1E9);?>"></iframe>
																									<!--
																									<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																									-->
																									<div id="rlog" style="overflow:auto;"></div>
																									<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																									<?php }else if(!$fzxJ47o8FI6sxIf2r) { ?>
																									<div id="sidenote">
																									<?php include bW3dC490kntpArw.'page-sitemap-detail.inc.php'; ?>
																									</div>
																									<div id="shifted">
																									<h2>Crawling</h2>
																									<form action="index.<?php echo $nn4spiZL1?>?submit=1" method="POST" enctype2="multipart/form-data">
																									<input type="hidden" name="op" value="crawl">
																									<div class="inptitle">Run in background</div>
																									<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																									<?php if(@file_exists(UaddkUfuGH5RFHOb6.vntajBz6b_qlNBI)){ if(@file_exists(UaddkUfuGH5RFHOb6.KqCKacpJJdF4y) &&(filemtime(UaddkUfuGH5RFHOb6.KqCKacpJJdF4y)>filemtime(UaddkUfuGH5RFHOb6.vntajBz6b_qlNBI)) ){ $ye0INWgs5rf = @zwiHu7GkUin(ZTwLGIOL6_a05(UaddkUfuGH5RFHOb6.KqCKacpJJdF4y, true)); } if(!$ye0INWgs5rf){ $D1Elg2m2dQMCb = @zwiHu7GkUin(ZTwLGIOL6_a05(UaddkUfuGH5RFHOb6.vntajBz6b_qlNBI, true)); $ye0INWgs5rf = $D1Elg2m2dQMCb['progpar']; } ?>
																									<div class="inptitle">Resume last session</div>
																									<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session 
																									<br />Updated on <?php  $vXBZzGn_iLkFjo = filemtime(UaddkUfuGH5RFHOb6.vntajBz6b_qlNBI); echo date('Y-m-d H:i:s',$vXBZzGn_iLkFjo); if(time()-$vXBZzGn_iLkFjo<600)echo ' ('.(time()-$vXBZzGn_iLkFjo).' seconds ago) '; ?>, 
																									<?php echo	'Time elapsed: '.cO1V1AzpyvnGEPcw($ye0INWgs5rf[0]).',<br />Pages crawled: '.intval($ye0INWgs5rf[3]). ' ('.intval($ye0INWgs5rf[7]).' added in sitemap), '. 'Queued: '.$ye0INWgs5rf[2].', Depth level: '.$ye0INWgs5rf[5]. '<br />Current page: '.$ye0INWgs5rf[1].' ('.number_format($ye0INWgs5rf[10],1).')'; } ?>
																									</label>
																									<div class="inptitle">Click button below to start crawl manually:</div>
																									<div class="inptitle">
																									<input class="button" type="submit" name="crawl" value="Run" style="width:150px;height:30px">
																									</div>
																									</form>
																									<h2>Cron job setup</h2>
																									You can use the following command line to setup the cron job for sitemap generator:
																									<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																									<h2>Web Cron setup</h2>
																									If you cannot setup a regular cron task on your server, you can try a web cron instead:
																									<div class="inptitle"><?php 	echo $dvoNQiK69B8.'/index.php?op=crawlproc&resume=1'?></div>
																									</div>
																									<?php } include bW3dC490kntpArw.'page-bottom.inc.php'; 



































































































