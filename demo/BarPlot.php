<?php
// �������
require_once '../lib/jpgraph/jpgraph.php';
require_once '../lib/jpgraph/jpgraph_bar.php';
//����ͼģ������
$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>23,5=>29,6=>30,7=>22,8=>26,9=>18,10=>5,11=>-10);
//��������ͼ
$graph=new Graph(400,300);
//���ÿ̶���ʽ
$graph->SetScale("textlin");
//���ñ߽緶Χ
$graph->img->SetMargin(30,30,80,30);
//���ñ���
$graph->title->Set("BarPlot test");
//�õ�����ͼ����
$barPlot=new BarPlot($data);
//��������ͼͼ��
$barPlot->SetLegend("beijing");
//��ʾ����ͼ�������ݵ�ֵ
$barPlot->value->show();
//������ͼ���뵽����ͼ
$graph->Add($barPlot);
//��������ͼ�����ɫ
$barPlot->SetFillColor('yellow');
//���ñ߿���ɫ
$barPlot->SetColor('red');
//������ͼ����������
$graph->Stroke();