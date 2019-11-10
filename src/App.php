<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 12:59
 */

namespace App;


use App\menu\addons\Limon;
use App\menu\addons\Mint;
use App\menu\beverages\BlackTea;
use App\menu\beverages\GreenTea;

class App
{
    public function run(): void
    {
        $shop = new Shop();

        $shop->order(new Limon(new GreenTea()));

        $shop->order(new Mint(new Limon(new GreenTea())));

        $shop->order(new Limon(new BlackTea()));
    }
}