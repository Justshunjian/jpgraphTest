<?php
//引入gpgraph库,创建XY坐标图
require_once '../lib/jpgraph/jpgraph.php';
require_once '../lib/jpgraph/jpgraph_line.php';

//1、创建画布
$graph = new Graph(600,800);
//2、设置横纵坐标刻度样式
/*
 * lin直线
 * text文本
 * int整数
 * log对数
 * textint
 */
$aAxisType = 'textint';
$graph->SetScale($aAxisType);
//标题
$graph->title->Set('this is a test');
//数据
$data = array(
    20,
    30,
    40,
    14,
    20,
    60,
    34,
    62,
    48,
    120,
    54
);
//创建LinePlot对象
$linePlot = new LinePlot($data);
//设置图例
$linePlot->SetLegend('tuli');
//将统计图添加到画布上
$graph->Add($linePlot);

//设置统计图颜色，一定放在添加画布之后
$linePlot->SetColor('#F59927');

//输出到浏览器
$graph->Stroke();

//保存图片
// $graph->Stroke('../pic/xy.png');


//支持中文，需要配置
/*
 * 1、在jpgraph_ttf.inc.php中，配置宏定义CHINESE_TTF_FONT
 *  比如可以改为支持中文的字体，如宋体
 *  define('CHINESE_TTF_FONT','SIMYOU.TTF');
 *  还需设置支持标题中文的字体
 * $graph->title->SetFont(FF_CHINESE)
 * 
 * 2、支持图例中文，修改jpgraph_legend.inc.php
 * 把public $font_family=FF_DEFAULT,$font_style=FS_NORMAL,$font_size=8;这个里面的
 * $font_family 改为支持中文
 * $font_family=FF_CHINESE,$font_style=FS_NORMAL,$font_size=8;
 * 
 */
?>
