<?php

namespace App\Classes;

class Celebrity
{
    private $people;

    public function __construct(array $people)
    {
        $this->people = $people;
    }

    public function findCelebrity(): int
    {
        $celebrity = 0;

        for ($i = 0; $i < count($this->people); $i++) {
            if ($this->knows($celebrity, $i)) {
                $celebrity = $i;
            }
        }

        for ($i = 0; $i < count($this->people); $i++) {
            if ($i != $celebrity && ($this->knows($celebrity, $i) || !$this->knows($i, $celebrity))) {
                return -1;
            }
        }

        return $celebrity;
    }

    private function knows(int $who, int $whom): bool
    {
        return in_array($whom, $this->people[$who]);
    }
}
