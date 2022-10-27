<?php

namespace Generated\OpenApi\Model;

class RootLevel
{
    /**
     *
     *
     * @var SubLevel1
     */
    protected $subLevel1;

    /**
     *
     *
     * @return SubLevel1
     */
    public function getSubLevel1(): SubLevel1
    {
        return $this->subLevel1;
    }

    /**
     *
     *
     * @param SubLevel1 $subLevel1
     *
     * @return self
     */
    public function setSubLevel1(SubLevel1 $subLevel1): self
    {
        $this->subLevel1 = $subLevel1;
        return $this;
    }
}