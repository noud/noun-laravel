@include('nouns-laravel::doctrine/header/header-tests')

class {{ ucfirst($language) }}FunctionalTest extends LanguageFunctionalTest
{
    /**
     * @return list{!! <array{string, string}> !!}
     */
    public function dataSampleWords(): array
    {
        return [
            @foreach($nouns as $noun)
                [\'{{$noun->singular}}\'), new Word(\'{{$noun->plural}}\'],
            @endforeach
        ];
    }

    protected function createInflector(): Inflector
    {
        return InflectorFactory::createForLanguage(Language::{{ uc($language) }})->build();
    }
}