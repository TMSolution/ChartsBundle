<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Sparkline
{

    protected $options = [];
    protected $defaultOptions = [];
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
    
    protected function convertData($param)
    {
        if (array_key_exists($param, $this->options)) {
            $this->options[$param] = json_encode($this->options[$param]);
        } else {
            $this->options[$param] = '[]';
        }
    }

    

    

}
