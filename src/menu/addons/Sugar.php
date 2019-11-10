<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:53
 */

namespace App\menu\addons;


class Sugar extends AddonDecorator
{
    public function getAddonPrice(): float
    {
        return 3.0;
    }

    public function getAddonName(): string
    {
        return 'Sugar';
    }
}