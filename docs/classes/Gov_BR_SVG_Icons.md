***

# Gov_BR_SVG_Icons

This class is in charge of displaying SVG icons across the site.

Place each <svg> source on its own array key, without adding either
the `width` or `height` attributes, since these are added dynamically,
before rendering the SVG code.

All icons are assumed to have equal width and height, hence the option
to only specify a `$size` parameter in the svg methods.

* Full name: `\Gov_BR_SVG_Icons`



## Properties


### icons

User Interface icons – svg sources.

```php
protected static array $icons
```



* This property is **static**.


***

### social_icons

Social Icons – svg sources.

```php
protected static array $social_icons
```



* This property is **static**.


***

### social_icons_map

Social Icons – domain mappings.

```php
protected static array $social_icons_map
```

By default, each Icon ID is matched against a .com TLD. To override this behavior,
specify all the domains it covers (including the .com TLD too, if applicable).

* This property is **static**.


***

## Methods


### get_svg

Gets the SVG code for a given icon.

```php
public static get_svg(string $group, string $icon, int $size): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **string** | The icon group. |
| `$icon` | **string** | The icon. |
| `$size` | **int** | The icon-size in pixels. |




***

### get_social_link_svg

Detects the social network from a URL and returns the SVG code for its icon.

```php
public static get_social_link_svg(string $uri, int $size): string|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** | Social link. |
| `$size` | **int** | The icon-size in pixels. |




***


***
> Automatically generated from source code comments on 2023-06-23 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
