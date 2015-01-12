<?php
$article = new Article();
$list = $article->getImageArticle(2,10);
?>
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
        <?php  if(is_array($list) && count($list)>0){?>
            <?php foreach($list as $l){?>
                <td width=25%>
                    <div style="float:left;margin-left:5px;margin-top:4px;">
                        <p class=img>
                            <a style="display:block;width:160px;height:120px;border:solid #ccc 2px;" href="/view.php?id=<?php echo $l["id"];?>" target="_blank">
                                <img style="width:160px;height:120px;border:1px solid #fff;" src="<?php echo $l["image"];?>" border="0">
                            </a>
                        </p>
                        <p class=title style="text-align:center;">
                            <A HREF="/view.php?id=<?php echo $l["id"];?>" title='<?php echo $l["title"];?>' target="_blank"><?php echo $l["title"];?></A>
                        </p>
                    </div>
                </td>
            <?php }?>
        <?php }?>
    </tr>
</table>