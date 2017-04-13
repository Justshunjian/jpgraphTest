<?php
//����gpgraph��,����XY����ͼ
require_once '../lib/jpgraph/jpgraph.php';
require_once '../lib/jpgraph/jpgraph_line.php';

//1����������
$graph = new Graph(600,800);
//2�����ú�������̶���ʽ
/*
 * linֱ��
 * text�ı�
 * int����
 * log����
 * textint
 */
$aAxisType = 'textint';
$graph->SetScale($aAxisType);
//����
$graph->title->Set('this is a test');
//����
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
//����LinePlot����
$linePlot = new LinePlot($data);
//����ͼ��
$linePlot->SetLegend('tuli');
//��ͳ��ͼ��ӵ�������
$graph->Add($linePlot);

//����ͳ��ͼ��ɫ��һ��������ӻ���֮��
$linePlot->SetColor('#F59927');

//����������
$graph->Stroke();

//����ͼƬ
// $graph->Stroke('../pic/xy.png');


//֧�����ģ���Ҫ����
/*
 * 1����jpgraph_ttf.inc.php�У����ú궨��CHINESE_TTF_FONT
 *  ������Ը�Ϊ֧�����ĵ����壬������
 *  define('CHINESE_TTF_FONT','SIMYOU.TTF');
 *  ��������֧�ֱ������ĵ�����
 * $graph->title->SetFont(FF_CHINESE)
 * 
 * 2��֧��ͼ�����ģ��޸�jpgraph_legend.inc.php
 * ��public $font_family=FF_DEFAULT,$font_style=FS_NORMAL,$font_size=8;��������
 * $font_family ��Ϊ֧������
 * $font_family=FF_CHINESE,$font_style=FS_NORMAL,$font_size=8;
 * 
 */
?>
