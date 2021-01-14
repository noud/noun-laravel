<?php

namespace Nouns\Http\Controllers;

class InflectorService
{
    public function plural(string $singular): string
    {
        return 'plural';
    }

    public function singular(string $plural): string
    {
        return 'singular';
    }
}
