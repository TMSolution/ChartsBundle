<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJsDonut extends Chart
{

    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'data' => [],
        'formatter' => null,
        'colors' => [],
        'download' => false,
        'downloadFileName' => 'chart',
        'downloadButtonId' => null,
        'hoverCallback' => null,
        'isMasterRequest' => true,
        'legend' => false
    ];

    public function render()
    {


        $this->convertData();
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs.donut.template.twig", [
            "options" => $this->options
        ]);


        return $renderedChart;
    }

}
