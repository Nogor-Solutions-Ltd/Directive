
<p align="center">
    <img height="250px" width="250px" src="https://i.ibb.co/0tdrHcx/DALL-E-2023-08-26-00-53-51-Wizard-logo-simple-minimal-2-color-1.jpg">
</p>

## Introduction

🌟 Transform your Laravel Blade views with our user-friendly custom directive package – making development a breeze and sprinkling joy into your code! ✨


## Installation

You can install the package using composer

```sh
$  composer require nogorsolutionsltd/directives
```

Then add the service provider to `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
     NogorSolutionsLTD\Directive\ServiceProvider::class,
    ...
];
```

You can publish the configuration file and assets by running:

```sh
$ php artisan vendor:publish --provider=" NogorSolutionsLTD\Directive\ServiceProvider::class,"
```

Now that we have published a few new files to our application we need to reload them with the following command:

```sh
$ composer dump-autoload
```


## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](CONTRIBUTING.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- Sarfaraz Muhammad Sajib

## License

license. Please see the [license file](LICENCE.md) for more information.
