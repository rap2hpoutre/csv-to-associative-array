# CSV to associative array

This package contains only a lightweight (587 bytes) namespaced function.

## What?

Get your CSV as an associative array. From this:

```csv
name,email
raphael,raphael@example.org
```

To this:
```php
[ ['name' => 'raphael', 'name' => 'raphael@example.org'] ]
```

## How?

Install via composer
```
composer require rap2hpoutre/csv-to-associative-array
```

Use
```
$content = \Rap2hpoutre\Csv\csv_to_associative_array('path/to/csv/file.csv');
```
