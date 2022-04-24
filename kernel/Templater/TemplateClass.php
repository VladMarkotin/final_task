<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 09.05.2018
 * Time: 12:05
 */
namespace Kernel\Templater;


class TemplateClass
{
    private static $template = null;

    private $loader = null;

    private $twig = null;

    public static function getInstance()
    {
        if (!self::$template){
            return new self();
        }
        else{
            return self::$template;
        }
    }

    public function getTwig()
    {
        if ($this->twig)
            return $this->twig;
    }

    /**
     *
     */
    private function init()
    {
        $this->loader = new \Twig_Loader_Filesystem('app/views');
        $this->twig = new \Twig_Environment($this->loader, array(
            'cache' => 'app/views/cache',
            'auto_reload' => true
        ));
    }

     /**
     * TemplateClass constructor.
     */
    private function __construct()
    {
        $this->init();
    }

    /**
     *
     */
    private function __clone(){}

} 