<?php

use App\Classes\Celebrity;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class CelebrityTest extends TestCase
{
    public function testCelebrityExists(): void
    {
        $people = [
            [1, 2, 4],
            [0, 2, 4],
            [],
            [2, 4],
            [2, 3],
        ];
        $celebrity = new Celebrity($people);
        assertEquals(2, $celebrity->findCelebrity());
    }

    public function testOneCelebrity(): void
    {
        $people = [
            []
        ];
        $celebrity = new Celebrity($people);
        assertEquals(0, $celebrity->findCelebrity());
    }

    public function testNoCelebrity(): void
    {
        $people = [
            [1, 2],
            [0, 2],
            [0, 1],
        ];
        $celebrity = new Celebrity($people);
        assertEquals(-1, $celebrity->findCelebrity());
    }

    public function testAllKnows(): void
    {
        $people = [
            [1, 2, 3],
            [0, 2, 3],
            [0, 1, 3],
            [0, 1, 2],
        ];
        $celebrity = new Celebrity($people);
        assertEquals(-1, $celebrity->findCelebrity());
    }

    public function testAllNotKnows(): void
    {
        $people = [
            [],
            [],
            [],
        ];
        $celebrity = new Celebrity($people);
        assertEquals(-1, $celebrity->findCelebrity());
    }
}