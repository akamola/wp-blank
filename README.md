# Blank

*Blank* is yet another [WordPress](http://wordpress.org) starter theme with all necessary features of WordPress for modern websites.

Note: This WordPress theme is only a starting point for your own theme. It only makes use of basic and some advanced features of WordPress and modern webdevelopment.

Need help? Got questions? Found an errors? Have an improvment? Feel free to get in touch or open an issue on GitHub: http://github.com/akamola/wp-blank

## Features

### WordPress

- 3 widget areas: header, sidebar, footer
  - See `functions.php`
  - Widget area token: `blanktheme-widgetarea-`
- Basic setup for menus
  - See `functions.php`
- Optimized markup for comments
  - Seperated sections for pingbacks/trackbacks and comments
  - See `comments.php` and `functions.php`
- Basic error 404 page
  - Edit `404.php`
- Archive template with tag-cloud, month list and categories
  - See `archive.php`
- `is_subpage()` function to check if a page is a subpage
  - See `functions.php`
- Translation ready (i18n)
- Theme token (for i18n, etc.): `blanktheme`

### HTML, CSS & Accessibility

- HTML 5
- Link to RSS feeds (for older blog nerds)
- CSS classes on the BODY
  - See [WordPress Codex: body_class()](https://codex.wordpress.org/Function_Reference/body_class)
- Blog title isn't linked on the homepage
- Use [normalize.css](http://necolas.github.io/normalize.css/) (minified)
- Basic WIA-ARIA roles for better accessibility
- Quick jump link to the content area of a page (for better accessibility)
  - Hidden with CSS: `#jumper { display: none; }`

### Responsive Design

- Basic respnsive design setup
- Responsive images in the content area

### Social Media & SEO

- Favicon
  - Set your favicon in your root folder: `/favicon.ico`
- Apple Touch Icons
  - See `assets` folder
- Microsoft Application Tile
  - Set tile color in the `header.php`
- Pavatar
  - See `assets` folder
- [Schema.org](http://schema.org/) meta data for blog posts

### JavaScript

- Basic JavaScript file with jQuery setup
  - See `app.js`
- Enqueue `app.js` to use WordPress` jQuery 
  - See `functions.php`

## Releases

### 1.0 (2015-05-10)

- Initial release
- Use normalize.css 3.0.2

## Authors

- Arne Kamola <a.kamola@psilab.de>

## License

[GNU General Public License (GPL) 2.0](http://www.gnu.org/licenses/gpl-2.0.html)