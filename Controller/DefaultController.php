<?php

namespace TMSolution\ChartsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function chartAction()
    {

        $chart = $this->get('charts.morrisjs.bar.generate');

        $data0 = new \stdClass();
        $data0->label = 'ALA';
        $data0->value1 = 40;
        $data0->value2 = 30;

        $data1 = new \stdClass();
        $data1->label = 'MA';
        $data1->value1 = 100;
        $data1->value2 = 90;

        $data2 = new \stdClass();
        $data2->label = 'KOTA';
        $data2->value1 = 75;
        $data2->value2 = 65;

        $data3 = new \stdClass();
        $data3->label = 'I PSA';
        $data3->value1 = 50;
        $data3->value2 = 40;

        $options = [
            'htmlContainerId' => 'chart1',
            'labels' => ['Zbiór Zero', 'Zbiór Pierwszy', 'Zbiór Drugi'],
            'data' => [$data0, $data1, $data2, $data3],
            'xkey' => 'label',
            'ykeys' => ['value1', 'value2'],
            'stacked' => 'false',
            'hideHover' => 'auto',
            'hoverCallback' => null,
            'barColors' => ['#f59c1a','#f4b8b6'],
            'download' => 0,
            'downloadFileName' => 'AlaMaKota1'
        ];

        $chart->setOptions($options);


        $chart1Js = $chart->render();


        $chart = $this->get('charts.morrisjs.line.generate');
        $data0 = new \stdClass();
        $data0->label = '1';
        $data0->value1 = 40;
        $data0->value2 = 3;

        $data1 = new \stdClass();
        $data1->label = '100';
        $data1->value1 = 100;
        $data1->value2 = 90;

        $data2 = new \stdClass();
        $data2->label = '200';
        $data2->value1 = 75;
        $data2->value2 = 5;

        $data3 = new \stdClass();
        $data3->label = '300';
        $data3->value1 = 50;
        $data3->value2 = 40;


        $options = [
            'htmlContainerId' => 'chart2',
            'labels' => ['Zbiór Zero', 'Zbiór Pierwszy', 'Zbiór Drugi'],
            'data' => [$data0, $data1, $data2, $data3],
            'xkey' => 'label',
            'ykeys' => ['value1', 'value2'],
            'download' => 1,
            'downloadFileName' => 'AlaMaKota2'
        ];

        $chart->setOptions($options);
        $chart2Js = $chart->render();

        $chart = $this->get('charts.morrisjs.area.generate');
        $options = [
            'htmlContainerId' => 'chart3',
            'labels' => ['Zbiór Zero', 'Zbiór Pierwszy', 'Zbiór Drugi'],
            'data' => [$data0, $data1, $data2, $data3],
            'xkey' => 'label',
            'ykeys' => ['value1', 'value2'],
            'lineColors' => ['#F1DD30','#E4E4E4'],
            'download' => 0,
            'downloadFileName' => 'AlaMaKota3'
        ];

        $chart->setOptions($options);
        $chart3Js = $chart->render();


        //DONUT
        $chart = $this->get('charts.morrisjs.donut.generate');
        $data1 = new \stdClass();
        $data1->label = 'ALA';
        $data1->value = 12;

        $data2 = new \stdClass();
        $data2->label = 'MA';
        $data2->value = 67;

        $data3 = new \stdClass();
        $data3->label = 'KOTA';
        $data3->value = 92;

        $options = [
            'htmlContainerId' => 'chart4',
            'data' => [$data1, $data2, $data3],
            'download' => 1,
            'downloadFileName' => 'To jest nazwa pliku'
        ];

        $chart->setOptions($options);
        $chart4Js = $chart->render();

        return $this->render('TMSolutionChartsBundle:Default:index.html.twig', [
                    'chart1' => $chart1Js,
                    'chart2' => $chart2Js,
                    'chart3' => $chart3Js,
                    'chart4' => $chart4Js
        ]);
    }

}
