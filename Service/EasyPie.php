<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class EasyPie extends Chart
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
        'title' => 'EasyPie',
        'value' => '0',
        'backgroundColorClass' => 'bgm-lime',
        'trackColor'=> 'rgba(255,255,255,0.2)',
        'scaleColor'=> 'rgba(255,255,255,0.5)',
        'barColor'=> 'rgba(255,255,255,0.7)',
        'lineWidth'=> 7,
        'lineCap'=> 'butt',
        'listData' => [],
        'download' => true,
        'downloadFileName' => 'chart'
    ];
    
    

    public function render()
    {

       // $this->convertData('data');
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:easy.pie." . $this->options['type'] . ".template.twig", [
            "options" => $this->options
        ]);

        return $renderedChart;
    }

}
