<?php

namespace Menu\Currency;


class USD implements PriceInterface
{
    /**
     * @var float
     */
    protected $value;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return 'USD';
    }

    /**
     * @param float $value
     */
    public function setValue($value){
        $this->value = (float)$value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}