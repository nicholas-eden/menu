<?php
/**
 * Created by PhpStorm.
 * User: nicho
 * Date: 11/5/2017
 * Time: 10:57 PM
 */

namespace Menu;


use Menu\Currency\PriceInterface;

class Item implements ItemInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var PriceInterface
     */
    protected $price;

    /**
     * Value the quantity must be a multiple of
     * @var integer
     */
    protected $quantityIncrement = 1;

    /**
     * @var OptionGroupInterface[]
     */
    protected $children = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return OptionGroupInterface[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param OptionGroupInterface $option
     */
    public function addChild(OptionGroupInterface $option)
    {
        $this->children[] = $option;
    }

    /**
     * @return PriceInterface
     */
    public function getPrice(): PriceInterface
    {
        return $this->price;
    }

    /**
     * @param PriceInterface $price
     */
    public function setPrice(PriceInterface $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantityIncrement(): int
    {
        return $this->quantityIncrement;
    }

    /**
     * @param int $quantityIncrement
     */
    public function setQuantityIncrement(int $quantityIncrement)
    {
        $this->quantityIncrement = $quantityIncrement;
    }

}
