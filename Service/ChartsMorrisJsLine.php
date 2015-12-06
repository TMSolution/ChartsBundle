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
        'download' => false,
        'downloadFileName' => 'chart',
        'isMasterRequest' => true
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
