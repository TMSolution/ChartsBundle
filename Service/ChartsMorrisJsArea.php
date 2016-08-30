<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJsArea extends Chart
{

    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'backgroundColorClass' => 'bgm-white',
        'labels' => [],
        'data' => [],
        'xkey' => null,
        'ykeys' => [],
        'download' => false,
        'xLabelFormatFn' => "function(x){return x.label}",
        'yLabelFormatFn' => "function(y){return y;}",
        'hideHover' =>'auto',
        'hoverCallback' => null,
        'fillOpacity' => '1.0',
        'lineColors' => [],
        'downloadFileName' => 'chart',
        'downloadButtonId' => null,
        'lineWidth' => 0,
        'pointSize' => 0,
        'grid' => 'false',
        'isMasterRequest' => true,
        'legend' => false
    ];
    
    

    public function render()
    {
        $this->convertData();
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs.area.template.twig", [
            "options" => $this->options
        ]);


        return $renderedChart;
    }

}
