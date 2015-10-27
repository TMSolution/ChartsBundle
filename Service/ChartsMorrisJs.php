<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ChartsMorrisJs extends Charts
{

    protected $chartTypes = ['bar', 'line', 'area', 'donut'];
    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'type' => 'bar',
        'labels' => [],
        'data' => [],
        'xkey' => null,
        'ykeys' => [],
        'download' => false,
        'downloadFileName' => 'chart'
    ];
    

    protected function checkConfig()
    {
        $error = "ChartBundle error!\r\n";
        if (empty($this->options['type'])) {
            throw new \Exception($error . 'Set type of chart. Set ' . implode(',', $this->chartTypes) . '.');
        }

        if (!in_array($this->options['type'], $this->chartTypes)) {
            throw new \Exception($error . 'Illegal value for chart type. Set ' . implode(',', $this->chartTypes) . '.');
        }

        if (empty($this->options['htmlContainerId'])) {
            throw new \Exception($error . 'Set htmlContainerId of chart. Set html id attribute.');
        }

        if (!array_key_exists('data', $this->options) || empty($this->options['data'])) {
            throw new \Exception($error . "Set data of chart.\r\nExample for\r\n - MorrisJS Donut: [{label: 'Download Sales', value: 12}]\r\n- Example for MorrisJs other [{ y: \'2006\', a: 100, b: 90 },{ y: \'2007\', a: 75,  b: 65 }] ).");
        }

        if ($this->options['type'] != 'donut') {
            if (!array_key_exists('labels', $this->options) || empty($this->options['labels'])) {
                throw new \Exception($error . 'Set labels of chart. Example: ([\'Series A\', \'Series B\']).');
            }

            if (!array_key_exists('xkey', $this->options) || empty($this->options['xkey'])) {
                throw new \Exception($error . 'Set X Key of chart. Example: ( \'xkey\' ).');
            }

            if (!array_key_exists('ykeys', $this->options) || empty($this->options['ykeys'])) {
                throw new \Exception($error . 'Set Y Keys of chart. Example: ( [\'yKey1\',\'yKey2\',...] ).');
            }
        }
        return true;
    }

    public function render()
    {
        if ($this->checkConfig()) {

           
            $this->convertData();
            $templating = $this->container->get('templating');
            $renderedChart = $templating->render("TMSolutionChartsBundle:Templates:morrisjs." . $this->options["type"] . ".template.twig", [
                "config" => $this->options
            ]);
        }

        return $renderedChart;
    }

}
