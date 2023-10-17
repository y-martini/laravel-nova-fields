# Nova Package Name

[![Latest Version](http://img.shields.io/packagist/v/yuriy-martini/laravel-nova-fields.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/yuriy-martini/laravel-nova-fields)
[![MIT License](https://img.shields.io/github/license/yuriy-martini/laravel-nova-fields.svg?label=License&color=blue&style=for-the-badge)](https://github.com/yuriy-martini/laravel-nova-fields/blob/master/LICENSE.md)

## Installation

```shell
composer require yuriy-martini/laravel-nova-fields
```

## Usage

`app/Nova/Fields/Text.php`:

```php
<?php

namespace App\Nova\Fields;

class Text extends \Laravel\Nova\Fields\Text
{
    use \YuriyMartini\Laravel\Nova\Fields\Concerns\IsRequired;
}
```

`app/Nova/User.php`:

```php
<?php

namespace App\Nova;

class User extends Resource
{
    public function fields(NovaRequest $request): array
    {
        return [
            \App\Nova\Fields\Text::make('Name'),
        ];
    }
}
```

## Changelog

Please see [Changelog File](CHANGELOG.md) for more information on what has changed recently.

## Testing

```shell
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
