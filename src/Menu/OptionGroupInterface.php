<?php

namespace Menu;


interface OptionGroupInterface extends BaseInterface
{

    /**
     * @return OptionGroupInterface[]
     */
    public function getChildren(): array;

    /**
     * @param OptionInterface $option
     */
    public function addChild(OptionInterface $option);

    /**
     * @return int
     */
    public function getMinimumSelections(): int;

    /**
     * @param int $minimumSelections
     */
    public function setMinimumSelections(int $minimumSelections);

    /**
     * @return int
     */
    public function getMaximumSelections(): int;

    /**
     * @param int $maximumSelections
     */
    public function setMaximumSelections(int $maximumSelections);

}