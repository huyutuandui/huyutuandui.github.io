var $=function(node){return document.getElementById(node);}function $(objId){return document.getElementById(objId);}function inst() {if ($("name")!=null) $("name").value = $("tishi1").innerHTML;if ($("wr")!=null) $("wr").value = $("tishi2").innerHTML;if ($("aa")!=null) $("aa").value = $("tishi3").innerHTML;if ($("code")!=null) $("code").value = $("tishi4").innerHTML;}function st(ids,Num){if ($(ids).value == $("tishi"+Num).innerHTML){$(ids).value = "";}}function mi(Num) {if(Num == 1 || Num == 0){//if($("name").value == "" || $("name").value == $("tishi1").innerHTML){var mb = /^1[3456789]\d{9,9}$/; //if(!mb.test($("name").value)){$("name").value = $("tishi1").innerHTML;$('11').style.borderColor='red';return false;}else{$('11').style.borderColor='green';}}if(Num == 2 || Num == 0){if($("wr").value == "" || $("wr").value == $("tishi2").innerHTML){$("wr").value = $("tishi2").innerHTML;$('22').style.borderColor='red';return false;}else{$('22').style.borderColor='green';}}if(Num == 3 || Num == 0){//if($("aa").value == "" || $("aa").value == $("tishi3").innerHTML){var tl = /(^[1-9]\d*(\.\d{1,2})?$)/; //1元起if(!tl.test($("aa").value)){$("aa").value = "1.88";$('33').style.borderColor='red';return false;}else{$('33').style.borderColor='green';}}if(Num == 4 || Num == 0){if ($("code")!=null){if (!$("code").value.match(/^[0-9]{4}$/)){$("code").value = $("tishi4").innerHTML;$('44').style.borderColor='red';return false;}else{$('44').style.borderColor='green';}}}if(Num == "0"){}}