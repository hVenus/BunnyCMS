// JavaScript Document
function BoxChange(a,box_id)
{var id_=(a.parentNode.id!="")?a.parentNode.id:((a.parentNode.parentNode.id!="")?a.parentNode.parentNode.id:a.parentNode.parentNode.parentNode.id);
 var li_a=document.getElementById(id_).getElementsByTagName("span");
 for(var i=0;i<li_a.length;i++)
{li_a[i].getElementsByTagName("img")[0].src=(li_a[i].getElementsByTagName("img")[0].src.indexOf(".jpg")==-1)?li_a[i].getElementsByTagName("img")[0].src.replace(new RegExp("1\.gif$"),"0\.gif"):li_a[i].getElementsByTagName("img")[0].src.replace(new RegExp("1\.jpg$"),"0\.jpg");
document.getElementById(box_id+i).style.display="none";}
for(var i=0;i<li_a.length;i++)
{if(a==li_a[i])document.getElementById(box_id+i).style.display="block";}
a.getElementsByTagName("img")[0].src=(a.getElementsByTagName("img")[0].src.indexOf(".jpg")==-1)?a.getElementsByTagName("img")[0].src.replace(new RegExp("0\.gif$"),"1\.gif"):a.getElementsByTagName("img")[0].src.replace(new RegExp("0\.jpg$"),"1\.jpg");}
function ChangeSet(frm_id,box_id)
{var links=document.getElementById(frm_id).getElementsByTagName("span")
for(var i=0;i<links.length;i++)
{links[i].onmouseover=function(){BoxChange(this,box_id);}}}
/*
.off{ display:none;}
.on{ display:block;}
*/