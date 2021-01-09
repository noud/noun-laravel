@include('doctrine/header/header-rules')

class Inflectible
{
    /**
     * @return iterable{!! <Pattern> !!}
     */
    public static function getPlural(): iterable
    {
        yield from self::getDefault();

        @foreach($singulars as $singular)
            yield new Pattern(\'{{$singular->singular}}\');
        @endforeach
    }

    /**
     * @return iterable{!! <Pattern> !!}
     */
    public static function getSingular(): iterable
    {
        yield from self::getDefault();

        @foreach($plurals as $plural)
            yield new Pattern(\'{{$plural->plural}}\');
        @endforeach
    }

    /**
     * @return iterable{!! <Pattern> !!}
     */
    public static function getDefault(): iterable
    {
        @foreach($defaults as $default)
            yield new Pattern(\'{{$default->default}}\');
        @endforeach
    }
}