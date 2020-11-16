<?php

namespace Classes;

class LongestIncreasingSubsequence
{
    /**
     * @param  $numbers array
     * @return array
     */
    public static function main(array $numbers): array
    {
        $length = count($numbers);
        $solutions = [$length];
        $previousSolutions = [$length];
        $maxSolution = 0;
        $maxSolutionIndex = 0;

        for ($currentIndex=0; $currentIndex < $length; $currentIndex++) {

            $solution = 1;
            $previousIndex = -1;
            $currentNumber = $numbers[$currentIndex];

            for ($solutionIndex=0; $solutionIndex < $currentIndex; $solutionIndex++) {
                $previousNumber = $numbers[$solutionIndex];
                $previousSolution = $solutions[$solutionIndex];
                if ($currentNumber > $previousNumber && $solution <= $previousSolution) {
                    $solution = $previousSolution + 1;
                    $previousIndex = $solutionIndex;
                }
            }

            $solutions[$currentIndex] = $solution;
            $previousSolutions[$currentIndex] = $previousIndex;

            if ($solution > $maxSolution) {
                $maxSolution = $solution;
                $maxSolutionIndex = $currentIndex;
            }

        }

        $index = $maxSolutionIndex;
        $result = [];

        while ($index != -1) {
            $result[] = $numbers[$index];
            $index = $previousSolutions[$index];
        }

        return array_reverse($result);
    }
}