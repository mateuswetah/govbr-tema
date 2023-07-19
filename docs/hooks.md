# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `gov_br_single_before_post_navigation`

*Action for rendering content before the post navigation in the single template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/single.php](single.php), [line 18](single.php#L18-L23)

### `gov_br_single_after_post_navigation`

*Action for rendering content after the post navigation in the single template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/single.php](single.php), [line 53](single.php#L53-L58)

### `gov_br_image_template_before_page_header`

*Action for rendering content before the page header in the image template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/image.php](image.php), [line 17](image.php#L17-L22)

### `gov_br_image_template_after_page_header`

*Action for rendering content after the page header in the image template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/image.php](image.php), [line 30](image.php#L30-L35)

### `gov_br_search_before_page_header`


Source: [govbr/search.php](search.php), [line 17](search.php#L17-L17)

### `gov_br_search_after_page_header`


Source: [govbr/search.php](search.php), [line 31](search.php#L31-L31)

### `gov_br_before_site_header`


Source: [govbr/header.php](header.php), [line 32](header.php#L32-L32)

### `gov_br_after_site_header`


Source: [govbr/header.php](header.php), [line 36](header.php#L36-L36)

### `gov_br_index_before_page_header`

*Action for rendering content before the page header in the index template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/index.php](index.php), [line 24](index.php#L24-L29)

### `gov_br_index_after_page_header`

*Action for rendering content after the page header in the index template.*


**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/index.php](index.php), [line 37](index.php#L37-L42)

### `gov_br_archive_before_page_header`


Source: [govbr/archive.php](archive.php), [line 17](archive.php#L17-L17)

### `gov_br_archive_after_page_header`


Source: [govbr/archive.php](archive.php), [line 26](archive.php#L26-L26)

### `gov_br_before_site_footer`


Source: [govbr/footer.php](footer.php), [line 17](footer.php#L17-L17)

### `gov_br_after_site_footer`


Source: [govbr/footer.php](footer.php), [line 21](footer.php#L21-L21)

## Filters

### `gov_br_theme_admin_settings_page_tabs`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$extra_tabs` |  | 

Source: [govbr/classes/class-gov-br-admin-page.php](classes/class-gov-br-admin-page.php), [line 113](classes/class-gov-br-admin-page.php#L113-L116)

### `gov_br_theme_admin_settings_page_plugins`

*Filter for adding extra plugins to be recommended on the theme settings page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$plugins` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/classes/class-gov-br-admin-page.php](classes/class-gov-br-admin-page.php), [line 400](classes/class-gov-br-admin-page.php#L400-L411)

### `gov_br_svg_icons_{$group}`

*Filters Gov BRs's array of icons.*

The dynamic portion of the hook name, `$group`, refers to
the name of the group of icons, either "ui" or "social".

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$arr` | `array` | Array of icons.

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/classes/class-gov-br-svg-icons.php](classes/class-gov-br-svg-icons.php), [line 174](classes/class-gov-br-svg-icons.php#L174-L184)

### `gov_br_social_icons_map`

*Filters Gov BRs's array of domain mappings for social icons.*

By default, each Icon ID is matched against a .com TLD. To override this behavior,
specify all the domains it covers (including the .com TLD too, if applicable).

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`self::$social_icons_map` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/classes/class-gov-br-svg-icons.php](classes/class-gov-br-svg-icons.php), [line 214](classes/class-gov-br-svg-icons.php#L214-L224)

### `gov_br_svg_icons_social`

*Filters Gov BR's array of social icons.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`self::$social_icons` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/classes/class-gov-br-svg-icons.php](classes/class-gov-br-svg-icons.php), [line 226](classes/class-gov-br-svg-icons.php#L226-L233)

### `gov_br_attachment_size`

*Filter the default image attachment size.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'full'` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/image.php](image.php), [line 41](image.php#L41-L48)

### `gov_br_starter_content`

*Filters the array of starter content.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$starter_content` | `array` | Array of starter content.

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/inc/starter-content.php](inc/starter-content.php), [line 147](inc/starter-content.php#L147-L154)

### `gov_br_can_show_post_thumbnail`

*Filters whether post thumbnail can be displayed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!post_password_required() && !is_attachment() && has_post_thumbnail()` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/inc/template-functions.php](inc/template-functions.php), [line 99](inc/template-functions.php#L99-L109)

### `the_content`

*This filter is documented in wp-includes/post-template.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$blocks_content` |  | 

Source: [govbr/inc/template-functions.php](inc/template-functions.php), [line 265](inc/template-functions.php#L265-L266)

### `gov_br_content_width`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`1152` |  | 

Source: [govbr/functions.php](functions.php), [line 150](functions.php#L150-L150)

### `gov_br_html_classes`

*Filters the classes for the main <html> element.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

**Changelog**

Version | Description
------- | -----------
`0.1.0` | 

Source: [govbr/functions.php](functions.php), [line 334](functions.php#L334-L341)


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.2.0</code></em><p>

