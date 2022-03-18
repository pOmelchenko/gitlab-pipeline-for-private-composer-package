<?php

namespace Core;

class Application
{
    public function init(): string
    {
        return 'Started';
    }

    public function hello(): string
    {
        return 'hello';
    }

    public function bye(): string
    {
        return 'bye';
    }
}
