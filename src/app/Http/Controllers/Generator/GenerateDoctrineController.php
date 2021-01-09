<?php

class GenerateDoctrineController extends BaseController
{
    public function generateFile(string $file)
    {
        $method = 'Rules' . $file;
        return $this->$method('doctrine/rules/' . $file);
    }

    // files

    public function RulesInflectible(string $file)
    {
        $irregulars = Xxx::where('CID', '=', Config::get('company.CID'));

        return $this->ViewMake($file, [
            $irregulars
        ]);
    }

    public function RulesUninflected(string $file)
    {
        $singulars = Xxx::where('CID', '=', Config::get('company.CID'));
        $plurals = Xxx::where('CID', '=', Config::get('company.CID'));
        $defaults = Xxx::where('CID', '=', Config::get('company.CID'));

        return $this->ViewMake($file, [
            $singulars,
            $plurals,
            $defaults
        ]);
    }

    public function Tests(string $file)
    {
        $nouns = Xxx::where('CID', '=', Config::get('company.CID'));

        return $this->ViewMake($file,[
            $nouns
        ]);
    }

    // util

    public function ViewMake(string $view, array $vars)
    {
        $vars[] = self::language;

        return View::make($view)->with($vars);
    }
}
