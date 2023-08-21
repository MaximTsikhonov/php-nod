# Наибольший Общий Делитель (НОД)

Возращает наибольший общий делить (НОК) двух чисел a и b, на которое a и b делятся без остатка.  Например:
```bash
a = 4 и b = 14. НОК  = 4
```

## Требования

- PHP >= 7.4

## Установка

```bash
$ composer require maxim-tsikhonov/php-nod
```

## Подключение

```php
use MaximTsikhonov\PhpNod\CalculationProcessor;
```

## Использование 

```php
$calculation = new CalculationProcessor();
echo $calculation->nod($num1, $num2);
```