<?php

namespace Menu;

class OptionGroup implements OptionGroupInterface
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
     * Minimum number of options that must be chosen
     * @var integer
     */
    protected $minimumSelections;

    /**
     * Maximum number of options that may be chosen
     * @var integer
     */
    protected $maximumSelections;

    /**
     * @var OptionInterface[]
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
     * @return int
     */
    public function getMinimumSelections(): int
    {
        return $this->minimumSelections;
    }

    /**
     * @param int $minimumSelections
     */
    public function setMinimumSelections(int $minimumSelections)
    {
        $this->minimumSelections = $minimumSelections;
    }

    /**
     * @return int
     */
    public function getMaximumSelections(): int
    {
        return $this->maximumSelections;
    }

    /**
     * @param int $maximumSelections
     */
    public function setMaximumSelections(int $maximumSelections)
    {
        $this->maximumSelections = $maximumSelections;
    }

    /**
     * @return OptionInterface[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param OptionInterface $option
     */
    public function addChild(OptionInterface $option) {
        $this->children[] = $option;
    }

}