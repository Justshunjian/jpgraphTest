<?php
require_once "../lib/jpgraph/jpgraph.php";
require_once "../lib/jpgraph/jpgraph_pie.php";
require_once "../lib/jpgraph/jpgraph_pie3d.php";
$data=array(0=>3.5,1=>4.6,2=>9.1,3=>21.9,4=>42.3,5=>90.7,6=>183.5,7=>127.5,8=>61.4,9=>33.5,10=>11.5,11=>4.4);
//��������
$graph=new pieGraph(500,500);
//����ͼ��߽緶Χ
$graph->img->SetMargin(30,30,80,30);
//���ñ���
$graph->title->Set("piePlot3d Test");
//�õ�3D��ͼ����
$piePlot3d=new piePlot3d($data);
//����ͼ��
$piePlot3d->SetLegends(array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"));
//����ͼ��λ��
$graph->legend->Pos(0.1,0.15,"left","center");
//�����ƺõ�3D��ͼ���뵽������
$graph->Add($piePlot3d);
//���
$graph->Stroke();