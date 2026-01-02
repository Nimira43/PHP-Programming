# print_r() — Deep Dive

## What print_r() Does

print_r() is a human‑friendly debugging function that prints the structure of arrays and objects.

```php
print_r($array);
```

Example:

```php
$animals = ['lion', 'elephant', 'deer'];
print_r($animals);
```

Output:

```Code
Array
(
    [0] => lion
    [1] => elephant
    [2] => deer
)
```

Readable. Clean. Great for quick inspection.

## Returning Instead of Printing (The “Advanced Detail”)

print_r() has a second optional parameter:

```php
print_r(mixed $value, bool $return = false)
```

If you pass true, it does not print anything.
Instead, it returns the formatted output as a string.

Example:

```php
$animals = ['lion', 'elephant', 'deer'];

$result = print_r($animals, true);

echo "Here is the array: " . $result;
```

This is useful for:

- Logging

- Debugging inside APIs

- Writing to files

- Returning structured data from functions

## print_r() vs var_dump()

| Feature | print_r() | var_dump() |
| ---------- | ---------- | ---------- |
| Row 1 | Data | More |
| Row 2 | Data | More |
| Shows data types | No | Yes |
| Shows lengths | No | Yes |
| Human‑friendly | Yes | More technical |
| Returns output as string | With second argument | No |
| Best for | Quick debugging | Deep inspection |

Rule of thumb:

- Use print_r() when you want readability.

- Use var_dump() when you want precision.

## Why PHP Developers Omit the Closing ?> Tag

The Real Reason - if you close a PHP file like this:

```php
<?php
// some code
?>
```

After that closing tag if there is even...

- one space

- one newline

- one invisible BOM character

...PHP will output it.

This can break...

- header()

- session_start()

- setcookie()

- JSON APIs

- File downloads

- Redirects

...because once PHP sends any output, headers are locked.

Example of a Bug:

```php
<?php
header('Location: /home');
?>
⏎   ← this newline breaks everything
```

You’ll get:

```Code
Warning: Cannot modify header information - headers already sent
```

## The Best Practice

Simply omit the closing tag:

```php
<?php
header('Location: /home');
// no closing tag
```

This guarantees:

- No accidental whitespace

- No BOM issues

- No header errors

- Cleaner, safer PHP files

This is why modern PHP ecosystems do it:

- Laravel

- Symfony

- WordPress

- Composer packages

- Most open‑source PHP libraries

## Summary

print_r()

- Great for readable debugging

- Can return output as a string using true

- Does not show types (use var_dump() for that)

Omitting ?>

- Prevents accidental whitespace output

- Avoids “headers already sent” errors

- Considered best practice in PHP‑only files
  