<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class SparklinePie extends Chart
{
    /*  backgroundColorClass:   Background color classes
      bgm-red bgm-pink bgm-purple bgm-deeppurple bgm-indigo bgm-blue
      bgm-lightblue bgm-cyan bgm-teal bgm-green
      bgm-lightgreen bgm-lime bgm-yellow bgm-amber bgm-orange bgm-deeporange bgm-brown
      bgm-gray bgm-bluegray bgm-black bgm-white

      type:                   mini or panel

      listData                for type "panel"
      example [['title'=>'Tytuł 1','value'=>'12345,67'],['title'=>'Tytuł 2','value'=>'12345,67'],['title'=>'Tytuł 3','value'=>'12345,67']]

     */

    protected $defaultOptions = [
        'type' => 'mini',
        'htmlContainerId' => '',
        'title' => '',
        'value' => '0',
        'backgroundColorClass' => 'bgm-lime',
        'sliceColors' => ['#fff', 'rgba(255,255,255,0.7)', 'rgba(255,255,255,0.4)', 'rgba(255,255,255,0.2)'],
        'data' => [],
        'listData' => [],
        'download' => true,
        'downloadFileName' => 'chart',
    ];

    public function render()
    {

        $this->convertData('data');
        $this->convertData('sliceColors');
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:sparkline.pie." . $this->options['type'] . ".template.twig", [
            "options" => $this->options
        ]);

        return $renderedChart;
    }

}
