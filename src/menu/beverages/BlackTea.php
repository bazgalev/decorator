<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:44
 */

namespace App\menu\beverages;


use App\menu\ProductInterface;

class BlackTea implements ProductInterface
{

    public function getName(): string
    {
        return 'Black tea';
    }

    public function getPrice(): float
    {
        return 30.0;
    }
}