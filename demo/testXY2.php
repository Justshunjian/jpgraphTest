<?php
// �������
require_once '../lib/jpgraph/jpgraph.php';
require_once '../lib/jpgraph/jpgraph_line.php';
$data = array(
    0 => - 21,
    1 => - 3,
    2 => 12,
    3 => 19,
    4 => 23,
    5 => 29,
    6 => 30,
    7 => 22,
    8 => 26,
    9 => 18,
    10 => 5,
    11 => - 10
); // ��һ������
$data2y = array(
    0 => 3,
    1 => 12,
    2 => 18,
    3 => 30,
    4 => 28,
    5 => 33,
    6 => 43,
    7 => 39,
    8 => 36,
    9 => 29,
    10 => 15,
    11 => 10
); // �ڶ�������
                                                                                         // �õ�Graph����
$graph = new Graph(400, 400);
// ����X��Y����ʽ��Y������ֵ��Сֵ
$graph->SetScale("textint", - 30, 50);
// �����Ҳ�Y����ʽ�������ֵ��Сֵ
$graph->SetY2Scale("int", - 30, 50);
// ����ͼ����ʽ��������Ӱ
$graph->SetShadow();
// ����ͼ��߽緶Χ
$graph->img->setMargin(40, 30, 50, 70);
// ���ñ���
$graph->title->Set("this is a test X-Y-Y");
// �õ�����ʵ��
$linePlot = new LinePlot($data);
// �õ��ڶ�������
$linePlot2y = new LinePlot($data2y);
// �����߼��뵽ͼ����
$graph->Add($linePlot);
$graph->Add($linePlot2y);
// ������������������
$graph->xaxis->title->Set("Month");
$graph->yaxis->title->Set("beijing");
$graph->y2axis->title->Set("ShangHai");
// �����������ߵ���ɫ
$linePlot->SetColor('red');
$linePlot2y->SetColor('black');

// �����������ߵ�ͼ��
$linePlot->SetLegend("Beijing");
$linePlot2y->SetLegend("Shanghai");
// ����ͼ����ʽ
$graph->legend->setlayout(LEGEND_HOR);
$graph->legend->Pos(0.45, 0.9, "center", "bottom");
// ��ͼ������������
$graph->Stroke();

//����ͼƬ
// $graph->Stroke('../pic/xy2.png');

?>