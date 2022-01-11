<?php

namespace App\Collections;

/**
 * @template T
 *
 * @todo Constructor promotion?
 */
class GenericCollection
{
    /**
     * @var array<int, T>
     */
    public array $list;

    /**
     * @param array<int, T> $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * @param T $t
     */
    public function add($t): void
    {
        $this->list[] = $t;
    }
}
