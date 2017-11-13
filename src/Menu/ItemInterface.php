<?php

namespace Menu;

use Menu\Currency\PriceInterface;

interface ItemInterface extends BaseInterface
{

    /**
     * @return OptionGroupInterface[]
     */
    public function getChildren(): array;

    /**
     * @param OptionGroupInterface $option
     */
    public function addChild(OptionGroupInterface $option);

    /**
     * @return PriceInterface
     */
    public function getPrice(): PriceInterface;

    /**
     * @param PriceInterface $price
     */
    public function setPrice(PriceInterface $price);

}