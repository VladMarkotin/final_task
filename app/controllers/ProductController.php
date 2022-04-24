<?php

namespace App\Controllers;


use Kernel\Templater\TemplateClass as TC;
use App\Model\Product as Product;

class ProductController
{
    public function index()
    {
        $templater = TC::getInstance();
        $twig      = $templater->getTwig();
        $product   = new Product();
        $products  = $product->product();
        echo $twig->render("index.html");
    }
}