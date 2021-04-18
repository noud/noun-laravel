# [Noun](http://en.wikipedia.org/wiki/Noun)s [Laravel](http://laravel.com)
![nouns-laravel](./doc/nouns-laravel.png?raw=true "nouns-laravel")

This Laravel PHP package exposes one [Doctrine](http://doctrine-project.org) [Inflector](http://doctrine-project.org/projects/inflector.html) as [back end](http://en.wikipedia.org/wiki/Front_end_and_back_end) [API](http://en.wikipedia.org/wiki/API).
```
plural/{singular}
singular/{plural}
```
## Naming conventions
- [Laravel](http://webdevetc.com/blog/laravel-naming-conventions/)
## Tooling
```
composer require noud/schema-builder --dev
composer require noud/nouns-laravel
php artisan vendor:publish
composer require doctrine/dbal
composer require infyomlabs/laravel-generator --dev
php artisan infyom:publish
php artisan infyom:model NormalNoun --fromTable
php artisan infyom:model IrregularNoun --fromTable
```
For the API follow [infyom](https://infyom.com/open-source/laravelgenerator/docs/8.0/generator-options#swagger)

[Laravel host](https://github.com/noud/laravel/tree/8.x-nouns)
