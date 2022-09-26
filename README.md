# Route
***
This project was Inspired by [Klein](https://github.com/chriso/klein.php)

## Requirements

You need `PHP 5.3` or higher.

## How to use

You only need two files:

- 1: `api/route.php`
- 2: `.htaccess`

The `.htaccess` redirects all requests to `index.php?uri=$`.

You can run everything from the index.php file, see the file for usage.

## Examples

Require the route.php file and create an instance.
```php
require_once 'api/route.php';

$route = new Route();
```

Here is how you'd add your home page.

```php
$route->add('/', function() {
  echo 'This is the home page, there is no template engine';
});
```

Here is how to add arguments

```php
$route->add('/name/.+/age/.+', function($name, $age) {
  echo "Your name is $name and you are $age years old";
});
```

After all routes are defined, you always end it with:

```php
$route->listen();
```

***
