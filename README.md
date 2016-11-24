# CSV to associative array

This package only contains a 587 bytes function: `csv_to_associative_array`.

## What?

Get your CSV file as an associative array. From this:

```csv
name,email
raphael,raphael@example.org
lisa,lisa@example.org
```

To this:
```php
[ 
  ['name' => 'raphael', 'email' => 'raphael@example.org'], 
  ['name' => 'lisa',    'email' => 'lisa@example.org'] 
]
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
