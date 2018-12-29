<?php
/**
 * Created by PhpStorm.
 * User: shaju
 * Date: 12/30/2018
 * Time: 12:39 AM
 */

class Test
{

    private  $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }



}

$t=new Test();
$t->setPrice(400);
echo $t->getPrice();
