<?php

namespace Menu\Currency;


interface PriceInterface
{
    /**
     * @return string
     */
    public function getCurrency() : string;

    /**
     * @return float
     */
    public function getValue();

}