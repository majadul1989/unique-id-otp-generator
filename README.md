# Unique Id & Otp Generator

## installation process

```
composer require coder-orbit/unique-id-generator
```

## Use from Controller

```php
    use CoderOrbit\LaravelUniqueId\UniqueId;
```

```php copy

// @Parameter

// $model_name
// $field_name

$data = UniqueId::uniqueNumber(User::class, "unique_id");
dd($data);
// 6629289017
```

```php copy

// $model_name
// $field_name
// $length is limit for use max number is 18, defalut 10
$data = UniqueId::uniqueNumber(User::class, "unique_id", 5);
dd($data);
// 66292
```

```php copy

// $model_name
// $field_name

$data = UniqueId::uniqueId(User::class, "unique_id");
dd($data);
// ZqMkPpjXrOeOq1z

```

```php copy

// $model_name
// $field_name
// $length

$data = UniqueId::uniqueId(User::class, "unique_id", 5);
dd($data);
// B2czT
```



