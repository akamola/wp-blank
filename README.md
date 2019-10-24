# wp-blank

*wp-blank* is yet another [WordPress](http://wordpress.org) starter theme with all necessary features of WordPress for modern websites.

Note: This WordPress theme is only a starting point for your own theme. It only makes use of basic and some advanced features of WordPress and modern webdevelopment.

Need help? Got questions? Found an error? Have an improvment? Feel free to get in touch or open an issue on GitHub: http://github.com/akamola/wp-blank

## Features

### WordPress

- 2 widget areas: sidebar, footer
  - See `functions.php`
  - Widget area token: `wpblank-widgetarea-`
- 1 menu in the header: `primary`
  - See `functions.php`
- Basic setup for theme support features
  - See `functions.php`
- Optimized markup for comments
  - Seperated sections for pingbacks/trackbacks and comments
  - See `comments.php` and `functions.php`
- Basic error 404 page
  - Edit `404.php`
- `is_subpage()` function to check if a page is a subpage
  - See `functions.php`
- Translation ready (i18n)
- Theme token (for i18n, etc.): `wpblank`

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
- [Pavatar](https://github.com/pavatar/pavatar)
  - See `assets` folder
- [Schema.org](http://schema.org/) meta data for blog posts

### JavaScript

- Basic JavaScript file with jQuery setup
  - See `app.js`
- Enqueue `app.js` to use WordPress' jQuery
  - See `functions.php`
- Enqueue JavaScript in the footer of the website for better performance

### Security

- Hide WordPress version by removing the generator meta tag
- Replace the default login error message to hide any information that could maybe used to crack into the system

## Releases

### 1.2.0 (2019-10-24)

- Change the container element of `wp_nav_menu` to the HTML 5 element `NAV`, instead of the old `DIV`
- Change the main content wrapper element from `DIV` to the HTML 5 element `MAIN`
- Update [normalize.css](https://necolas.github.io/normalize.css/) to version 8.0.1
- Minify the placeholder images again
- Update the README.md, try to make some points more understandable
- Update my e-mail address

### 1.1.0 (2016-01-27)

- Change theme token for i18n, function prefix, etc. from `blanktheme` to `wpblank`
- Remove archive page template
- Changed ID of the header menu from `header` to `primary`
- Replace widget area in the header with a native menu (also see previous point)
- Use `is_home()` instead of `is_front_page()` on the page title and site name for correct page title and site name linking even without static frontpage
- Encapsulate seperator for tags "," with a `SPAN` with the class `sep`
- Fix JavaScripts placement: now placed at the end of the HTML file for better page performance
- Fix hooks of `add_action()` for menus and widget areas in the `functions.php`

### 1.0.3 (2015-08-03)

- Refactoring, small enhancements and corrections

### 1.0.2 (2015-06-23)

- Small bug fixes and security enhancements

### 1.0.1 (2015-06-18)

- Small bug fixes and enhancements

### 1.0 (2015-05-10)

- Initial release
- Use normalize.css 3.0.2

## Authors

- Arne Kamola <arne@arne.xyz>

## License

[GNU General Public License (GPL) 2.0](http://www.gnu.org/licenses/gpl-2.0.html)
