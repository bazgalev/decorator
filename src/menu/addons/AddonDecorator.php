<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.11.2019
 * Time: 20:47
 */

namespace App\menu\addons;


use App\menu\ProductInterface;

abstract class AddonDecorator implements ProductInterface
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public abstract function getAddonPrice(): float;

    public abstract function getAddonName(): string;

    public function getPrice(): float
    {
        return $this->product->getPrice() + static::getAddonPrice();
    }

    public function getName(): string
    {
        return $this->product->getName() . '; ' . static::getAddonName();
    }


}