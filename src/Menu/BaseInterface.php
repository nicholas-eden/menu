<?php

namespace Menu;


interface BaseInterface
{

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     */
    public function setId(string $id);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name);

}