<?php

namespace Frame\Request;

class Get extends Request
{

    protected $get = array();

    /*
     * GET values are simply stored as object properties - unsanitized!
     */
    public function __construct(\Frame\Core\Router $router)
    {

        $this->type = 'Get';
        $this->get = $_GET;

        parent::__construct($router);

    }

    /*
     * Return all properties as an array
     */
    public function toArray()
    {

        return $this->get;

    }

    /*
     * Magic getter method maps requests to the protected $get property
     */
    public function __get($property)
    {

        return (isset($this->get[$property]) ? $this->get[$property] : null);

    }

}
