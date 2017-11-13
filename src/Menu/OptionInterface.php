<?php

namespace Menu;

interface OptionInterface extends ItemInterface
{


    /**
     * @return OptionGroupInterface[]
     */
    public function getChildren(): array;

    /**
     * @param OptionGroupInterface $optionGroup
     */
    public function addChild(OptionGroupInterface $optionGroup);

}