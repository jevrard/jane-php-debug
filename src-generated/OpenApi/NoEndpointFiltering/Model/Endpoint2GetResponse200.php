<?php

namespace Generated\OpenApi\NoEndpointFiltering\Model;

class Endpoint2GetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $field2;
    /**
     * 
     *
     * @return string
     */
    public function getField2() : string
    {
        return $this->field2;
    }
    /**
     * 
     *
     * @param string $field2
     *
     * @return self
     */
    public function setField2(string $field2) : self
    {
        $this->field2 = $field2;
        return $this;
    }
}