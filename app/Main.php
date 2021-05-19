<?php

namespace App;

use SplDoublyLinkedList;

class Main
{

    protected SplDoublyLinkedList $list;

    public function __construct()
    {
        $this->list = new SplDoublyLinkedList();
    }

    public function initNumbers()
    {
        for ($i = 0; $i <= 100; $i++) {
            $this->list->push($i);
        }
    }

    public function binarySearch($guess)
    {
        $left = 0;
        $right = $this->list->count() - 1;
        while ($left <= $right) {
            $index = floor(($left + $right) / 2);
            if ($this->list->offsetGet($index) < $guess) {
                $left = $index + 1;
                echo $index . "<br>";
            } elseif ($this->list->offsetGet($index) > $guess) {
                $right = $index - 1;
                echo $index . "<br>";
            } else {
               return $index;
            }
        }
        return false;
    }

    public function computerGuess($guess)
    {
        $left = 0;
        $right = $this->list->count() - 1;
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($guess == $this->list->offsetGet($mid)) {
                return $mid;
            } elseif ($guess < $this->list->offsetGet($mid)) {
                $right = $mid - 1;
                echo $mid . "<br>";
            } elseif ($guess > $this->list->offsetGet($mid)) {
                $left = $mid + 1;
                echo $mid . "<br>";
            }
        }
        return false;
    }
}