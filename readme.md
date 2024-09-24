# BackpackMenu

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

## Screenshots
![Backpack Menu](https://github.com/user-attachments/assets/9cf21ccb-0d5c-430a-9970-5c0d12279f23)


## Installation

Via Composer

``` bash
composer require winex01/backpack-menu
```

## Requirements
> Please install first [winex01/backpack-permission-manager](https://github.com/winex01/backpack-permission-manager)

## Usage

After installing [winex01/backpack-permission-manager](https://github.com/winex01/backpack-permission-manager), open RolesAndPermissionsSeeder.php and add this:

```php
protected $rolesAndPermissions = [
    // more arrays here...

    'menus' => [
        'menus_list',
        'menus_create',
        'menus_show',
        'menus_update',
        'menus_delete',
        'menus_reorder',
    ],
];
```

## migrations
```
php artisan vendor:publish --provider="Winex01\BackpackMenu\BackpackMenuServiceProvider" --tag="migrations"

// dont forget to run migrate after
```

## seeder
```
php artisan vendor:publish --provider="Winex01\BackpackMenu\BackpackMenuServiceProvider" --tag="seeders"
```

## run the seeder
```
php artisan db:seed --class=MenusTableSeeder.php

// or you can add it to default seeder file, DatabaseSeeder.php
```

## Add new menu

- add menu then add new array in RolesAndPermissionsSeeder.php
- you must have a permission with suffix _list, example users_list, menus_lists(use plural or table name), bec.
  the field permission in Menu crud will filter it and pick up only _list
- run the seeder and that's it.


## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/winex01/backpack-menu/releases).

## Testing

``` bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email winnie131212592@gmail.com instead of using the issue tracker.

## Credits

- [Winnie A. Damayo][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information. 

However, please note that you do need Backpack installed, so you need to also abide by its [YUMMY License](https://github.com/Laravel-Backpack/CRUD/blob/master/LICENSE.md). That means in production you'll need a Backpack license code. You can get a free one for non-commercial use (or a paid one for commercial use) on [backpackforlaravel.com](https://backpackforlaravel.com).


[ico-version]: https://img.shields.io/packagist/v/winex01/backpack-menu.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/winex01/backpack-menu.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/winex01/backpack-menu
[link-downloads]: https://packagist.org/packages/winex01/backpack-menu
[link-author]: https://github.com/winex01
[link-contributors]: ../../contributors
