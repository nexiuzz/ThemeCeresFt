<?php

namespace CeresFt\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresFtItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresFt::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}