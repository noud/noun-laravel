<?php

namespace Nouns\API\Http\Controllers\Generator;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Nouns\API\Models\IrregularNoun;
use Nouns\API\Models\NormalNoun;

class GenerateDoctrineController extends BaseController
{
    public function generateFile(string $file)
    {
        $method = 'Rules' . $file;
        return $this->$method('nouns-laravel::doctrine/' . $file);
    }

    // files

    public function RulesInflectible(string $file)
    {
        $irregulars = IrregularNoun::where('rule_id', Config::get('nouns-laravel.rules.irreguar'))->get();
var_dump($irregulars);
        return $this->ViewMake($file, [
            'irregulars' => $irregulars
        ]);
    }

    public function RulesUninflected(string $file)
    {
        $singulars = NormalNoun::where('rule_id', Config::get('nouns-laravel.rules.singular'))->get();
        $plurals = NormalNoun::where('rule_id', Config::get('nouns-laravel.rules.plural'))->get();
        $defaults = NormalNoun::where('rule_id', Config::get('nouns-laravel.rules.default'))->get();
var_dump($singulars);
        return $this->ViewMake($file, [
            'singulars' => $singulars,
            'plurals' => $plurals,
            'defaults' => $defaults
        ]);
    }

    public function Tests(string $file)
    {
        // $nouns = Xxx::where('CID', '=', Config::get('company.CID'));

        // return $this->ViewMake($file,[
        //     $nouns
        // ]);
    }

    // util

    public function ViewMake(string $view, array $vars)
    {
        $vars['language'] = self::language;

        return View::make($view)->with($vars);
    }
}
