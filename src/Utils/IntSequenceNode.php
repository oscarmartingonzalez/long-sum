<?php

namespace MyPrj\Utils;

class IntSequenceNode
{
    /**
     * @var IntSequenceNode
     */
    public $prevNode;
    /**
     * @var IntSequenceNode
     */
    public $nextNode;
    /**
     * @var int
     */
    public $value;

    /**
     * IntSequenceNode constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
