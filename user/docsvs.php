<?php include "doconn.php";?><?php include "dosess.php";?><?php/***尊重著作权 请勿删改以下信息* @author    Yujianyue <admin@ewuyi.net>* @copyright Copyright (c) 2014-2112 12391.Net*/$ix = 0;if(strlen($ck)<2){$ix++;}if(strlen($xd)<2){$ix++;}$iy = 3-$ix;?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><title>.csv数据导入-<?php echo $ba;?></title><meta name="keywords" content="<?php echo $sitemeta;?>" /><link href="do_css.css" rel="stylesheet" type="text/css" /><script type="text/javascript">function $(Obj){return document.getElementById(Obj);}function Trim(Str){return  Str.replace(/(^\s*)|(\s*$)/g,"");}function lo(Num){if(Num == 1 || Num == 0){var tl = /(^[1-9]\d*(\.\d{1,2})?$)|(^0(\.\d{1,2})?$)/;if(!tl.test($("ys").value)){$('ys').style.borderColor='red';$("ud").innerHTML=" <strong>请填写本次上传统计金额,例:888.88！</strong>";return false;}else{$('ys').style.borderColor='';$("ud").innerHTML = "ok"}}if(Num == 2 || Num == 0){if($("name").value == ""){$('name').style.borderColor='red';$("fs").innerHTML=" <strong>请选择要上传的.csv文件！</strong>";return false;}else{$('name').style.borderColor='';$("fs").innerHTML = "ok"}}}</script><style>h3{font-size:16px;font-weight:600;font-family:Arial,微软雅黑;color:green;}.so_box{margin:0 auto;height:39px;line-height:39px;background-color:white;width:568px;border:1px #CACACA solid;position:relative;}.so_box .vi{margin:0 auto;height:38px;line-height:38px;font-size:28px;outline: none;border:0px;color:#333333;}.so_box .more{position:absolute;top:8px;right:88px;}.so_box .mere{position:absolute;top:0px; right:0px;}.so_box .buts{margin:0 auto;height:40px;line-height:40px;font-weight:600;background:#0180CF;color:white;border:0px;}</style></head><body><div id="main"><h2><span>.csv数据导入</span></h2><div id='fu'><table border="0" cellpadding="0"><tr><td valign="top"><div id="md"><fieldset class="w"><legend>直接上传CSV文件</legend><form action="docsv.apis.php" method="post" enctype="multipart/form-data" onsubmit="return lo(0);" ><table cellspacing="0" class="table"><tr><td align="right" style="width:128px;">金额合计：</td><td align="left"><input name="ys" id="ys" type="text" value="" onBlur="lo(1)" /><span id="ud" class="grey">填写第三列金额合计。</span></td></tr><tr><td align="right">选择文件：</td><td align="left"><input type="file" name="pic" class="vi" id="name" accept=".csv" onBlur="lo(2)" /><span id="fs" class="grey"></span></td></tr><tr><td align="right">&nbsp;</td><td align="left"><input name="Submit" type="submit" id="Submit" value="上传提交" /></td> </tr><tr><td align="right"><b>简易步骤：</b></td><td align="left">1. 将Excel二维结构表另存为逗号分开的<b>.csv</b>文件并上传;<br>2. 注意前三列内容为:<b><?php echo $ks; ?></b>(查询条件)，<?php if(strlen($ck)>1){?><?php echo $ck."（验证字段），"; }?><?php if(strlen($xd)>1){?><?php echo $xd."（金额字段）"; }?>；<br>3. 金额合计是<?php echo $xd."（金额字段）"; ?>列金额总和;用于判断导入数据是否正确。<br></td></tr></table></form>	</fieldset></div></td><td valign="top"><?php include "doleft.php";?></td></tr></table></div></div><?php echo $pt;?></body></html>