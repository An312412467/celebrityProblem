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
            if ($this->knows($this->people[$celebrity], $i)) {
                $celebrity = $i;
            }
        }

        for ($i = 0; $i < count($this->people); $i++) {
            if ($i != $celebrity && ($this->knows($this->people[$celebrity], $i) || !$this->knows($this->people[$i], $celebrity))) {
                return -1;
            }
        }

        return $celebrity;
    }

    private function knows(array $who, int $why): bool
    {
        return in_array($why, $who);
    }
}
