<?php

namespace Nouns\Services;

use Nouns\Models\Noun;

class InflectorService
{
    public function plural(string $singular): ?Noun
    {
        return Noun::where('singular', $singular)->first();
    }

    public function singular(string $plural): ?Noun
    {
        return Noun::where('plural', $plural)->first();
    }
}
