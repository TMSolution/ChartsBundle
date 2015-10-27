<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class ChartsMorrisJs
{
    
    protected $options = [];
    protected $defaultOptions = [];
    protected $container = null;

    public function __construct($container)
    {
        $this->container = $container;
        //$model = $this->getContainer()->get("model_factory")->getModel($entityName);
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
        } else {
            $this->options['jsonData'] = '[]';
        }
    }

    abstract protected function checkConfig();

    abstract public function render();
}
