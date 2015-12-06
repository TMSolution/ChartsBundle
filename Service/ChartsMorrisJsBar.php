<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJsBar extends Chart
{

    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'data' => [],
        'xkey' => null,
        'ykeys' => [],
        'labels' => [],
        'stacked' => 'false',
        'hideHover' => 'auto',
        'hoverCallback' => null,
        'barColors' => [],
        'download' => 0,
        'downloadFileName' => 'chart',
        'isMasterRequest' => true
    ];

    /*
      axes 	Set to false to disable drawing the x and y axes.
      grid 	Set to false to disable drawing the horizontal grid lines.
      gridTextColor 	Set the color of the axis labels (default: #888).
      gridTextSize 	Set the point size of the axis labels (default: 12).
      gridTextFamily 	Set the font family of the axis labels (default: sans-serif).
      gridTextWeight 	Set the font weight of the axis labels (default: normal).
      resize 	Set to true to enable automatic resizing when the containing element resizes. (default: false).
      This has a significant performance impact, so is disabled by default.

     *      */

    public function render()
    {

        $this->convertData();
        $templating = $this->container->get('templating');
        $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs.bar.template.twig", [
            "options" => $this->options
        ]);


        return $renderedChart;
    }

}
