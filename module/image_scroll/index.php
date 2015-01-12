<?php
$article = new Article();
$list = $article->getImageArticle(0, 10);

?>
<link rel='stylesheet' type='text/css' href='/assets/css/rollpic.css'>
<script type='text/javascript' src='/assets/js/jquery-1.2.6.min.js'></script>
<SCRIPT type='text/javascript'>
    $(function() {
        $('#rollpicobjr1inu')
            .after('<div id=pagerr1inu class=pager>')
            .cycle({
                fx:     'scrollLeft',
                speed:   500,
                timeout: 3000,
                pause:   1,
                pager:  '#pagerr1inu'
            });
    });
</SCRIPT>
<div class='rollpicTB' style='width:260px;FLOAT: left;TEXT-ALIGN: center;'>
    <div id='rollpicobjr1inu' class='rollpicobj' style='HEIGHT:195px;'>
        <?php  if(is_array($list) && count($list)>0){?>
        <?php foreach($list as $l){?>
                <P>
                    <A title='<?php echo $l["title"];?>' href='/view.php?id=<?php echo $l["id"];?>' target=_blank>
                        <IMG style='HEIGHT:165px;' alt='<?php echo $l["title"];?>' src='<?php echo $l["image"];?>'>
                    </A>
                    <A title='<?php echo $l["title"];?>' href='/view.php?id=<?php echo $l["id"];?>' target='_blank'><?php echo $l["title"];?></A>
                </P>
        <?php }?>
        <?php }?>
    </div>
</div>