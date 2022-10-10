# A MVCS pattern create a enum command for Laravel 5+
Create a new enum class 

# Install
```bash
composer require saeedshoh/laravel-make-enum --dev
```

# Suggest
saeedshoh@gmail.com


# Usage
```bash
$ php artisan make:enum {name : Create a enum class}
```

# Example

## Create a service class
```bash
$ php artisan make:enum UserType
```

```php
<?php
// app/Enums/UserType.php

namespace App\Enums;

/**
 * Enum UserType
 * @package App\Enums
 */
enum UserType
{

}
```
