<?php

namespace CeresFt\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresFtItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresFt::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}