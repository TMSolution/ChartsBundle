<?php

namespace TMSolution\ChartsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function chartAction()
    {

        /*    $chart = $this->get('charts.morrisjs.bar.generate');

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
          'barColors' => ['#f59c1a', '#f4b8b6'],
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
          'lineColors' => ['#F1DD30', '#E4E4E4'],
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
         */


        //////////////////////////SPARK LINE 
        $spark1 = $this->get('charts.sparkline.line.generate');

        $options = [
            'type' => "mini",
            'htmlContainerId' => 'spark1',
            'title' => 'Spark 1',
            'value' => '28',
            'data' => [4, 66, 8, 33, 1]
        ];

        $spark1->setOptions($options);
        $sparkLine1 = $spark1->render();


        //////////////////////////SPARK BAR
        $spark2 = $this->get('charts.sparkline.bar.generate');

        $options2 = [
            'type' => "mini",
            'htmlContainerId' => 'spark2',
            'title' => 'Spark 2',
            'value' => '12.09',
            'data' => [1, 2, 3]
        ];

        $spark2->setOptions($options2);
        $sparkBar2 = $spark2->render();

        //////////////////////////SPARK PIE
        $spark3 = $this->get('charts.sparkline.pie.generate');

        $options3 = [
            'type' => "mini",
            'htmlContainerId' => 'spark3',
            'title' => 'Spark 3',
            'value' => '987',
            'data' => [9, 8, 6, 3, 1, 9]
        ];

        $spark3->setOptions($options3);
        $sparkPie3 = $spark3->render();


        ///////////////
        //////////////////////////SPARK LINE 
        $spark11 = $this->get('charts.sparkline.line.generate');

        $options11 = [
            'type' => "panel",
            'htmlContainerId' => 'spark11',
            'backgroundColorClass' => 'bgm-cyan',
            'title' => 'Spark 11',
            'value' => '28',
            'data' => [4, 66, 8, 33, 1],
            'listData' => [['title' => 'Tytuł 1', 'value' => '12345,67'], ['title' => 'Tytuł 2', 'value' => '12345,67'], ['title' => 'Tytuł 3', 'value' => '12345,67']]
        ];

        $spark11->setOptions($options11);
        $sparkLine11 = $spark11->render();


        //////////////////////////SPARK BAR
        $spark22 = $this->get('charts.sparkline.bar.generate');

        $options22 = [
            'type' => "panel",
            'htmlContainerId' => 'spark22',
            'backgroundColorClass' => 'bgm-green',
            'title' => 'Spark 22',
            'value' => '12.09',
            'data' => [5, 10, 5, 5],
            'listData' => [['title' => 'Tytuł 1', 'value' => '12345,67'], ['title' => 'Tytuł 3', 'value' => '12345,67']]
        ];

        $spark22->setOptions($options22);
        $sparkBar22 = $spark22->render();

        //////////////////////////SPARK PIE
        $spark33 = $this->get('charts.sparkline.pie.generate');

        $options33 = [
            'type' => "panel",
            'htmlContainerId' => 'spark33',
            'backgroundColorClass' => 'bgm-orange',
            'title' => 'Spark 33',
            'value' => '987',
            'data' => [9, 8, 6, 3, 1, 9],
            'listData' => [['title' => 'Tytuł 3', 'value' => '12345,67']]
        ];

        $spark33->setOptions($options33);
        $sparkPie33 = $spark33->render();

        //////easy pie
        $easy1 = $this->get('charts.easy.pie.generate');

        $optionsEasy1 = [
            'type' => "mini",
            'htmlContainerId' => 'easyPie1',
            'backgroundColorClass' => 'bgm-orange',
            'title' => 'Easy Pie 1',
            'value' => '87',
            'trackColor' => 'rgba(255,255,255,0.2)',
            'scaleColor' => 'rgba(255,255,255,0.5)',
            'barColor' => 'rgba(255,255,255,0.7)',
            'lineWidth' => 7,
            'lineCap' => 'butt'
        ];

        $easy1->setOptions($optionsEasy1);
        $easyPie1 = $easy1->render();

        //////easy pie
        $easy2 = $this->get('charts.easy.pie.generate');

        $optionsEasy2 = [
            'type' => "panel",
            'htmlContainerId' => 'easyPie2',
            'backgroundColorClass' => 'bgm-orange',
            'title' => 'Easy Pie 2',
            'value' => '12',
            'listData' => [['title' => 'Tytuł 3', 'value' => '12345,67']],
            'trackColor' => 'rgba(255,255,255,0.2)',
            'scaleColor' => 'rgba(255,255,255,0.5)',
            'barColor' => 'rgba(255,255,255,0.7)',
            'lineWidth' => 7,
            'lineCap' => 'butt'
        ];

        $easy2->setOptions($optionsEasy2);
        $easyPie2 = $easy2->render();

        $dataArr = [];
        for ($i = 1; $i < 15; $i++) {
            $data = new \stdClass();
            $data->label = "$i";
            $data->value1 = rand(1,10);
            $data->value2 = rand(1,10);
            $dataArr[] = $data;
        }

        ////////morrisjs area


       


        $chartMjs = $this->get('charts.morrisjs.area.generate');
        $options = [
            'htmlContainerId' => 'chart3',
            'data' => $dataArr,
            'xkey' => 'label',
            'ykeys' => ['value1', 'value2'],
            'labels' => ['Zbiór Zero', 'Zbiór Pierwszy'],
            'lineColors' => ['#E4E4E4','#F1DD30'],
            'download' => 1,
            'downloadFileName' => 'AlaMaKota3'
        ];

        $chartMjs->setOptions($options);
        $chartMjsArea = $chartMjs->render();



        return $this->render('TMSolutionChartsBundle:Default:index.html.twig', [
                    /* 'chart1' => $chart1Js,
                      'chart2' => $chart2Js,
                      'chart3' => $chart3Js,
                      'chart4' => $chart4Js, */
                    'sparkLine1' => $sparkLine1,
                    'sparkBar2' => $sparkBar2,
                    'sparkPie3' => $sparkPie3,
                    'sparkLine11' => $sparkLine11,
                    'sparkBar22' => $sparkBar22,
                    'sparkPie33' => $sparkPie33,
                    'easyPie1' => $easyPie1,
                    'easyPie2' => $easyPie2,
                    'chartMjsArea' => $chartMjsArea
        ]);
    }

}
