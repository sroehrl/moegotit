<?php
/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

class Orders extends Unicore
{
    function init()
    {
        $this->uni('moe')->hook('main','orders')->output();
    }

}