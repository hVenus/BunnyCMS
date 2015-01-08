<?php
/**
 * @package    Joomla.Site
 *
 * @copyright  Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

if (version_compare(PHP_VERSION, '5.3.10', '<'))
{
    die('Your host needs to use PHP 5.3.10 or higher to run this version of Joomla!');
}


require("bootstrap.php");
$article = new Article();

// 社会公益
$category = new Category();
$child = $category->getCategoryChild(4);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 4;
$in = trim($in, ',');
$shgy = $article->getArticleByCategory( $in, 6);

// 时事平台
$child = $category->getCategoryChild(1);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 1;
$in = trim($in, ',');
$sspt = $article->getArticleByCategory($in, 9);

// 奇思妙想
$qsmx = $article->getArticleByCategory(9, 14);

// 文化传承
$child = $category->getCategoryChild(5);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 5;
$in = trim($in, ',');
$whcc = $article->getArticleByCategory($in, 10);

// 崇德尚礼
$child = $category->getCategoryChild(3);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 3;
$in = trim($in, ',');
$cdsl = $article->getArticleByCategory($in, 17);

// 感恩亲情
$gnqq = $article->getArticleByCategory(30, 17);

// 洒扫应对
$ssyd = $article->getArticleByCategory(31, 17);

// 身心健康
$child = $category->getCategoryChild(7);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 7;
$in = trim($in, ',');
$sxjk = $article->getArticleByCategory($in, 17);

// 青少年维权
$qsnwq = $article->getArticleByCategory(23, 17);

// 阳光节
$ygj = $article->getArticleByCategory(10, 17);

// 社会百科
$child = $category->getCategoryChild(8);
$in = "";
foreach($child as $c){
	$in .= $c['id'].",";
}
$in .= 8;
$in = trim($in, ',');
$shbk = $article->getArticleByCategory($in, 17);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
    <TITLE></TITLE>
    <META content="text/html; charset=utf-8" http-equiv=Content-Type>
    <META content=IE=EmulateIE7 http-equiv=X-UA-Compatible>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <LINK rel=stylesheet type=text/css href="/assets/css/base.css" media=all>
</HEAD>
<SCRIPT LANGUAGE="JavaScript">

</SCRIPT>

<BODY>
<div class=wrapper>
	<!--div class="header">
		<!--<DIV class=header_1>1111111111</DIV>-->
		<div class="header_2"><div class="header_2_box">
				<table width="990" border="0" align="center">
					<tbody><tr>
						<td width="666" class="login">
							<span id="head_loginer"> </span>
						</td>
						<td width="314" class="info">
							<div align="right">
							</div>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<h1>丽一社区“蒲公英”关爱网</h1>
	</div--><!--header 头部 END-->
    <div class=mainnav>
        <UL>
            <LI><A id=nav_index title=首页 href="/">首页</A></LI>
            <LI class=link_2><A id=nav_gk title=时事平台 href="/category.php?id=1">思想道德</A> </LI>
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
        <!--directvenue  END--></div>
    <!--mainnav 导航 END-->

    <SCRIPT type=text/javascript>setNav('index');</SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        <!--//目的是为了做风格方便
        document.write('<div style="clear:both;"></div><div class="wrap">');
        //-->
    </SCRIPT>

    <!--
    -->
    <style type="text/css">
        <!--
        .STYLE1 {color: #FF0000}
        -->
    </style>

    <div style="margin-top:10px;" class=wrap>
        <div class=main>
            <div class="box jjsb">
                <div class=box_con>
                    <div class=box_tt>

                        <table width="741" border="0">
                            <tr>
                                <td width="387"><H2 align="center">社会公益</H2></td>
                            </tr>
                        </table>
                    </div>
                    <div class=box_hot>
                        <div class=scrollbox>
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
                            <div class='rollpicTB' style='width:260px;FLOAT: left;TEXT-ALIGN: center;'><div id='rollpicobjr1inu' class='rollpicobj' style='HEIGHT:195px;'><P><A title='红十字会总会客岁三' href='http://www.qsnhdw.com/JiaoYu/s3979.html' target=_blank><IMG style='HEIGHT:165px;' alt='红十字会总会客岁三' src='http://kids.youth.cn/xinli/zx/./201107/./W020110720353410624452.jpg'></A><A title='红十字会总会客岁三' href='http://www.qsnhdw.com/JiaoYu/s3979.html' target='_blank'>红十字会总会客岁三</A></P><P><A title='文化部部长蔡武：艺' href='http://www.qsnhdw.com/JiaoYu/s3978.html' target=_blank><IMG style='HEIGHT:165px;' alt='文化部部长蔡武：艺' src='http://kids.youth.cn/xinli/zx/./201107/./W020110720340555786167.jpg'></A><A title='文化部部长蔡武：艺' href='http://www.qsnhdw.com/JiaoYu/s3978.html' target='_blank'>文化部部长蔡武：艺</A></P><P><A title='南京主城区降特大暴' href='http://www.qsnhdw.com/JiaoYu/s3974.html' target=_blank><IMG style='HEIGHT:165px;' alt='南京主城区降特大暴' src='http://kids.youth.cn/xinli/zx/./201107/./W020110719459459616143.jpg'></A><A title='南京主城区降特大暴' href='http://www.qsnhdw.com/JiaoYu/s3974.html' target='_blank'>南京主城区降特大暴</A></P><P><A title='贫穷女生初中起始打' href='http://www.qsnhdw.com/JiaoYu/s3973.html' target=_blank><IMG style='HEIGHT:165px;' alt='贫穷女生初中起始打' src='http://kids.youth.cn/xinli/zx/./201107/./W020110719385537921066.jpg'></A><A title='贫穷女生初中起始打' href='http://www.qsnhdw.com/JiaoYu/s3973.html' target='_blank'>贫穷女生初中起始打</A></P><P><A title='红学研讨或将有重大' href='http://www.qsnhdw.com/JiaoYu/s3970.html' target=_blank><IMG style='HEIGHT:165px;' alt='红学研讨或将有重大' src='http://kids.youth.cn/xinli/zx/./201107/./W020110718608955781388.jpg'></A><A title='红学研讨或将有重大' href='http://www.qsnhdw.com/JiaoYu/s3970.html' target='_blank'>红学研讨或将有重大</A></P></div></div>
                        </div>
                        <!--scrollbox  END-->
                        <div class=box_hot_R>
							<?php if(is_array($shgy) && count($shgy)>0){?>
								<?php
								$shgy_1 = $shgy[0];
								unset($shgy[0]);
								?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:5px;">
                                <tr>
                                    <td align="center" style="padding-bottom:5px;"><a href="/view.php?id=<?php echo $shgy_1["id"];?>" target="_blank"><b><font color="#D50000" style="font-size:16px;"><?php echo $shgy_1["title"];?></font></b></a></td>
                                </tr>
                                <tr>
                                    <td align="left" height="18" valign="middle" style="border-bottom:1px dotted #ccc;line-height:150%;">
										&#160;&#160;&#160;&#160;
										<?php echo mb_substr($shgy_1["content"], 0, 10);?>
                                        [<a href="/view.php?id=<?php echo $shgy_1["id"];?>">查看全文</a>]
									</td>
                                </tr>
                            </table>
							<?php }?>
							<?php if(is_array($shgy) && count($shgy)>0){?>
							<?php foreach($shgy as $item){?>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="85%" style="line-height:180%;">&#160;<font color="#0000FF">[<A HREF="/view.php?id=<?php echo $item["id"];?>" style="color:#0000FF;"><?php echo $item["category_name"];?></A>]</font>
											<A HREF="/view.php?id=<?php echo $item["id"];?>" target='_blank' style=";"><?php echo $item["title"];?></a></td>
										<td width="15%" style="line-height:180%;">&#160; <font color="#993300">[<?php echo date("m-d",$item["update_time"]);?>]</font></td>
									</tr>
								</table>
							<?php }?>
							<?php }?>
                        </div><!--box_hot_R  END--></div><!--box_hot  END--></div>
                <div class=box_bottom></div></div><!--box 校园新闻 END--></div><!--main  END-->
        <div class=side>
            <td width="387"><h5 align="center" class="STYLE1">时事平台</h5></td>
			<?php if(is_array($sspt) && $sspt>0){?>
			<?php foreach($sspt as $item){?>
            <div style="widht:100%;height:20px;background:;border-bottom:#cccccc 0px;margin-left:5px;margin-right:2px;">
				<span style="width:100%;background:url(http://127.0.0.1/images/default/arrow.gif) no-repeat;background-position: 0% 40%;padding-left:15px;">
					<A target=_blank HREF="/view.php?id=<?php echo $item["id"];?>" style="color:#333;font-weight:normal;font-size:12px;text-decoration:none;"><?php echo $item["title"];?></A>
				</span>
			</div>
			<?php }?>
			<?php }?>
            <!--side  END--></div>
        <!--wrap 栏一 END-->

        <div class=wrap>
            <div class=main>
                <div class="box sbzg">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>活动图片</H2>
							<A class=more title="" href="http://www.qsnhdw.com/MingShi/" target=_blank>更多</A></div>
                        <UL class="video_list video_list_big">
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td width=25%><div style="float:left;margin-left:5px;margin-top:4px;">
                                            <p class=img>
												<a style="display:block;width:160px;height:120px;border:solid #ccc 2px;" href="http://www.qsnhdw.com/MingShi/s3275.html" target="_blank">
													<img style="width:160px;height:120px;border:1px solid #fff;" src="http://kids.youth.cn/wskt/msmx/./201103/./W020110328417920250391.jpg" border="0">
												</a>
											</p>
                                            <p class=title style="text-align:center;"><A HREF="http://www.qsnhdw.com/MingShi/s3275.html" title='钱学森青少年航天科学院昨设立' target="_blank">钱学森青少年航天科</A></p>
                                        </div></td><td width=25%><div style="float:left;margin-left:5px;margin-top:4px;">
                                            <p class=img><a style="display:block;width:160px;height:120px;border:solid #ccc 2px;" href="http://www.qsnhdw.com/MingShi/s3268.html" target="_blank"><img style="width:160px;height:120px;border:1px solid #fff;" src="http://kids.youth.cn/wskt/msmx/./201103/./W020110322334326813253.jpg" border="0"></a></p>
                                            <p class=title style="text-align:center;"><A HREF="http://www.qsnhdw.com/MingShi/s3268.html" title='湖北宜昌举办中小学教师巴山舞培训' target="_blank">湖北宜昌举办中小学</A></p>
                                        </div></td><td width=25%><div style="float:left;margin-left:5px;margin-top:4px;">
                                            <p class=img><a style="display:block;width:160px;height:120px;border:solid #ccc 2px;" href="http://www.qsnhdw.com/MingShi/s3264.html" target="_blank"><img style="width:160px;height:120px;border:1px solid #fff;" src="http://kids.youth.cn/wskt/msmx/./201103/./W020110321347627520641.jpg" border="0"></a></p>
                                            <p class=title style="text-align:center;"><A HREF="http://www.qsnhdw.com/MingShi/s3264.html" title='74岁老教师寻梦“哥德巴赫猜测”' target="_blank">74岁老教师寻梦“哥</A></p>
                                        </div></td><td width=25%><div style="float:left;margin-left:5px;margin-top:4px;">
                                            <p class=img><a style="display:block;width:160px;height:120px;border:solid #ccc 2px;" href="http://www.qsnhdw.com/MingShi/s3262.html" target="_blank"><img style="width:160px;height:120px;border:1px solid #fff;" src="http://kids.youth.cn/wskt/msmx/./201103/./W020110321323048991738.jpg" border="0"></a></p>
                                            <p class=title style="text-align:center;"><A HREF="http://www.qsnhdw.com/MingShi/s3262.html" title='南江中学今年小升初招生320人' target="_blank">南江中学今年小升初</A></p>
                                        </div>
									</td>
								</tr>
							</table>
                        </UL>
					</div>
                    <div class=box_bottom></div>
				</div>
			</div><!--main  END-->
            <div class=side>
                <div class="box cysb">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>奇思妙想</H2>
							<A class=more title="" href="http://www.qsnhdw.com/QuW/" target=_blank>更多 </A>
						</div>
                        <div class=imgtxt2>
                            <UL class=txtlist>
								<?php if(is_array($qsmx) && $qsmx>0){?>
									<?php for($i=0; $i<7; $i++){?>
										<?php if(isset($qsmx[$i])){?>
										<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $qsmx[$i]['id']?>" target='_blank'  style=";"><?php echo mb_substr($qsmx[$i]['title'], 0, 7, "UTF8")?></a></div>
										<?php }?>
									<?php }?>
								<?php }?>
                            </UL>
						</div><!--imgtxt2  END-->
                        <div style="MARGIN: 10px 0px 0px 20px" class=imgtxt2>
                            <UL class=txtlist>
								<?php if(is_array($qsmx) && $qsmx>7){?>
									<?php for($i=7; $i<14; $i++){?>
										<?php if(isset($qsmx[$i])){?>
											<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $qsmx[$i]['id']?>" target='_blank'  style=";"><?php echo mb_substr($qsmx[$i]['title'], 0, 7, "UTF8")?></a></div>
										<?php }?>
									<?php }?>
								<?php }?>
                            </UL>
						</div><!--imgtxt2  END--></div>
                    <div class=box_bottom></div>
				</div>
			</div><!--side  END-->
		</div><!--wrap  栏二 END-->
        <div class=wrap>
            <div class=main>
                <div class="box sh2010">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>文化传承</H2>
                            <A class=more title="" href="http://www.qsnhdw.com/XiaoYuan/" target=_blank>崇德尚礼</A>
						</div>
                        <div class=sh2010_L>
							<?php if(is_array($whcc) && count($whcc)>0){?>
								<?php
								$whcc_1 = $whcc[0];
								unset($whcc[0]);
								?>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:3px 0px 5px 0px;">
									<tr>
										<td rowspan="2" width="4%" style="padding-right:3px;padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><a href="#"><img src="/images/121004338_51n.jpg" width="100" height="75" border="0"></a></td>
										<td width="96%"> <a href="/view.php?id=<?php echo $whcc_1['id'];?>" target="_blank"><b><?php echo $whcc_1['title']?></b></a></td>
									</tr>
									<tr>
										<td width="96%" style="padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><?php echo mb_substr($whcc_1['content'], 0, 20, "UTF8");?></td>
									</tr>
								</table>
							<?php }?>

							<?php if(is_array($whcc) && count($whcc)>0){?>
							<?php foreach($whcc as $item){?>
							<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $item['id'];?>" target='_blank' style=";"><?php echo $item['title'];?></a></div>
							<?php }?>
							<?php }?>
                        </div>
                        <!--sh2010_L  END-->
                        <div class=sh2010_R>
							<?php if(is_array($cdsl) && count($cdsl)>0){?>
								<?php
								$cdsl_1 = $cdsl[0];
								unset($cdsl[0]);
								?>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:3px 0px 5px 0px;">
									<tr>
										<td rowspan="2" width="4%" style="padding-right:3px;padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><a href="#"><img src="/images/121004338_51n.jpg" width="100" height="75" border="0"></a></td>
										<td width="96%"> <a href="/view.php?id=<?php echo $cdsl_1['id'];?>" target="_blank"><b><?php echo $cdsl_1['title']?></b></a></td>
									</tr>
									<tr>
										<td width="96%" style="padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><?php echo mb_substr($cdsl_1['content'], 0, 20, "UTF8");?></td>
									</tr>
								</table>
							<?php }?>

                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td width=50%>
										<?php if(is_array($cdsl) && $cdsl>0){?>
											<?php for($i=0; $i<7; $i++){?>
												<?php if(isset($cdsl[$i])){?>
													<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $cdsl[$i]['id']?>" target='_blank'  style=";"><?php echo mb_substr($cdsl[$i]['title'], 0, 14, "UTF8")?></a></div>
												<?php }?>
											<?php }?>
										<?php }?>
									</td>
									<td width=50%>
										<?php if(is_array($cdsl) && $cdsl>7){?>
											<?php for($i=7; $i<14; $i++){?>
												<?php if(isset($cdsl[$i])){?>
													<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $cdsl[$i]['id']?>" target='_blank'  style=";"><?php echo mb_substr($cdsl[$i]['title'], 0, 14, "UTF8")?></a></div>
												<?php }?>
											<?php }?>
										<?php }?>
									</td>
								</tr>
							</table>
                        </div><!--sh2010_R  END--></div>
                    <div class=box_bottom></div>
				</div><!--box END-->
			</div><!--main  END-->
            <div class=side>
                <div style="MARGIN-BOTTOM: 10px" class="box sbshx">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>EQ速递</H2>
							<A class=more title="" href="http://www.qsnhdw.com/XiaoJiZhe/" target=_blank>更多</A>
						</div>
                        <div class=imgtxt2>
                            <UL class=txtlist>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
									<tr>
										<td width=50%>
											<?php if(is_array($gnqq) && count($gnqq)>0){?>
												<?php foreach($gnqq as $item){?>
													<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $item['id'];?>" target='_blank' style=";"><?php echo $item['title'];?></a></div>
												<?php }?>
											<?php }?>
										</td>
										<td width=50%>
											<?php if(is_array($ssyd) && count($ssyd)>0){?>
												<?php foreach($ssyd as $item){?>
													<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $item['id'];?>" target='_blank' style=";"><?php echo $item['title'];?></a></div>
												<?php }?>
											<?php }?>
										</td>
									</tr>
								</table>
                            </UL>
						</div><!--imgtxt2  END-->
					</div>
                    <div class=box_bottom></div>
				</div><!--box 国旗下讲话 END-->
                <div class="box_ad adright">

                    <!--imgtxt2  END-->
                </div>
                <!--box gskxyz END-->
			</div><!--side  END-->
		</div><!--wrap  栏三 END-->
        <div style="HEIGHT: 80px" class=fullad>
            <div id=cm972 class=fullad_con>
				<a href='http://www.qsnhdw.com' target=_blank><img src='http://www.qsnhdw.com/images/feijianjun/970.jpg'  width='960'  height='80' border='0' /></a>
            </div>
		</div>
        <!--wrap  栏四 END-->
        <div class=wrap>
            <div class=main>
                <div class="box sbtp">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>阳光节</H2>
							<A class=more title="" href="http://www.qsnhdw.com/MingShi/" target=_blank>社会百科</A>
						</div>
                        <div class=sh2010_L>
							<?php if(is_array($ygj) && count($ygj)>0){?>
								<?php
								$ygj_1 = $ygj[0];
								unset($ygj[0]);
								?>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:3px 0px 5px 0px;">
									<tr>
										<td rowspan="2" width="4%" style="padding-right:3px;padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><a href="#"><img src="http://kids.youth.cn/xinli/qzjt/./201105/./W020110523584223274881.jpg" width="100" height="75" border="0"></a></td>
										<td width="96%"> <a href="/view.php?id=<?php echo $ygj_1['id'];?>" target="_blank"><b><?php echo $ygj_1['title']?></b></a></td>
									</tr>
									<tr>
										<td width="96%" style="padding-bottom:4px;text-indent:1em;border-bottom:1px dotted #ccc;"><?php echo mb_substr($ygj['content'], 0, 20, "UTF8");?></td>
									</tr>
								</table>
							<?php }?>
							<?php if(is_array($ygj) && $ygj>0){?>
								<?php for($i=0; $i<7; $i++){?>
									<?php if(isset($ygj[$i])){?>
										<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $cdsl[$i]['id']?>" target='_blank'  style=";"><?php echo mb_substr($cdsl[$i]['title'], 0, 14, "UTF8")?></a></div>
									<?php }?>
								<?php }?>
							<?php }?>
                        </div><!--sh2010_L  END-->
                        <div class=sh2010_R>
							<?php if(is_array($shbk) && count($shbk)>0){?>
								<?php foreach($shbk as $item){?>
									<div style="line-height:190%;">·<A HREF="" target='_blank' style=";"></a></div>
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:3px 0px 5px 0px;border-bottom:1px dotted #ccc;">
										<tr>
											<td rowspan="2" width="4%" style="padding-right:3px;"><a href="http://www.qsnhdw.com/XueXi/s2541.html" target="_blank"><img src="http://kids.youth.cn/wskt/xxwht/./201107/./W020110708514946593190.jpg" width="100" height="75" border="0"></a></td>
											<td width="96%">&#160;<a href="/view.php?id=<?php echo $item['id'];?>" target="_blank"><b><?php echo $item['title'];?></b></a></td>
										</tr>
										<tr>
											<td width="96%">&#160;&#160;&#160;<?php echo mb_substr($item['content'], 0, 20, "UTF8");?></td>
										</tr>
									</table>
								<?php }?>
							<?php }?>
                        </div><!--sh2010_R  END-->
					</div>
                    <div class=box_bottom></div>
				</div><!--box END-->
			</div><!--main  END-->
            <div class=side>
                <div style="MARGIN-BOTTOM: 10px" class="box sbshx">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>身心健康</H2>
							<A class=more title=""         href="http://www.qsnhdw.com/WenHua/" target=_blank>更多</A>
						</div>
                        <div class=imgtxt2>
                            <UL class=txtlist>
								<?php if(is_array($sxjk) && count($sxjk)>0){?>
									<?php foreach($sxjk as $item){?>
										<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $item['id'];?>" target='_blank' style=";"><?php echo $item['title'];?></a></div>
									<?php }?>
								<?php }?>
                            </UL>
						</div><!--imgtxt2  END-->
					</div>
                    <div class=box_bottom></div>
				</div><!--box news END-->
                <div class="box sbshx">
                    <div class=box_con>
                        <div class=box_tt>
                            <H2>青少年维权</H2>
							<A class=more title=""       href="http://www.qsnhdw.com/KeXue/" target=_blank>更多</A>
						</div>
                        <div class=imgtxt2>
							<?php if(is_array($qsnwq) && count($qsnwq)>0){?>
								<?php foreach($qsnwq as $item){?>
									<div style="line-height:190%;">·<A HREF="/view.php?id=<?php echo $item['id'];?>" target='_blank' style=";"><?php echo $item['title'];?></a></div>
								<?php }?>
							<?php }?>
						</div>
                        <!--imgtxt2  END-->
					</div>
                    <div class=box_bottom></div>
				</div><!--box news END-->
            </div><!--side  END-->
		</div><!--wrap  栏四 END-->
	</div><!--body END-->

    <link rel="stylesheet" type="text/css" href="http://www.qsnhdw.com/images/v7/index.css">


    <!--
    -->
    <SCRIPT LANGUAGE="JavaScript">
        <!--//目的是为了做风格方便
        document.write('</div>');
        //-->
    </SCRIPT>

    <div class=footer>
        <div class=f-nav>
            <A href="#">关于我们</A>
            <SPAN>|</SPAN>
            <A href="#">联系我们</A>
            <SPAN>|</SPAN>
            <A href="#">商务合作</A>
            <SPAN>|</SPAN>
            <A href="#">网站制作</A>
            <SPAN>|</SPAN>
            <A href="#">免责声明</A>
            <SPAN>|</SPAN>
        </div>
        <div class=copyright>
            <P>让青少年健康成长、快乐长大</P>
            <P>&copy;版权所有  all rights reserved ICP备0000000号 </P>
            <br />
            |

        </div>
	</div>
    <SCRIPT type=text/javascript>
        LAZY.init();
        LAZY.run();
    </SCRIPT>
</BODY></HTML>
