<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:57
 */

namespace App\menu\beverages;


use App\menu\ProductInterface;

class GreenTea implements ProductInterface
{
    public function getName(): string
    {
        return 'Green tea';
    }

    public function getPrice(): float
    {
        return 10.0;
    }
}