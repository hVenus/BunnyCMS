<?php
require("bootstrap.php");
$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;
$page = isset($_REQUEST['page'])?$_REQUEST['page']:1;

$article = new Article();
$category = new Category();
$child = $category->getCategoryChild($id);
$in = "";
foreach($child as $c){
    $in .= $c['id'].",";
}
$in .= $id;
$in = trim($in, ',');
$results = $article->getArticleByCategoryPage( $in, $page, 10);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
    <TITLE></TITLE>
    <META content="text/html; charset=utf-8" http-equiv=Content-Type>
    <META content=IE=EmulateIE7 http-equiv=X-UA-Compatible>
    <meta name="keywords" content=" ">
    <meta name="description" content="">
    <LINK rel=stylesheet type=text/css href="/assets/css/base.css" media=all>
    <META name=GENERATOR content="MSHTML 9.00.7930.16406">
</HEAD>
<SCRIPT LANGUAGE="JavaScript">
    //屏蔽可忽略的js脚本错误
    function killErr(){
        return true;
    }
    window.onerror=killErr;
</SCRIPT>

<BODY>
<DIV class=wrapper>

    <DIV class=mainnav>
        <UL>
            <LI><A id=nav_index title=首页 href="/">首页</A></LI>
            <LI class=link_2><A id=nav_gk title=道德建设 href="/category.php?id=1">道德建设</A> </LI>
            <LI class=link_3><A id=nav_news title=崇德尚礼 href="/category.php?id=3">崇德尚礼</A> </LI>
            <LI class=link_6><A id=nav_jyky title=社会公益 href="/category.php?id=4">社会公益</A> </LI>
            <LI class=link_7><A id=nav_jsyd title=文化传承 href="/category.php?id=5">文化传承</A> </LI>
            <LI class=link_8><A id=nav_xstd title=EQ速递 href="/category.php?id=6">EQ速递</A> </LI>
            <LI class=link_9><A id=nav_jzxx title=身心健康 href="/category.php?id=7">身心健康</A> </LI>
            <LI class=link_9><A id=nav_jxzy title=社会百科 href="/category.php?id=8">社会百科</A> </LI>
            <LI class=link_9><A id=nav_zsxx title=奇思妙想 href="/category.php?id=9">奇思妙想</A> </LI>
            <LI class=link_5><A id=nav_xzjh title=活动图片 href="/category.php?id=2">活动图片</A> </LI>
            <LI class=link_10><A id=nav_bbs title=阳光节 href="/category.php?id=10">阳光节</A> </LI>
        </UL>
        <div class=directvenue><STRONG>热门栏目 :</STRONG>
            <A title="" href="/category.php?id=18" target=_blank>慈善助学</A>|
            <A title="" href="/category.php?id=19" target=_blank>志愿行动</A>|
            <A title="" href="/category.php?id=20" target=_blank>环境保护</A>|
            <A title="" href="/category.php?id=21" target=_blank>社团活动</A>|
            <A title="" href="/category.php?id=22" target=_blank>知识传播</A>|
            <A title="" href="/category.php?id=23" target=_blank>青少年维权</A>|
            <A title="" href="/category.php?id=24" target=_blank>国学堂</A>|
            <A title="" href="/category.php?id=25" target=_blank>民俗风情</A>|
            <A title="" href="/category.php?id=26" target=_blank>雅乐共赏</A>|
            <A title="" href="/category.php?id=27" target=_blank>戏曲频道</A>|
            <A title="" href="/category.php?id=28" target=_blank>阅读时间</A> |
            <A title="" href="/category.php?id=29" target=_blank>我们的节日</A>
        </div>
        <!--directvenue  END--></DIV>
    <!--mainnav 导航 END-->

    <div class="nav_guide">
        当前位置：<a href="/">首页</a>  -&gt; 分类文章
    </div>

    <SCRIPT type=text/javascript>setNav('index');</SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        <!--//目的是为了做风格方便
        document.write('<div style="clear:both;"></div><div class="wrap">');
        //-->
    </SCRIPT>

    <!--
    -->
    <div class="MainTable MainDivTable">
        <div class="Main">


            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="dragTable"  id="list_article" style="clear:both;display:">
                <tr>
                    <td class="head">
                        <h3 class="L"></h3>
                        <span class="TAG"><a editurl='http://www.qsnhdw.com/do/job.php?job=list&fid=3&act=do'>校园风声</a></span>
                        <h3 class="R"></h3>
                    </td>
                </tr>
                <tr>
                    <td class="middle" style="padding:0 0 0 0;">
                        <?php if(is_array($results) && count($results)>0){?>
                            <?php foreach($results as $item){?>
                                <table width="96%" border="0" cellspacing="0" cellpadding="0" style="margin-left:18px;margin-top:10px;border-bottom:1px dotted #ccc;">
                                    <tr>
                                        <td style="line-height:28px;"><a style="color:#003399;font-size:14px;" href="/view.php?id=<?php echo $item['id'];?>" target="_self" title='<?php echo $item['title'];?>'><b><u><?php echo $item['title'];?></u></b></a></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666;line-height:200%;"><?php echo mb_substr($item['content'], 0 ,40, "UTF8");?> </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#666;line-height:35px"> 发表于：<a style="color:#FF6600;">2011-11-08</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 　　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A href="/view.php?id=<?php echo $item['id'];?>" target="_self"><u>查阅全文...</u></A>  </td>
                                    </tr>
                                </table>
                            <?php }?>
                        <?php }?>



                        <div class="page">
                            <a href="/category.php?page=<?php if($page<=1){echo 1;}else{echo $page-1;}?>" title="上一页">上一页</A>
                            <a href="/category.php?page=<?php echo $page+1;?>" title="下一页">下一页</A>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="foot">
                        <h3 class="L"></h3>
                        <h3 class="R"></h3>
                    </td>
                </tr>
            </table>
        </div>
        <div class="Side">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="dragTable" id="sonSortName" style="background:#FFFFFF">
                <tr>
                    <td class="head" height="19">
                        <h3 class="L"></h3>
                        <span class="TAG">相关栏目</span>
                        <h3 class="R"></h3>
                    </td>
                </tr>
                <tr>
                    <td class="middle" align="left">
                        <div style="width:100%;padding-top:5px;height:45px;background:#F9F9F9;">
                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=18">慈善助学</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=19">志愿行动</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=20">环境保护</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=21">社团活动</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=22">知识传播</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=23">青少年维权</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=24">国学堂</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=25">民俗风情</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=26">雅乐共赏</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=27">戏曲频道</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=28">阅读时间</a></div>

                            <div style="width:46%;background:url(http://www.qsnhdw.com/images/default/article_elite.gif) no-repeat 0.3em 0;padding-left:0.3em;text-indent:1.5em;float:left;margin-left:4px;line-height:21px;"><a style="font-weight:bold;" href="/category.php?id=29">我们的节日</a></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="foot">
                        <h3 class="L"></h3>
                        <h3 class="R"></h3>
                    </td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="dragTable">
                <tr>
                    <td class="head" height="19">
                        <h3 class="L"></h3>
                        <span class="TAG">热门文章</span>
                        <h3 class="R"></h3>
                    </td>
                </tr>
                <tr>
                    <td class="middle" align="left">
                        aaa
                    </td>
                </tr>
                <tr>
                    <td class="foot">
                        <h3 class="L"></h3>
                        <h3 class="R"></h3>
                    </td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="dragTable">
                <tr>
                    <td class="head">
                        <h3 class="L"></h3>
                        <span class="TAG">图文信息</span>
                        <h3 class="R"></h3>
                    </td>
                </tr>
                <tr>
                    <td class="middle" valign="top" align="left">

                    </td>
                </tr>
                <tr>
                    <td class="foot">
                        <h3 class="L"></h3>
                        <h3 class="R"></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!--
    -->
    <SCRIPT LANGUAGE="JavaScript">
        <!--//目的是为了做风格方便
        document.write('</div>');
        //-->
    </SCRIPT>

    <DIV class=footer>
        <DIV class=f-nav><A
                href="#">关于我们</A><SPAN>|</SPAN><A
                href="#">联系我们</A><SPAN>|</SPAN><A
                href="#">商务合作</A><SPAN>|</SPAN><A
                href="#">网站制作</A><SPAN>|</SPAN><A
                href="#">免责声明</A><SPAN>|</SPAN>></DIV>
        <DIV class=copyright>
            <P><A
                    href="http://www.qsnhdw.com/"></A> -</P>
            <P>&copy;版权所有  all rights reserved ICP备0000000号 </P>

            |

        </DIV></DIV>
    <SCRIPT type=text/javascript>
        LAZY.init();
        LAZY.run();
    </SCRIPT>

</BODY></HTML>
