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
        'xLabelFormatFn' => "function(x){return ''; /*x.label;*/}",
        'yLabelFormatFn' => "function(y){return y;}",
        'fillOpacity' => '1.0',
        'lineColors' => [],
        'downloadFileName' => 'chart',
        'isMasterRequest' => true
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
