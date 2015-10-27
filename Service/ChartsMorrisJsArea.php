<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJsArea extends ChartsMorrisJs
{

    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'labels' => [],
        'data' => [],
        'xkey' => null,
        'ykeys' => [],
        'download' => false,
        'fillOpacity' => '0.5',
        'downloadFileName' => 'chart'
    ];

    protected function checkConfig()
    {
        return true;
    }

    public function render()
    {
        if ($this->checkConfig()) {


            $this->convertData();
            $templating = $this->container->get('templating');
            $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs.area.template.twig", [
                "options" => $this->options
            ]);
        }

        return $renderedChart;
    }

}