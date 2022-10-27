<?php

namespace Generated\JsonSchema\Model;

class SubLevel1
{
    /**
     *
     *
     * @var SubLevel2
     */
    protected $subLevel2;

    /**
     *
     *
     * @return SubLevel2
     */
    public function getSubLevel2(): SubLevel2
    {
        return $this->subLevel2;
    }

    /**
     *
     *
     * @param SubLevel2 $subLevel2
     *
     * @return self
     */
    public function setSubLevel2(SubLevel2 $subLevel2): self
    {
        $this->subLevel2 = $subLevel2;
        return $this;
    }
}