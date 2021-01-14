@include('nouns-laravel::doctrine/header/header-rules')
use Doctrine\Inflector\Rules\Substitution;
use Doctrine\Inflector\Rules\Transformation;
use Doctrine\Inflector\Rules\Word;

class Inflectible
{
    /**
     * @return iterable{!! '<Transformation>' !!}
     */
    public static function getSingular(): iterable
    {
        // rules @todo
    }

    /**
     * @return iterable{!! '<Transformation>' !!}
     */
    public static function getPlural(): iterable
    {
        // rules @todo
    }

    /**
     * @return iterable{!! '<Substitution>' !!}
     */
    public static function getIrregular(): iterable
    {
@foreach($irregulars as $irregular)
        yield new Substitution(new Word('{{$irregular->singular}}'), new Word('{{$irregular->singular}}'));
@endforeach
    }
}
