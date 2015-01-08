/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.removeButtons = 'Save,NewPage,Print,Language';
	 config.language = 'zh-cn';
	 //config.uiColor = '#AADC6E';
	config.toolbar = 'Full';
	// 图片浏览配置
	config.filebrowserBrowseUrl = '/assets/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/assets/ckfinder/ckfinder.html?Type=Images';
	config.filebrowserFlashBrowseUrl = '/assets/ckfinder/ckfinder.html?Type=Flash';
	config.font_names='宋体/宋体;黑体/黑体;仿宋/仿宋_GB2312;楷体/楷体_GB2312;隶书/隶书;幼圆/幼圆;微软雅黑/微软雅黑;'+ config.font_names;
	config.fontSize_sizes  = '初号/42pt;小初/36pt;一号/26pt;小一/24pt;二号/22pt;小二/18pt;三号/16pt;小三/15pt;四号/14pt;小四/12pt;五号/10.5pt;小五/9pt;六号/7.5pt;小六/6.5pt'+config.fontSize_sizes  ;
};
