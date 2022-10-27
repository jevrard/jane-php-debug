<?php

namespace Generated\OpenApi\Endpoint2Filtering\Model;

class UnwantedSubModel
{
    /**
     * 
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}