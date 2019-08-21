<?php

namespace MyPrj\Utils;

use MyPrj\Utils\IntSequenceNode;

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

    public function __construct(string $value = null)
    {
        $this->value = !is_null($value) ? $value : '';
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

    /**
     * @return string
     */
    public function getValueAsString(): string
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

    /**
     * @return IntSequence
     */
    public function reverse(): IntSequence
    {
        return new IntSequence(strrev($this->getValueAsString()));
    }

    /**
     * @return int
     */
    public function length(): int
    {
        $length = 0;
        $tmpNode = $this->firstNode;
        while (!is_null($tmpNode)) {
            $length += 1;
            $tmpNode = $tmpNode->nextNode;
        }

        return $length;
    }

    /**
     * @return IntSequenceNode
     */
    public function getFirstNode(): IntSequenceNode
    {
        return $this->firstNode;
    }

    /**
     * @return IntSequenceNode
     */
    public function getLastNode(): IntSequenceNode
    {
        $node = $this->firstNode;
        while (!is_null($node) && !is_null($node->nextNode)) {
            $node = $node->nextNode;
        }

        return $node;
    }

    /**
     * @param int $value
     */
    public function add(int $value)
    {
        $node = new IntSequenceNode($value);
        if (is_null($this->firstNode)) {
            $this->firstNode = $node;
        } else {
            $this->getLastNode()->nextNode = $node;
        }
    }
}
