<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJsLine extends Chart
{

    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'labels' => [],
        'data' => [],
        'xkey' => null,
        'ykeys' => [],
        'xLabelFormatFn' => "function(x){return x.label}",
        'yLabelFormatFn' => "function(y){return y;}",
        'download' => false,
        'downloadFileName' => 'chart',
        'downloadButtonId' => null,
        'hoverCallback' => null,
        'isMasterRequest' => true,
        'lineColors' => [],
        'legend' => false
    ];

    public function render()
    {


        $this->convertData();
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs.line.template.twig", [
            "options" => $this->options
        ]);


        return $renderedChart;
    }

}
