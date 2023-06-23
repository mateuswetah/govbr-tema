***

# Flatted





* Full name: `\Flatted`




## Methods


### parse



```php
public static parse(mixed $json, mixed $assoc = false, mixed $depth = 512, mixed $options): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **mixed** |  |
| `$assoc` | **mixed** |  |
| `$depth` | **mixed** |  |
| `$options` | **mixed** |  |




***

### stringify



```php
public static stringify(mixed $value, mixed $options, mixed $depth = 512): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$options` | **mixed** |  |
| `$depth` | **mixed** |  |




***

### asString



```php
private static asString(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### index



```php
private static index(mixed& $known, mixed& $input, mixed& $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$known` | **mixed** |  |
| `$input` | **mixed** |  |
| `$value` | **mixed** |  |




***

### keys



```php
private static keys(mixed& $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### loop



```php
private static loop(mixed $obj, mixed $keys, mixed& $input, mixed& $set, mixed& $output): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$keys` | **mixed** |  |
| `$input` | **mixed** |  |
| `$set` | **mixed** |  |
| `$output` | **mixed** |  |




***

### relate



```php
private static relate(mixed& $known, mixed& $input, mixed& $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$known` | **mixed** |  |
| `$input` | **mixed** |  |
| `$value` | **mixed** |  |




***

### ref



```php
private static ref(mixed $obj, mixed& $key, mixed& $value, mixed& $input, mixed& $set, mixed& $output): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$input` | **mixed** |  |
| `$set` | **mixed** |  |
| `$output` | **mixed** |  |




***

### transform



```php
private static transform(mixed& $known, mixed& $input, mixed& $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$known` | **mixed** |  |
| `$input` | **mixed** |  |
| `$value` | **mixed** |  |




***

### wrap



```php
private static wrap(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***
> Automatically generated on 2023-06-22
