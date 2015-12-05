<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class SparklineLine extends Sparkline
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
        'counter' => '0',
        'backgroundColorClass' => 'bgm-indigo', 
        'lineColor' => '#fff',
        'fillColor' => 'rgba(0,0,0,0)',
        'lineWidth' => 1.25,
        'maxSpotColor' => 'rgba(255,255,255,0.4)',
        'minSpotColor' => 'rgba(255,255,255,0.4)',
        'spotColor' => 'rgba(255,255,255,0.4)',
        'spotRadius' => 3,
        'highlightSpotColor' => '#fff',
        'highlightLineColor' => 'rgba(255,255,255,0.4)',
        'data' => [],
        'listData' => [] 
    ];

    public function render()
    {

        $this->convertData('data');
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:sparkline.line.".$this->options['type'].".template.twig", [
            "options" => $this->options
        ]);

        return $renderedChart;
    }

}
