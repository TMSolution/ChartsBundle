<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class Charts
{

    protected $chartTypes = [];
    protected $options = [];
    protected $defaultOptions = [
        'htmlContainerId' => 'chart',
        'type' => 'bar',
        'labels' => [],
        'data' => [],
        'xkey' => null,
        'ykeys' => []
    ];
    protected $container = null;

    public function __construct($container)
    {
        $this->container = $container;
        $this->setOptions([]);
    }

    public function setOptions(array $options = [])
    {
        $resolver = new OptionsResolver();
        $resolver->setDefaults($this->defaultOptions);
        $this->options = $resolver->resolve($options);
    }

    protected function convertData()
    {
        if (array_key_exists('data', $this->options)) {
            $this->options['jsonData'] = json_encode($this->options['data']);
        }
        else{
            $this->options['jsonData']='[]';
        }
    }

    abstract protected function checkConfig();

    abstract public function render();
}
