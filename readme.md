# ActiveHelper

ActiveHelper class for Laravel

## Installation

Via Composer

``` bash
$ composer require denis-kisel/active-helper
```

## Usage
``` php
ActiveHelper::ENABLE;
ActiveHelper::DISABLE;
```

In the laravel-admin grid
``` php
$grid->is_active(__('admin.is_active'))->editable('select', ActiveHelper::editable());
```
