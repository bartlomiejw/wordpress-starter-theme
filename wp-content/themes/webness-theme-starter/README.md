# [Wordpress Theme Starter by Sage](https://webness.in)

[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Theme by Sage is a WordPress starter theme with a modern development workflow.

## What we used in our Wordpress Theme Starter

- [ES6](https://babeljs.io/learn-es2015/) for JavaScript
- [SASS](http://sass-lang.com/) preprocessor for CSS
- [Webpack](https://webpack.js.org/) for managing, compiling and optimizing theme's asset files
- [Blade](https://laravel.com/docs/5.6/blade) as a templating engine
- [Browsersync](http://www.browsersync.io/) for synchronized browser testing
- [Controller](https://github.com/soberwp/controller) for passing data to Blade templates
- CSS framework : [Bootstrap 4](https://getbootstrap.com/) / [Tailwind](https://tailwindcss.com/)
- Ready to use front-end boilerplates for [Bootstrap](//getbootstrap.com/docs/3.3/) and [Vue](//vuejs.org/)
- Utilizes PHP [Namespaces](http://php.net/manual/pl/language.namespaces.php)
- Simple [Theme Service Container](http://symfony.com/doc/2.0/glossary.html#term-service-container)
- Child Theme friendly [Autoloader](https://en.wikipedia.org/wiki/Autoload)
- Readable and centralized Theme Configs
- Oriented for building with [Actions](https://codex.wordpress.org/Glossary#Action) and [Filters](https://codex.wordpress.org/Glossary#Filter)
- Enhanced [Templating](https://en.wikibooks.org/wiki/PHP_Programming/Why_Templating) with support for passing data

## Features

- Modern free touch slider [Swiper.js](https://swiperjs.com/)
- Advanced Custom Fields [ACF](http://advancedcustomfields.com/)
- Custom Post Type [by jjgrainger](https://github.com/jjgrainger/PostTypes)
- Breadcrumps Function
- Pagination
- Releated Posts
- Footer Widget Area
- Header Menu
- WooCommerce starter files

See a working theme at [webness.local](https://webness.local).

## Requirements

Make sure all dependencies have been installed before moving on:

- [WordPress](https://wordpress.org/) >= 4.7
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
- [Composer](https://getcomposer.org/download/)
- [Laravel Mix](https://laravel-mix.com/)
- [Node.js](http://nodejs.org/) >= 8.0.0
- [NPM](https://docs.npmjs.com/getting-started)

## Theme installation

Install Sage using Composer from your WordPress themes directory (replace `your-theme-name` below with the name of your theme):

```shell
# @ app/themes/ or wp-content/themes/
$ composer create-project roots/sage your-theme-name
```

To install the latest development version of Sage, add `dev-master` to the end of the command:

```shell
$ composer create-project roots/sage your-theme-name dev-master
```

During theme installation you will have options to update `style.css` theme headers, select a CSS framework, and configure Browsersync.

## Theme structure

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Controllers/      # → Controller files
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

- Run `yarn` from the theme directory to install dependencies
- Update `resources/assets/config.json` settings:
  - `devUrl` should reflect your local development hostname
  - `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)
- Soil
  - `clean-up`,
  - `disable-rest-api`,
  - `disable-asset-versioning`,
  - `disable-trackbacks`,
  - `google-analytics' => 'UA-XXXXX-Y`,
  - `js-to-footer`,
  - `nav-walker`,
  - `nice-search`,
  - `relative-url`'

### Build commands

- `npm start` — Compile assets when file changes are made, start Browsersync session
- `npm run build` — Compile and optimize the files in your assets directory
- `npm run build:production` — Compile assets for production

## Documentation

- [Sage documentation](https://roots.io/sage/docs/)
- [Controller documentation](https://github.com/soberwp/controller#usage)
- [Tailwind documentation](https://tailwindcss.com/docs)
- [Bootstrap documentation](https://tailwindcss.com/docs)
