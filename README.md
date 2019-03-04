# laravel-boilerplate
Laravel Boilerplate with standard packages and extra configuration

# Usage
To install a basic Laravel installation, run the following command.
```
composer create-project --prefer-dist oliversarfas/laravel-boilerplate
```

# Included Packages
- https://www.github.com/barryvdh/laravel-debugbar
- https://www.github.com/barryvdh/laravel-ide-helper
- https://www.github.com/beyondcode/laravel-dump-server
- https://www.github.com/beyondcode/laravel-query-detector
- https://www.github.com/brianium/paratest

# Specific Configuration Changes

## PHPUnit
- I've updated the `phpunit.xml` to include sqlite for database. This allows for faster PHPUnit tests when including database integrations
- Functions declared in `test/utilities/functions.php` are loaded via composer when running tests
  - `create()` and `make()` short-functions, to save time writing `factory(MyClass::class)->create()` all the time
- `TestCase.php` has the function `login(App\User User = null): self`
  - This allows the user to call `$this->login()` from any test (easier to use than `actingAs()`)
- All Notifications, Events, and Mails are faked. Ensuring nothing is sent out when PHPUnit is run
