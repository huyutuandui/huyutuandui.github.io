function $(Obj){return document.getElementById(Obj);}function Trim(Str){return  Str.replace(/(^\s*)|(\s*$)/g,"");}function cl(Num){if(Num == 1 || Num == 0){var MailReg = /^([a-zA-Z0-9]+[_|\_|\.|-]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;if(!MailReg.test(Trim($("od").value))){$("Result").innerHTML = " <strong>用户名为E-Mail格式!</strong>";return false;}else{$("Result").innerHTML = "";}}if(Num == 2 || Num == 0){if(Trim($("ne").value) == "" || Trim($("ne").value).length < 6){$("ri").innerHTML = " <strong>密码6-16个个字母数字组成！</strong>";return false;}else{$("ri").innerHTML = "";}}}