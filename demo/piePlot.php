<?php
require_once "../lib/jpgraph/jpgraph.php";
require_once "../lib/jpgraph/jpgraph_pie.php";
//ģ������
$data=array(0=>3.5,1=>4.6,2=>9.1,3=>21.9,4=>42.3,5=>90.7,6=>183.5,7=>127.5,8=>61.4,9=>33.5,10=>11.5,11=>4.4);
//��������
$graph=new PieGraph(800,500);
//����ͼ��߽緶Χ
$graph->img->SetMargin(30,30,80,30);
//���ñ���
$graph->title->Set("PiePlot Test");
//�õ���ͼ����
$piePlot=new PiePlot($data);
//����ͼ��
$piePlot->SetLegends(array(1,2,3,4,5,6,7,8,9,11,12));
//����ͼ��λ��
$graph->legend->Pos(0.01,0.45,"left","top");
//��ӵ�������
$graph->Add($piePlot);
//���
$graph->Stroke();