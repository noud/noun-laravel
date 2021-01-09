@include('doctrine/header/header-tests')

class {{ $language|ucfirst }}FunctionalTest extends LanguageFunctionalTest
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
        return InflectorFactory::createForLanguage(Language::{{ $language|uc }})->build();
    }
}