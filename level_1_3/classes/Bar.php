<?php

class Bar extends Foo
{
    public function save()
    {
    }

    public function new()
    {
    }

    public function getName():string
    {
        return parent::getName() . ' ' . 'Здорово!';
    }
}
