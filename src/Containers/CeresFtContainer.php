<?php

namespace CeresFt\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresFtContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresFt::Stylesheet');
    }
}