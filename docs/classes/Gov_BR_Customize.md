***

# Gov_BR_Customize

Customizer Settings.



* Full name: `\Gov_BR_Customize`




## Methods


### __construct

Constructor. Instantiate the object.

```php
public __construct(): mixed
```











***

### register

Register customizer options.

```php
public register(\WP_Customize_Manager $wp_customize): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wp_customize` | **\WP_Customize_Manager** | Theme Customizer object. |




***

### sanitize_checkbox

Sanitize boolean for checkbox.

```php
public static sanitize_checkbox(bool $checked = null): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$checked` | **bool** | Whether or not a box is checked. |




***

### partial_blogname

Render the site title for the selective refresh partial.

```php
public partial_blogname(): void
```











***

### partial_blogdescription

Render the site tagline for the selective refresh partial.

```php
public partial_blogdescription(): void
```











***

### partial_signature_text

Render the site signature for the selective refresh partial.

```php
public partial_signature_text(): void
```











***


***
> Automatically generated from source code comments on 2023-07-19 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
