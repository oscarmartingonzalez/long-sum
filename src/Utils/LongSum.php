<?php

namespace MyPrj\Utils;

use MyPrj\Utils\IntSequence;

class LongSum
{
    /**
     * @param string $num1
     * @param string $num2
     * @return string
     */
    public static function Sum(string $num1, string $num2): string
    {
        $intSequence1 = (new IntSequence($num1))->reverse();
        $intSequence2 = (new IntSequence($num2))->reverse();
        $n = max($intSequence1->length(), $intSequence2->length());
        $intSequenceResult = new IntSequence();
        $node1 = $intSequence1->getFirstNode();
        $node2 = $intSequence2->getFirstNode();
        $sumToNext = 0;
        for ($i = 0; $i < $n; $i++) {
            $partialSum = $sumToNext;
            if (!is_null($node1)) {
                $partialSum += $node1->value;
            }
            if (!is_null($node2)) {
                $partialSum += $node2->value;
            }
            $sumToNext = intdiv($partialSum, 10);
            $sumRest = $partialSum % 10;
            $intSequenceResult->add($sumRest);
            $node1 = !is_null($node1) ? $node1->nextNode : null;
            $node2 = !is_null($node2) ? $node2->nextNode : null;
        }
        if ($sumToNext > 0) {
            $intSequenceResult->add($sumToNext);
        }

        return $intSequenceResult->reverse()->getValueAsString();
    }
}
