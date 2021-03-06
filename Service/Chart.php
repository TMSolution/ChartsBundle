<?php

namespace TMSolution\ChartsBundle\Service;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Chart
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

    protected function convertData($param = null)
    {
        if (!$param) {
            $param = 'data';
            $jsonParam = 'jsonData';
        } else {
            $jsonParam = $param;
        }

        if (array_key_exists($param, $this->options)) {

            $parameters = $this->options[$param];
            $this->translate($parameters);
            $this->options[$jsonParam] = str_replace('null','""',json_encode($parameters));
        } else {
            $this->options[$jsonParam] = '[]';
        }
    }

    protected function translate(&$parameters)
    {
        foreach ($parameters as $element) {

            if (is_object($element) && property_exists($element, 'label')) {
                $element->label = $this->container->get('translator')->trans($element->label);
            }
        }
    }

}
