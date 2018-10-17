<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$kSxhg75064973MEATa=352486910;$iacTV36641413zXQpx=437279164;$pwZSQ59501974obleB=302225453;$pdASX52093221KJSQg=616129241;$wqbDj51172168KraOT=642298657;$JKCTx51631908yvcTY=408928260;$GNEdR65763928kTfdi=833822418;$wJkis78884328xyzkL=8432975;$Epufr36254972gxawu=377574661;$YnRhd96927428DpazM=525960082;$irIbB12542385CJaqj=621487811;$PaMij94643014hbZzM=209800319;$wdmcp89347458iygIY=279450131;$AHLVf72004630vuCYd=961007120;$RyXdk93714270EjWQX=485882108;$ItDcC43996603tUZxL=771217597;$SwqnE81543490agqcf=566844285;$aPsNn62015211JeSTJ=270192552;$Jdwqm61136675LoxWi=345158200;$sZZMc67563818eJGop=703146625;$KYojK52989616qBZCF=88970269;$QweeG19054464Uacpw=186528151;$YZhnI10605521qTwlJ=563404930;$ukgrB39076651WWvGP=175980636;$QHzVB57868457jNYIL=871850477;$Wbstk63072281hQxOA=512033981;$EklRn45953923hVXUc=159201397;$Vkfvi81330473qhTVW=161803416;$KNNZX18554226wSUDM=118887505;$knCvT56002353OIWrp=424080213;$McMrU51030119NFmQW=943187312;$peHAr24768848KMOCP=817092366;$kKahJ62043561QqFnO=7042188;$zvWsh91474959IZfNB=450251513;$zDiHJ56258203fptyz=423691372;$iQhvz74198983XalvG=514675138;$cpeKt41678030KeXic=643423439;$rHTOJ51990487JlnvC=183560708;$Wsozk47457343NgrAd=287737515;$GeSOd90703068mycDh=110135490;$XKtEJ23548533miQMh=994050266;$KkziT66565457wNAtI=797029804;$QSFTG88070354AWUUy=463357658;$UBztL18509998DHywy=252383269;$HPkiW82741891QfshS=47768071;$wHzoC74377706rLtSd=544987100;$mNOQT57555285CSXLf=55810384;$wjHhx75975486IUbWp=413845753;$TDuUW71251729VGaSo=714936138;$iKSqg18914029SSAAa=668051836;?><?php include bW3dC490kntpArw.'page-top.inc.php'; $vBDddMEVkj = JdESTuAPhiIbMFX(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($vBDddMEVkj); $BzBFjaxSidJZrWvt4Y=$_GET['log']; if($BzBFjaxSidJZrWvt4Y){ ?>
																												<div id="sidenote">
																												<div class="block1head">
																												Crawler logs
																												</div>
																												<div class="block1">
																												<?php for($i=0;$i<count($vBDddMEVkj);$i++){ $QLlw7y2ysLi_B = nZR5kSVLqTuFNUmyRLY($vBDddMEVkj[$i]); if($i+1==$BzBFjaxSidJZrWvt4Y)echo '<u>'; ?>
																												<a href="index.<?php echo $nn4spiZL1?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$QLlw7y2ysLi_B['time'])?></a>
																												( +<?php echo count($QLlw7y2ysLi_B['newurls'])?> -<?php echo count($QLlw7y2ysLi_B['losturls'])?>)
																												</u>
																												<br>
																												<?php	} ?>
																												</div>
																												</div>
																												<?php } ?>
																												<div<?php if($BzBFjaxSidJZrWvt4Y) echo ' id="shifted"';?> >
																												<h2>ChangeLog</h2>
																												<?php if($BzBFjaxSidJZrWvt4Y){ $QLlw7y2ysLi_B = nZR5kSVLqTuFNUmyRLY($vBDddMEVkj[$BzBFjaxSidJZrWvt4Y-1]); ?><h4><?php echo date('j F Y, H:i',$QLlw7y2ysLi_B['time'])?></h4>
																												<div class="inptitle">New URLs (<?php echo count($QLlw7y2ysLi_B['newurls'])?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$QLlw7y2ysLi_B['newurls']))?></textarea>
																												<div class="inptitle">Removed URLs (<?php echo count($QLlw7y2ysLi_B['losturls'])?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$QLlw7y2ysLi_B['losturls']))?></textarea>
																												<div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo count($QLlw7y2ysLi_B['urls_list_skipped'])?>)</div>
																												<textarea style="width:100%;height:300px"><?php foreach($QLlw7y2ysLi_B['urls_list_skipped'] as $k=>$v)echo @htmlspecialchars($k.' - '.$v)."\n";?></textarea>
																												<?php function N4j5mvEtG($nl){ $lc = ''; $it = 0; if($nl) foreach($nl as $l=>$il){ $lc .= $l."\n"; foreach($il as $i=>$c){ $lc .= "\t".$i."\n"; $it++; } } return array($it,$lc); } ?>
																												<?php $ni = N4j5mvEtG($QLlw7y2ysLi_B['newurls_i']); ?>
																												<div class="inptitle">New images (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = N4j5mvEtG($QLlw7y2ysLi_B['losturls_i']); ?>
																												<div class="inptitle">Removed images (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = N4j5mvEtG($QLlw7y2ysLi_B['newurls_v']); ?>
																												<div class="inptitle">New videos (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php $ni = N4j5mvEtG($QLlw7y2ysLi_B['losturls_v']); ?>
																												<div class="inptitle">Removed videos (<?php echo $ni[0]?>)</div>
																												<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																												<?php	 }else{ ?>
																												<table>
																												<tr class=block1head>
																												<th>No</th>
																												<th>Date/Time</th>
																												<th>Indexed pages</th>
																												<th>Processed pages</th>
																												<th>Skipped pages</th>
																												<th>Proc.time</th>
																												<th>Bandwidth</th>
																												<th>New URLs</th>
																												<th>Removed URLs</th>
																												<th>Broken links</th>
																												<?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
																												</tr>
																												<?php  $EzLCQ_OPsI_87az7Blt=array(); for($i=0;$i<count($vBDddMEVkj);$i++){ $QLlw7y2ysLi_B = nZR5kSVLqTuFNUmyRLY($vBDddMEVkj[$i]); if(!$QLlw7y2ysLi_B)continue; foreach($QLlw7y2ysLi_B as $k=>$v)if(!is_array($v))$EzLCQ_OPsI_87az7Blt[$k]+=intval($v);else $EzLCQ_OPsI_87az7Blt[$k]+=count($v); ?>
																												<tr class=block1>
																												<td><?php echo $i+1?></td>
																												<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$QLlw7y2ysLi_B['time'])?></a></td>
																												<td><?php echo number_format($QLlw7y2ysLi_B['ucount'])?></td>
																												<td><?php echo number_format($QLlw7y2ysLi_B['crcount'])?></td>
																												<td><?php echo count($QLlw7y2ysLi_B['urls_list_skipped'])?></td>
																												<td><?php echo number_format($QLlw7y2ysLi_B['ctime'],2)?>s</td>
																												<td><?php echo number_format($QLlw7y2ysLi_B['tsize']/1024/1024,2)?></td>
																												<td><?php echo count($QLlw7y2ysLi_B['newurls'])?></td>
																												<td><?php echo count($QLlw7y2ysLi_B['losturls'])?></td>
																												<td><?php echo count($QLlw7y2ysLi_B['u404'])?></td>
																												<?php if($grab_parameters['xs_imginfo'])echo '<td>'.$QLlw7y2ysLi_B['images_no'].'</td>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$QLlw7y2ysLi_B['videos_no'].'</td>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$QLlw7y2ysLi_B['news_no'].'</td>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$QLlw7y2ysLi_B['rss_no'].'</td>';?>
																												</tr>
																												<?php }?>
																												<tr class=block1>
																												<th colspan=2>Total</th>
																												<th><?php echo number_format($EzLCQ_OPsI_87az7Blt['ucount'])?></th>
																												<th><?php echo number_format($EzLCQ_OPsI_87az7Blt['crcount'])?></th>
																												<th>-</th>
																												<th><?php echo number_format($EzLCQ_OPsI_87az7Blt['ctime'],2)?>s</th>
																												<th><?php echo number_format($EzLCQ_OPsI_87az7Blt['tsize']/1024/1024,2)?> Mb</th>
																												<th><?php echo ($EzLCQ_OPsI_87az7Blt['newurls'])?></th>
																												<th><?php echo ($EzLCQ_OPsI_87az7Blt['losturls'])?></th>
																												<th>-</th>
																												<?php if($grab_parameters['xs_imginfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_videoinfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_newsinfo'])echo '<th></th>';?>
																												<?php if($grab_parameters['xs_rssinfo'])echo '<th></th>';?>
																												</tr>
																												</table>
																												<?php } ?>
																												</div>
																												<?php include bW3dC490kntpArw.'page-bottom.inc.php'; 



































































































