<?php

namespace MyPrj\Utils;

class IntSequence
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var IntSequenceNode
     */
    private $firstNode;

    public function __construct(string $value)
    {
        $this->value = $value;
        $this->build();
    }

    private function build()
    {
        $n = strlen($this->value);
        /** @var IntSequenceNode $prevNode */
        $prevNode = null;
        for ($i = 0; $i < $n; $i++) {
            $node = new IntSequenceNode(intval($this->value[$i]));
            if (is_null($this->firstNode)) {
                $this->firstNode = $node;
            }
            $node->prevNode = $prevNode;
            if (!is_null($prevNode)) {
                $prevNode->nextNode = $node;
            }
            $prevNode = $node;
        }
    }

    public function getValueAsString()
    {
        $str = '';

        $node = $this->firstNode;
        while (!is_null($node)) {
            $str .= (string)$node->value;
            $node = $node->nextNode;
        }

        return $str;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getValueAsString();
    }
}
