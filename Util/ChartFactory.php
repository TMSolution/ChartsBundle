<?php

namespace TMSolution\ChartsBundle\Util;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chart
 *
 * @author Jacek Łoziński <jacek.lozinski@tmsolution.pl>
 */
class ChartFactory
{

    protected $templating;
    protected  $options = [
            'type' => "mini",
            'htmlContainerId' => 'easyPie1',
            'backgroundColorClass' => 'bgm-orange',
            'title' => 'Easy Pie 1',
            'value' => '87',
            'trackColor' => 'rgba(255,255,255,0.2)',
            'scaleColor' => 'rgba(255,255,255,0.5)',
            'barColor' => 'rgba(255,255,255,0.7)',
            'lineWidth' => 7,
            'lineCap' => 'butt'
        ];

    public function __construct()
    {
        $this->templating = $this->getTwigEnvironment();
    }

    public function getChart($entityClass, $id, $request)
    {
       



        return $this->templating->render(sprintf("%s.template.js.twig", $chartType),["options"=>$this->options]);
    }

    public function getWidget($chartType, $entityClass, $id)
    {

        return $this->templating->render(sprintf("%s.template.html.twig", $chartType), ["options"=>$this->options]);
    }

    protected function getTwigEnvironment()
    {
        $templatePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'Templates' . DIRECTORY_SEPARATOR;
        $twig = new \Twig_Environment(new \Twig_Loader_Filesystem([$templatePath]), array(
            'debug' => true,
            'cache' => false,
            'strict_variables' => true,
            'autoescape' => false,
        ));

        return $twig;
    }

}
