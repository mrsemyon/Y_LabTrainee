<?php

abstract class Foo
{
    abstract public function save();

    abstract public function new();

    public function getName():string
    {
        return 'Произвольная строка';
    }
}
