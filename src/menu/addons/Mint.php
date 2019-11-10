<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:57
 */

namespace App\menu\addons;


class Mint extends AddonDecorator
{

    public function getAddonPrice(): float
    {
        return 5.0;
    }

    public function getAddonName(): string
    {
        return 'Mint';
    }
}