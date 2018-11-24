<?php

/**
 * Created by PhpStorm.
 * User: Kot074
 * Date: 21.11.2018
 * Time: 22:36
 */
class MenuItemModel
{
    private $id;
    private $name;
    private $method;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function toAssocArray()
    {
        return array("id" => $this->id, "name" => $this->name, "method" => $this->method);
    }
}