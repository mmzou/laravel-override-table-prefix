# laravel-override-table-prefix

## 框架要求

Laravel >= 5.0

## 安装

```shell
composer require mmzou/laravel-override-table-prefix
```

## 使用

在User model里添加trait：

```php
<?php

namespace App;

use Mmzou\LaravelOverrideTablePrefix\OverrideTablePrefix;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use OverrideTablePrefix;
}

```

## License

MIT
