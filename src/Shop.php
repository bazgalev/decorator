<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:59
 */

namespace App;


use App\menu\ProductInterface;

class Shop
{
    static $orderId = 0;

    public function order(ProductInterface $product)
    {
        $orderId = ++self::$orderId;

        echo "{$orderId}. Order: {$product->getName()}\nTotal: {$product->getPrice()}\n\n";
    }
}