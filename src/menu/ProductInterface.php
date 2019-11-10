<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:43
 */

namespace App\menu;


interface ProductInterface
{
    public function getName(): string;

    public function getPrice(): float;
}