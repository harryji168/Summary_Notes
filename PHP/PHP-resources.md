# Awesome PHP ![](https://github.com/ziadoz/awesome-php/workflows/Awesome%20Bot/badge.svg)

A curated list of amazingly awesome PHP libraries, resources and shiny things.

## Contributing and Collaborating
Please see [CONTRIBUTING](https://github.com/ziadoz/awesome-php/blob/master/CONTRIBUTING.md), [CODE-OF-CONDUCT](https://github.com/ziadoz/awesome-php/blob/master/CODE-OF-CONDUCT.md) and [COLLABORATING](https://github.com/ziadoz/awesome-php/blob/master/COLLABORATING.md) for details.

## Table of Contents
- [Awesome PHP](#awesome-php)
    - [Composer Repositories](#composer-repositories)
    - [Dependency Management](#dependency-management)
    - [Dependency Management Extras](#dependency-management-extras)
    - [Frameworks](#frameworks)
    - [Framework Extras](#framework-extras)
    - [Content Management Systems](#content-management-systems-cms)
    - [Components](#components)
    - [Micro Frameworks](#micro-frameworks)
    - [Micro Framework Extras](#micro-framework-extras)
    - [Routers](#routers)
    - [Templating](#templating)
    - [Static Site Generators](#static-site-generators)
    - [HTTP](#http)
    - [Scraping](#scraping)
    - [Middlewares](#middlewares)
    - [URL](#url)
    - [Email](#email)
    - [Files](#files)
    - [Streams](#streams)
    - [Dependency Injection](#dependency-injection)
    - [Imagery](#imagery)
    - [Testing](#testing)
    - [Continuous Integration](#continuous-integration)
    - [Documentation](#documentation)
    - [Security](#security)
    - [Passwords](#passwords)
    - [Code Analysis](#code-analysis)
    - [Code Quality](#code-quality)
    - [Static Analysis](#static-analysis)
    - [Architectural](#architectural)
    - [Debugging and Profiling](#debugging-and-profiling)
    - [Build Tools](#build-tools)
    - [Task Runners](#task-runners)
    - [Navigation](#navigation)
    - [Asset Management](#asset-management)
    - [Geolocation](#geolocation)
    - [Date and Time](#date-and-time)
    - [Event](#event)
    - [Logging](#logging)
    - [E-commerce](#e-commerce)
    - [PDF](#pdf)
    - [Office](#office)
    - [Database](#database)
    - [Migrations](#migrations)
    - [NoSQL](#nosql)
    - [Queue](#queue)
    - [Search](#search)
    - [Command Line](#command-line)
    - [Authentication and Authorization](#authentication-and-authorization)
    - [Markup and CSS](#markup-and-css)
    - [JSON](#json)
    - [Strings](#strings)
    - [Numbers](#numbers)
    - [Filtering and Validation](#filtering-and-validation)
    - [API](#api)
    - [Caching and Locking](#caching-and-locking)
    - [Data Structure and Storage](#data-structure-and-storage)
    - [Notifications](#notifications)
    - [Deployment](#deployment)
    - [Internationalisation and Localisation](#internationalisation-and-localisation)
    - [Serverless](#serverless)
    - [Configuration](#configuration)
    - [Third Party APIs](#third-party-apis)
    - [Extensions](#extensions)
    - [Miscellaneous](#miscellaneous)
- [Software](#software)
    - [PHP Installation](#php-installation)
    - [Development Environment](#development-environment)
    - [Virtual Machines](#virtual-machines)
    - [Text Editors and IDEs](#text-editors-and-ides)
    - [Web Applications](#web-applications)
    - [Infrastructure](#infrastructure)
- [Resources](#resources)
    - [PHP Websites](#php-websites)
    - [PHP Books](#php-books)
    - [PHP Videos](#php-videos)
    - [PHP Podcasts](#php-podcasts)
    - [PHP Newsletters](#php-newsletters)
    - [PHP Reading](#php-reading)
    - [PHP Internals Reading](#php-internals-reading)

### Composer Repositories
*Composer Repositories.*

* [Firegento](https://packages.firegento.com/) - Magento Module Composer Repository.
* [Packagist](https://packagist.org/) - The PHP Package Repository.
* [Private Packagist](https://packagist.com/) - Composer package archive as a service for PHP.
* [WordPress Packagist](https://wpackagist.org/) - Manage your plugins with Composer.

### Dependency Management
*Libraries for dependency and package management.*

* [Composer Installers](https://github.com/composer/installers) - A  multi framework Composer library installer.
* [Composer](https://getcomposer.org/) - A package and dependency manager.
* [Phive](https://phar.io/) - A PHAR manager.
* [Pickle](https://github.com/FriendsOfPHP/pickle) - A PHP extension installer.

### Dependency Management Extras
*Extras related to dependency management.*

* [Composed](https://github.com/joshdifabio/composed) - A library to parse your project's Composer environment at runtime.
* [Composer Merge Plugin](https://github.com/wikimedia/composer-merge-plugin) - A composer plugin to merge several `composer.json` files.
* [Composer Normalize](https://github.com/ergebnis/composer-normalize) - A plugin for normalising `composer.json` files. 
* [Composer Patches](https://github.com/cweagans/composer-patches) - A plugin for Composer to apply patches.
* [Composer Require Checker](https://github.com/maglnet/ComposerRequireChecker) - CLI tool to analyze composer dependencies and verify that no unknown symbols are used in the sources of a package.
* [Composer Unused](https://github.com/composer-unused/composer-unused) - A CLI Tool to scan for unused composer packages.
* [Prestissimo](https://github.com/hirak/prestissimo) - A composer plugin which enables parallel install process.
* [Repman](https://repman.io) - A private PHP package repository manager and Packagist proxy.
* [Satis](https://github.com/composer/satis) - A static Composer repository generator.
* [Tooly](https://github.com/tommy-muehle/tooly-composer-script) - A library to manage PHAR files in project using Composer.
* [Toran Proxy](https://toranproxy.com) - A static Composer repository and proxy.

### Frameworks
*Web development frameworks.*

* [CakePHP](https://cakephp.org/) - A rapid application development framework.
* [Laminas](https://getlaminas.org/) - A framework comprised of individual components (previously Zend Framework).
* [Laravel](https://laravel.com/) - A web application framework with expressive, elegant syntax.
* [Nette](https://nette.org) - A web framework comprised of mature components.
* [Phalcon](https://phalcon.io/en-us) - A framework implemented as a C extension.
* [Spiral](https://spiral.dev/) - A high performance PHP/Go framework.
* [Symfony](https://symfony.com/) - A set of reuseable components and a web framework.
* [Yii2](https://github.com/yiisoft/yii2/) - A fast, secure, and efficient web framework.

### Framework Extras
*Extras related to web development frameworks.*

* [CakePHP CRUD](https://github.com/friendsofcake/crud) - A Rapid Application Development (RAD) plugin for CakePHP.
* [Knp RAD Components](https://rad.knplabs.com/) - A set of Rapid Application Development (RAD) components for Symfony.
* [LaravelS](https://github.com/hhxsv5/laravel-s) - Glue for using Swoole in Laravel or Lumen.
* [Symfony CMF](https://github.com/symfony-cmf/symfony-cmf) - A Content Management Framework to create custom CMS.

### Content Management Systems (CMS)
*Tools for managing digital content.*

* [Backdrop](https://backdropcms.org) - A CMS targeting small-to-medium sized business and non-profits (a fork of Drupal).
* [Concrete5](https://www.concrete5.org/) - A CMS targeting users with a minimum of technical skills.
* [CraftCMS](https://github.com/craftcms/cms) - A flexible, user-friendly CMS for creating custom digital experiences on the web and beyond.
* [Drupal](https://www.drupal.org) - An enterprise level CMS.
* [Grav](https://github.com/getgrav/grav) - A modern flat-file CMS.
* [Joomla](https://www.joomla.org/) - Another leading CMS.
* [Kirby](https://getkirby.com/) - A flat-file CMS that adapts to any project.
* [Magento](https://magento.com/) - The most popular ecommerce platform.
* [Moodle](https://moodle.org/) - An open-source learning platform.
* [Pico CMS](http://picocms.org/) - A stupidly simple, blazing fast, flat file CMS.
* [Statamic](https://statamic.com/) - Build beautiful, easy to manage websites.
* [WordPress](https://wordpress.org/) - A blogging platform and CMS.

### Components
*Standalone components from web development frameworks and development groups.*

* [Aura](http://auraphp.com/) - Independent components, fully decoupled from each other and from any framework.
* [CakePHP Plugins](https://plugins.cakephp.org/) - A directory of CakePHP plugins.
* [Hoa Project](https://hoa-project.net/En/) - Another package of PHP components.
* [Laravel Components](https://github.com/illuminate) - The Laravel Framework components.
* [League of Extraordinary Packages](https://thephpleague.com/) - A PHP package development group.
* [Spatie Open Source](https://spatie.be/open-source) - A collection of open source PHP and Laravel packages.
* [Symfony Components](https://symfony.com/components) - The components that make Symfony.
* [Laminas Components](https://docs.laminas.dev/components/) - The components that make the Laminas Framework.

### Micro Frameworks
*Micro frameworks and routers.*

* [Laravel-Zero](https://laravel-zero.com) - A micro-framework for console applications.
* [Lumen](https://lumen.laravel.com) - A micro-framework by Laravel.
* [Mezzio](https://getexpressive.org/) - A micro-framework by Laminas.
* [Radar](https://github.com/radarphp/Radar.Adr) - An Action-Domain-Responder implementation for PHP.
* [Silly](https://github.com/mnapoli/silly) - A micro-framework for CLI applications.
* [Slim](https://www.slimframework.com/) - Another simple micro framework.

### Micro Framework Extras
*Extras related to micro frameworks and routers.*

* [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton) - A skeleton for Slim.
* [Slim Twig View](https://github.com/slimphp/Slim-Views) - Integrate Twig into Slim.
* [Slim PHP View](https://github.com/slimphp/PHP-View) - A simple PHP renderer for Slim.

### Routers
*Libraries for handling application routing.*

* [Aura.Router](https://github.com/auraphp/Aura.Router) - A full-featured routing library.
* [Fast Route](https://github.com/nikic/FastRoute) - A fast routing library.
* [Klein](https://github.com/klein/klein.php) - A flexible router.
* [Pux](https://github.com/c9s/Pux) - Another fast routing library.
* [Route](https://github.com/thephpleague/route) - A routing library built on top of Fast Route.

### Templating
*Libraries and tools for templating and lexing.*

* [MtHaml](https://github.com/arnaud-lb/MtHaml) - A PHP implementation of the HAML template language.
* [Mustache](https://github.com/bobthecow/mustache.php) - A PHP implementation of the Mustache template language.
* [PHPTAL](https://phptal.org/) - A PHP implementation of the [TAL](https://en.wikipedia.org/wiki/Template_Attribute_Language) templating language.
* [Plates](http://platesphp.com/) - A native PHP templating library.
* [Smarty](https://www.smarty.net/) - A template engine to complement PHP.
* [Twig](https://twig.symfony.com/) - A comprehensive templating language.

### Static Site Generators
*Tools for pre-processing content to generate web pages.*

* [Couscous](http://couscous.io) - Couscous turns Markdown documentation into beautiful websites. It's GitHub Pages on steroids.
* [Jigsaw](http://jigsaw.tighten.co/) - Simple static sites with Laravel's Blade.
* [Sculpin](https://sculpin.io) - A tool that converts Markdown and Twig into static HTML.
* [Spress](http://spress.yosymfony.com) - An extensible tool that converts Markdown and Twig into HTML.

### HTTP
*Libraries for working with HTTP.*

* [Buzz](https://github.com/kriswallsmith/Buzz) - Another HTTP client.
* [Guzzle]( https://github.com/guzzle/guzzle) - A comprehensive HTTP client.
* [HTTPlug](http://httplug.io) - An HTTP client abstraction without binding to a specific implementation.
* [Nyholm PSR-7](https://github.com/Nyholm/psr7) - A super lightweight PSR-7 implementation. Very strict and very fast.
* [PHP VCR](https://php-vcr.github.io/) - A library for recording and replaying HTTP requests.
* [Requests](https://github.com/rmccue/Requests) - A simple HTTP library.
* [Retrofit](https://github.com/tebru/retrofit-php) - A library to ease creation of REST API clients.
* [Symfony HTTP Client](https://github.com/symfony/http-client) - A component to fetch HTTP resources synchronously or asynchronously.
* [Laminas Diactoros](https://github.com/laminas/laminas-diactoros) - PSR-7 HTTP Message implementation.

### Scraping
*Libraries for scraping websites.*

* [Chrome PHP](https://github.com/chrome-php/chrome) - Instrument headless Chrome/Chromium instances from PHP. 
* [DiDOM](https://github.com/Imangazaliev/DiDOM) - A super fast HTML scrapper and parser.
* [Embed](https://github.com/oscarotero/Embed) - An information extractor from any web service or page.
* [Goutte](https://github.com/FriendsOfPHP/Goutte) - A simple web scraper.
* [Symfony Panther](https://github.com/symfony/panther) - A browser testing and web crawling library for PHP and Symfony.
* [PHP Spider](https://github.com/mvdbos/php-spider) - A configurable and extensible PHP web spider.

### Middlewares
*Libraries for building application using middlewares.*

* [PSR-7 Middlewares](https://github.com/oscarotero/psr7-middlewares) - Inspiring collection of handy middlewares.
* [Relay](https://github.com/relayphp/Relay.Relay) - A PHP 5.5 PSR-7 middleware dispatcher.
* [Stack](https://github.com/stackphp) - A library of stackable middleware for Symfony.
* [Laminas Stratigility](https://github.com/laminas/laminas-stratigility) - Middleware for PHP built on top of PSR-7.

### URL
*Libraries for parsing URLs.*

* [PHP Domain Parser](https://github.com/jeremykendall/php-domain-parser) - A domain suffix parser library.
* [Purl](https://github.com/jwage/purl) - A URL manipulation library.
* [sabre/uri](https://github.com/sabre-io/uri) - A functional URI manipulation library.
* [Uri](https://github.com/thephpleague/uri) - Another URL manipulation library.

### Email
*Libraries for sending and parsing email.*

* [CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles) - A library to inline CSS in email templates.
* [Email Reply Parser](https://github.com/willdurand/EmailReplyParser) - An email reply parser library.
* [Email Validator](https://github.com/nojacko/email-validator) - A small email address validation library.
* [Fetch](https://github.com/tedious/Fetch) - An IMAP library.
* [Mautic](https://github.com/mautic/mautic) - Email marketing automation
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Another mailer solution.
* [PHP IMAP](https://github.com/barbushin/php-imap) - A library to access mailboxes via POP3, IMAP and NNTP.
* [Stampie](https://github.com/Stampie/Stampie) - A library for email services such as [SendGrid](https://sendgrid.com/), [PostMark](https://postmarkapp.com), [MailGun](https://www.mailgun.com/) and [Mandrill](https://mailchimp.com/features/transactional-email/).
* [SwiftMailer](https://swiftmailer.symfony.com) - A mailer solution.
* [Symfony Mailer](https://github.com/symfony/mailer) - A powerful library for creating and sending emails.

### Files
*Libraries for file manipulation and MIME type detection.*

* [CSV](https://github.com/thephpleague/csv) - A CSV data manipulation library.
* [Flysystem](https://github.com/thephpleague/Flysystem) - Abstraction for local and remote filesystems.
* [Gaufrette](https://github.com/KnpLabs/Gaufrette) - A filesystem abstraction layer.
* [Hoa Mime](https://github.com/hoaproject/Mime) - Another MIME detection library.
* [PHP FFmpeg](https://github.com/PHP-FFmpeg/PHP-FFmpeg/) - A wrapper for the [FFmpeg](https://www.ffmpeg.org/) video library.
* [UnifiedArchive](https://github.com/wapmorgan/UnifiedArchive) - A unified reader and writer of compressed archives.

### Streams
*Libraries for working with streams.*

* [ByteStream](https://amphp.org/byte-stream/) - An asynchronous stream abstraction.
* [Streamer](https://github.com/fzaninotto/Streamer) - A simple object-orientated stream wrapper library.

### Dependency Injection
*Libraries that implement the dependency injection design pattern.*

* [Aura.Di](https://github.com/auraphp/Aura.Di) - A serializable dependency injection container with constructor and setter injection, interface and trait awareness, configuration inheritance, and much more.
* [Acclimate](https://github.com/AcclimateContainer/acclimate-container) - A common interface to dependency injection containers and service locators.
* [Auryn](https://github.com/rdlowrey/Auryn) - A recursive dependency injector.
* [Container](https://github.com/thephpleague/container) - Another flexible dependency injection container.
* [Disco](https://github.com/bitExpert/disco) - A PSR-11 compatible, annotation-based dependency injection container.
* [PHP-DI](https://php-di.org/) - A dependency injection container that supports autowiring.
* [Pimple](https://pimple.symfony.com/) - A tiny dependency injection container.
* [Symfony DI](https://github.com/symfony/dependency-injection) - A dependency injection container component.

### Imagery
*Libraries for manipulating images.*

* [Color Extractor](https://github.com/thephpleague/color-extractor) - A library for extracting colours from images.
* [Glide](https://github.com/thephpleague/glide) - An on-demand image manipulation library.
* [Image Hash](https://github.com/jenssegers/imagehash) - A library for generating perceptual image hashes.
* [Image Optimizer](https://github.com/psliwa/image-optimizer) - A library for optimizing images.
* [Imagine](https://imagine.readthedocs.io/en/latest/index.html) - An image manipulation library.
* [Intervention Image](https://github.com/Intervention/image) - Another image manipulation library.
* [PHP Image Workshop](https://github.com/Sybio/ImageWorkshop) - Another image manipulation library.

### Testing
*Libraries for testing codebases and generating test data.*

* [Alice](https://github.com/nelmio/alice) - An expressive fixture generation library.
* [AspectMock](https://github.com/Codeception/AspectMock) - A mocking framework for PHPUnit/Codeception.
* [Atoum](https://github.com/atoum/atoum) - A simple testing library.
* [Behat](https://docs.behat.org/en/latest/) - A behaviour driven development (BDD) testing framework.
* [Codeception](https://github.com/Codeception/Codeception) - A full stack testing framework.
* [Faker](https://github.com/fakerphp/faker) - A fake data generator library.
* [HTTP Mock](https://github.com/InterNations/http-mock) - A library for mocking HTTP requests in unit tests.
* [Infection](https://github.com/infection/infection) - An AST-based PHP Mutation testing framework.
* [Kahlan](https://github.com/kahlan/kahlan) - Full stack Unit/BDD testing framework with built-in stub, mock and code-coverage support.
* [Mink](http://mink.behat.org/en/latest/) - Web acceptance testing.
* [Mockery](https://github.com/mockery/mockery) - A mock object library for testing.
* [ParaTest](https://github.com/paratestphp/paratest) - A parallel testing library for PHPUnit.
* [Pest](https://pestphp.com/) - A testing framework with a focus on simplicity.
* [Peridot](https://github.com/peridot-php/peridot) - An event driven test framework.
* [Phake](https://github.com/mlively/Phake) - Another mock object library for testing.
* [Pho](https://github.com/danielstjules/pho) - Another behaviour driven development testing framework.
* [PHP-Mock](https://github.com/php-mock/php-mock) - A mock library for built-in PHP functions (e.g. time()).
* [PHP MySQL Engine](https://github.com/vimeo/php-mysql-engine) -  A MySQL engine written in pure PHP. 
* [PHPSpec](https://github.com/phpspec/phpspec) - A design by specification unit testing library.
* [PHPT](https://qa.php.net/write-test.php) - A test tool used by PHP itself.
* [PHPUnit](https://github.com/sebastianbergmann/phpunit) - A unit testing framework.
* [Prophecy](https://github.com/phpspec/prophecy) - A highly opinionated mocking framework.
* [VFS Stream](https://github.com/bovigo/vfsStream) - A virtual filesystem stream wrapper for testing.

### Continuous Integration
*Libraries and applications for continuous integration.*

* [CircleCI](https://circleci.com) - A continuous integration platform.
* [GitlabCi](https://about.gitlab.com/stages-devops-lifecycle/continuous-integration/) - Let GitLab CI test, build, deploy your code. TravisCi like.
* [Jenkins](https://www.jenkins.io/) - A continuous integration platform with [PHP support](https://www.jenkins.io/solutions/php/).
* [JoliCi](https://github.com/jolicode/JoliCi) - A continuous integration client written in PHP and powered by Docker.
* [PHPCI](https://github.com/dancryer/phpci) - An open source continuous integration platform for PHP.
* [SemaphoreCI](https://semaphoreci.com/) - A continuous integration platform for open source and private projects.
* [Shippable](https://www.shippable.com/) - A Docker based continious integration platform for open source and private projects.
* [Travis CI](https://travis-ci.org/) - A continuous integration platform.
* [Setup PHP](https://github.com/shivammathur/setup-php) - A GitHub Action for PHP.

### Documentation
*Libraries for generating project documentation.*

* [APIGen](https://github.com/apigen/apigen) - Another API documentation generator.
* [daux.io](https://github.com/dauxio/daux.io) - A documentation generator which uses Markdown files.
* [PHP Documentor 2](https://github.com/phpDocumentor/phpDocumentor) - A documentation generator.
* [phpDox](http://phpdox.de/) - A documentation generator for PHP projects (that is not limited to API documentation).

### Security
*Libraries for generating secure random numbers, encrypting data and scanning and testing for vulnerabilities.*

* [Halite](https://paragonie.com/project/halite) - A simple library for encryption using [libsodium](https://github.com/jedisct1/libsodium).
* [HTML Purifier](https://github.com/ezyang/htmlpurifier) - A standards compliant HTML filter.
* [IniScan](https://github.com/psecio/iniscan) - A tool that scans PHP INI files for security.
* [Optimus](https://github.com/jenssegers/optimus) - Id obfuscation based on Knuth's multiplicative hashing method.
* [PHPGGC](https://github.com/ambionics/phpggc) - A library of PHP unserializeable payloads along with a tool to generate them.
* [PHP Encryption](https://github.com/defuse/php-encryption) - Secure PHP Encryption Library.
* [PHP SSH](https://github.com/Herzult/php-ssh) - An experimental object orientated SSH wrapper library.
* [PHPSecLib](http://phpseclib.sourceforge.net/) - A pure PHP secure communications library.
* [random_compat](https://github.com/paragonie/random_compat) - PHP 5.x support for `random_bytes()` and `random_int()`
* [RandomLib](https://github.com/ircmaxell/RandomLib) - A library for generating random numbers and strings.
* [Symfony Security Monitoring](https://security.symfony.com/) - A web tool to check your Composer dependencies for security advisories, previously known as "SensioLabs Security Check".
* [SQLMap](https://github.com/sqlmapproject/sqlmap) - An automatic SQL injection and database takeover tool. 
* [TCrypto](https://github.com/timoh6/TCrypto) - A simple encrypted key-value storage library.
* [VAddy](https://vaddy.net/) - A continuous security testing platform for web applications.
* [Zap](https://owasp.org/www-project-zap/) - An integrated penetration testing tool for web applications.

### Passwords
*Libraries and tools for working with and storing passwords.*

* [GenPhrase](https://github.com/timoh6/GenPhrase) - A library for generating secure random passphrases.
* [Password Compat](https://github.com/ircmaxell/password_compat) - A compatibility library for the new PHP 5.5 password functions.
* [Password Policy](https://github.com/ircmaxell/password-policy) - A password policy library for PHP and JavaScript.
* [Password Validator](https://github.com/jeremykendall/password-validator) - A library for validating and upgrading password hashes.
* [Password-Generator](https://github.com/hackzilla/password-generator) - PHP library to generate random passwords.
* [PHP Password Lib](https://github.com/ircmaxell/PHP-PasswordLib) - A library for generating and validating passwords.
* [phpass](https://www.openwall.com/phpass/) - A portable password hashing framework.
* [Zxcvbn PHP](https://github.com/bjeavons/zxcvbn-php) - A realistic PHP password strength estimate library based on Zxcvbn JS.

### Code Analysis
*Libraries and tools for analysing, parsing and manipulating codebases.*

* [Better Reflection](https://github.com/Roave/BetterReflection) - AST-based reflection library that allows analysis and manipulation of code
* [Code Climate](https://codeclimate.com) - An automated code review.
* [GrumPHP](https://github.com/phpro/grumphp) - A PHP code-quality tool.
* [PHP Parser](https://github.com/nikic/PHP-Parser) - A PHP parser written in PHP.
* [PHP Semantic Versioning Checker](https://github.com/tomzx/php-semver-checker) - A command line utility that compares two source sets and determines the appropriate semantic versioning to apply.
* [Phpactor](https://github.com/phpactor/phpactor) - PHP completion, refactoring and introspection tool.
* [PHPLOC](https://github.com/sebastianbergmann/phploc) - A tool for quickly measuring the size of a PHP project.
* [PHPQA](https://github.com/EdgedesignCZ/phpqa) - A tool for running QA tools (phploc, phpcpd, phpcs, pdepend, phpmd, phpmetrics).
* [Qafoo Quality Analyzer](https://github.com/Qafoo/QualityAnalyzer) - A tool to visualize metrics and source code.
* [Rector](https://github.com/rectorphp/rector) - A tool to upgrade and refactor code.
* [Scrutinizer](https://scrutinizer-ci.com/) - A web tool to [scrutinise PHP code](https://github.com/scrutinizer-ci/php-analyzer).
* [UBench](https://github.com/devster/ubench) - A simple micro benchmark library.

### Code Quality
*Libraries for managing code quality, formatting and linting.*

* [CaptainHook](https://github.com/captainhookphp/captainhook) - An easy-to-use and flexible Git hook library. 
* [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) - A library that detects PHP, CSS and JS coding standard violations.
* [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) - A coding standards fixer library.
* [PHP Mess Detector](https://github.com/phpmd/phpmd) - A library that scans code for bugs, sub-optimal code, unused parameters and more.
* [PHPCheckstyle](https://github.com/PHPCheckstyle/phpcheckstyle) - A tool to help adhere to certain coding conventions.
* [PHPCPD](https://github.com/sebastianbergmann/phpcpd) - A library that detects copied and pasted code.

### Static Analysis
*Libraries for performing static analysis of PHP code.*

* [Exakat](https://github.com/exakat/exakat) - A static analysis engine for PHP.
* [Deptrac](https://github.com/sensiolabs-de/deptrac) - A static code analysis tool that helps to enforce rules for dependencies between software layers.
* [Mondrian](https://github.com/Trismegiste/Mondrian) - A code analysis tool using Graph Theory.
* [phan](https://github.com/phan/phan) - A static analyzer based on PHP 7+ and the php-ast extension.
* [PHP Architecture Tester](https://github.com/carlosas/phpat) - Easy to use architecture testing tool for PHP.
* [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) - A PHP compatibility checker for PHP CodeSniffer.
* [PhpDependencyAnalysis](https://github.com/mamuz/PhpDependencyAnalysis) - A tool to create customisable dependency graphs.
* [PHP Metrics](https://github.com/phpmetrics/PhpMetrics) - A static metric library.
* [PHP Migration](https://github.com/monque/PHP-Migration) - A static analyzer for PHP version migration.
* [PHPStan](https://github.com/phpstan/phpstan) - A PHP Static Analysis Tool.
* [Psalm](https://github.com/vimeo/psalm) - A static analysis tool for finding errors in PHP applications.

### Architectural
*Libraries related to design patterns, programming approaches and ways to organize code.*

* [Design Patterns PHP](https://github.com/domnikl/DesignPatternsPHP) - A repository of software patterns implemented in PHP.
* [Finite](https://yohan.giarel.li/Finite/) - A simple PHP finite state machine.
* [Functional PHP](https://github.com/lstrojny/functional-php) - A functional programming library.
* [Iter](https://github.com/nikic/iter) - A library that provides iteration primitives using generators.
* [Patchwork](http://patchwork2.org/) - A library for redefining userland functions.
* [Pipeline](https://github.com/thephpleague/pipeline) - A pipeline pattern implementation.
* [Porter](https://github.com/ScriptFUSION/Porter) - Data import abstraction library for consuming Web APIs and other data sources.
* [Ruler](https://github.com/bobthecow/Ruler) - A simple stateless production rules engine.
* [RulerZ](https://github.com/K-Phoen/rulerz) - A powerful rule engine and implementation of the Specification pattern.

### Debugging and Profiling
*Libraries and tools for debugging errors and profiling code.*

* [APM](https://pecl.php.net/package/APM) - Monitoring extension collecting errors and statistics into SQLite/MySQL/StatsD.
* [Barbushin PHP Console](https://github.com/barbushin/php-console) - Another web debugging console using Google Chrome.
* [Blackfire.io](https://blackfire.io) - A low-overhead code profiler.
* [Kint](https://github.com/kint-php/kint) - A debugging and profiling tool.
* [Metrics](https://github.com/beberlei/metrics) - A simple metrics API library.
* [PCOV](https://github.com/krakjoe/pcov) - A self contained code coverage compatible driver.
* [PHP Console](https://github.com/Seldaek/php-console) - A web debugging console.
* [PHP Debug Bar](http://phpdebugbar.com/) - A debugging toolbar.
* [PHPBench](https://github.com/phpbench/phpbench) - A benchmarking Framework.
* [PHPSpy](https://github.com/adsr/phpspy) - A low-overhead sampling profiler.
* [Symfony VarDumper](https://github.com/symfony/var-dumper) - A variable dumper component.
* [Tideways.io](https://tideways.com/) - Monitoring and profiling tool.
* [Tracy](https://github.com/nette/tracy) - A simple error detection, logging and time measuring library.
* [Whoops](https://github.com/filp/whoops) - A pretty error handling library.
* [xDebug](https://github.com/xdebug/xdebug) - A debug and profile tool for PHP.
* [XHProf](https://github.com/phacility/xhprof) - A profiling tool originally developed by Facebook.
* [Z-Ray](https://www.zend.com/products/z-ray) - A debug and profile tool for Zend Server.

### Build Tools
*Project build and automation tools.*

* [Box](https://github.com/box-project/box) - A utility to build PHAR files.
* [Construct](https://github.com/jonathantorres/construct) - A PHP project/micro-package generator.
* [Phing](https://www.phing.info/) - A PHP project build system inspired by Apache Ant.
* [RMT](https://github.com/liip/RMT) - A library for versioning and releasing software.

### Task Runners
*Libraries for automating and running tasks.*

* [Bldr](https://bldr.io/) - A PHP Task runner built on Symfony components.
* [Jobby](https://github.com/jobbyphp/jobby) - A PHP cron job manager without modifying crontab.
* [Robo](https://github.com/consolidation/Robo) - A PHP Task runner with object-orientated configurations.
* [Task](https://taskphp.github.io/) - A pure PHP task runner inspired by Grunt and Gulp.

### Navigation
*Tools for building navigation structures.*

* [KnpMenu](https://github.com/KnpLabs/KnpMenu) - A menu library.
* [Menu](https://github.com/spatie/menu) - A flexible menu library with a fluent interface.

### Asset Management
*Tools for managing, compressing and minifying website assets.*

* [JShrink](https://github.com/tedious/JShrink) - A JavaScript minifier library.
* [Laravel Mix](https://github.com/JeffreyWay/laravel-mix) - An elegant wrapper around Webpack for the 80% use case.
* [Symfony Asset](https://github.com/symfony/asset) - Manages URL generation and versioning of web assets.
* [Symfony Encore](https://github.com/symfony/webpack-encore) - A simple but powerful API for processing and compiling assets built around Webpack.

### Geolocation
*Libraries for geocoding addresses and working with latitudes and longitudes.*

* [Country List](https://github.com/umpirsky/country-list) - A list of all countries with names and ISO 3166-1 codes.
* [GeoCoder](https://geocoder-php.org/) - A geocoding library.
* [GeoJSON](https://github.com/jmikola/geojson) - A GeoJSON implementation.
* [GeoTools](https://github.com/thephpleague/geotools) - A library of geo-related tools.
* [PHPGeo](https://github.com/mjaschen/phpgeo) - A simple geo library.

### Date and Time
*Libraries for working with dates and times.*

* [CalendR](https://yohan.giarel.li/CalendR/) - A calendar management library.
* [Carbon](https://github.com/briannesbitt/Carbon) - A simple DateTime API extension.
* [Chronos](https://github.com/cakephp/chronos) - A DateTime API extension supporting both mutable and immutable date/time.
* [Moment.php](https://github.com/fightbulc/moment.php) - Moment.js inspired PHP DateTime handler with i18n support.
* [Yasumi](https://github.com/azuyalabs/yasumi) - An library to help you calculate the dates and names of holidays.

### Event
*Libraries that are event-driven or implement non-blocking event loops.*
* [Amp](https://github.com/amphp/amp) - An event driven non-blocking I/O library.
* [Broadway](https://github.com/broadway/broadway) - An event source and CQRS library.
* [CakePHP Event](https://github.com/cakephp/event) - An event dispatcher library.
* [Elephant.io](https://github.com/Wisembly/Elephant.io) - Yet another web socket library.
* [Evenement](https://github.com/igorw/evenement) - An event dispatcher library.
* [Event](https://github.com/thephpleague/event) - An event library with a focus on domain events.
* [Hoa EventSource](https://github.com/hoaproject/Eventsource) - An event source library.
* [Hoa WebSocket](https://github.com/hoaproject/Websocket) - Another web socket library.
* [Pawl](https://github.com/ratchetphp/Pawl) - An asynchronous web socket client.
* [Prooph Event Store](https://github.com/prooph/event-store) - An event source component to persist event messages
* [PHP Defer](https://github.com/php-defer/php-defer) - Golang's defer statement for PHP.
* [Ratchet](https://github.com/ratchetphp/Ratchet) - A web socket library.
* [ReactPHP](https://github.com/reactphp/reactphp) - An event driven non-blocking I/O library.
* [RxPHP](https://github.com/ReactiveX/RxPHP) - A reactive extension library.
* [Swoole](https://github.com/swoole/swoole-src) - An event-driven asynchronous and concurrent networking communication framework with high performance for PHP written in C.
* [Workerman](https://github.com/walkor/Workerman) - An event driven non-blocking I/O library.

### Logging
*Libraries for generating and working with log files.*

* [Monolog](https://github.com/Seldaek/monolog) - A comprehensive logger.

### E-commerce
*Libraries and applications for taking payments and building online e-commerce stores.*

* [Money](https://github.com/moneyphp/money) - A PHP implementation of Fowler's money pattern.
* [Brick\Money](https://github.com/brick/money) - A money library for PHP, with support for contexts, cash roundings, currency conversion.
* [OmniPay](https://github.com/thephpleague/omnipay) - A framework agnostic multi-gateway payment processing library.
* [Payum](https://github.com/payum/payum) - A payment abstraction library.
* [Shopware](https://github.com/shopware/shopware) - Highly customizable e-commerce software
* [Swap](https://github.com/florianv/swap) - An exchange rates library.
* [Sylius](https://sylius.com/) - An open source e-commerce solution.

### PDF
*Libraries and software for working with PDF files.*

* [Dompdf](https://github.com/dompdf/dompdf) - A HTML to PDF converter.
* [PHPPdf](https://github.com/psliwa/PHPPdf) - A library for generating PDFs and images from XML.
* [Snappy](https://github.com/KnpLabs/snappy) - A PDF and image generation library.
* [WKHTMLToPDF](https://github.com/wkhtmltopdf/wkhtmltopdf) - A tool to convert HTML to PDF.

### Office
*Libraries for working with office suite documents.*

* [PHPPowerPoint](https://github.com/PHPOffice/PHPPresentation) - A library for working with Microsoft PowerPoint Presentations.
* [PHPWord](https://github.com/PHPOffice/PHPWord) - A library for working with Microsoft Word documents.
* [PHPSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet) - A pure PHP library for reading and writing spreadsheet files (successor of PHPExcel).
* [Spout](https://github.com/box/spout) - Read and write spreadsheet files (CSV, XLSX and ODS), in a fast and scalable way .

### Database
*Libraries for interacting with databases using object-relational mapping (ORM) or datamapping techniques.*

* [Atlas.Orm](https://github.com/atlasphp/Atlas.Orm) - A data mapper implementation for your persistence model in PHP.
* [Aura.Sql](https://github.com/auraphp/Aura.Sql) - Provides an extension to the native PDO along with a profiler and connection locator.
* [Aura.SqlQuery](https://github.com/auraphp/Aura.SqlQuery) - Independent query builders for MySQL, PostgreSQL, SQLite, and Microsoft SQL Server.
* [Baum](https://github.com/etrepat/baum) - A nested set implementation for Eloquent.
* [CakePHP ORM](https://github.com/cakephp/orm) - Object-Relational Mapper, implemented using the DataMapper pattern.
* [Cycle ORM](https://github.com/cycle/orm) - PHP DataMapper, ORM.
* [Doctrine Extensions](https://github.com/Atlantic18/DoctrineExtensions) - A collection of Doctrine behavioural extensions.
* [Doctrine](https://www.doctrine-project.org/) - A comprehensive DBAL and ORM.
* [Laravel Eloquent](https://github.com/illuminate/database) - A simple ORM.
* [Pomm](https://github.com/chanmix51/Pomm) - An Object Model Manager for PostgreSQL.
* [ProxyManager](https://github.com/Ocramius/ProxyManager) - A set of utilities to generate proxy objects for data mappers.
* [RedBean](https://redbeanphp.com/index.php) - A lightweight, configuration-less ORM.
* [Slimdump](https://github.com/webfactory/slimdump) - An easy dumper tool for MySQL.
* [Spot2](https://github.com/spotorm/spot2) - A MySQL datamapper ORM.

### Migrations
Libraries to help manage database schemas and migrations.

* [Doctrine Migrations](https://www.doctrine-project.org/projects/migrations.html) - A migration library for Doctrine.
* [Migrations](https://github.com/icomefromthenet/Migrations) - A migration management library.
* [Phinx](https://github.com/cakephp/phinx) - Another database migration library.
* [PHPMig](https://github.com/davedevelopment/phpmig) - Another migration management library.
* [Ruckusing](https://github.com/ruckus/ruckusing-migrations) - Database migrations for PHP ala ActiveRecord Migrations with support for MySQL, Postgres, SQLite.

### NoSQL
*Libraries for working with "NoSQL" backends.*

* [PHPMongo](https://github.com/sokil/php-mongo) - A MongoDB ORM.
* [Predis](https://github.com/predis/predis) - A feature complete Redis library.

### Queue
*Libraries for working with event and task queues.*

* [Bernard](https://github.com/bernardphp/bernard) - A multibackend abstraction library.
* [BunnyPHP](https://github.com/jakubkulhan/bunny) - A performant pure-PHP AMQP (RabbitMQ) sync and also async (ReactPHP) library.
* [Pheanstalk](https://github.com/pheanstalk/pheanstalk) - A Beanstalkd client library.
* [PHP AMQP](https://github.com/php-amqplib/php-amqplib) - A pure PHP AMQP library.
* [Tarantool Queue](https://github.com/tarantool-php/queue) - PHP bindings for Tarantool Queue.
* [Thumper](https://github.com/php-amqplib/Thumper) - A RabbitMQ pattern library.
* [Enqueue](https://github.com/php-enqueue/enqueue-dev) - A message queue packages for PHP that supports RabbitMQ, AMQP, STOMP, Amazon SQS, Redis and Doctrine transports. 

### Search
*Libraries and software for indexing and performing search queries on data.*

* [Elastica](https://github.com/ruflin/Elastica) - A client library for ElasticSearch.
* [ElasticSearch PHP](https://github.com/elastic/elasticsearch-php) - The official client library for [ElasticSearch](https://www.elastic.co/).
* [Solarium](https://www.solarium-project.org/) - A client library for [Solr](https://lucene.apache.org/solr/).
* [SphinxQL Query Builder](https://foolcode.github.io/SphinxQL-Query-Builder/) - A query library for the [Sphinx](https://sphinxsearch.com/) and [Manticore](https://manticoresearch.com/) search engines.

### Command Line
*Libraries related to the command line.*

* [Aura.Cli](https://github.com/auraphp/Aura.Cli) - Provides the equivalent of request ( Context ) and response ( Stdio ) objects for the command line interface, including Getopt support, and an independent Help object for describing commands.
* [Boris](https://github.com/borisrepl/boris) - A tiny PHP REPL.
* [Cilex](https://github.com/Cilex/Cilex) - A micro framework for building command line tools.
* [CLI Menu](https://github.com/php-school/cli-menu) - A library for building CLI menus.
* [CLIFramework](https://github.com/c9s/CLIFramework) - A command-line framework supports zsh/bash completion generation, subcommands and option constraints. It also powers phpbrew.
* [CLImate](https://github.com/thephpleague/climate) - A library for outputting colours and special formatting.
* [Commando](https://github.com/nategood/commando) - Another simple command line opt parser.
* [Cron Expression](https://github.com/mtdowling/cron-expression) - A library to calculate cron run dates.
* [GetOpt](https://github.com/getopt-php/getopt-php) - A command line opt parser.
* [GetOptionKit](https://github.com/c9s/GetOptionKit) - Another command line opt parser.
* [Hoa Console](https://github.com/hoaproject/Console) - Another command line library.
* [PsySH](https://github.com/bobthecow/psysh) - Another PHP REPL.
* [ShellWrap](https://github.com/MrRio/shellwrap) - A simple command line wrapper library.

### Authentication and Authorization
*Libraries for implementing user authentication and authorization.*

* [Aura.Auth](https://github.com/auraphp/Aura.Auth) - Provides authentication functionality and session tracking using various adapters.
* [SocialConnect Auth](https://github.com/socialConnect/auth) - An open source social sign (OAuth1\OAuth2\OpenID\OpenIDConnect).
* [Json Web Token](https://github.com/lcobucci/jwt) - Json Tokens to authenticate and transmit information.
* [OAuth 1.0 Client](https://github.com/thephpleague/oauth1-client) - An OAuth 1.0 client library.
* [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client) - An OAuth 2.0 client library.
* [OAuth2 Server](https://bshaffer.github.io/oauth2-server-php-docs/) - Another OAuth2 server implementation.
* [OAuth2 Server](https://oauth2.thephpleague.com/) - An OAuth2 authentication server, resource server and client library.
* [Opauth](https://github.com/opauth/opauth) - A multi-provider authentication framework.
* [Paseto](https://github.com/paragonie/paseto) - Platform-Agnostic Security Tokens.
* [PHP oAuthLib](https://github.com/Lusitanian/PHPoAuthLib) - Another OAuth library.
* [Sentinel Social](https://cartalyst.com/manual/sentinel-social/2.0) - A library for social network authentication.
* [Sentinel](https://cartalyst.com/manual/sentinel/2.0) - A framework agnostic authentication & authorisation library.
* [TwitterOAuth](https://github.com/abraham/twitteroauth) - A Twitter OAuth library.

### Markup and CSS
*Libraries for working with markup and CSS formats.

* [Cebe Markdown](https://github.com/cebe/markdown) - An fast and extensible Markdown parser.
* [CommonMark PHP](https://github.com/thephpleague/commonmark) - Highly-extensible Markdown parser which fully supports the [CommonMark spec](https://spec.commonmark.org/).
* [Decoda](https://github.com/milesj/decoda) - A lightweight markup parser library.
* [Essence](https://github.com/essence/essence) - A library for extracting web media.
* [Embera](https://github.com/mpratt/Embera) - An Oembed consumer library.
* [HTML to Markdown](https://github.com/thephpleague/html-to-markdown) - Converts HTML into Markdown.
* [HTML5 PHP](https://github.com/Masterminds/html5-php) - An HTML5 parser and serializer library.
* [Parsedown](https://github.com/erusev/parsedown) - Another Markdown parser.
* [PHP CSS Parser](https://github.com/sabberworm/PHP-CSS-Parser) - A Parser for CSS Files written in PHP.
* [PHP Markdown](https://github.com/michelf/php-markdown) - A Markdown parser.
* [Shiki PHP](https://github.com/spatie/shiki-php) - A [Shiki](https://github.com/shikijs/shiki) code highlighting package in PHP.
* [VObject](https://github.com/sabre-io/vobject) - A library for parsing VCard and iCalendar objects.

### JSON
*Libraries for working with JSON.*

* [JSON Lint](https://github.com/Seldaek/jsonlint) - A JSON lint utility.
* [JSONMapper](https://github.com/JsonMapper/JsonMapper) - A library for mapping JSON to PHP objects.

### Strings
*Libraries for parsing and manipulating strings.*

* [Agent](https://github.com/jenssegers/agent) - A PHP desktop/mobile user agent parser, based on Mobiledetect.
* [ANSI to HTML5](https://github.com/sensiolabs/ansi-to-html) - An ANSI to HTML5 converter library.
* [Color Jizz](https://github.com/mikeemoo/ColorJizz-PHP) - A library for manipulating and converting colours.
* [Device Detector](https://github.com/matomo-org/device-detector) - Another library for parsing user agent strings.
* [Hoa String](https://github.com/hoaproject/Ustring) - Another UTF-8 string library.
* [Jieba-PHP](https://github.com/fukuball/jieba-php) - A PHP port of Python's jieba. Chinese text segmentation for natural language processing.
* [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) - A lightweight PHP class for detecting mobile devices (including tablets).
* [Patchwork UTF-8](https://github.com/nicolas-grekas/Patchwork-UTF8) - A portable library for working with UTF-8 strings.
* [Portable UTF-8](https://github.com/voku/portable-utf8) - A string manipulation library with UTF-8 safe replacement methods.
* [Slugify](https://github.com/cocur/slugify) - A library to convert strings to slugs.
* [SQL Formatter](https://github.com/jdorn/sql-formatter/) - A library for formatting SQL statements.
* [Stringy](https://github.com/voku/Stringy) - A string manipulation library with multibyte support.
* [UA Parser](https://github.com/tobie/ua-parser/tree/master/php) - A library for parsing user agent strings.
* [URLify](https://github.com/jbroadway/urlify) - A PHP port of Django's URLify.js.
* [UUID](https://github.com/ramsey/uuid) - A library for generating UUIDs.

### Numbers
*Libraries for working with numbers.*

* [Brick\Math](https://github.com/brick/math) - A library providing large number support: `BigInteger`, `BigDecimal` and `BigRational`.
* [ByteUnits](https://github.com/gabrielelana/byte-units) - A library to parse, format and convert byte units in binary and metric systems.
* [DecimalObject](https://github.com/spryker/decimal-object) - A value object to handle decimals/floats easily and more precisely.
* [IP](https://github.com/darsyn/ip) - An immutable value object for working with IPv4 and IPv6 addresses.
* [LibPhoneNumber for PHP](https://github.com/giggsey/libphonenumber-for-php) - A PHP implementation of Google's phone number handling library.
* [PHP Conversion](https://github.com/Crisu83/php-conversion) - Another library for converting between units of measure.
* [PHP Units of Measure](https://github.com/triplepoint/php-units-of-measure) - A library for converting between units of measure.
* [MathPHP](https://github.com/markrogoyski/math-php) - A math library for PHP. 

### Filtering and Validation
*Libraries for filtering and validating data.*

* [Assert](https://github.com/beberlei/assert) - A validation library with a rich set of assertions. Supports assertion chaining and lazy assertions.
* [Aura.Filter](https://github.com/auraphp/Aura.Filter) - Provides tools to validate and sanitize objects and arrays.
* [CakePHP Validation](https://github.com/cakephp/validation) - Another validation library.
* [Filterus](https://github.com/ircmaxell/filterus) - A simple PHP filtering library.
* [ISO-codes](https://github.com/ronanguilloux/IsoCodes) - A library for validating inputs according standards from ISO, International Finance, Public Administrations, GS1, Book Industry, Phone numbers & Zipcodes for many countries.
* [JSON Schema](https://github.com/justinrainbow/json-schema) - A [JSON Schema](https://json-schema.org/) validation library.
* [MetaYaml](https://github.com/romaricdrigon/MetaYaml) - A schema validation library that supports YAML, JSON and XML.
* [Respect Validation](https://github.com/Respect/Validation) - A simple validation library.
* [Upload](https://github.com/brandonsavage/Upload) - A library for handling file uploads and validation.
* [Valitron](https://github.com/vlucas/valitron) - Another validation library.
* [Volan](https://github.com/serkin/Volan) - Another simplified validation library.

### API
*Libraries and web tools for developing APIs.*

* [API Platform](https://api-platform.com ) - Expose in minutes an hypermedia REST API that embraces JSON-LD, Hydra format.
* [Laminas API Tool Skeleton](https://github.com/laminas-api-tools/api-tools-skeleton) - An API builder built with the Laminas Framework.
* [Drest](https://github.com/leedavis81/drest) - A library for exposing Doctrine entities as REST resource endpoints.
* [HAL](https://github.com/blongden/hal) - A Hypertext Application Language (HAL) builder library.
* [Hateoas](https://github.com/willdurand/Hateoas) - A HATEOAS REST web service library.
* [Negotiation](https://github.com/willdurand/Negotiation) - A content negotiation library.
* [Restler](https://github.com/Luracast/Restler) - A lightweight framework to expose PHP methods as RESTful web API.
* [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) - A tool to generate PHP classes from SOAP WSDL files.

### Caching and Locking
*Libraries for caching data and acquiring locks.*

* [APIx Cache](https://github.com/apix/cache) - A thin PSR-6 cache wrapper to various caching backends emphasising cache tagging and indexing.
* [CacheTool](https://github.com/gordalina/cachetool) - A tool to clear APC/opcode caches from the command line.
* [CakePHP Cache](https://github.com/cakephp/cache) - A caching library.
* [Doctrine Cache](https://github.com/doctrine/cache) - A caching library.
* [Metaphore](https://github.com/sobstel/metaphore) - Cache slam defense using a semaphore to prevent dogpile effect.
* [Stash](https://github.com/tedious/Stash) - Another library for caching.
* [Laminas Cache](https://github.com/laminas/laminas-cache) - Another caching library.
* [Lock](https://github.com/php-lock/lock) - A lock library to provide exclusive execution.

### Data Structure and Storage
*Libraries that implement data structure or storage techniques.*

* [CakePHP Collection](https://github.com/cakephp/collection) - A simple collections library.
* [Fractal](https://github.com/thephpleague/fractal) - A library for converting complex data structures to JSON output.
* [Ginq](https://github.com/akanehara/ginq) - Another PHP library based on .NET's LINQ.
* [JsonMapper](https://github.com/cweiske/jsonmapper) - A library that maps nested JSON structures onto PHP classes.
* [JSON Machine](https://github.com/halaxa/json-machine) - Provides iteration over huge JSONs using simple `foreach`
* [Knapsack](https://github.com/DusanKasan/Knapsack) - Collection library inspired by Clojure's sequences.
* [msgpack.php](https://github.com/rybakit/msgpack.php) - A pure PHP implementation of the [MessagePack](https://msgpack.org/) serialization format.
* [PINQ](https://github.com/TimeToogo/Pinq) - A PHP library based on .NET's LINQ (Language Integrated Query).
* [Serializer](https://github.com/schmittjoh/serializer) - A library for serialising and de-serialising data.
* [YaLinqo](https://github.com/Athari/YaLinqo) - Yet Another LINQ to Objects for PHP.
* [Laminas Serializer](https://github.com/laminas/laminas-serializer) - Another library for serialising and de-serialising data.

### Notifications
*Libraries for working with notification software.*

* [JoliNotif](https://github.com/jolicode/JoliNotif) - A cross-platform library for desktop notification (support for Growl, notify-send, toaster, etc)
* [Notification Pusher](https://github.com/Ph3nol/NotificationPusher) - A standalone library for device push notifications.
* [Notificato](https://github.com/mac-cain13/notificato) - A library for handling push notifications.
* [Notificator](https://github.com/namshi/notificator) - A lightweight notification library.
* [Php-pushwoosh](https://github.com/gomoob/php-pushwoosh) - A PHP Library to easily send push notifications with the Pushwoosh REST Web Services.

### Deployment
*Libraries for project deployment.*

* [Deployer](https://github.com/deployphp/deployer) - A deployment tool.
* [Envoy](https://github.com/laravel/envoy) - A tool to run SSH tasks with PHP.
* [Rocketeer](https://github.com/rocketeers/rocketeer) - A fast and easy deployer for the PHP world.

### Internationalisation and Localisation
*Libraries for Internationalization (I18n) and Localization (L10n).*

* [Aura.Intl](https://github.com/auraphp/Aura.Intl) - Provides internationalization (I18N) tools, specifically package-oriented per-locale message translation.
* [CakePHP I18n](https://github.com/cakephp/i18n) - Message translation and localization for dates and numbers.

### Serverless
*Libraries and tools to help build serverless web applications.*

* [Bref](https://bref.sh/) - Serverless PHP on AWS Lambda.
* [OpenWhisk](http://openwhisk.apache.org/) - An open-source serverless cloud platform.
* [Serverless Framework](https://www.serverless.com/open-source/) - An open-source framework for building serverless applications.
* [Laravel Vapor](https://vapor.laravel.com/) - A serverless deployment platform for Laravel, powered by AWS.

## Configuration
*Libraries and tools for configuration.*

* [PHP Dotenv](https://github.com/vlucas/phpdotenv) - Parse and load environment variables from `.env` files.
* [Symfony Dotenv](https://github.com/symfony/dotenv)- Parse and load environment variables from `.env` files.
* [Yo! Symfony TOML](https://github.com/yosymfony/toml) - A PHP parser for [TOML](https://github.com/toml-lang/toml). 

### Third Party APIs
*Libraries for accessing third party APIs.*

* [Amazon Web Service SDK](https://github.com/aws/aws-sdk-php) - The official PHP AWS SDK library.
* [AsyncAWS](https://async-aws.com/) - An unofficial asynchronous PHP AWS SDK.
* [Campaign Monitor](https://campaignmonitor.github.io/createsend-php/) - The official Campaign Monitor PHP library.
* [Github](https://github.com/KnpLabs/php-github-api) - A library to interface with the Github API.
* [Mailgun](https://github.com/mailgun/mailgun-php) The official Mailgun PHP API.
* [Square](https://github.com/square/connect-php-sdk) - The official Square PHP SDK for payments and other Square APIs.
* [Stripe](https://github.com/stripe/stripe-php) - The official Stripe PHP library.
* [Twilio](https://github.com/twilio/twilio-php) - The official Twilio PHP REST API.

### Extensions
*Libraries to help build PHP extensions.*

* [PHP CPP](https://www.php-cpp.com/) - A C++ library for developing PHP extensions.
* [Zephir](https://github.com/phalcon/zephir) - A compiled language between PHP and C++ for developing PHP extensions.

### Miscellaneous
*Useful libraries or utilities that don't fit into the categories above.*

* [Annotations](https://github.com/doctrine/annotations) - An annotation library (part of Doctrine).
* [BotMan](https://github.com/botman/botman) - A framework agnostic PHP library to build cross-platform chat bots.
* [ClassPreloader](https://github.com/ClassPreloader/ClassPreloader) - A library for optimising autoloading.
* [Hprose-PHP](https://github.com/hprose/hprose-php) - A cross-language RPC.
* [noCAPTCHA](https://github.com/ARCANEDEV/noCAPTCHA) - Helper for Google's noCAPTCHA (reCAPTCHA).
* [Pagerfanta](https://github.com/whiteoctober/Pagerfanta) - A pagination library.
* [Safe](https://github.com/thecodingmachine/safe) - All PHP functions, rewritten to throw exceptions instead of returning false.
* [SuperClosure](https://github.com/jeremeamia/super_closure) - A library that allows Closures to be serialized.

# Software
*Software for creating a development environment.*

### PHP Installation
*Tools to help install and manage PHP on your computer.*

* [Brew PHP Switcher](https://github.com/philcook/brew-php-switcher) - Brew PHP switcher.
* [HomeBrew](https://brew.sh/) - A package manager for OSX.
* [Laravel Valet](https://laravel.com/docs/master/valet) - A development environment for macOS.
* [PHP Brew](https://github.com/phpbrew/phpbrew) - A PHP version manager and installer.
* [PHP Build](https://github.com/php-build/php-build) - Another PHP version installer.
* [PHP OSX](https://php-osx.liip.ch/) - A PHP installer for OSX.

### Development Environment
*Software and tools for creating and sharing a development environment.*

* [Ansible](https://www.ansible.com/) - A radically simple orchestration framework.
* [Docker](https://www.docker.com/) - A containerization platform.
* [Docker PHP Extension Installer](https://github.com/mlocati/docker-php-extension-installer) - Easily install PHP extensions in Docker containers.
* [Expose](https://github.com/beyondcode/expose) - An open source PHP tunneling service.
* [Lando](https://lando.dev/) - Push-button development environments.
* [Laravel Homestead](https://laravel.com/docs/master/homestead) - A local development environment for Laravel. 
* [Laradock](http://laradock.io/) - A full PHP development environment based on Docker.
* [Puppet](https://puppet.com/) - A server automation framework and application.
* [Takeout](https://github.com/tighten/takeout) - A Docker-based development-only dependency manager.
* [Vagrant](https://www.vagrantup.com/) - A portable development environment utility.

### Virtual Machines
*Alternative PHP virtual machines.*

* [Hack](https://hacklang.org/) - A programming language for HHVM.
* [HHVM](https://github.com/facebook/hhvm) - A Virtual Machine, Runtime and JIT for PHP by Facebook.
* [PeachPie](https://github.com/peachpiecompiler/peachpie) - PHP compiler and runtime for .NET and .NET Core.

### Text Editors and IDEs
*Text Editors and Integrated Development Environments (IDE) with support for PHP.*

* [Eclipse for PHP Developers](https://www.eclipse.org/downloads/) - A PHP IDE based on the Eclipse platform.
* [Apache NetBeans](https://netbeans.apache.org/) - An IDE with support for PHP and HTML5.
* [PhpStorm](https://www.jetbrains.com/phpstorm/) - A commercial PHP IDE.
* [VS Code](https://code.visualstudio.com/) - An open source code editor.

### Web Applications
*Web-based applications and tools.*

* [3V4L](https://3v4l.org/) - An online PHP & HHVM shell.
* [Adminer](https://www.adminer.org/) - Database management in a single PHP file.
* [Cachet](https://github.com/cachethq/cachet) - The open source status page system.
* [DBV](https://github.com/victorstanciu/dbv) - A database version control application.
* [Lychee](https://github.com/electerious/Lychee) - An easy to use and great looking photo-management-system.
* [MailCatcher](https://github.com/sj26/mailcatcher) - A web tool for capturing and viewing emails.
* [phpMyAdmin](https://github.com/phpmyadmin/phpmyadmin) - A web interface for MySQL/MariaDB.
* [PHP Queue](https://github.com/CoderKungfu/php-queue) - An application for managing queueing backends.
* [phpRedisAdmin](https://github.com/ErikDubbelboer/phpRedisAdmin) - A simple web interface to manage [Redis](https://redis.io/) databases.
* [PHPSandbox](https://phpsandbox.io) - An online IDE for PHP in the browser.

### Infrastructure
*Infrastructure for providing PHP applications and services.*

* [appserver.io](https://github.com/appserver-io/appserver) - A multithreaded application server for PHP, written in PHP.
* [php-pm](https://github.com/php-pm/php-pm) - A process manager, supercharger and load balancer for PHP applications.
* [RoadRunner](https://github.com/spiral/roadrunner) - High-performance PHP application server, load-balancer and process manager.

# Resources
Various resources, such as books, websites and articles, for improving your PHP development skills and knowledge.

### PHP Websites
*Useful PHP-related websites.*

* [libs.garden: PHP](https://libs.garden/php) - An overview of fastest growing PHP libraries.
* [Nomad PHP](https://nomadphp.com/) - A online PHP learning resource.
* [Laravel News](https://laravel-news.com/) - The official Laravel blog.
* [PHP Annotated Monthly](https://blog.jetbrains.com/phpstorm/category/php-annotated-monthly/) - A monthly digest of PHP news.
* [PHP Best Practices](https://phpbestpractices.org/) - A PHP best practice guide.
* [PHP FIG](https://www.php-fig.org/) - The PHP Framework Interoperability Group.
* [PHP Package Development Standards](http://php-pds.com) - Package development standards for PHP.
* [PHP School](https://www.phpschool.io/) - Open Source Learning for PHP.
* [PHP Security](https://phpsecurity.readthedocs.io/en/latest/index.html) - A guide to PHP security.
* [PHP The Right Way](https://phptherightway.com/) - A PHP best practice quick reference guide.
* [PHP UG](https://php.ug) - A website to help people locate their nearest PHP user group (UG).
* [PHP Versions](http://phpversions.info/) - Lists which versions of PHP are available on several popular web hosts.
* [PHP Watch](https://php.watch/) - PHP articles, news, upcoming changes, RFCs and more.
* [PHP Weekly](http://www.phpweekly.com/archive.html) - A weekly PHP newsletter.
* [Securing PHP](https://www.securingphp.com/) - A newsletter about PHP security and library recommendations.
* [Seven PHP](https://7php.com/) - A website that interviews members of the PHP community.

### PHP Books
*Fantastic PHP-related books.*

* [Domain-Driven Design in PHP](https://leanpub.com/ddd-in-php) - Real examples written in PHP showcasing DDD Architectural Styles.
* [Functional Programming in PHP](https://www.functionalphp.com/) - This book will show you how to leverage these new PHP5.3+ features by understanding functional programming principles
* [Grumpy PHPUnit](https://leanpub.com/grumpy-phpunit) - A book about unit testing with PHPUnit by Chris Hartjes.
* [Mastering Object-Orientated PHP](https://www.brandonsavage.net/) - A book about object-orientated PHP by Brandon Savage.
* [Modern PHP New Features and Good Practices](https://www.oreilly.com/library/view/~/9781491905173/) - A book about new PHP features and best practices by Josh Lockhart.
* [Modernizing Legacy Applications in PHP](https://leanpub.com/mlaphp) - A book about modernizing legacy PHP applications by Paul M. Jones.
* [PHP 7 Upgrade Guide](https://leanpub.com/php7) - An ebook covering all of the features and changes in PHP 7 by Colin O'Dell.
* [PHP Pandas](https://daylerees.com/php-pandas/) - A book about learning to write PHP by Dayle Rees.
* [Scaling PHP Applications](https://www.scalingphpbook.com) - An ebook about scaling PHP applications by Steve Corona.
* [Securing PHP: Core Concepts](https://leanpub.com/securingphp-coreconcepts) - A book about common security terms and practices for PHP by Chris Cornutt.
* [Signaling PHP](https://leanpub.com/signalingphp) - A book about catching PCNTL signals in CLI scripts by Cal Evans.
* [The Grumpy Programmer's Guide to Building Testable PHP Applications](https://leanpub.com/grumpy-testing) - A book about building testing PHP applications by Chris Hartjes.
* [XML Parsing with PHP](https://www.phparch.com/books/xml-parsing-with-php/) - This book covers parsing and validating XML documents, leveraging XPath expressions, and working with namespaces as well as how to create and modify XML files programmatically.

### PHP Videos
*Fantastic PHP-related videos.*

* [Nomad PHP Lightning Talks](https://www.youtube.com/c/nomadphp) - 10 to 15 minute Lightning Talks by PHP community members.
* [PHP UK Conference](https://www.youtube.com/user/phpukconference/videos) - A collection of videos from the PHP UK Conference.
* [Programming with Anthony](https://www.youtube.com/playlist?list=PLM-218uGSX3DQ3KsB5NJnuOqPqc5CW2kW) - A video series by Anthony Ferrara.
* [Taking PHP Seriously](https://www.infoq.com/presentations/php-history/) - A talk outlining PHP's strengths by Keith Adams of Facebook.
* [Laracasts](https://laracasts.com) - Screencasts about Laravel, Vue JS and more.
* [Laravel YouTube Channel](https://www.youtube.com/channel/UCfO2GiQwb-cwJTb1CuRSkwg) - The official Laravel YouTube channel.
* [SymfonyCasts](https://symfonycasts.com/) - Screencasts and tutorials about PHP and Symfony.

### PHP Podcasts
*Podcasts with a focus on PHP topics.*

* [Laravel Podcast](https://laravelpodcast.com/) - Laravel and PHP development news and discussion.
* [PHP Internals News](https://phpinternals.news) - A podcast about PHP internals.
* [PHP Roundtable](https://www.phproundtable.com/) - The PHP Roundtable is a casual gathering of developers discussing topics that PHP nerds care about.
* [PHP Town Hall](https://phptownhall.com/) - A casual PHP podcast by Ben Edmunds and Phil Sturgeon.
* [Voices of the ElePHPant](https://voicesoftheelephpant.com/) Interviews with the people that make the PHP community special.

### PHP Newsletters
*PHP-related news directly to your inbox.*

* [PHP Weekly](http://www.phpweekly.com/) - A weekly newsletter about PHP.

### PHP Reading
*PHP-releated reading materials.*

* [php[architect]](https://www.phparch.com/magazine/) - A monthly magazine dedicated to PHP.

### PHP Internals Reading
*Reading materials related to the PHP internals or performance.*

* [PHP RFCs](https://wiki.php.net/rfc) - The home of PHP RFCs (Request for Comments).
* [Externals](https://externals.io/) - PHP internal discussions. 
* [PHP RFC Watch](https://php-rfc-watch.beberlei.de/) - Watch the latest PHP [RFCs](https://wiki.php.net/rfc).
* [PHP Internals Book](http://www.phpinternalsbook.com) - An online book about PHP internals, written by three core developers.



# frameworks

A curated list of awesome PHP frameworks, libraries and software.

* [laravel/laravel](https://github.com/laravel/laravel) - A PHP framework for web artisans.
* [blueimp/jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload) - File Upload widget with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (Google App Engine, PHP, Python, Ruby on Rails, Java, etc.) that supports standard HTML form file uploads.
* [fzaninotto/Faker](https://github.com/fzaninotto/Faker) - Faker is a PHP library that generates fake data for you
* [symfony/symfony](https://github.com/symfony/symfony) - The Symfony PHP framework
* [composer/composer](https://github.com/composer/composer) - Dependency Manager for PHP
* [laravel/framework](https://github.com/laravel/framework) - The Laravel Framework.
* [guzzle/guzzle](https://github.com/guzzle/guzzle) - Guzzle, an extensible PHP HTTP client
* [DesignPatternsPHP/DesignPatternsPHP](https://github.com/DesignPatternsPHP/DesignPatternsPHP) - sample code for several design patterns in PHP 8
* [Seldaek/monolog](https://github.com/Seldaek/monolog) - Sends your logs to files, sockets, inboxes, databases and various web services
* [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter) - Open Source PHP Framework (originally from EllisLab)
* [sebastianbergmann/phpunit](https://github.com/sebastianbergmann/phpunit) - The PHP Unit Testing framework.
* [nextcloud/server](https://github.com/nextcloud/server) - ☁️ Nextcloud server, a safe home for all your data
* [PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer) - The classic email sending library for PHP
* [matomo-org/matomo](https://github.com/matomo-org/matomo) - Liberating Web Analytics. Star us on Github? +1. Matomo is the leading open alternative to Google Analytics that gives you full control over your data. Matomo lets you easily collect data from websites & apps and visualise this data and extract insights. Privacy is built-in. We love Pull Requests!
* [briannesbitt/Carbon](https://github.com/briannesbitt/Carbon) - A simple PHP API extension for DateTime.
* [monicahq/monica](https://github.com/monicahq/monica) - Personal CRM. Remember everything about your friends, family and business relationships.
* [nikic/PHP-Parser](https://github.com/nikic/PHP-Parser) - A PHP parser written in PHP
* [erusev/parsedown](https://github.com/erusev/parsedown) - Better Markdown Parser in PHP
* [yiisoft/yii2](https://github.com/yiisoft/yii2) - Yii 2: The Fast, Secure and Professional PHP Framework
* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) - Laravel Debugbar (Integrates PHP Debug Bar)
* [getgrav/grav](https://github.com/getgrav/grav) - Modern, Crazy Fast, Ridiculously Easy and Amazingly Powerful Flat-File CMS powered by PHP, Markdown, Twig, and Symfony
* [filp/whoops](https://github.com/filp/whoops) - PHP errors for cool kids
* [CachetHQ/Cachet](https://github.com/CachetHQ/Cachet) - 📛 An open source status page system for everyone.
* [Intervention/image](https://github.com/Intervention/image) - PHP Image Manipulation
* [thephpleague/flysystem](https://github.com/thephpleague/flysystem) - Abstraction for local and remote filesystems
* [phacility/phabricator](https://github.com/phacility/phabricator) - Effective June 1, 2021: Phabricator is no longer actively maintained.
* [flarum/flarum](https://github.com/flarum/flarum) - Simple forum software for building great communities.
* [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) - Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.
* [PHPOffice/PHPExcel](https://github.com/PHPOffice/PHPExcel) - ARCHIVED
* [ramsey/uuid](https://github.com/ramsey/uuid) - A PHP library for generating universally unique identifiers (UUIDs).
* [slimphp/Slim](https://github.com/slimphp/Slim) - Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.
* [octobercms/october](https://github.com/octobercms/october) - Self-hosted CMS platform based on the Laravel PHP Framework.
* [FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) - A tool to automatically fix PHP Coding Standards issues
* [PHPOffice/PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet) - A pure PHP library for reading and writing spreadsheet files
* [phalcon/cphalcon](https://github.com/phalcon/cphalcon) - High performance, full-stack PHP framework delivered as a C extension.
* [egulias/EmailValidator](https://github.com/egulias/EmailValidator) - PHP Email address validator
* [SpartnerNL/Laravel-Excel](https://github.com/SpartnerNL/Laravel-Excel) - 🚀 Supercharged Excel exports and imports in Laravel
* [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth) - 🔐 JSON Web Token Authentication for Laravel & Lumen
* [jupeter/clean-code-php](https://github.com/jupeter/clean-code-php) - :bathtub: Clean Code concepts adapted for PHP
* [mockery/mockery](https://github.com/mockery/mockery) - Mockery is a simple yet flexible PHP mock object framework for use in unit testing with PHPUnit, PHPSpec or any other testing framework. Its core goal is to offer a test double framework with a succinct API capable of clearly defining all possible object operations and interactions using a human readable Domain Specific Language (DSL).
* [spatie/laravel-permission](https://github.com/spatie/laravel-permission) - Associate users with roles and permissions
* [serbanghita/Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) - Mobile_Detect is a lightweight PHP class for detecting mobile devices (including tablets). It uses the User-Agent string combined with specific HTTP headers to detect the mobile environment.
* [magento/magento2](https://github.com/magento/magento2) - All Submissions you make to Magento Inc. ("Magento") through GitHub are subject to the following terms and conditions: (1) You grant Magento a perpetual, worldwide, non-exclusive, no charge, royalty free, irrevocable license under your applicable copyrights and patents to reproduce, prepare derivative works of, display, publically perform, sublicense and distribute any feedback, ideas, code, or other information (“Submission") you submit through GitHub. (2) Your Submission is an original work of authorship and you are the owner or are legally entitled to grant the license stated above. (3) You agree to the Contributor License Agreement found here:  https://github.com/magento/magento2/blob/master/CONTRIBUTOR_LICENSE_AGREEMENT.html
* [w7corp/easywechat](https://github.com/w7corp/easywechat) - :package: 一个 PHP 微信 SDK
* [walkor/Workerman](https://github.com/walkor/Workerman) - An asynchronous event driven PHP socket framework. Supports HTTP, Websocket, SSL and other custom protocols. PHP>=5.3.
* [swiftmailer/swiftmailer](https://github.com/swiftmailer/swiftmailer) - Comprehensive mailing tools for PHP
* [bobthecow/psysh](https://github.com/bobthecow/psysh) - A REPL for PHP
* [squizlabs/PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) - PHP_CodeSniffer tokenizes PHP files and detects violations of a defined set of coding standards.
* [symfony/console](https://github.com/symfony/console) - The Console component eases the creation of beautiful and testable command line interfaces.
* [deployphp/deployer](https://github.com/deployphp/deployer) - A deployment tool written in PHP with support for popular frameworks out of the box
* [FriendsOfPHP/Goutte](https://github.com/FriendsOfPHP/Goutte) - Goutte, a simple PHP Web Scraper
* [cakephp/cakephp](https://github.com/cakephp/cakephp) - CakePHP: The Rapid Development Framework for PHP - Official Repository
* [dompdf/dompdf](https://github.com/dompdf/dompdf) - HTML to PDF converter for PHP
* [typecho/typecho](https://github.com/typecho/typecho) - A PHP Blogging Platform. Simple and Powerful.
* [phpspec/prophecy](https://github.com/phpspec/prophecy) - Highly opinionated mocking framework for PHP 5.3+
* [reactphp/reactphp](https://github.com/reactphp/reactphp) - Event-driven, non-blocking I/O with PHP.
* [sebastianbergmann/php-code-coverage](https://github.com/sebastianbergmann/php-code-coverage) - Library that provides collection, processing, and rendering functionality for PHP code coverage information.
* [symfony/http-foundation](https://github.com/symfony/http-foundation) - The HttpFoundation component defines an object-oriented layer for the HTTP specification.
* [paragonie/random_compat](https://github.com/paragonie/random_compat) - PHP 5.x support for random_bytes() and random_int()
* [symfony/event-dispatcher](https://github.com/symfony/event-dispatcher) - The EventDispatcher component provides tools that allow your application components to communicate with each other by dispatching events and listening to them.
* [symfony/finder](https://github.com/symfony/finder) - The Finder component finds files and directories via an intuitive fluent interface.
* [googleapis/google-api-php-client](https://github.com/googleapis/google-api-php-client) - A PHP client library for accessing Google APIs
* [BookStackApp/BookStack](https://github.com/BookStackApp/BookStack) - A platform to create documentation/wiki content built with PHP & Laravel
* [top-think/think](https://github.com/top-think/think) - ThinkPHP Framework ——十年匠心的高性能PHP框架
* [YOURLS/YOURLS](https://github.com/YOURLS/YOURLS) - 🔗 Your Own URL Shortener
* [owncloud/core](https://github.com/owncloud/core) - :cloud: ownCloud web server core (Files, DAV, etc.)
* [symfony/thanks](https://github.com/symfony/thanks) - Give thanks (in the form of a GitHub ★) to your fellow PHP package maintainers (not limited to Symfony components)!
* [symfony/http-kernel](https://github.com/symfony/http-kernel) - The HttpKernel component provides a structured process for converting a Request into a Response.
* [tennc/webshell](https://github.com/tennc/webshell) - This is a webshell open source project
* [woocommerce/woocommerce](https://github.com/woocommerce/woocommerce) - An open source eCommerce plugin for WordPress.
* [twigphp/Twig](https://github.com/twigphp/Twig) - Twig, the flexible, fast, and secure template language for PHP
* [symfony/polyfill-mbstring](https://github.com/symfony/polyfill-mbstring) - This component provides a partial, native PHP implementation for the Mbstring extension.
* [symfony/debug](https://github.com/symfony/debug) - The Debug component provides tools to ease debugging PHP code.
* [sebastianbergmann/php-timer](https://github.com/sebastianbergmann/php-timer) - Utility class for timing
* [symfony/routing](https://github.com/symfony/routing) - The Routing component maps an HTTP request to a set of configuration variables.
* [guzzle/promises](https://github.com/guzzle/promises) - Promises/A+ library for PHP with synchronous support
* [firefly-iii/firefly-iii](https://github.com/firefly-iii/firefly-iii) - Firefly III: a personal finances manager
* [predis/predis](https://github.com/predis/predis) - A flexible and feature-complete Redis client for PHP.
* [symfony/process](https://github.com/symfony/process) - The Process component executes commands in sub-processes.
* [symfony/css-selector](https://github.com/symfony/css-selector) - The CssSelector component converts CSS selectors to XPath expressions.
* [phar-io/manifest](https://github.com/phar-io/manifest) - Component for reading phar.io manifest information from a PHP Archive (PHAR)
* [sebastianbergmann/php-file-iterator](https://github.com/sebastianbergmann/php-file-iterator) - FilterIterator implementation that filters files based on a list of suffixes, prefixes, and other exclusion criteria.
* [symfony/var-dumper](https://github.com/symfony/var-dumper) - The VarDumper component provides mechanisms for walking through any arbitrary PHP variable. It provides a better dump() function that you can use instead of var_dump().
* [sebastianbergmann/php-text-template](https://github.com/sebastianbergmann/php-text-template) - A simple template engine.
* [hamcrest/hamcrest-php](https://github.com/hamcrest/hamcrest-php) - PHP Hamcrest implementation [Official]
* [Sylius/Sylius](https://github.com/Sylius/Sylius) - Open Source eCommerce Platform on Symfony
* [sebastianbergmann/php-token-stream](https://github.com/sebastianbergmann/php-token-stream) - Wrapper around PHP's tokenizer extension.
* [lcobucci/jwt](https://github.com/lcobucci/jwt) - A simple library to work with JSON Web Token and JSON Web Signature
* [sebastianbergmann/comparator](https://github.com/sebastianbergmann/comparator) - Provides the functionality to compare PHP values for equality.
* [php-fig/http-message](https://github.com/php-fig/http-message) - The purpose of this PSR is to provide a set of common interfaces for HTTP messages as described in RFC 7230 and RFC 7231
* [wallabag/wallabag](https://github.com/wallabag/wallabag) - wallabag is a self hostable application for saving web pages: Save and classify articles. Read them later. Freely.
* [php-pm/php-pm](https://github.com/php-pm/php-pm) - PPM is a process manager, supercharger and load balancer for modern PHP applications.
* [Laravel-Lang/lang](https://github.com/Laravel-Lang/lang) - List of 78 languages for Laravel Framework 4, 5, 6, 7 and 8,  Laravel Jetstream , Laravel Fortify, Laravel Breeze, Laravel Cashier, Laravel Nova and Laravel Spark.
* [opencart/opencart](https://github.com/opencart/opencart) - A free shopping cart system. OpenCart is an open source PHP-based online e-commerce solution.
* [JakubOnderka/PHP-Console-Highlighter](https://github.com/JakubOnderka/PHP-Console-Highlighter) - Highlight PHP code in terminal
* [JakubOnderka/PHP-Console-Color](https://github.com/JakubOnderka/PHP-Console-Color) - Simple library for creating colored console ouput
* [invoiceninja/invoiceninja](https://github.com/invoiceninja/invoiceninja) - Invoices, Expenses and Tasks built with Laravel and Flutter
* [sebastianbergmann/exporter](https://github.com/sebastianbergmann/exporter) - Provides the functionality to export PHP variables for visualization
* [sebastianbergmann/environment](https://github.com/sebastianbergmann/environment) - Provides functionality that helps writing PHP code that has runtime-specific (PHP / HHVM) execution paths
* [symfony/translation](https://github.com/symfony/translation) - The Translation component provides tools to internationalize your application.
* [PrestaShop/PrestaShop](https://github.com/PrestaShop/PrestaShop) - PrestaShop is an Open Source e-commerce platform, committed to providing the best shopping cart experience for both merchants and customers.
* [sebastianbergmann/recursion-context](https://github.com/sebastianbergmann/recursion-context) - Provides functionality to recursively process PHP variables
* [sebastianbergmann/version](https://github.com/sebastianbergmann/version) - Library that helps with managing the version number of Git-hosted PHP projects
* [PHPOffice/PHPWord](https://github.com/PHPOffice/PHPWord) - A pure PHP library for reading and writing word processing documents
* [thephpleague/oauth2-server](https://github.com/thephpleague/oauth2-server) - A spec compliant, secure by default PHP OAuth 2.0 Server
* [sebastianbergmann/resource-operations](https://github.com/sebastianbergmann/resource-operations) - Provides a list of PHP built-in functions that operate on resources
* [phpmyadmin/phpmyadmin](https://github.com/phpmyadmin/phpmyadmin) - A web interface for MySQL and MariaDB
* [digininja/DVWA](https://github.com/digininja/DVWA) - Damn Vulnerable Web Application (DVWA)
* [ratchetphp/Ratchet](https://github.com/ratchetphp/Ratchet) - Asynchronous WebSocket server
* [humhub/humhub](https://github.com/humhub/humhub) - HumHub is an Open Source Enterprise Social Network. Easy to install, intuitive to use and extendable with countless freely available modules.
* [botman/botman](https://github.com/botman/botman) - A framework agnostic PHP library to build chat bots
* [Respect/Validation](https://github.com/Respect/Validation) - The most awesome validation engine ever created for PHP
* [thephpleague/omnipay](https://github.com/thephpleague/omnipay) - A framework agnostic, multi-gateway payment processing library for PHP 5.6+
* [roots/bedrock](https://github.com/roots/bedrock) - WordPress boilerplate with modern development tools, easier configuration, and an improved folder structure
* [pagekit/pagekit](https://github.com/pagekit/pagekit) - Pagekit CMS
* [aws/aws-sdk-php](https://github.com/aws/aws-sdk-php) - Official repository of the AWS SDK for PHP (@awsforphp)
* [swoft-cloud/swoft](https://github.com/swoft-cloud/swoft) - 🚀 PHP Microservice Full Coroutine Framework
* [mledoze/countries](https://github.com/mledoze/countries) - World countries in JSON, CSV, XML and Yaml. Any help is welcome!
* [flarum/core](https://github.com/flarum/core) - Simple forum software for building great communities.
* [rappasoft/laravel-boilerplate](https://github.com/rappasoft/laravel-boilerplate) - The Laravel Boilerplate Project - https://laravel-boilerplate.com - For Slack access, visit:
* [aimeos/aimeos-laravel](https://github.com/aimeos/aimeos-laravel) - Laravel ecommerce package for professional, ultra fast online shops, complex B2B applications and #gigacommerce
* [phan/phan](https://github.com/phan/phan) - Phan is a static analyzer for PHP. Phan prefers to avoid false-positives and attempts to prove incorrectness rather than correctness.
* [sebastianbergmann/phpunit-mock-objects](https://github.com/sebastianbergmann/phpunit-mock-objects) - Mock Object library for PHPUnit
* [vrana/adminer](https://github.com/vrana/adminer) - Database management in a single PHP file
* [timber/timber](https://github.com/timber/timber) - Create WordPress themes with beautiful OOP code and the Twig Template Engine
* [mtdowling/cron-expression](https://github.com/mtdowling/cron-expression) - CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due
* [mautic/mautic](https://github.com/mautic/mautic) - Mautic: Open Source Marketing Automation Software.
* [crater-invoice/crater](https://github.com/crater-invoice/crater) - Open Source Invoicing Solution for Individuals & Businesses
* [fecshop/yii2_fecshop](https://github.com/fecshop/yii2_fecshop) - yii2 ( PHP ) fecmall（fecshop） core code used for ecommerce shop 多语言多货币多入口的开源电商 B2C 商城，支持移动端vue, app, html5，微信小程序微店，微信小程序商城等
* [yiisoft/yii](https://github.com/yiisoft/yii) - Yii PHP Framework 1.1.x
* [phpbrew/phpbrew](https://github.com/phpbrew/phpbrew) - Brew & manage PHP versions in pure PHP at HOME
* [theseer/tokenizer](https://github.com/theseer/tokenizer) - A small library for converting tokenized PHP source code into XML (and potentially other formats)
* [elastic/elasticsearch-php](https://github.com/elastic/elasticsearch-php) - Official PHP low-level client for Elasticsearch.
* [spatie/laravel-backup](https://github.com/spatie/laravel-backup) - A package to backup your Laravel app
* [spatie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary) - Associate files with Eloquent models
* [rectorphp/rector](https://github.com/rectorphp/rector) - Instant Upgrades and Automated Refactoring of any PHP 5.3+ code
* [phpseclib/phpseclib](https://github.com/phpseclib/phpseclib) - PHP Secure Communications Library
* [symfony/polyfill-php72](https://github.com/symfony/polyfill-php72) - This component provides functions added to PHP 7.2 core.
* [akaunting/akaunting](https://github.com/akaunting/akaunting) - Free and Online Accounting Software
* [vinkla/hashids](https://github.com/vinkla/hashids) - A small PHP library to generate YouTube-like ids from numbers. Use it when you don't want to expose your database ids to the user.
* [nikic/FastRoute](https://github.com/nikic/FastRoute) - Fast request router for PHP
* [vimeo/psalm](https://github.com/vimeo/psalm) - A static analysis tool for finding errors in PHP applications
* [php-webdriver/php-webdriver](https://github.com/php-webdriver/php-webdriver) - PHP client for Selenium/WebDriver protocol. Previously facebook/php-webdriver
* [wp-cli/wp-cli](https://github.com/wp-cli/wp-cli) - ⚙️ WP-CLI framework
* [catfan/Medoo](https://github.com/catfan/Medoo) - The lightweight PHP database framework to accelerate the development.
* [dodgepudding/wechat-php-sdk](https://github.com/dodgepudding/wechat-php-sdk) - 微信公众平台php开发包, weixin developer SDK.
* [nunomaduro/phpinsights](https://github.com/nunomaduro/phpinsights) - 🔰 Instant PHP quality checks from your console
* [Codeception/Codeception](https://github.com/Codeception/Codeception) - Full-stack testing PHP framework
* [zircote/swagger-php](https://github.com/zircote/swagger-php) - A php swagger annotation and parsing library
* [cakephp/phinx](https://github.com/cakephp/phinx) - PHP Database Migrations for Everyone
* [webonyx/graphql-php](https://github.com/webonyx/graphql-php) - A PHP port of GraphQL reference implementation
* [php-imagine/Imagine](https://github.com/php-imagine/Imagine) - PHP 5.3 Object Oriented image manipulation library
* [yansongda/pay](https://github.com/yansongda/pay) - 可能是我用过的最优雅的 Alipay 和 WeChat 的支付 SDK 扩展包了
* [cydrobolt/polr](https://github.com/cydrobolt/polr) - :aerial_tramway: A modern, powerful, and robust URL shortener
* [bagisto/bagisto](https://github.com/bagisto/bagisto) - An easy to use, free and open source laravel eCommerce platform to build your online shop in no time.
* [bolt/bolt](https://github.com/bolt/bolt) - Bolt is a simple CMS written in PHP. It is based on Silex and Symfony components, uses Twig and either SQLite, MySQL or PostgreSQL.
* [yajra/laravel-datatables](https://github.com/yajra/laravel-datatables) - jQuery DataTables API for Laravel 4|5|6|7|8
* [abraham/twitteroauth](https://github.com/abraham/twitteroauth) - The most popular PHP library for use with the Twitter OAuth REST API.
* [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog) - Log activity inside your Laravel app
* [symfony/filesystem](https://github.com/symfony/filesystem) - The Filesystem component provides basic utilities for the filesystem.
* [itsgoingd/clockwork](https://github.com/itsgoingd/clockwork) - Clockwork - php dev tools in your browser - server-side component
* [RSS-Bridge/rss-bridge](https://github.com/RSS-Bridge/rss-bridge) - The RSS feed for websites missing it
* [PHP-FFMpeg/PHP-FFMpeg](https://github.com/PHP-FFMpeg/PHP-FFMpeg) - An object oriented PHP driver for FFMpeg binary
* [joomla/joomla-cms](https://github.com/joomla/joomla-cms) - Home of the Joomla! Content Management System
* [nunomaduro/collision](https://github.com/nunomaduro/collision) - 💥 Collision is a beautiful error reporting tool for command-line applications
* [KnpLabs/snappy](https://github.com/KnpLabs/snappy) - PHP library allowing thumbnail, snapshot or PDF generation from a url or a html page. Wrapper for wkhtmltopdf/wkhtmltoimage
* [php-amqplib/php-amqplib](https://github.com/php-amqplib/php-amqplib) - The most widely used PHP client for RabbitMQ
* [giggsey/libphonenumber-for-php](https://github.com/giggsey/libphonenumber-for-php) - PHP version of Google's phone number handling library
* [maximebf/php-debugbar](https://github.com/maximebf/php-debugbar) - Debug bar for PHP
* [nWidart/laravel-modules](https://github.com/nWidart/laravel-modules) - Module Management In Laravel
* [jenssegers/agent](https://github.com/jenssegers/agent) - 👮 A PHP desktop/mobile user agent parser with support for Laravel, based on Mobiledetect
* [moneyphp/money](https://github.com/moneyphp/money) - PHP implementation of Fowler's Money pattern.
* [box/spout](https://github.com/box/spout) - Read and write spreadsheet files (CSV, XLSX and ODS), in a fast and scalable way
* [codeigniter4/CodeIgniter4](https://github.com/codeigniter4/CodeIgniter4) - Open Source PHP Framework (originally from EllisLab)
* [overtrue/pinyin](https://github.com/overtrue/pinyin) - :cn: 基于词库的中文转拼音优质解决方案
* [kriswallsmith/assetic](https://github.com/kriswallsmith/assetic) - Asset Management for PHP
* [FreshRSS/FreshRSS](https://github.com/FreshRSS/FreshRSS) - A free, self-hostable aggregator…
* [doctrine/DoctrineMigrationsBundle](https://github.com/doctrine/DoctrineMigrationsBundle) - Symfony integration for the doctrine/migrations library
* [symfony/polyfill-ctype](https://github.com/symfony/polyfill-ctype) - This component provides a partial, native PHP implementation for the Ctype extension.
* [geocoder-php/Geocoder](https://github.com/geocoder-php/Geocoder) - The most featured Geocoder library written in PHP.
* [swooletw/laravel-swoole](https://github.com/swooletw/laravel-swoole) - High performance HTTP server based on Swoole. Speed up your Laravel or Lumen applications.
* [interconnectit/Search-Replace-DB](https://github.com/interconnectit/Search-Replace-DB) - This script was made to aid the process of migrating PHP and MySQL based websites. Works with most common CMSes.
* [pestphp/pest](https://github.com/pestphp/pest) - Pest is an elegant PHP Testing Framework with a focus on simplicity
* [Behat/Behat](https://github.com/Behat/Behat) - BDD in PHP
* [phpro/grumphp](https://github.com/phpro/grumphp) - A PHP code-quality tool
* [doctrine-extensions/DoctrineExtensions](https://github.com/doctrine-extensions/DoctrineExtensions) - Doctrine2 behavioral extensions, Translatable, Sluggable, Tree-NestedSet, Timestampable, Loggable, Sortable
* [symfony/config](https://github.com/symfony/config) - The Config component helps you find, load, combine, autofill and validate configuration values of any kind, whatever their source may be (YAML, XML, INI files, or for instance a database).
* [silexphp/Silex](https://github.com/silexphp/Silex) - [DEPRECATED -- Use Symfony instead] The PHP micro-framework based on the Symfony Components
* [symfony/dependency-injection](https://github.com/symfony/dependency-injection) - The DependencyInjection component allows you to standardize and centralize the way objects are constructed in your application.
* [PrivateBin/PrivateBin](https://github.com/PrivateBin/PrivateBin) - A minimalist, open source online pastebin where the server has zero knowledge of pasted data. Data is encrypted/decrypted in the browser using 256 bits AES.
* [RainLoop/rainloop-webmail](https://github.com/RainLoop/rainloop-webmail) - Simple, modern & fast web-based email client
* [beyondcode/expose](https://github.com/beyondcode/expose) - A beautiful, fully open-source, tunneling service - written in pure PHP
* [symfony/cache](https://github.com/symfony/cache) - The Cache component provides an extended PSR-6 implementation for adding cache to your applications.
* [causefx/Organizr](https://github.com/causefx/Organizr) - HTPC/Homelab Services Organizer - Written in PHP
* [cytopia/devilbox](https://github.com/cytopia/devilbox) - A modern Docker LAMP stack and MEAN stack for local development
* [nunomaduro/larastan](https://github.com/nunomaduro/larastan) - ⚗️ Adds code analysis to Laravel improving developer productivity and code quality.
* [johnlui/Learn-Laravel-5](https://github.com/johnlui/Learn-Laravel-5) - Laravel 5 系列入门教程
* [spatie/browsershot](https://github.com/spatie/browsershot) - Convert HTML to an image, PDF or string
* [endroid/qr-code](https://github.com/endroid/qr-code) - QR Code Generator
* [corcel/corcel](https://github.com/corcel/corcel) - Use WordPress backend with Laravel or any PHP application
* [symfony/dom-crawler](https://github.com/symfony/dom-crawler) - The DomCrawler component eases DOM navigation for HTML and XML documents.
* [picocms/Pico](https://github.com/picocms/Pico) - Pico is a stupidly simple, blazing fast, flat file CMS.
* [chrisboulton/php-resque](https://github.com/chrisboulton/php-resque) - PHP port of resque (Workers and Queueing)
* [amphp/amp](https://github.com/amphp/amp) - A non-blocking concurrency framework for PHP applications. 🐘
* [WordPress/Requests](https://github.com/WordPress/Requests) - Requests for PHP is a humble HTTP request library. It simplifies how you interact with other sites and takes away all your worries.
* [owner888/phpspider](https://github.com/owner888/phpspider) - 《我用爬虫一天时间“偷了”知乎一百万用户，只为证明PHP是世界上最好的语言 》所使用的程序
* [defuse/php-encryption](https://github.com/defuse/php-encryption) - Simple Encryption in PHP.
* [EasyCorp/EasyAdminBundle](https://github.com/EasyCorp/EasyAdminBundle) - EasyAdmin is a fast, beautiful and modern admin generator for Symfony applications.
* [mpdf/mpdf](https://github.com/mpdf/mpdf) - PHP library generating PDF files from UTF-8 encoded HTML
* [anchorcms/anchor-cms](https://github.com/anchorcms/anchor-cms) - A lightweight blog CMS for PHP
* [symfony/yaml](https://github.com/symfony/yaml) - The Yaml component loads and dumps YAML files.
* [phpDocumentor/phpDocumentor](https://github.com/phpDocumentor/phpDocumentor) - Documentation Generator for PHP
* [thedevdojo/wave](https://github.com/thedevdojo/wave) - Wave - The Software as a Service Starter Kit, designed to help you build the SAAS of your dreams 🚀 💰
* [facebookarchive/facebook-php-sdk](https://github.com/facebookarchive/facebook-php-sdk) - This SDK is deprecated.  Find the new SDK here: https://github.com/facebook/facebook-php-sdk-v4
* [Hanson/vbot](https://github.com/Hanson/vbot) - 💬The best wechat robot base on web api!
* [splitbrain/dokuwiki](https://github.com/splitbrain/dokuwiki) - The DokuWiki Open Source Wiki Engine
* [wp-bootstrap/wp-bootstrap-navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker) - A custom WordPress nav walker class to fully implement the Twitter Bootstrap 4.0+ navigation style (v3-branch available for Bootstrap 3) in a custom theme using the WordPress built in menu manager.
* [ralouphie/getallheaders](https://github.com/ralouphie/getallheaders) - PHP getallheaders polyfill
* [symfony/dotenv](https://github.com/symfony/dotenv) - Symfony Dotenv parses .env files to make environment variables stored in them accessible via getenv(), $_ENV, or $_SERVER.
* [Xethron/migrations-generator](https://github.com/Xethron/migrations-generator) - Laravel Migrations Generator: Automatically generate your migrations from an existing database schema.
* [michelf/php-markdown](https://github.com/michelf/php-markdown) - Parser for Markdown and Markdown Extra derived from the original Markdown.pl by John Gruber.
* [hybridauth/hybridauth](https://github.com/hybridauth/hybridauth) - Open source social sign on PHP Library. HybridAuth goal is to act as an abstract api between your application and various social apis and identities providers such as Facebook, Twitter and Google.
* [justinrainbow/json-schema](https://github.com/justinrainbow/json-schema) - PHP implementation of JSON schema. Fork of the http://jsonschemaphpv.sourceforge.net/ project
* [sensiolabs/SensioFrameworkExtraBundle](https://github.com/sensiolabs/SensioFrameworkExtraBundle) - An extension to Symfony FrameworkBundle that adds annotation configuration for Controller classes
* [thephpleague/oauth2-client](https://github.com/thephpleague/oauth2-client) - Easy integration with OAuth 2.0 service providers.
* [google/recaptcha](https://github.com/google/recaptcha) - PHP client library for reCAPTCHA, a free service to protect your website from spam and abuse.
* [tecnickcom/TCPDF](https://github.com/tecnickcom/TCPDF) - Official clone of PHP library to generate PDF documents and barcodes
* [bshaffer/oauth2-server-php](https://github.com/bshaffer/oauth2-server-php) - A library for implementing an OAuth2 Server in php
* [bobthecow/mustache.php](https://github.com/bobthecow/mustache.php) - A Mustache implementation in PHP.
* [pattern-lab/patternlab-php](https://github.com/pattern-lab/patternlab-php) - The PHP version of Pattern Lab
* [zephir-lang/zephir](https://github.com/zephir-lang/zephir) - Zephir is a compiled high level language aimed to the creation of C-extensions for PHP.
* [pyrocms/pyrocms](https://github.com/pyrocms/pyrocms) - Pyro is an experienced and powerful Laravel PHP CMS.
* [spatie/laravel-query-builder](https://github.com/spatie/laravel-query-builder) - Easily build Eloquent queries from API requests
* [facebookarchive/php-graph-sdk](https://github.com/facebookarchive/php-graph-sdk) - The Facebook SDK for PHP provides a native interface to the Graph API and Facebook Login.  https://developers.facebook.com/docs/php
* [symfony/contracts](https://github.com/symfony/contracts) - A set of abstractions extracted out of the Symfony components
* [symfony/framework-bundle](https://github.com/symfony/framework-bundle) - The FrameworkBundle defines the main framework configuration, from sessions and translations to forms, validation, routing and more.
* [lazychaser/laravel-nestedset](https://github.com/lazychaser/laravel-nestedset) - Effective tree structures in Laravel 4-5
* [jokkedk/webgrind](https://github.com/jokkedk/webgrind) - Xdebug Profiling Web Frontend in PHP
* [stripe/stripe-php](https://github.com/stripe/stripe-php) - PHP library for the Stripe API.
* [ThingEngineer/PHP-MySQLi-Database-Class](https://github.com/ThingEngineer/PHP-MySQLi-Database-Class) - Wrapper for a PHP MySQL class, which utilizes MySQLi and prepared statements.
* [doctrine/reflection](https://github.com/doctrine/reflection) - The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection API that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.
* [pterodactyl/panel](https://github.com/pterodactyl/panel) - Pterodactyl is an open-source game server management panel built with PHP 7, React, and Go. Designed with security in mind, Pterodactyl runs all game servers in isolated Docker containers while exposing a beautiful and intuitive UI to end users.
* [paragonie/paseto](https://github.com/paragonie/paseto) - Platform-Agnostic Security Tokens
* [mevdschee/php-crud-api](https://github.com/mevdschee/php-crud-api) - Single file PHP script that adds a REST API to a SQL database
* [php-curl-class/php-curl-class](https://github.com/php-curl-class/php-curl-class) - PHP Curl Class makes it easy to send HTTP requests and integrate with web APIs
* [php-telegram-bot/core](https://github.com/php-telegram-bot/core) - PHP Telegram Bot based on the official Telegram Bot API
* [cretueusebiu/laravel-vue-spa](https://github.com/cretueusebiu/laravel-vue-spa) - A Laravel-Vue SPA starter kit.
* [Dolibarr/dolibarr](https://github.com/Dolibarr/dolibarr) - Dolibarr ERP CRM is a modern software package to manage your company or foundation's activity (contacts, suppliers, invoices, orders, stocks, agenda, accounting, ...). It is open source software (written in PHP) and designed for small and medium businesses, foundations and freelancers. You can freely install, use and distribute it as a standalone application or as a web application to use it from every internet access and media.
* [top-think/thinkphp](https://github.com/top-think/thinkphp) - ThinkPHP3.2 ——基于PHP5的简单快速的面向对象的PHP框架
* [thephpleague/csv](https://github.com/thephpleague/csv) - CSV data manipulation made easy in PHP
* [erikdubbelboer/phpRedisAdmin](https://github.com/erikdubbelboer/phpRedisAdmin) - Simple web interface to manage Redis databases.
* [laravel-zero/laravel-zero](https://github.com/laravel-zero/laravel-zero) - A PHP framework for console artisans
* [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) - Easy localization for Laravel
* [symfony/doctrine-bridge](https://github.com/symfony/doctrine-bridge) - Provides integration for Doctrine with various Symfony components.
* [symfony/asset](https://github.com/symfony/asset) - The Asset component manages URL generation and versioning of web assets such as CSS stylesheets, JavaScript files and image files.
* [salesagility/SuiteCRM](https://github.com/salesagility/SuiteCRM) - SuiteCRM - Open source CRM for the world
* [symfony/polyfill-intl-idn](https://github.com/symfony/polyfill-intl-idn) - This component provides a partial, native PHP implementation for the Intl extension (IDN features).
* [JosephSilber/bouncer](https://github.com/JosephSilber/bouncer) - Eloquent roles and abilities.
* [wikimedia/mediawiki](https://github.com/wikimedia/mediawiki) - 🌻 The collaborative editing software that runs Wikipedia. Mirror from https://gerrit.wikimedia.org/g/mediawiki/core. See https://mediawiki.org/wiki/Developer_access for contributing.
* [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer) - :dromedary_camel: Laravel log viewer
* [symfony/options-resolver](https://github.com/symfony/options-resolver) - The OptionsResolver component is array_replace() on steroids. It allows you to create an options system with required options, defaults, validation (type, value), normalization and more.
* [craftcms/cms](https://github.com/craftcms/cms) - Craft is a flexible, user-friendly CMS for creating custom digital experiences on the web and beyond.
* [rocketeers/rocketeer](https://github.com/rocketeers/rocketeer) - Send your projects up in the clouds
* [cocur/slugify](https://github.com/cocur/slugify) - Converts a string to a slug. Includes integrations for Symfony, Silex, Laravel, Zend Framework 2, Twig, Nette and Latte.
* [teamtnt/tntsearch](https://github.com/teamtnt/tntsearch) - A fully featured full text search engine written in PHP
* [overtrue/laravel-wechat](https://github.com/overtrue/laravel-wechat) - 微信 SDK for Laravel, 基于 overtrue/wechat
* [gitscrum-ce/laravel-gitscrum](https://github.com/gitscrum-ce/laravel-gitscrum) - GitScrum is a Project Management Tool, developed to help entrepreneurs, freelancers, managers, and teams Skyrocket their Productivity with the Agile methodology and Gamification.
* [nuwave/lighthouse](https://github.com/nuwave/lighthouse) - A framework for serving GraphQL from Laravel
* [FriendsOfSymfony/FOSRestBundle](https://github.com/FriendsOfSymfony/FOSRestBundle) - This Bundle provides various tools to rapidly develop RESTful API's with Symfony
* [prasathmani/tinyfilemanager](https://github.com/prasathmani/tinyfilemanager) - The best web based PHP File Manager in single file, Manage your files efficiently and easily with tinyfilemanager
* [CMB2/CMB2](https://github.com/CMB2/CMB2) - CMB2 is a developer's toolkit for building metaboxes, custom fields, and forms for WordPress that will blow your mind.
* [symfony/event-dispatcher-contracts](https://github.com/symfony/event-dispatcher-contracts) - A set of event dispatcher abstractions extracted out of the Symfony components
* [antonioribeiro/tracker](https://github.com/antonioribeiro/tracker) - Laravel Stats Tracker
* [klein/klein.php](https://github.com/klein/klein.php) - A fast & flexible router
* [spatie/laravel-analytics](https://github.com/spatie/laravel-analytics) - A Laravel package to retrieve pageviews and other data from Google Analytics
* [pmmp/PocketMine-MP](https://github.com/pmmp/PocketMine-MP) - A server software for Minecraft: Bedrock Edition in PHP
* [phptodayorg/php-must-watch](https://github.com/phptodayorg/php-must-watch) - list of interesting conference talks and videos on PHP -
* [kint-php/kint](https://github.com/kint-php/kint) - Kint - a powerful and modern PHP debugging tool.
* [librenms/librenms](https://github.com/librenms/librenms) - Community-based GPL-licensed network monitoring system
* [apiato/apiato](https://github.com/apiato/apiato) - PHP Framework for building scalable API's on top of Laravel.
* [symfony/browser-kit](https://github.com/symfony/browser-kit) - The BrowserKit component simulates the behavior of a web browser, allowing you to make requests, click on links and submit forms programmatically.
* [TIGERB/easy-tips](https://github.com/TIGERB/easy-tips) - A little Tips in my Code Career with Go&PHP 🥳🥳🥳
* [gharlan/alfred-github-workflow](https://github.com/gharlan/alfred-github-workflow) - GitHub Workflow for Alfred 4
* [phacility/xhprof](https://github.com/phacility/xhprof) - XHProf is a function-level hierarchical profiler for PHP and has a simple HTML based user interface.
* [symfony/monolog-bundle](https://github.com/symfony/monolog-bundle) - Symfony Monolog Bundle
* [BootstrapCMS/CMS](https://github.com/BootstrapCMS/CMS) - A PHP CMS powered by Laravel 5 and Sentry
* [xdebug/xdebug](https://github.com/xdebug/xdebug) - Xdebug — Step Debugger and Debugging Aid for PHP
* [bcosca/fatfree](https://github.com/bcosca/fatfree) - A powerful yet easy-to-use PHP micro-framework designed to help you build dynamic and robust Web applications - fast!
* [yuantuo666/baiduwp-php](https://github.com/yuantuo666/baiduwp-php) - PanDownload网页复刻版
* [silexphp/Pimple](https://github.com/silexphp/Pimple) - A small PHP dependency injection container
* [postaddictme/instagram-php-scraper](https://github.com/postaddictme/instagram-php-scraper) - Get account information, photos, videos, stories and comments.
* [symfony/panther](https://github.com/symfony/panther) - A browser testing and web crawling library for PHP and Symfony
* [30-seconds/30-seconds-of-php](https://github.com/30-seconds/30-seconds-of-php) - Short PHP code snippets for all your development needs
* [danielstjules/Stringy](https://github.com/danielstjules/Stringy) - A PHP string manipulation library with multibyte support
* [consolidation/robo](https://github.com/consolidation/robo) - Modern task runner for PHP
* [dancryer/PHPCI](https://github.com/dancryer/PHPCI) - PHPCI is a free and open source continuous integration tool specifically designed for PHP.
* [leokhoa/laragon](https://github.com/leokhoa/laragon) - Laragon is a portable, isolated, fast & powerful universal development environment for PHP, Node.js, Python, Java, Go, Ruby. It is fast, lightweight, easy-to-use and easy-to-extend.
* [symfony/expression-language](https://github.com/symfony/expression-language) - The ExpressionLanguage component provides an engine that can compile and evaluate expressions.
* [symfony/form](https://github.com/symfony/form) - The Form component allows you to easily create, process and reuse HTML forms.
* [artesaos/seotools](https://github.com/artesaos/seotools) - SEO Tools for Laravel
* [opensourcepos/opensourcepos](https://github.com/opensourcepos/opensourcepos) - Open Source Point of Sale is a web based point of sale application written in PHP using CodeIgniter framework. It uses MySQL as the data back end and has a Bootstrap 3 based user interface.
* [mikecao/flight](https://github.com/mikecao/flight) - An extensible micro-framework for PHP
* [KnpLabs/Gaufrette](https://github.com/KnpLabs/Gaufrette) - PHP library that provides a filesystem abstraction layer − will be a feast for your files!
* [jae-jae/QueryList](https://github.com/jae-jae/QueryList) - :spider: The progressive PHP crawler framework!  优雅的渐进式PHP采集框架。
* [ezyang/htmlpurifier](https://github.com/ezyang/htmlpurifier) - Standards compliant HTML filter written in PHP
* [symfony/stopwatch](https://github.com/symfony/stopwatch) - The Stopwatch component provides a way to profile code.
* [brefphp/bref](https://github.com/brefphp/bref) - Serverless PHP on AWS Lambda
* [VerbalExpressions/PHPVerbalExpressions](https://github.com/VerbalExpressions/PHPVerbalExpressions) - PHP Regular expressions made easy
* [myclabs/php-enum](https://github.com/myclabs/php-enum) - The enum PHP is missing, inspired from SplEnum
* [symfony/property-access](https://github.com/symfony/property-access) - The PropertyAccess component provides function to read and write from/to an object or array using a simple string notation.
* [aimeos/aimeos](https://github.com/aimeos/aimeos) - Integrated online shop based on Laravel 8 and the Aimeos e-commerce framework
* [LavaLite/cms](https://github.com/LavaLite/cms) - Multilingual PHP CMS built with Laravel  and bootstrap
* [Chartisan/Charts](https://github.com/Chartisan/Charts) - ⚡ Laravel Charts — Build charts using laravel. The laravel adapter for Chartisan.
* [symfony/intl](https://github.com/symfony/intl) - A PHP replacement layer for the C intl extension that also provides access to the localization data of the ICU library.
* [php-http/httplug](https://github.com/php-http/httplug) - HTTPlug, the HTTP client abstraction for PHP
* [helei112g/payment](https://github.com/helei112g/payment) - Payment是php版本的支付聚合第三方sdk，集成了微信支付、支付宝支付、招商一网通支付。提供统一的调用接口，方便快速接入各种支付、查询、退款、转账能力。服务端接入支付功能，方便、快捷。
* [nelmio/alice](https://github.com/nelmio/alice) - Expressive fixtures generator
* [symfony/polyfill-intl-icu](https://github.com/symfony/polyfill-intl-icu) - This component provides a collection of functions/classes using the symfony/intl package when the Intl extension is not installed.
* [opis/closure](https://github.com/opis/closure) - Serialize closures (anonymous functions)
* [composer/xdebug-handler](https://github.com/composer/xdebug-handler) - Restart a CLI process without loading the xdebug extension.
* [PHP-DI/PHP-DI](https://github.com/PHP-DI/PHP-DI) - The dependency injection container for humans
* [schmittjoh/php-option](https://github.com/schmittjoh/php-option) - Option Type for PHP
* [php/php-langspec](https://github.com/php/php-langspec) - PHP Language Specification
* [thiagoalessio/tesseract-ocr-for-php](https://github.com/thiagoalessio/tesseract-ocr-for-php) - A wrapper to work with Tesseract OCR inside PHP.
* [symfony/validator](https://github.com/symfony/validator) - The Validator component provides tools to validate values following the JSR-303 Bean Validation specification.
* [symfony/monolog-bridge](https://github.com/symfony/monolog-bridge) - Provides integration for Monolog with various Symfony components.
* [symfony/inflector](https://github.com/symfony/inflector) - Inflector converts words between their singular and plural forms (English only).
* [microweber/microweber](https://github.com/microweber/microweber) - Drag and Drop Website Builder and CMS with E-commerce
* [leafo/lessphp](https://github.com/leafo/lessphp) - LESS compiler written in PHP
* [gabrielrcouto/php-gui](https://github.com/gabrielrcouto/php-gui) - Extensionless PHP Graphic User Interface library
* [drush-ops/drush](https://github.com/drush-ops/drush) - Drush is a command-line shell and scripting interface for Drupal, a veritable Swiss Army knife designed to make life easier for those who spend their working hours hacking away at the command prompt.
* [irazasyed/telegram-bot-sdk](https://github.com/irazasyed/telegram-bot-sdk) - 🤖 Telegram Bot API PHP SDK. Lets you build Telegram Bots easily! Supports Laravel out of the box.
* [Tencent/tsf](https://github.com/Tencent/tsf) - coroutine and Swoole based php server framework in tencent
* [matyhtf/framework](https://github.com/matyhtf/framework) - SPF （Swoole PHP Framework），世界第一款基于Swoole扩展的PHP框架，开发者是Swoole创始人
* [lexik/LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle) - JWT authentication for your Symfony API
* [borisrepl/boris](https://github.com/borisrepl/boris) - A tiny REPL for PHP
* [phpmetrics/PhpMetrics](https://github.com/phpmetrics/PhpMetrics) - Beautiful and understandable static analysis tool for PHP
* [sebastianbergmann/phploc](https://github.com/sebastianbergmann/phploc) - A tool for quickly measuring the size of a PHP project.
* [symfony/mime](https://github.com/symfony/mime) - The MIME component allows manipulating MIME types.
* [PHPSocialNetwork/phpfastcache](https://github.com/PHPSocialNetwork/phpfastcache) - A high-performance backend cache system.  It is intended for use in speeding up dynamic web applications by alleviating database load.  Well implemented, it can drops the database load to almost nothing, yielding faster page load times for users, better resource utilization.  It is simple yet powerful.
* [symfony/twig-bridge](https://github.com/symfony/twig-bridge) - Provides integration for Twig with various Symfony components.
* [ircmaxell/password_compat](https://github.com/ircmaxell/password_compat) - Compatibility with the password_* functions that ship with PHP 5.5
* [symfony/twig-bundle](https://github.com/symfony/twig-bundle) - The Twig Bundle provides configuration for using Twig in your applications.
* [hwi/HWIOAuthBundle](https://github.com/hwi/HWIOAuthBundle) - OAuth client integration for Symfony. Supports both OAuth1.0a and OAuth2.
* [aimeos/aimeos-core](https://github.com/aimeos/aimeos-core) - Aimeos PHP e-commerce framework for ultra fast online shops, complex B2B applications and #gigacommerce
* [symfony/phpunit-bridge](https://github.com/symfony/phpunit-bridge) - Provides utilities for PHPUnit, especially user deprecation notices management.
* [slimkit/plus](https://github.com/slimkit/plus) - 💝The Plus (ThinkSNS+) is a powerful, easy-to-develop social system built with Laravel.
* [ruflin/Elastica](https://github.com/ruflin/Elastica) - Elastica is a PHP client for elasticsearch
* [cmgmyr/laravel-messenger](https://github.com/cmgmyr/laravel-messenger) - Simple user messaging package for Laravel
* [tastyigniter/TastyIgniter](https://github.com/tastyigniter/TastyIgniter) - :fire: Powerful, yet easy to use, open-source online ordering, table reservation and management system for restaurants
* [laracasts/PHP-Vars-To-Js-Transformer](https://github.com/laracasts/PHP-Vars-To-Js-Transformer) - Transform PHP data to JavaScript.
* [thephpleague/commonmark](https://github.com/thephpleague/commonmark) - Highly-extensible PHP Markdown parser which fully supports the CommonMark and GFM specs.
* [spatie/image-optimizer](https://github.com/spatie/image-optimizer) - Easily optimize images using PHP
* [panique/huge](https://github.com/panique/huge) - Simple user-authentication solution, embedded into a small framework.
* [symfony/polyfill-php73](https://github.com/symfony/polyfill-php73) - This component provides functions unavailable in releases prior to PHP 7.3.
* [sebastianbergmann/phpcpd](https://github.com/sebastianbergmann/phpcpd) - Copy/Paste Detector (CPD) for PHP code.
* [symfony/security-bundle](https://github.com/symfony/security-bundle) - The security system is one of the most powerful parts of Symfony and can largely be controlled via its configuration.
* [matomo-org/device-detector](https://github.com/matomo-org/device-detector) - The Universal Device Detection library will parse any User Agent and detect the browser, operating system, device used (desktop, tablet, mobile, tv, cars, console, etc.), brand and model.
* [symfony/demo](https://github.com/symfony/demo) - Symfony Demo Application
* [paypal/PayPal-PHP-SDK](https://github.com/paypal/PayPal-PHP-SDK) - PHP SDK for PayPal RESTful APIs
* [ARCANEDEV/LogViewer](https://github.com/ARCANEDEV/LogViewer) - :page_with_curl: Provides a log viewer for Laravel
* [reactphp/promise](https://github.com/reactphp/promise) - Promises/A implementation for PHP.
* [EasyCorp/easy-log-handler](https://github.com/EasyCorp/easy-log-handler) - Human-friendly log files that make you more productive
* [fossar/selfoss](https://github.com/fossar/selfoss) - multipurpose rss reader, live stream, mashup, aggregation web application
* [WordPress/WordPress-Coding-Standards](https://github.com/WordPress/WordPress-Coding-Standards) - PHP_CodeSniffer rules (sniffs) to enforce WordPress coding conventions
* [ApiGen/ApiGen](https://github.com/ApiGen/ApiGen) - PHP 7.1 ready Smart and Simple Documentation for your PHP project
* [spatie/crawler](https://github.com/spatie/crawler) - An easy to use,  powerful crawler implemented in PHP. Can execute Javascript.
* [sonata-project/SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle) - The missing Symfony Admin Generator
* [sensiolabs/security-checker](https://github.com/sensiolabs/security-checker) - PHP frontend for security.symfony.com
* [bartblaze/PHP-backdoors](https://github.com/bartblaze/PHP-backdoors) - A collection of PHP backdoors. For educational or testing purposes only.
* [symfony/debug-bundle](https://github.com/symfony/debug-bundle) - The DebugBundle allows greater integration of the VarDumper component in the Symfony full-stack framework.
* [walkor/phpsocket.io](https://github.com/walkor/phpsocket.io) - A server side alternative implementation of socket.io in PHP based on workerman.
* [symfony/serializer](https://github.com/symfony/serializer) - With the Serializer component it's possible to handle serializing data structures, including object graphs, into array structures or other formats like XML and JSON. It can also handle deserializing XML and JSON back to object graphs.
* [laravel/valet](https://github.com/laravel/valet) - A more enjoyable local development experience for Mac.
* [alextselegidis/easyappointments](https://github.com/alextselegidis/easyappointments) - :date: Easy!Appointments - Self Hosted Appointment Scheduler
* [nelmio/NelmioApiDocBundle](https://github.com/nelmio/NelmioApiDocBundle) - Generates documentation for your REST API from annotations
* [markrogoyski/math-php](https://github.com/markrogoyski/math-php) - Powerful modern math library for PHP: Features descriptive statistics and regressions; Continuous and discrete probability distributions; Linear algebra with matrices and vectors, Numerical analysis; special mathematical functions; Algebra
* [api-platform/core](https://github.com/api-platform/core) - The server component of API Platform: hypermedia and GraphQL APIs in minutes
* [laravelio/laravel.io](https://github.com/laravelio/laravel.io) - The Laravel.io Community Portal.
* [phpmd/phpmd](https://github.com/phpmd/phpmd) - PHPMD is a spin-off project of PHP Depend and aims to be a PHP equivalent of the well known Java tool PMD. PHPMD can be seen as an user friendly frontend application for the raw metrics stream measured by PHP Depend.
* [mewebstudio/captcha](https://github.com/mewebstudio/captcha) - Captcha for Laravel 5/6/7/8
* [spatie/async](https://github.com/spatie/async) - Easily run code asynchronously
* [php-enqueue/enqueue-dev](https://github.com/php-enqueue/enqueue-dev) - Message Queue, Job Queue, Broadcasting, WebSockets packages for PHP, Symfony, Laravel, Magento. DEVELOPMENT REPOSITORY - provided by Forma-Pro
* [drewm/mailchimp-api](https://github.com/drewm/mailchimp-api) - Super-simple, minimum abstraction MailChimp API v3 wrapper, in PHP
* [PHPGangsta/GoogleAuthenticator](https://github.com/PHPGangsta/GoogleAuthenticator) - PHP class to generate and verify Google Authenticator 2-factor authentication
* [ambionics/phpggc](https://github.com/ambionics/phpggc) - PHPGGC is a library of PHP unserialize() payloads along with a tool to generate them, from command line or programmatically.
* [summerblue/phphub5](https://github.com/summerblue/phphub5) - PHPHub Ver 5 is a Forum project Powered by Laravel 5.1, and it is also the project build up PHP & Laravel China community （此项目已弃用）
* [phpservermon/phpservermon](https://github.com/phpservermon/phpservermon) - PHP Server Monitor
* [CodelyTV/php-ddd-example](https://github.com/CodelyTV/php-ddd-example) - 🐘🎯 Hexagonal Architecture + DDD + CQRS in PHP using Symfony 5
* [maxmind/GeoIP2-php](https://github.com/maxmind/GeoIP2-php) - PHP API for GeoIP2 webservice client and database reader
* [hprose/hprose-php](https://github.com/hprose/hprose-php) - Hprose is a cross-language RPC. This project is Hprose 3.0 for PHP
* [symfony/translation-contracts](https://github.com/symfony/translation-contracts) - A set of translation abstractions extracted out of the Symfony components
* [InvoicePlane/InvoicePlane](https://github.com/InvoicePlane/InvoicePlane) - A self-hosted open source application for managing your invoices, clients and payments.
* [symfony/service-contracts](https://github.com/symfony/service-contracts) - A set of service abstractions extracted out of the Symfony components
* [symfony/symfony-docs](https://github.com/symfony/symfony-docs) - The Symfony documentation
* [nicolaslopezj/searchable](https://github.com/nicolaslopezj/searchable) - A php trait to search laravel models
* [Rudloff/alltube](https://github.com/Rudloff/alltube) - Web GUI for youtube-dl
* [SimpleSoftwareIO/simple-qrcode](https://github.com/SimpleSoftwareIO/simple-qrcode) - An easy-to-use PHP QrCode generator with first-party support for Laravel.
* [spatie/dashboard.spatie.be](https://github.com/spatie/dashboard.spatie.be) - The source code of dashboard.spatie.be
* [LimeSurvey/LimeSurvey](https://github.com/LimeSurvey/LimeSurvey) - The most popular FOSS online survey tool on the web.
* [KnpLabs/php-github-api](https://github.com/KnpLabs/php-github-api) - A simple PHP GitHub API client, Object Oriented, tested and documented.
* [smarty-php/smarty](https://github.com/smarty-php/smarty) - Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic.
* [thecodingmachine/safe](https://github.com/thecodingmachine/safe) - All PHP functions, rewritten to throw exceptions instead of returning false
* [EasyEngine/easyengine](https://github.com/EasyEngine/easyengine) - Command-line control panel for Nginx Server to manage WordPress sites running on Nginx, PHP, MySQL, and Let's Encrypt
* [spatie/laravel-responsecache](https://github.com/spatie/laravel-responsecache) - Speed up a Laravel app by caching the entire response
* [kriswallsmith/Buzz](https://github.com/kriswallsmith/Buzz) - PHP's lightweight HTTP client
* [Behat/Transliterator](https://github.com/Behat/Transliterator) - Behat Transliterator library inherited from Doctrine1 and used in Behat for snippet generation
* [mike42/escpos-php](https://github.com/mike42/escpos-php) - PHP library for printing to ESC/POS-compatible thermal and impact printers
* [symfony/error-handler](https://github.com/symfony/error-handler) - The ErrorHandler component provides tools to manage errors and ease debugging PHP code.
* [php-pds/skeleton](https://github.com/php-pds/skeleton) - Standard PHP package skeleton.
* [summerblue/phphub](https://github.com/summerblue/phphub) - (Deprecated See - https://github.com/summerblue/phphub5 ) PHPHub is a Forum project written in Laravel 4.2, and it is also the project build up PHP & Laravel China community - http://phphub.org.
* [pheanstalk/pheanstalk](https://github.com/pheanstalk/pheanstalk) - PHP client for beanstalkd queue
* [lstrojny/functional-php](https://github.com/lstrojny/functional-php) - Primitives for functional programming in PHP
* [spatie/data-transfer-object](https://github.com/spatie/data-transfer-object) - Data transfer objects with batteries included
* [tighten/jigsaw](https://github.com/tighten/jigsaw) - Simple static sites with Laravel’s Blade.
* [acacha/adminlte-laravel](https://github.com/acacha/adminlte-laravel) - A Laravel 5 package that switchs default Laravel scaffolding/boilerplate to AdminLTE template and Pratt Landing Page with Bootstrap 3.0
* [lincanbin/Carbon-Forum](https://github.com/lincanbin/Carbon-Forum) - A high performance open-source forum software written in PHP. Discussions Tags based with Quora/StackOverflow style.
* [SimpleRegex/SRL-PHP](https://github.com/SimpleRegex/SRL-PHP) - Simple Regex Language
* [J7mbo/twitter-api-php](https://github.com/J7mbo/twitter-api-php) - The simplest PHP Wrapper for Twitter API v1.1 calls
* [aimeos/map](https://github.com/aimeos/map) - PHP arrays and collections made easy
* [santigarcor/laratrust](https://github.com/santigarcor/laratrust) - Handle roles and permissions in your Laravel application
* [symfony/cache-contracts](https://github.com/symfony/cache-contracts) - A set of cache abstractions extracted out of the Symfony components
* [folkloreinc/laravel-graphql](https://github.com/folkloreinc/laravel-graphql) - Facebook GraphQL for Laravel 5. It supports Relay, eloquent models, validation and GraphiQL.
* [phpspec/phpspec](https://github.com/phpspec/phpspec) - SpecBDD Framework for PHP
* [qossmic/deptrac](https://github.com/qossmic/deptrac) - Keep your architecture clean.
* [symfony/polyfill](https://github.com/symfony/polyfill) - PHP polyfills
* [php-school/cli-menu](https://github.com/php-school/cli-menu) - 🖥  Build beautiful PHP CLI menus. Simple yet Powerful. Expressive DSL.
* [danog/MadelineProto](https://github.com/danog/MadelineProto) - Async PHP client/server API for the telegram MTProto protocol
* [antonioribeiro/health](https://github.com/antonioribeiro/health) - Laravel Health Panel
* [pinguo/php-msf](https://github.com/pinguo/php-msf) - PHP微服务框架即Micro Service Framework For PHP
* [openemr/openemr](https://github.com/openemr/openemr) - The most popular open source electronic health records and medical practice management solution.
* [thephpleague/climate](https://github.com/thephpleague/climate) - PHP's best friend for the terminal.
* [matyhtf/webim](https://github.com/matyhtf/webim) - 使用PHP+Swoole实现的网页即时聊天工具
* [mix-php/mix](https://github.com/mix-php/mix) - ☄️  PHP CLI mode development framework, supports Swoole, WorkerMan, FPM, CLI-Server / PHP 命令行模式开发框架，支持 Swoole、WorkerMan、FPM、CLI-Server
* [walkor/workerman-todpole](https://github.com/walkor/workerman-todpole) - HTML5+WebSocket+PHP(Workerman) , rumpetroll server writen using php
* [spatie/laravel-fractal](https://github.com/spatie/laravel-fractal) - An easy to use Fractal wrapper built for Laravel and Lumen applications
* [symfony/property-info](https://github.com/symfony/property-info) - PropertyInfo extracts information about PHP class' properties using metadata of popular sources.
* [jenssegers/imagehash](https://github.com/jenssegers/imagehash) - 🌄 Perceptual image hashing for PHP
* [FriendsOfPHP/security-advisories](https://github.com/FriendsOfPHP/security-advisories) - A database of PHP security advisories
* [mylxsw/wizard](https://github.com/mylxsw/wizard) - Wizard是一款开源的文档管理工具，支持Markdown/Swagger/Table类型的文档。
* [baijunyao/thinkphp-bjyadmin](https://github.com/baijunyao/thinkphp-bjyadmin) - ThinkPHP 整合 Auth 权限管理、支付宝、微信支付、阿里 OSS、友盟推送、融云即时通讯、云通讯短信、Email、Excel、PDF 等等，基于 ThinkPHP 扩展了大量的功能，而不改动 ThinkPHP 核心，非常方便的升级、移植和使用。
* [iluminar/goodwork](https://github.com/iluminar/goodwork) - Self hosted project management and collaboration tool powered by TALL stack
* [hugues-m/phpunit-vw](https://github.com/hugues-m/phpunit-vw) - VW PHPUnit extension makes your failing test cases succeed under CI tools scrutiny
* [nategood/httpful](https://github.com/nategood/httpful) - A Chainable, REST Friendly, PHP HTTP Client.  A sane alternative to cURL.
* [webpatser/laravel-uuid](https://github.com/webpatser/laravel-uuid) - Laravel package to generate and to validate a UUID according to the RFC 4122 standard. Only support for version 1, 3, 4 and 5 UUID are built-in.
* [vinkla/laravel-hashids](https://github.com/vinkla/laravel-hashids) - A Hashids bridge for Laravel
* [stof/StofDoctrineExtensionsBundle](https://github.com/stof/StofDoctrineExtensionsBundle) - Integration bundle for DoctrineExtensions by l3pp4rd in Symfony
* [matthiasmullie/minify](https://github.com/matthiasmullie/minify) - CSS & JavaScript minifier, in PHP. Removes whitespace, strips comments, combines files (incl. @import statements and small assets in CSS files), and optimizes/shortens a few common programming patterns.
* [orchestral/testbench](https://github.com/orchestral/testbench) - [Package] Laravel Testing Helper for Packages Development
* [PHPCompatibility/PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility) - PHP Compatibility check for PHP_CodeSniffer
* [jadjoubran/laravel5-angular-material-starter](https://github.com/jadjoubran/laravel5-angular-material-starter) - Get started with Laravel 5.3 and AngularJS (material)
* [Open-Web-Analytics/Open-Web-Analytics](https://github.com/Open-Web-Analytics/Open-Web-Analytics) - Official repository for Open Web Analytics which is an open source alternative to commercial tools such as Google Analytics. Stay in control of the data you collect about the use of your website or app.  Please consider sponsoring this project.
* [TGMPA/TGM-Plugin-Activation](https://github.com/TGMPA/TGM-Plugin-Activation) - TGM Plugin Activation is a PHP library that allows you to easily require or recommend plugins for your WordPress themes (and plugins). It allows your users to install, update and even automatically activate plugins in singular or bulk fashion using native WordPress classes, functions and interfaces. You can reference bundled plugins, plugins from the WordPress Plugin Repository or even plugins hosted elsewhere on the internet.
* [JohnTroony/php-webshells](https://github.com/JohnTroony/php-webshells) - Common PHP webshells you might need for your Penetration Testing assignments or CTF challenges. Do not host the file(s) on your server!
* [louislivi/SMProxy](https://github.com/louislivi/SMProxy) - Swoole MySQL Proxy 一个基于 MySQL 协议，Swoole 开发的MySQL数据库连接池。 A MySQL database connection pool based on MySQL protocol and Swoole.
* [Payum/Payum](https://github.com/Payum/Payum) - PHP 7+ Payment processing library. It offers everything you need to work with payments: Credit card & offsite purchasing, subscriptions, payouts etc.  - provided by Forma-Pro
* [namshi/jose](https://github.com/namshi/jose) - JSON Object Signing and Encryption library for PHP.
* [opauth/opauth](https://github.com/opauth/opauth) - Multi-provider authentication framework for PHP
* [kreait/firebase-php](https://github.com/kreait/firebase-php) - Unofficial Firebase Admin SDK for PHP
* [wisp-x/lsky-pro](https://github.com/wisp-x/lsky-pro) - ☁️兰空图床(Lsky Pro) - Your photo album on the cloud.
* [Piwigo/Piwigo](https://github.com/Piwigo/Piwigo) - Manage your photos with Piwigo, a full featured open source photo gallery application for the web. Star us on Github! More than 200 plugins and themes available. Join us and contribute!
* [Tencent/Biny](https://github.com/Tencent/Biny) - Biny is a tiny, high-performance PHP framework for web applications
* [schmittjoh/metadata](https://github.com/schmittjoh/metadata) - Metadata is a library for metadata management in PHP
* [smalot/pdfparser](https://github.com/smalot/pdfparser) - PdfParser, a standalone PHP library, provides various tools to extract data from a PDF file.
* [jmespath/jmespath.php](https://github.com/jmespath/jmespath.php) - Declaratively specify how to extract elements from a JSON document, in PHP
* [WhichBrowser/Parser-PHP](https://github.com/WhichBrowser/Parser-PHP) - Browser sniffing gone too far — A useragent parser library for PHP
* [symfony/polyfill-iconv](https://github.com/symfony/polyfill-iconv) - This component provides a native PHP implementation of the php.net/iconv functions.
* [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable) - Making Eloquent models translatable
* [symfony/var-exporter](https://github.com/symfony/var-exporter) - The VarExporter component allows exporting any serializable PHP data structure to plain PHP code. While doing so, it preserves all the semantics associated with the serialization mechanism of PHP (__wakeup, __sleep, Serializable).
* [nelmio/NelmioCorsBundle](https://github.com/nelmio/NelmioCorsBundle) - Adds CORS (Cross-Origin Resource Sharing) headers support in your Symfony application
* [johnroper100/dropplets](https://github.com/johnroper100/dropplets) - Welcome to an easier way to blog - A minimalist markdown blogging platform.
* [dustin10/VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle) - A simple Symfony bundle to ease file uploads with ORM entities and ODM documents.
* [kristijanhusak/laravel-form-builder](https://github.com/kristijanhusak/laravel-form-builder) - Laravel Form builder for version 5+!
* [wordplate/wordplate](https://github.com/wordplate/wordplate) - WordPlate is a wrapper around WordPress. It's like building any other WordPress website with themes and plugins. Just with sprinkles on top.
* [getsentry/sentry-php](https://github.com/getsentry/sentry-php) - The official PHP SDK for Sentry (sentry.io)
* [unicodeveloper/laravel-hackathon-starter](https://github.com/unicodeveloper/laravel-hackathon-starter) - :computer: :octocat: A hackathon/MVP boilerplate for laravel web applications. Start your hackathons without hassle.
* [backup-manager/backup-manager](https://github.com/backup-manager/backup-manager) - Database backup manager for dumping to and restoring databases from S3, Dropbox, FTP, SFTP, and Rackspace Cloud
* [ReactiveX/RxPHP](https://github.com/ReactiveX/RxPHP) - Reactive extensions for PHP
* [phpipam/phpipam](https://github.com/phpipam/phpipam) - phpipam development repository
* [infection/infection](https://github.com/infection/infection) - PHP Mutation Testing library
* [microsoft/msphpsql](https://github.com/microsoft/msphpsql) - Microsoft Drivers for PHP for SQL Server
* [antonioribeiro/countries](https://github.com/antonioribeiro/countries) - Laravel countries and currencies
* [shopware/platform](https://github.com/shopware/platform) - Shopware 6 is an open source eCommerce platform realised by the ideas and the spirit of its community.
* [symfony/swiftmailer-bundle](https://github.com/symfony/swiftmailer-bundle) - Symfony Swiftmailer Bundle
* [goaop/framework](https://github.com/goaop/framework) - :gem: Go! AOP PHP - modern aspect-oriented framework for the new level of software development
* [spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap) - Create and generate sitemaps with ease
* [hightman/scws](https://github.com/hightman/scws) - 开源免费的简易中文分词系统，PHP分词的上乘之选！
* [jianyan74/rageframe2](https://github.com/jianyan74/rageframe2) - 一个基于Yii2高级框架的快速开发应用引擎
* [sstalle/php7cc](https://github.com/sstalle/php7cc) - PHP 7 Compatibility Checker
* [JayBizzle/Crawler-Detect](https://github.com/JayBizzle/Crawler-Detect) - 🕷 CrawlerDetect is a PHP class for detecting bots/crawlers/spiders via the user agent
* [userfrosting/UserFrosting](https://github.com/userfrosting/UserFrosting) - :doughnut: Modern PHP user login and management framework++.
* [s4n7h0/xvwa](https://github.com/s4n7h0/xvwa) - XVWA is a badly coded web application written in PHP/MySQL that helps security enthusiasts to learn application security.
* [neitanod/forceutf8](https://github.com/neitanod/forceutf8) - PHP Class Encoding featuring popular Encoding::toUTF8() function --formerly known as forceUTF8()-- that fixes mixed encoded strings.
* [mewebstudio/Purifier](https://github.com/mewebstudio/Purifier) - HTMLPurifier for Laravel 5/6/7/8
* [KnpLabs/KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) - SEO friendly Symfony paginator to sort and paginate
* [kakserpom/phpdaemon](https://github.com/kakserpom/phpdaemon) - Asynchronous server-side framework for network applications implemented in PHP using libevent
* [dompdf/php-font-lib](https://github.com/dompdf/php-font-lib) - A library to read, parse, export and make subsets of different types of font files.
* [composer/packagist](https://github.com/composer/packagist) - Package Repository Website - try https://packagist.com if you need your own -
* [phoronix-test-suite/phoronix-test-suite](https://github.com/phoronix-test-suite/phoronix-test-suite) - The Phoronix Test Suite open-source, cross-platform automated testing/benchmarking software.
* [laravolt/avatar](https://github.com/laravolt/avatar) - Plug n play avatar, turn name, email, and any other string into beautiful avatar (or gravatar), effortless.
* [statamic/cms](https://github.com/statamic/cms) - Statamic 3: The Core Composer Package
* [symfony/symfony-standard](https://github.com/symfony/symfony-standard) - The "Symfony Standard Edition" distribution
* [liip/LiipImagineBundle](https://github.com/liip/LiipImagineBundle) - Symfony Bundle to assist in imagine manipulation using the imagine library
* [mk-j/PHP_XLSXWriter](https://github.com/mk-j/PHP_XLSXWriter) - Lightwight XLSX Excel Spreadsheet Writer in PHP
* [zorlan/skycaiji](https://github.com/zorlan/skycaiji) - 蓝天采集器是一款免费的数据采集发布爬虫软件，采用php+mysql开发，可部署在云服务器，几乎能采集所有类型的网页，无缝对接各类CMS建站程序，免登录实时发布数据，全自动无需人工干预！是网页大数据采集软件中完全跨平台的云端爬虫系统
* [Elgg/Elgg](https://github.com/Elgg/Elgg) - A social networking engine in PHP/MySQL
* [sabberworm/PHP-CSS-Parser](https://github.com/sabberworm/PHP-CSS-Parser) - A Parser for CSS Files written in PHP. Allows extraction of CSS files into a data structure, manipulation of said structure and output as (optimized) CSS
* [MPOS/php-mpos](https://github.com/MPOS/php-mpos) - MPOS stands for Mining Portal Open Source. Issue tracker is now closed since it's not maintained anymore.
* [cdevroe/unmark](https://github.com/cdevroe/unmark) - An open source to do app for bookmarks.
* [phpbench/phpbench](https://github.com/phpbench/phpbench) - PHP Benchmarking framework
* [q2a/question2answer](https://github.com/q2a/question2answer) - Question2Answer is a free and open source platform for Q&A sites, running on PHP/MySQL.
* [minkphp/Mink](https://github.com/minkphp/Mink) - PHP web browser emulator abstraction
* [RubixML/ML](https://github.com/RubixML/ML) - A high-level machine learning and deep learning library for the PHP language.
* [anhskohbo/no-captcha](https://github.com/anhskohbo/no-captcha) - No CAPTCHA reCAPTCHA For Laravel.
* [FriendsOfPHP/pickle](https://github.com/FriendsOfPHP/pickle) - PHP Extension installer
* [weprovide/valet-plus](https://github.com/weprovide/valet-plus) - Blazing fast macOS PHP development environment
* [nette/php-generator](https://github.com/nette/php-generator) - 🐘 Generates neat PHP code for you. Supports new PHP 8.1 features.
* [DirectoryLister/DirectoryLister](https://github.com/DirectoryLister/DirectoryLister) - 📂 Directory Lister is the easiest way to expose the contents of any web-accessible folder for browsing and sharing.
* [stefanzweifel/laravel-stats](https://github.com/stefanzweifel/laravel-stats) - 📈 Get insights about your Laravel or Lumen Project
* [phpbb/phpbb](https://github.com/phpbb/phpbb) -  phpBB Development: phpBB is a popular open-source bulletin board written in PHP. This repository also contains the history of version 2.
* [mikehaertl/phpwkhtmltopdf](https://github.com/mikehaertl/phpwkhtmltopdf) - A slim PHP wrapper around wkhtmltopdf with an easy to use and clean OOP interface
* [kevinpapst/kimai2](https://github.com/kevinpapst/kimai2) - Kimai v2 is a web-based multiuser time-tracking application. Free for everyone: freelancers, agencies, companies, organizations - all can track their times, generate invoices and more. SaaS version available at https://www.kimai.cloud
* [helloxz/imgurl](https://github.com/helloxz/imgurl) - ImgURL是一个简单、纯粹的图床程序，让个人图床多一个选择。
* [twigphp/Twig-extensions](https://github.com/twigphp/Twig-extensions) - Twig extensions
* [gabrielrcouto/php-terminal-gameboy-emulator](https://github.com/gabrielrcouto/php-terminal-gameboy-emulator) - A PHP Terminal GameBoy Emulator
* [Gregwar/Captcha](https://github.com/Gregwar/Captcha) - PHP Captcha library
* [nette/tracy](https://github.com/nette/tracy) - 😎 Tracy: the addictive tool to ease debugging PHP code for cool developers. Friendly design, logging, profiler, advanced features like debugging AJAX calls or CLI support. You will love it.
* [hightman/xunsearch](https://github.com/hightman/xunsearch) - 免费开源的中文搜索引擎，采用 C/C++ 编写 (基于 xapian 和 scws)，提供 PHP 的开发接口和丰富文档
* [PeeHaa/OpCacheGUI](https://github.com/PeeHaa/OpCacheGUI) - GUI for PHP's OpCache
* [mongodb/mongo-php-library](https://github.com/mongodb/mongo-php-library) - MongoDB PHP library
* [psecio/iniscan](https://github.com/psecio/iniscan) - A php.ini scanner for best security practices
* [fuel/fuel](https://github.com/fuel/fuel) - FuelPHP v1.x is a simple, flexible, community driven PHP 5.3+ framework, based on the best ideas of other frameworks, with a fresh start! FuelPHP is fully PHP 7 compatible.
* [youzan/zanphp](https://github.com/youzan/zanphp) - PHP开发面向C10K+的高并发SOA服务  和RPC服务首选框架
* [cosenary/Instagram-PHP-API](https://github.com/cosenary/Instagram-PHP-API) - An easy-to-use PHP Class for accessing Instagram's API.
* [coduo/php-humanizer](https://github.com/coduo/php-humanizer) - Humanize values that are readable only for developers.
* [themsaid/ibis](https://github.com/themsaid/ibis) - A PHP tool that helps you write eBooks in markdown and convert to PDF.
* [metowolf/Meting](https://github.com/metowolf/Meting) - :cake: Wow, such a powerful music API framework
* [ZsgsDesign/NOJ](https://github.com/ZsgsDesign/NOJ) - ⚡ The most advanced open-source automatic algorithm online judge system | 南京邮电大学开源 Online Judge | QQ群：668108264
* [aws/aws-sdk-php-laravel](https://github.com/aws/aws-sdk-php-laravel) - A Laravel 5+ (and 4) service provider for the AWS SDK for PHP
* [HDInnovations/UNIT3D-Community-Edition](https://github.com/HDInnovations/UNIT3D-Community-Edition) - 🚀 A Next Generation Private Torrent Tracker (Community Edition)
* [vlucas/valitron](https://github.com/vlucas/valitron) - Valitron is a simple, elegant, stand-alone validation library with NO dependencies
* [symfony/security-core](https://github.com/symfony/security-core) - Security provides an infrastructure for sophisticated authorization systems, which makes it possible to easily separate the actual authorization logic from so called user providers that hold the users credentials. It is inspired by the Java Spring framework.
* [antonioribeiro/google2fa](https://github.com/antonioribeiro/google2fa) - A One Time Password Authentication package, compatible with Google Authenticator.
* [netz98/n98-magerun](https://github.com/netz98/n98-magerun) - The swiss army knife for Magento developers, sysadmins and devops. The tool provides a huge set of well tested command line commands which save hours of work time. All commands are extendable by a module API.
* [immobiliare/ApnsPHP](https://github.com/immobiliare/ApnsPHP) - ApnsPHP: Apple Push Notification & Feedback Provider
* [thephpleague/html-to-markdown](https://github.com/thephpleague/html-to-markdown) - Convert HTML to Markdown with PHP
* [rinvex/countries](https://github.com/rinvex/countries) - Rinvex Country is a simple and lightweight package for retrieving country details with flexibility. A whole bunch of data including name, demonym, capital, iso codes, dialling codes, geo data, currencies, flags, emoji, and other attributes for all 250 countries worldwide at your fingertips.
* [symfony/http-client-contracts](https://github.com/symfony/http-client-contracts) - A set of HTTP client abstractions extracted out of the Symfony components
* [laravel/envoy](https://github.com/laravel/envoy) - Elegant SSH tasks for PHP.
* [simplepie/simplepie](https://github.com/simplepie/simplepie) - A simple Atom/RSS parsing library for PHP.
* [lixuancn/LaneWeChat](https://github.com/lixuancn/LaneWeChat) - 微信PHP快速开发框架！将微信的各个功能进行了封装，只需要简单的调用方法和传递参数即可。
* [clue/stream-filter](https://github.com/clue/stream-filter) - A simple and modern approach to stream filtering in PHP
* [nette/nette](https://github.com/nette/nette) - 👪 METAPACKAGE for Nette Framework components
* [laravel-ardent/ardent](https://github.com/laravel-ardent/ardent) - Self-validating, secure and smart models for Laravel's Eloquent ORM
* [symfony/http-client](https://github.com/symfony/http-client) - The HttpClient component provides powerful methods to fetch HTTP resources synchronously or asynchronously.
* [spatie/laravel-newsletter](https://github.com/spatie/laravel-newsletter) - Manage newsletters in Laravel
* [BOINC/boinc](https://github.com/BOINC/boinc) - Open-source software for volunteer computing and grid computing.
* [guillaumebriday/laravel-blog](https://github.com/guillaumebriday/laravel-blog) - Laravel 8.0 blog application with Vue.js, Homestead, Horizon, Telescope and Pusher
* [yii-starter-kit/yii2-starter-kit](https://github.com/yii-starter-kit/yii2-starter-kit) - Yii2 Starter Kit
* [jonnnnyw/php-phantomjs](https://github.com/jonnnnyw/php-phantomjs) - Execute PhantomJS commands through PHP
* [atoum/atoum](https://github.com/atoum/atoum) - The modern, simple and intuitive PHP unit testing framework.
* [FriendsOfSymfony/FOSJsRoutingBundle](https://github.com/FriendsOfSymfony/FOSJsRoutingBundle) - A pretty nice way to expose your Symfony2 routing to client applications.
* [prettier/plugin-php](https://github.com/prettier/plugin-php) - Prettier PHP Plugin
* [banago/PHPloy](https://github.com/banago/PHPloy) - PHPloy - Incremental Git (S)FTP deployment tool that supports multiple servers, submodules and rollbacks.
* [rap2hpoutre/fast-excel](https://github.com/rap2hpoutre/fast-excel) - 🦉 Fast Excel import/export for Laravel
* [welaika/wordless](https://github.com/welaika/wordless) - All the power of Pug, Sass, Coffeescript and WebPack in your WordPress theme. Stop writing themes like it's 1998.
* [weiboad/kafka-php](https://github.com/weiboad/kafka-php) - kafka php client
* [cweiske/jsonmapper](https://github.com/cweiske/jsonmapper) - Map nested JSON structures onto PHP classes
* [mantisbt/mantisbt](https://github.com/mantisbt/mantisbt) - Mantis Bug Tracker (MantisBT)
* [JosephLenton/PHP-Error](https://github.com/JosephLenton/PHP-Error) - Better error reporting for PHP, and prettier too!
* [Froxlor/Froxlor](https://github.com/Froxlor/Froxlor) - The server administration software for your needs - The official Froxlor development Git repository
* [nette/utils](https://github.com/nette/utils) - 🛠 Lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.
* [mjaschen/phpgeo](https://github.com/mjaschen/phpgeo) - Simple Yet Powerful Geo Library for PHP
* [cartalyst/sentinel](https://github.com/cartalyst/sentinel) - A framework agnostic authentication & authorization system.
* [barbushin/php-imap](https://github.com/barbushin/php-imap) - Manage mailboxes, filter/get/delete emails in PHP (supports IMAP/POP3/NNTP)
* [m9rco/algorithm-php](https://github.com/m9rco/algorithm-php) - 🍭🍭uniting the internal work in a way that is in PHP
* [symfony/security-csrf](https://github.com/symfony/security-csrf) - The Security CSRF (cross-site request forgery) component provides a class CsrfTokenManager for generating and validating CSRF tokens.
* [eyecatchup/SEOstats](https://github.com/eyecatchup/SEOstats) - SEOstats is a powerful open source PHP library to request a bunch of SEO relevant metrics.
* [404labfr/laravel-impersonate](https://github.com/404labfr/laravel-impersonate) - Laravel Impersonate is a plugin that allows you to authenticate as your users.
* [leafo/scssphp](https://github.com/leafo/scssphp) - SCSS compiler written in PHP
* [symfony/polyfill-util](https://github.com/symfony/polyfill-util) - This component provides binary-safe string functions, using the mbstring extension when available.
* [lavary/crunz](https://github.com/lavary/crunz) - A PHP-based job scheduler
* [Automattic/jetpack](https://github.com/Automattic/jetpack) - Security, performance, marketing, and design tools — Jetpack is made by WordPress experts to make WP sites safer and faster, and help you grow your traffic.
* [vyuldashev/laravel-queue-rabbitmq](https://github.com/vyuldashev/laravel-queue-rabbitmq) - RabbitMQ driver for Laravel Queue. Supports Laravel Horizon.
* [ccampbell/chromephp](https://github.com/ccampbell/chromephp) - class for logging PHP variables to Google Chrome console
* [barbushin/php-console](https://github.com/barbushin/php-console) - Handle PHP errors, dump variables, execute PHP code remotely in Google Chrome
* [web-push-libs/web-push-php](https://github.com/web-push-libs/web-push-php) - Web Push library for PHP
* [thephpleague/flysystem-aws-s3-v3](https://github.com/thephpleague/flysystem-aws-s3-v3) - Flysystem Adapter for AWS SDK V3
* [bowu678/php_bugs](https://github.com/bowu678/php_bugs) - PHP代码审计分段讲解
* [MarkBaker/PHPComplex](https://github.com/MarkBaker/PHPComplex) - PHP Class for handling Complex numbers
* [panique/mini](https://github.com/panique/mini) - Just an extremely simple naked PHP application, useful for small projects and quick prototypes. Some might call it a micro framework :)
* [spipu/html2pdf](https://github.com/spipu/html2pdf) - OFFICIAL PROJECT | HTML to PDF converter written in PHP
* [jpfuentes2/php-activerecord](https://github.com/jpfuentes2/php-activerecord) - ActiveRecord implementation for PHP
* [reactjs/react-php-v8js](https://github.com/reactjs/react-php-v8js) - PHP library that renders React components on the server
* [chrome-php/chrome](https://github.com/chrome-php/chrome) - Instrument headless chrome/chromium instances from PHP
* [sendgrid/sendgrid-php](https://github.com/sendgrid/sendgrid-php) - The Official Twilio SendGrid Led, Community Driven PHP API Library
* [bovigo/vfsStream](https://github.com/bovigo/vfsStream) - vfsStream is a stream wrapper for a virtual file system that may be helpful in unit tests to mock the real file system. It can be used with any unit test framework, like PHPUnit or SimpleTest.
* [twilio/twilio-php](https://github.com/twilio/twilio-php) - A PHP library for communicating with the Twilio REST API and generating TwiML.
* [Bacon/BaconQrCode](https://github.com/Bacon/BaconQrCode) - QR Code Generator for PHP
* [symfony/security-guard](https://github.com/symfony/security-guard) - The Guard component brings many layers of authentication together, making it much easier to create complex authentication systems where you have total control.
* [KnpLabs/KnpMenuBundle](https://github.com/KnpLabs/KnpMenuBundle) - Object Oriented menus for your Symfony project.
* [appzcoder/crud-generator](https://github.com/appzcoder/crud-generator) - Laravel CRUD Generator
* [Laravelium/laravel-sitemap](https://github.com/Laravelium/laravel-sitemap) - Laravelium Sitemap generator for Laravel.
* [typecho-fans/plugins](https://github.com/typecho-fans/plugins) - Typecho Fans插件作品目录
* [Stichoza/google-translate-php](https://github.com/Stichoza/google-translate-php) - 🌐 Free Google Translate API PHP Package. Translates totally free of charge.
* [symfony/security-http](https://github.com/symfony/security-http) - Security provides an infrastructure for sophisticated authorization systems, which makes it possible to easily separate the actual authorization logic from so called user providers that hold the users credentials. It is inspired by the Java Spring framework.
* [tighten/takeout](https://github.com/tighten/takeout) - Docker-based development-only dependency manager. macOS, Linux, and WSL2-only and installs via PHP's Composer... for now.
* [laminas/laminas-code](https://github.com/laminas/laminas-code) - Extensions to the PHP Reflection API, static code scanning, and code generation
* [freescout-helpdesk/freescout](https://github.com/freescout-helpdesk/freescout) - FreeScout — Free self-hosted help desk & shared mailbox (Zendesk / Help Scout alternative)
* [Protoqol/Prequel](https://github.com/Protoqol/Prequel) - Prequel for Laravel. Clear and concise database management.
* [avored/laravel-ecommerce](https://github.com/avored/laravel-ecommerce) - AvoRed an Open Source Laravel Shopping Cart
* [jvoisin/php-malware-finder](https://github.com/jvoisin/php-malware-finder) - Detect potentially malicious PHP files
* [chakhsu/pinghsu](https://github.com/chakhsu/pinghsu) - Pinghsu,  A Typecho Theme
* [symfony/web-server-bundle](https://github.com/symfony/web-server-bundle) - WebServerBundle provides commands for running applications using the PHP built-in web server. It simplifies your local development setup because you don't have to configure a proper web server such as Apache or Nginx to run your application.
* [johnbillion/query-monitor](https://github.com/johnbillion/query-monitor) - The Developer Tools Panel for WordPress
* [spatie/laravel-collection-macros](https://github.com/spatie/laravel-collection-macros) - A set of useful Laravel collection macros
* [jasny/sso](https://github.com/jasny/sso) - Simple Single Sign-On for PHP
* [Kong/unirest-php](https://github.com/Kong/unirest-php) - Unirest in PHP: Simplified, lightweight HTTP client library.
* [symfony/polyfill-intl-normalizer](https://github.com/symfony/polyfill-intl-normalizer) - This component provides a fallback implementation for the Normalizer class provided by the Intl extension.
* [KnpLabs/KnpMenu](https://github.com/KnpLabs/KnpMenu) - Menu Library for PHP
* [shopware/shopware](https://github.com/shopware/shopware) - Shopware 5 Repository - For Shopware 6 visit https://github.com/shopware/platform
* [iamcal/php-emoji](https://github.com/iamcal/php-emoji) - A PHP Emoji conversion library
* [modxcms/revolution](https://github.com/modxcms/revolution) - MODX Revolution - Content Management Framework
* [willdurand/Negotiation](https://github.com/willdurand/Negotiation) - Content Negotiation tools for PHP.
* [thephpleague/plates](https://github.com/thephpleague/plates) - Native PHP template system
* [antonioribeiro/firewall](https://github.com/antonioribeiro/firewall) - Firewall package for Laravel applications
* [mvdbos/php-spider](https://github.com/mvdbos/php-spider) - A configurable and extensible PHP web spider
* [claviska/SimpleImage](https://github.com/claviska/SimpleImage) - A PHP class that makes working with images as simple as possible.
* [phpsysinfo/phpsysinfo](https://github.com/phpsysinfo/phpsysinfo) - phpSysInfo: a customizable PHP script that displays information about your system nicely
* [cakephp/chronos](https://github.com/cakephp/chronos) - A standalone DateTime library originally based off of Carbon
* [Seldaek/jsonlint](https://github.com/Seldaek/jsonlint) - JSON Lint for PHP
* [picqer/php-barcode-generator](https://github.com/picqer/php-barcode-generator) - Barcode generator in PHP that is easy to use, non-bloated and framework independent.
* [dompdf/php-svg-lib](https://github.com/dompdf/php-svg-lib) - SVG file parsing / rendering library
* [voten-co/voten](https://github.com/voten-co/voten) - The code that powers voten.co
* [florianv/swap](https://github.com/florianv/swap) - :currency_exchange: Currency exchange rates library
* [yohang/Finite](https://github.com/yohang/Finite) - A Simple PHP Finite State Machine
* [maennchen/ZipStream-PHP](https://github.com/maennchen/ZipStream-PHP) - :floppy_disk: PHP ZIP Streaming Library
* [thephpleague/geotools](https://github.com/thephpleague/geotools) - Geo-related tools PHP 7.3+ library built atop Geocoder and React libraries
* [mikeerickson/phpunit-pretty-result-printer](https://github.com/mikeerickson/phpunit-pretty-result-printer) - PHPUnit Pretty Result Printer -- make your PHPUnit tests look pretty!
* [UnionOfRAD/lithium](https://github.com/UnionOfRAD/lithium) - li₃ is the fast, flexible and most RAD development framework for PHP
* [seblucas/cops](https://github.com/seblucas/cops) - Calibre OPDS (and HTML) PHP Server : web-based light alternative to Calibre content server / Calibre2OPDS to serve ebooks (epub, mobi, pdf, ...)
* [pusher/pusher-http-php](https://github.com/pusher/pusher-http-php) - PHP library for interacting with the Pusher Channels HTTP API
* [propelorm/Propel2](https://github.com/propelorm/Propel2) - Propel2 is an open-source high-performance Object-Relational Mapping (ORM) for modern PHP
* [appstract/laravel-opcache](https://github.com/appstract/laravel-opcache) - Laravel Package for OPcache
* [ssl/ezXSS](https://github.com/ssl/ezXSS) - ezXSS is an easy way for penetration testers and bug bounty hunters to test (blind) Cross Site Scripting.
* [jolicode/JoliNotif](https://github.com/jolicode/JoliNotif) - :computer: Send notifications to your desktop directly from your PHP script
* [symfony/security](https://github.com/symfony/security) - The Security component provides a complete security system for your web application.
* [symfony/deprecation-contracts](https://github.com/symfony/deprecation-contracts) - A generic function and convention to trigger deprecation notices
* [SegmentFault/HyperDown](https://github.com/SegmentFault/HyperDown) - 一个结构清晰的，易于维护的，现代的PHP Markdown解析器
* [FriendsOfSymfony/FOSElasticaBundle](https://github.com/FriendsOfSymfony/FOSElasticaBundle) - Elasticsearch PHP integration for your Symfony project using Elastica.
* [sabre-io/dav](https://github.com/sabre-io/dav) - sabre/dav is a CalDAV, CardDAV and WebDAV framework for PHP
* [hongriSec/PHP-Audit-Labs](https://github.com/hongriSec/PHP-Audit-Labs) - 一个关于PHP的代码审计项目
* [sebastianfeldmann/phpbu](https://github.com/sebastianfeldmann/phpbu) - PHP Backup Utility - Creates and encrypts database and file backups, syncs your backups to other servers or cloud services and assists you monitor your backup process
* [maknz/slack](https://github.com/maknz/slack) - A simple PHP package for sending messages to Slack, with a focus on ease of use and elegant syntax.
* [spatie/laravel-tags](https://github.com/spatie/laravel-tags) - Add tags and taggable behaviour to your Laravel app
* [MarkBaker/PHPMatrix](https://github.com/MarkBaker/PHPMatrix) - PHP Class for handling Matrices
* [rlerdorf/php7dev](https://github.com/rlerdorf/php7dev) - Documentation for the php7dev Vagrant box image
* [Cacti/cacti](https://github.com/Cacti/cacti) - Cacti ™
* [php-amqplib/RabbitMqBundle](https://github.com/php-amqplib/RabbitMqBundle) - RabbitMQ Bundle for the Symfony web framework
* [bernardphp/bernard](https://github.com/bernardphp/bernard) - Bernard is a multi-backend PHP library for creating background jobs for later processing.
* [anandkunal/ToroPHP](https://github.com/anandkunal/ToroPHP) - Toro is a PHP router for developing RESTful web applications and APIs.
* [symfony/polyfill-php80](https://github.com/symfony/polyfill-php80) - This component provides functions unavailable in releases prior to PHP 8.0.
* [rialto-php/puphpeteer](https://github.com/rialto-php/puphpeteer) - A Puppeteer bridge for PHP, supporting the entire API.
* [brianhaveri/Underscore.php](https://github.com/brianhaveri/Underscore.php) - PHP port of Underscore.js
* [brick/math](https://github.com/brick/math) - Arbitrary-precision arithmetic library for PHP
* [symfony/web-link](https://github.com/symfony/web-link) - The WebLink component manages links between resources. It is particularly useful to advise clients to preload and prefetch documents through HTTP and HTTP/2 pushes.
* [amphp/http-server](https://github.com/amphp/http-server) - A non-blocking HTTP application server for PHP based on Amp.
* [bmitch/churn-php](https://github.com/bmitch/churn-php) - Discover files in need of refactoring.
* [Ph3nol/NotificationPusher](https://github.com/Ph3nol/NotificationPusher) - Standalone PHP library for easy devices notifications push.
* [themosis/themosis](https://github.com/themosis/themosis) - A framework for WordPress developers.
* [elementary/website](https://github.com/elementary/website) - The elementary.io website
* [YetiForceCompany/YetiForceCRM](https://github.com/YetiForceCompany/YetiForceCRM) - Our team created for you one of the most innovative CRM systems that supports mainly business processes and allows for customization according to your needs. Be ahead of your competition and implement YetiForce!
* [humbug/humbug](https://github.com/humbug/humbug) - Humbug is a Mutation Testing framework for PHP to measure the real effectiveness of your test suites and assist in their improvement. It eats Code Coverage for breakfast.
* [flozz/p0wny-shell](https://github.com/flozz/p0wny-shell) - Single-file PHP shell
* [khanamiryan/php-qrcode-detector-decoder](https://github.com/khanamiryan/php-qrcode-detector-decoder) - This is a PHP library to detect and decode QR-codes. This is first and only QR code reader that works without extensions.
* [igorw/evenement](https://github.com/igorw/evenement) - Événement is a very simple event dispatching library for PHP.
* [icicleio/icicle](https://github.com/icicleio/icicle) - Icicle is a PHP library for writing asynchronous code using synchronous coding techniques
* [cweagans/composer-patches](https://github.com/cweagans/composer-patches) - Simple patches plugin for Composer
* [wudi/swoole-ide-helper](https://github.com/wudi/swoole-ide-helper) - Auto completion, trigger suggest and view docs for Swoole in editor.
* [forkcms/forkcms](https://github.com/forkcms/forkcms) - Fork is an easy to use open source CMS using Symfony Components.
* [xianyunyh/PHP-Interview](https://github.com/xianyunyh/PHP-Interview) - This is the information I prepared for the PHP interview.The notes include PHP, MySql, Linux, etc.
* [tecnickcom/tc-lib-pdf](https://github.com/tecnickcom/tc-lib-pdf) - TCPDF - PHP PDF Library - https://tcpdf.org
* [jenssegers/optimus](https://github.com/jenssegers/optimus) - 🤖 Id obfuscation based on Knuth's multiplicative hashing method for PHP.
* [fukuball/jieba-php](https://github.com/fukuball/jieba-php) - "結巴"中文分詞：做最好的 PHP 中文分詞、中文斷詞組件。 / "Jieba" (Chinese for "to stutter") Chinese text segmentation: built to be the best PHP Chinese word segmentation module.
* [symfony/class-loader](https://github.com/symfony/class-loader) - [DEPRECATED] The ClassLoader component provides tools to autoload your classes and cache their locations for performance.
* [davidhsianturi/laravel-compass](https://github.com/davidhsianturi/laravel-compass) - A REST client inside your Laravel app
* [ankitpokhrel/tus-php](https://github.com/ankitpokhrel/tus-php) - 🚀 A pure PHP server and client for the tus resumable upload protocol v1.0.0
* [PHPOffice/PHPPresentation](https://github.com/PHPOffice/PHPPresentation) - A pure PHP library for reading and writing presentations documents
* [php-fig/http-factory](https://github.com/php-fig/http-factory) - Implementation of PSR-17 (HTTP Message Factories)
* [Anahkiasen/underscore-php](https://github.com/Anahkiasen/underscore-php) - A redacted PHP port of Underscore.js with additional functions and goodies – Available for Composer and Laravel
* [kiddyuchina/Beanbun](https://github.com/kiddyuchina/Beanbun) - Beanbun 是用 PHP 编写的多进程网络爬虫框架，具有良好的开放性、高可扩展性，基于 Workerman。
* [Wixel/GUMP](https://github.com/Wixel/GUMP) - A fast, extensible & stand-alone PHP input validation class that allows you to validate any data
* [kraken-php/framework](https://github.com/kraken-php/framework) - Asynchronous & Fault-tolerant PHP Framework for Distributed Applications.
* [JetBrains/phpstorm-stubs](https://github.com/JetBrains/phpstorm-stubs) - PHP runtime & extensions header files for PhpStorm
* [munafio/chatify](https://github.com/munafio/chatify) - A Laravel package helps you add a complete real-time messaging system to your new / existing application with only one command.
* [leocavalcante/siler](https://github.com/leocavalcante/siler) - ⚡ Flat-files and plain-old PHP functions rockin'on as a set of general purpose high-level abstractions.
* [KnpLabs/KnpSnappyBundle](https://github.com/KnpLabs/KnpSnappyBundle) - Easily create PDF and images in Symfony by converting html using webkit
* [phingofficial/phing](https://github.com/phingofficial/phing) - PHing Is Not GNU make; it's a PHP project build system or build tool based on  Apache Ant.
* [loklak/loklak_php_api](https://github.com/loklak/loklak_php_api) - The PHP Library for accessing loklak.org
* [Herzult/SimplePHPEasyPlus](https://github.com/Herzult/SimplePHPEasyPlus) - A simple, pragmatic numeric operation api written in PHP. It does addition.
* [BadChoice/handesk](https://github.com/BadChoice/handesk) - A Powerful Laravel Help Desk and Lead Management App
* [mongodb/mongo-php-driver-legacy](https://github.com/mongodb/mongo-php-driver-legacy) - Legacy MongoDB PHP driver
* [kasperisager/php-dockerized](https://github.com/kasperisager/php-dockerized) - Dockerized PHP development stack: Nginx, MySQL, MongoDB, PHP-FPM, HHVM, Memcached, Redis, Elasticsearch and RabbitMQ
* [spatie/opening-hours](https://github.com/spatie/opening-hours) - Query and format a set of opening hours
* [EleTeam/UniShopX](https://github.com/EleTeam/UniShopX) - EleTeam开源项目-电商全套解决方案之PHP版-Shop-for-PHP-Yii2。一个类似京东/天猫/淘宝的商城，有对应的APP支持，由EleTeam团队维护！
* [symfony/psr-http-message-bridge](https://github.com/symfony/psr-http-message-bridge) - PSR-7 Bridge
* [kahlan/kahlan](https://github.com/kahlan/kahlan) - :heavy_check_mark: PHP Test Framework for Freedom, Truth, and Justice
* [googleapis/google-auth-library-php](https://github.com/googleapis/google-auth-library-php) - Google Auth Library for PHP
* [spiral/framework](https://github.com/spiral/framework) - High-Performance Long-Living PHP Framework for modern enterprise application development
* [dannyvankooten/AltoRouter](https://github.com/dannyvankooten/AltoRouter) - PHP routing class. Lightweight yet flexible. Supports REST, dynamic and reversed routing.
* [FriendsOfSymfony/FOSOAuthServerBundle](https://github.com/FriendsOfSymfony/FOSOAuthServerBundle) - A server side OAuth2 Bundle for Symfony
* [diskoverdata/diskover-community](https://github.com/diskoverdata/diskover-community) - Diskover Community Edition - Open source file indexer, file search engine and data management and analytics powered by Elasticsearch
* [TobiaszCudnik/phpquery](https://github.com/TobiaszCudnik/phpquery) - Server-side implementation of jQuery in PHP5 (2009)
* [Lusitanian/PHPoAuthLib](https://github.com/Lusitanian/PHPoAuthLib) - PHP 5.3+ oAuth 1/2 Client Library
* [shlinkio/shlink](https://github.com/shlinkio/shlink) - The definitive self-hosted URL shortener
* [LoeiFy/Diaspora](https://github.com/LoeiFy/Diaspora) - Diaspora - A WordPress theme
* [Jean85/pretty-package-versions](https://github.com/Jean85/pretty-package-versions) - A small, independent wrapper to get pretty versions strings
* [simshaun/recurr](https://github.com/simshaun/recurr) - PHP library for working with recurrence rules (RRULE); meant to help with recurring calendar events.
* [felixfbecker/php-language-server](https://github.com/felixfbecker/php-language-server) - PHP Implementation of the VS Code Language Server Protocol 🆚↔🖥
* [nunomaduro/termwind](https://github.com/nunomaduro/termwind) - 🍃 In short, it's like Tailwind CSS, but for the PHP command-line applications.
* [nikic/scalar_objects](https://github.com/nikic/scalar_objects) - Extension that adds support for method calls on primitive types in PHP
* [markomarkovic/simple-php-git-deploy](https://github.com/markomarkovic/simple-php-git-deploy) - Automatically deploy the code using PHP and Git
* [franzliedke/studio](https://github.com/franzliedke/studio) - A workbench for developing Composer packages.
* [Piplin/Piplin](https://github.com/Piplin/Piplin) - :outbox_tray: An open source self-hosted continuous integration and deployment system - QQ群： 656868
* [iwind/rockmongo](https://github.com/iwind/rockmongo) - RockMongo is a MongoDB administration tool, written in PHP 5.
* [walkor/workerman-chat](https://github.com/walkor/workerman-chat) - Websocket chat room written in PHP based on workerman.
* [brandonwamboldt/utilphp](https://github.com/brandonwamboldt/utilphp) - util.php is a collection of useful functions and snippets that you need or could use every day, designed to avoid conflicts with existing projects
* [kenjis/php-framework-benchmark](https://github.com/kenjis/php-framework-benchmark) - PHP Framework Benchmark
* [ifsnop/mysqldump-php](https://github.com/ifsnop/mysqldump-php) - PHP version of mysqldump cli that comes with MySQL
* [spatie/laravel-cookie-consent](https://github.com/spatie/laravel-cookie-consent) - Make your Laravel app comply with the crazy EU cookie law
* [reactphp/event-loop](https://github.com/reactphp/event-loop) - ReactPHP's core reactor event loop that libraries can use for evented I/O.
* [slevomat/coding-standard](https://github.com/slevomat/coding-standard) - Slevomat Coding Standard for PHP_CodeSniffer provides many useful sniffs
* [apioo/fusio](https://github.com/apioo/fusio) - Open source API management platform
* [spatie/eloquent-sortable](https://github.com/spatie/eloquent-sortable) - Sortable behaviour for Eloquent models
* [emoncms/emoncms](https://github.com/emoncms/emoncms) - Web-app for processing, logging and visualising energy, temperature and other environmental data
* [TypiCMS/Base](https://github.com/TypiCMS/Base) - Multilingual CMS built with Laravel.
* [spatie/pdf-to-image](https://github.com/spatie/pdf-to-image) - Convert a pdf to an image
* [dedemao/alipay](https://github.com/dedemao/alipay) - 一个PHP文件搞定支付宝支付系列，包括电脑网站支付，手机网站支付，现金红包、消费红包、扫码支付，JSAPI支付、单笔转账到支付宝账户、交易结算（分账、分润）、网页授权获取用户信息等
* [tommcfarlin/WordPress-Widget-Boilerplate](https://github.com/tommcfarlin/WordPress-Widget-Boilerplate) - [WordPress] The WordPress Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
* [spatie/schema-org](https://github.com/spatie/schema-org) - A fluent builder Schema.org types and ld+json generator
* [php-vcr/php-vcr](https://github.com/php-vcr/php-vcr) - Record your test suite's HTTP interactions and replay them during future test runs for fast, deterministic, accurate tests.
* [gumlet/php-image-resize](https://github.com/gumlet/php-image-resize) - PHP library to resize, scale and crop images. Cloud solution available at:
* [paragonie/halite](https://github.com/paragonie/halite) - High-level cryptography interface powered by libsodium
* [tpyo/amazon-s3-php-class](https://github.com/tpyo/amazon-s3-php-class) - A standalone Amazon S3 (REST) client for PHP 5/CURL
* [spatie/regex](https://github.com/spatie/regex) - A sane interface for php's built in preg_* functions
* [getsentry/sentry-laravel](https://github.com/getsentry/sentry-laravel) - Laravel SDK for Sentry
* [brick/money](https://github.com/brick/money) - A money and currency library for PHP
* [PHPixie/Project](https://github.com/PHPixie/Project) - A lightweight MVC PHP framework designed for speed and simplicty
* [snc/SncRedisBundle](https://github.com/snc/SncRedisBundle) - A Redis bundle for Symfony supporting Predis and PhpRedis
* [mailgun/mailgun-php](https://github.com/mailgun/mailgun-php) - Mailgun's Official SDK for PHP
* [dwightwatson/rememberable](https://github.com/dwightwatson/rememberable) - Query caching for Laravel
* [laminas/laminas-eventmanager](https://github.com/laminas/laminas-eventmanager) - Trigger and listen to events within a PHP application
* [driesvints/vat-calculator](https://github.com/driesvints/vat-calculator) - Handle all the hard stuff related to EU MOSS tax/vat regulations, the way it should be.
* [tenancy/tenancy](https://github.com/tenancy/tenancy) - Run multiple websites using the same Laravel installation while keeping tenant specific data separated for fully independent multi-domain setups.
* [onelogin/php-saml](https://github.com/onelogin/php-saml) - Simple SAML toolkit for PHP
* [Behat/Gherkin](https://github.com/Behat/Gherkin) - Gherkin parser, written in PHP for Behat project
* [willdurand/Hateoas](https://github.com/willdurand/Hateoas) - A PHP library to support implementing representations for HATEOAS REST web services.
* [scoumbourdis/grocery-crud](https://github.com/scoumbourdis/grocery-crud) - Grocery CRUD is a PHP Codeigniter Framework library that creates a full functional CRUD system without the requirement of extra customisation to the JavaScripts or the CSS to do it so.
* [masterexploder/PHPThumb](https://github.com/masterexploder/PHPThumb) - PHP Thumbnail & Image Manipulation Library
* [symfony/templating](https://github.com/symfony/templating) - The Templating component provides all the tools needed to build any kind of template system.
* [php-casbin/php-casbin](https://github.com/php-casbin/php-casbin) - An authorization library that supports access control models like ACL, RBAC, ABAC in PHP .
* [reactphp/socket](https://github.com/reactphp/socket) - Async, streaming plaintext TCP/IP and secure TLS socket server and client connections for ReactPHP.
* [symfony/polyfill-intl-grapheme](https://github.com/symfony/polyfill-intl-grapheme) - This component provides a partial, native PHP implementation of the Grapheme functions from the Intl extension.
* [symfony/string](https://github.com/symfony/string) - Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way.
* [bobthecow/Ruler](https://github.com/bobthecow/Ruler) - A simple stateless production rules engine for PHP 5.3+
* [SteamDatabase/SalienCheat](https://github.com/SteamDatabase/SalienCheat) - 👽 Cheating Salien minigame, the proper way
* [spatie/laravel-searchable](https://github.com/spatie/laravel-searchable) - Pragmatically search through models and other sources
* [spatie/laravel-image-optimizer](https://github.com/spatie/laravel-image-optimizer) - Optimize images in your Laravel app
* [schmittjoh/php-collection](https://github.com/schmittjoh/php-collection) - General Purpose Collection Library for PHP
* [Kovah/LinkAce](https://github.com/Kovah/LinkAce) - Your self-hosted bookmark archive. Free and open source.
* [protonemedia/laravel-ffmpeg](https://github.com/protonemedia/laravel-ffmpeg) - This package provides an integration with FFmpeg for Laravel. Laravel's Filesystem handles the storage of the files.
* [benbalter/wordpress-to-jekyll-exporter](https://github.com/benbalter/wordpress-to-jekyll-exporter) - One-click WordPress plugin that converts all posts, pages, taxonomies, metadata, and settings to Markdown and YAML which can be dropped into Jekyll
* [spatie/laravel-sluggable](https://github.com/spatie/laravel-sluggable) - An opinionated package to create slugs for Eloquent models
* [amnuts/opcache-gui](https://github.com/amnuts/opcache-gui) - A clean, effective and responsive interface for Zend OPcache
* [katzgrau/KLogger](https://github.com/katzgrau/KLogger) - A Simple Logging Class For PHP
* [markuspoerschke/iCal](https://github.com/markuspoerschke/iCal) - iCal-creator for PHP
* [spatie/package-skeleton-laravel](https://github.com/spatie/package-skeleton-laravel) - A skeleton repository for Spatie's Laravel Packages
* [gantry/gantry5](https://github.com/gantry/gantry5) - :rocket: Next Generation Template / Theme Framework
* [Roave/BetterReflection](https://github.com/Roave/BetterReflection) - :crystal_ball: Better Reflection is a reflection API that aims to improve and provide more features than PHP's built-in reflection API.
* [dedemao/weixinPay](https://github.com/dedemao/weixinPay) - 微信支付单文件版。一个PHP文件搞定微信支付系列。包括原生支付（扫码支付），H5支付，公众号支付，现金红包、企业付款到零钱等。新增V3版。
* [pods-framework/pods](https://github.com/pods-framework/pods) - The Pods Framework is a Content Development Framework for WordPress - It lets you create and extend content types that can be used for any project. Add fields of various types we've built in, or add your own with custom inputs, you have total control.
* [clarkeash/doorman](https://github.com/clarkeash/doorman) - Limit access to your Laravel applications by using invite codes
* [VisualPHPUnit/VisualPHPUnit](https://github.com/VisualPHPUnit/VisualPHPUnit) - A PHPUnit GUI.
* [Leantime/leantime](https://github.com/Leantime/leantime) - Leantime is a lean project management system for innovators. Designed to help you manage your projects from ideation to delivery.
* [swlib/saber](https://github.com/swlib/saber) - ⚔️ Saber, PHP异步协程HTTP客户端 | PHP Coroutine HTTP client - Swoole Humanization Library
* [spatie/once](https://github.com/spatie/once) - A magic memoization function
* [dwightwatson/validating](https://github.com/dwightwatson/validating) - Automatically validating Eloquent models for Laravel
* [cycle/orm](https://github.com/cycle/orm) - PHP DataMapper, ORM
* [goodby/csv](https://github.com/goodby/csv) - Goodby CSV is a high memory efficient flexible and extendable open-source CSV import/export library for PHP 5.3. 1. Memory Management Free  This library designed for memory unbreakable. It will not be accumulated in the memory whole rows. The importer read CSV file and execute callback function line by line.  2. Multibyte support  This library supports mulitbyte input/output: for example, SJIS-win, EUC-JP and UTF-8.  3. Ready to Use for Enterprise Applications  Goodby CSV is fully unit-tested. The library is stable and ready to be used in large projects like enterprise applications.
* [Spomky-Labs/otphp](https://github.com/Spomky-Labs/otphp) - :closed_lock_with_key: A PHP library for generating one time passwords according to RFC 4226 (HOTP) and the RFC 6238 (TOTP)
* [codecasts/spa-starter-kit](https://github.com/codecasts/spa-starter-kit) - A highly opinionated starter kit for building Single Page Applications with Laravel and Vue.js
* [hechoendrupal/drupal-console](https://github.com/hechoendrupal/drupal-console) - The Drupal CLI. A tool to generate boilerplate code, interact with and debug Drupal.
* [hassankhan/config](https://github.com/hassankhan/config) - Config is a lightweight configuration file loader that supports PHP, INI, XML, JSON, and YAML files
* [Gregwar/Image](https://github.com/Gregwar/Image) - A PHP library to handle images
* [fightbulc/moment.php](https://github.com/fightbulc/moment.php) - Parse, validate, manipulate, and display dates in PHP w/ i18n support. Inspired by moment.js
* [cybercog/laravel-love](https://github.com/cybercog/laravel-love) - Add Social Reactions to Laravel Eloquent Models. It lets people express how they feel about the content. Fully customizable Weighted Reaction System & Reaction Type System with Like, Dislike and any other custom emotion types. Do you react?
* [bludit/bludit](https://github.com/bludit/bludit) - Simple, Fast, Secure, Flat-File CMS
* [jitamin/jitamin](https://github.com/jitamin/jitamin) - :panda_face: Jitamin is a free software written in PHP, intended to handle the project management over the web. QQ群: 656868
* [Bit-Wasp/bitcoin-php](https://github.com/Bit-Wasp/bitcoin-php) - Bitcoin implementation in PHP
* [jeremykendall/php-domain-parser](https://github.com/jeremykendall/php-domain-parser) - Public Suffix List based domain parsing implemented in PHP
* [BrainMaestro/composer-git-hooks](https://github.com/BrainMaestro/composer-git-hooks) - Easily manage git hooks in your composer config
* [allegro/php-protobuf](https://github.com/allegro/php-protobuf) - PHP Protobuf - Google's Protocol Buffers for PHP
* [phpvirtualbox/phpvirtualbox](https://github.com/phpvirtualbox/phpvirtualbox) - A web interface to manage and access Virtualbox machines.
* [idno/known](https://github.com/idno/known) - A social publishing platform.
* [BeatSwitch/lock](https://github.com/BeatSwitch/lock) - A flexible, driver based Acl package for PHP 5.4+
* [jwage/purl](https://github.com/jwage/purl) - Purl is a simple Object Oriented URL manipulation library for PHP 7.2+
* [aliyun/aliyun-oss-php-sdk](https://github.com/aliyun/aliyun-oss-php-sdk) - Aliyun OSS SDK for PHP
* [gherkins/regexpbuilderphp](https://github.com/gherkins/regexpbuilderphp) - 🦉 human-readable regular expressions
* [garveen/laravoole](https://github.com/garveen/laravoole) - Laravel && ( Swoole || Workerman ) to get 10x faster than php-fpm
* [fxpio/composer-asset-plugin](https://github.com/fxpio/composer-asset-plugin) - NPM/Bower Dependency Manager for Composer
* [talyssonoc/react-laravel](https://github.com/talyssonoc/react-laravel) - Package for using ReactJS with Laravel
* [ErickTamayo/laravel-scout-elastic](https://github.com/ErickTamayo/laravel-scout-elastic) - Elastic Driver for Laravel Scout
* [noahbuscher/macaw](https://github.com/noahbuscher/macaw) - The simple PHP router
* [spatie/laravel-google-calendar](https://github.com/spatie/laravel-google-calendar) - Manage events on a Google Calendar
* [ErikvdVen/php-gif](https://github.com/ErikvdVen/php-gif) - Easy generating (real-time) GIF images with PHP
* [kirilkirkov/Ecommerce-CodeIgniter-Bootstrap](https://github.com/kirilkirkov/Ecommerce-CodeIgniter-Bootstrap) - Responsive, Multi-Vendor, MultiLanguage Online Store Platform (shopping cart solution)
* [doganoo/PHPAlgorithms](https://github.com/doganoo/PHPAlgorithms) - A collection of common algorithms implemented in PHP. The collection is based on "Cracking the Coding Interview" by Gayle Laakmann McDowell
* [walkor/web-msg-sender](https://github.com/walkor/web-msg-sender) - Web message pusher  written in PHP based on workerman.
* [simplesamlphp/simplesamlphp](https://github.com/simplesamlphp/simplesamlphp) - SimpleSAMLphp is an award-winning application written in native PHP that deals with authentication.
* [hippyvm/hippyvm](https://github.com/hippyvm/hippyvm) - HippyVM - an implementation of the PHP language in RPython
* [composer-unused/composer-unused](https://github.com/composer-unused/composer-unused) - Show unused composer dependencies by scanning your code
* [jeckman/YouTube-Downloader](https://github.com/jeckman/YouTube-Downloader) - PHP script for downloading videos from youtube; also parsing youtube feed into RSS enclosures for podcatchers
* [solariumphp/solarium](https://github.com/solariumphp/solarium) - PHP Solr client library
* [REBELinBLUE/deployer](https://github.com/REBELinBLUE/deployer) - Deployer is a free and open source deployment tool.
* [spatie/laravel-uptime-monitor](https://github.com/spatie/laravel-uptime-monitor) - A powerful and easy to configure uptime and ssl monitor
* [espocrm/espocrm](https://github.com/espocrm/espocrm) - EspoCRM open source CRM application
* [walkor/shadowsocks-php](https://github.com/walkor/shadowsocks-php) - A php port of shadowsocks based on workerman. A socks5 proxy written in PHP.
* [themattharris/tmhOAuth](https://github.com/themattharris/tmhOAuth) - An OAuth 1.0A library written in PHP
* [spatie/blender](https://github.com/spatie/blender) - The Laravel template used for our CMS like projects
* [googleapis/google-cloud-php](https://github.com/googleapis/google-cloud-php) - Google Cloud Client Library for PHP
* [kosinix/grafika](https://github.com/kosinix/grafika) - An image processing library for PHP
* [chillerlan/php-qrcode](https://github.com/chillerlan/php-qrcode) - A QR Code generator for PHP7.4+
* [vrana/notorm](https://github.com/vrana/notorm) - NotORM - PHP library for simple reading data from the database
* [ghedipunk/PHP-Websockets](https://github.com/ghedipunk/PHP-Websockets) - A Websockets server written in PHP.
* [cakephp/debug_kit](https://github.com/cakephp/debug_kit) - Debug Toolbar for CakePHP applications.
* [amranidev/scaffold-interface](https://github.com/amranidev/scaffold-interface) - :rocket: A Smart CRUD Generator For Laravel
* [spatie/image](https://github.com/spatie/image) - Manipulate images with an expressive API
* [wasmerio/wasmer-php](https://github.com/wasmerio/wasmer-php) - 🐘🕸️ WebAssembly runtime for PHP
* [someline/someline-starter](https://github.com/someline/someline-starter) - Someline Starter is a PHP framework for quick building Web Apps and Restful APIs, with modern PHP design pattern foundation.
* [Vonage/vonage-php-sdk-core](https://github.com/Vonage/vonage-php-sdk-core) - Vonage REST API client for PHP. API support for SMS, Voice, Text-to-Speech, Numbers, Verify (2FA) and more.
* [FTXInfotech/laravel-adminpanel](https://github.com/FTXInfotech/laravel-adminpanel) - A Laravel Admin Panel (Laravel Version : 6.0)
* [meenie/munee](https://github.com/meenie/munee) - Munee: Standalone PHP 5.3 Asset Optimisation & Manipulation
* [symplify/easy-coding-standard](https://github.com/symplify/easy-coding-standard) - [READ-ONLY] The Easiest way to start using PHP CS Fixer and PHP_CodeSniffer with 0-knowledge
* [nette/finder](https://github.com/nette/finder) - 🔍 Finder: find files and directories with an intuitive API.
* [guzzle/RingPHP](https://github.com/guzzle/RingPHP) - Simple handler system used to power clients and servers in PHP (this project is no longer used in Guzzle 6+)
* [drehimself/laravel-ecommerce-example](https://github.com/drehimself/laravel-ecommerce-example) - Code for YouTube series on building a Laravel E-Commerce application.
* [lizhichao/one](https://github.com/lizhichao/one) - A minimalist high-performance php framework that supports the [swoole | php-fpm] environment
* [K-Phoen/rulerz](https://github.com/K-Phoen/rulerz) - Powerful implementation of the Specification pattern in PHP
* [BitOne/php-meminfo](https://github.com/BitOne/php-meminfo) - PHP extension to get insight about memory usage
* [opensourcewebsite-org/opensourcewebsite-org](https://github.com/opensourcewebsite-org/opensourcewebsite-org) - OpenSourceWebsite (OSW) - online community managed by members using electronic voting and modifying source code. Welcome developers, activists, volunteers, sponsors. Join us and let’s build the future together!
* [imiphp/imi](https://github.com/imiphp/imi) - imi 是一款支持长连接微服务分布式的 PHP 开发框架，它可以运行在 PHP-FPM、Swoole、Workerman、RoadRunner 等多种容器环境下。它支持 HttpApi、WebSocket、TCP、UDP、MQTT 服务的开发。特别适合互联网微服务、即时通讯聊天im、物联网等场景！QQ群：17916227
* [psliwa/image-optimizer](https://github.com/psliwa/image-optimizer) - Image optimization / compression library. This library is able to optimize png, jpg and gif files in very easy and handy way. It uses optipng, pngquant, pngcrush, pngout, gifsicle, jpegoptim and jpegtran tools.
* [envms/fluentpdo](https://github.com/envms/fluentpdo) - A PHP SQL query builder using PDO
* [azuyalabs/yasumi](https://github.com/azuyalabs/yasumi) - The easy PHP Library for calculating holidays
* [Seldaek/phar-utils](https://github.com/Seldaek/phar-utils) - PHAR file format utilities, for when PHP phars you up.
* [delight-im/PHP-Auth](https://github.com/delight-im/PHP-Auth) - Authentication for PHP. Simple, lightweight and secure.
* [nikic/php-ast](https://github.com/nikic/php-ast) - Extension exposing PHP 7 abstract syntax tree
* [KnpLabs/DoctrineBehaviors](https://github.com/KnpLabs/DoctrineBehaviors) - Doctrine2 behavior traits that help handling Blameable, Loggable, Sluggable, SoftDeletable, Uuidable, Timestampable, Translatable, Tree behavior
* [timegridio/timegrid](https://github.com/timegridio/timegrid) - Free, open-source, online appointments platform based on Laravel PHP Framework.
* [bixuehujin/blink](https://github.com/bixuehujin/blink) - A high performance web framework and application server in PHP.
* [appstract/laravel-blade-directives](https://github.com/appstract/laravel-blade-directives) - A collection of nice Laravel Blade directives
* [t0k4rt/phpqrcode](https://github.com/t0k4rt/phpqrcode) - php QRcode generator library
* [oroinc/crm-application](https://github.com/oroinc/crm-application) - OroCRM - an open-source Customer Relationship Management application.
* [itbdw/ip-database](https://github.com/itbdw/ip-database) - 🇨🇳免费IP地址数据库，已支持IPV4+IPV6 ，结构化输出为国家、省、市、县、运营商)，中文数据库，方便实用。
* [ezSQL/ezsql](https://github.com/ezSQL/ezsql) - PHP class to make interacting with a database ridiculusly easy
* [niklasvh/php.js](https://github.com/niklasvh/php.js) - PHP to JavaScript converter and VM written in JavaScript
* [spatie/db-dumper](https://github.com/spatie/db-dumper) - Dump the contents of a database
* [woocommerce/storefront](https://github.com/woocommerce/storefront) - Official theme for WooCommerce
* [mnapoli/silly](https://github.com/mnapoli/silly) - Silly CLI micro-framework based on Symfony Console
* [nuxsmin/sysPass](https://github.com/nuxsmin/sysPass) - Systems Password Manager
* [3masterplus/book](https://github.com/3masterplus/book) - Book PDF
* [jenssegers/php-proxy](https://github.com/jenssegers/php-proxy) - A PHP proxy script with https and post support
* [croogo/croogo](https://github.com/croogo/croogo) - A CakePHP powered Content Management System
* [php-lock/lock](https://github.com/php-lock/lock) - Lock library to provide serialized execution of PHP code.
* [symfony/mailer](https://github.com/symfony/mailer) - The Mailer component helps sending emails
* [joshdick/miniProxy](https://github.com/joshdick/miniProxy) - 🚨⚠️ UNMAINTAINED!  ⚠️🚨 A simple PHP web proxy.
* [GitLabPHP/Client](https://github.com/GitLabPHP/Client) - GitLab API v4 client for PHP
* [opensource-socialnetwork/opensource-socialnetwork](https://github.com/opensource-socialnetwork/opensource-socialnetwork) - Open Source Social Network (OSSN) is a social networking software written in PHP. It allows you to make a social networking website and helps your members build social relationships, with people who share similar professional or personal interests.  It is available in 17 international languages.
* [technosophos/querypath](https://github.com/technosophos/querypath) - QueryPath is a PHP library for manipulating XML and HTML. It is designed to work not only with local files, but also with web services and database resources.
* [atymic/twitter](https://github.com/atymic/twitter) - Twitter API for Laravel 5.5+, 6.x, 7.x & 8.x
* [TelegramBot/Api](https://github.com/TelegramBot/Api) - Native PHP Wrapper for Telegram BOT API
* [TYPO3/typo3](https://github.com/TYPO3/typo3) - The TYPO3 Core - Enterprise Content Management System. Synchronized mirror of https://review.typo3.org/Packages/TYPO3.CMS
* [PHPAuth/PHPAuth](https://github.com/PHPAuth/PHPAuth) -   PHPAuth is a secure PHP Authentication class that easily integrates into any site.
* [jcampbell1/simple-file-manager](https://github.com/jcampbell1/simple-file-manager) - A Simple PHP file manager.  The code is a single php file.
* [parse-community/parse-php-sdk](https://github.com/parse-community/parse-php-sdk) - The Parse PHP SDK.
* [owen0o0/WebStack](https://github.com/owen0o0/WebStack) - WordPress 版 WebStack 导航主题 https://nav.iowen.cn
* [akeneo/pim-community-dev](https://github.com/akeneo/pim-community-dev) - [Community Development Repository] The open source Product Information Management (PIM)
* [backdrop/backdrop](https://github.com/backdrop/backdrop) - Backdrop core code repository.
* [Cocolabs-SAS/cocorico](https://github.com/Cocolabs-SAS/cocorico) - 👐 Cocorico is an open source marketplace solution for services and rentals. More information right here: https://www.cocorico.io/en/ 🚀 Cocorico is also available in an off-the-shelf SaaS package, check out https://www.hatch.li to launch your platform today. 😍 We are hiring (telecommute welcome 🏡): https://www.welcometothejungle.com/en/companies/cocorico/jobs/candidatures-spontanees#apply
* [spatie/laravel-view-models](https://github.com/spatie/laravel-view-models) - View models in Laravel
* [mybb/mybb](https://github.com/mybb/mybb) - MyBB is a free and open source forum software.
* [qieangel2013/zys](https://github.com/qieangel2013/zys) - high performance service framework based on Yaf or Swoole
* [commerceguys/addressing](https://github.com/commerceguys/addressing) - A PHP addressing library, powered by CLDR and Google's address data.
* [bosnadev/repository](https://github.com/bosnadev/repository) - Laravel Repositories is a package for Laravel 5 which is used to abstract the database layer. This makes applications much easier to maintain.
* [silexphp/Silex-Skeleton](https://github.com/silexphp/Silex-Skeleton) - A skeleton to get started with Silex
* [Maatwebsite/Laravel-Excel](https://github.com/Maatwebsite/Laravel-Excel) - 🚀 Supercharged Excel exports and imports in Laravel
* [bytefury/crater](https://github.com/bytefury/crater) - Free & Open Source Invoice App for Freelancers & Small Businesses
* [ramsey/uuid-doctrine](https://github.com/ramsey/uuid-doctrine) - Allow the use of a ramsey/uuid UUID as Doctrine field type.
* [easysoft/zentaopms](https://github.com/easysoft/zentaopms) - Zentao is an agile(scrum) project management system/tool, Free Upgrade Forever!​
* [Alexia/php7mar](https://github.com/Alexia/php7mar) - PHP 7 Migration Assistant Report (MAR)
* [GoogleCloudPlatform/php-docs-samples](https://github.com/GoogleCloudPlatform/php-docs-samples) - A collection of samples that demonstrate how to call Google Cloud services from PHP.
* [phpstan/phpstan](https://github.com/phpstan/phpstan) - PHP Static Analysis Tool - discover bugs in your code without running it!
* [consolidation/Robo](https://github.com/consolidation/Robo) - Modern task runner for PHP
* [ConsoleTVs/Charts](https://github.com/ConsoleTVs/Charts) - ⚡ Laravel Charts — Build charts using laravel. The laravel adapter for Chartisan.
* [PhenX/php-font-lib](https://github.com/PhenX/php-font-lib) - A library to read, parse, export and make subsets of different types of font files.
* [PhenX/php-svg-lib](https://github.com/PhenX/php-svg-lib) - SVG file parsing / rendering library
* [sektioneins/pcc](https://github.com/sektioneins/pcc) - PHP Secure Configuration Checker
* [nategood/commando](https://github.com/nategood/commando) - An Elegant CLI Library for PHP
* [ircmaxell/PHPPHP](https://github.com/ircmaxell/PHPPHP) - A PHP VM implementation in PHP
* [chevereto/Chevereto-Free](https://github.com/chevereto/Chevereto-Free) - Community/Personal Image Hosting powered by rodber.
* [avalanche123/Imagine](https://github.com/avalanche123/Imagine) - PHP 5.3 Object Oriented image manipulation library
* [luolongfei/freenom](https://github.com/luolongfei/freenom) - Freenom域名自动续期。Freenom domain name renews automatically.
* [theanoncoder/utilphp](https://github.com/theanoncoder/utilphp) - util.php is a collection of useful functions and snippets that you need or could use every day, designed to avoid conflicts with existing projects
* [easydigitaldownloads/easy-digital-downloads](https://github.com/easydigitaldownloads/easy-digital-downloads) - Sell digital downloads through WordPress
* [wsdl2phpgenerator/wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) - Simple utility and class library for generating php classes from a wsdl file.
* [qiniu/php-sdk](https://github.com/qiniu/php-sdk) - Qiniu Resource (Cloud) Storage SDK for PHP
* [phalcon/mvc](https://github.com/phalcon/mvc) - Phalcon MVC Examples
* [jublo/codebird-php](https://github.com/jublo/codebird-php) - Easy access to the Twitter REST API, Direct Messages API, Account Activity API, TON (Object Nest) API and Twitter Ads API — all from one PHP library.
* [ktamas77/firebase-php](https://github.com/ktamas77/firebase-php) - Firebase PHP Client
* [kalcaddle/KodExplorer](https://github.com/kalcaddle/KodExplorer) - A web based file manager,web IDE / browser based code editor
* [Chevereto/Chevereto-Free](https://github.com/Chevereto/Chevereto-Free) - Community/Personal Image Hosting powered by Chevereto (图床)
* [TYPO3/TYPO3.CMS](https://github.com/TYPO3/TYPO3.CMS) - The TYPO3 Core - Enterprise Content Management System. Synchronized read-only mirror of http://git.typo3.org/Packages/TYPO3.CMS.git
* [joeldg/bowhead](https://github.com/joeldg/bowhead) - PHP trading bot framework
* [recoilphp/recoil](https://github.com/recoilphp/recoil) - Asynchronous coroutines for PHP 7.
* [shaneharter/PHP-Daemon](https://github.com/shaneharter/PHP-Daemon) - Build production-ready Daemons using PHP 5.3+. Build fault-tolerant applications without the boilerplate.
* [docker-php/docker-php](https://github.com/docker-php/docker-php) - A Docker client in PHP
* [reduxframework/redux-framework](https://github.com/reduxframework/redux-framework) - Redux is a simple, truly extensible options framework for WordPress themes and plugins.
* [doubleleft/hook](https://github.com/doubleleft/hook) - A RESTful and extendable Backend as a Service that provides instant backend to develop sites and apps faster, with dead-simple integration for JavaScript, iOS, Android and more.
* [uxweb/sweet-alert](https://github.com/uxweb/sweet-alert) - A simple PHP package to show SweetAlerts with the Laravel Framework
* [clue/phar-composer](https://github.com/clue/phar-composer) - Simple phar creation for every PHP project managed via Composer
* [jrean/laravel-user-verification](https://github.com/jrean/laravel-user-verification) - PHP package built for Laravel 5.* to easily handle a user email verification and validate the email
* [TIGERB/easy-php](https://github.com/TIGERB/easy-php) - A Faster Lightweight Full-Stack PHP Framework :rocket:
* [thelia/thelia](https://github.com/thelia/thelia) - Thelia is an open source tool for creating e-business websites and managing online content. Repo containing the new major version (v2)
* [privacy-protection-tools/anti-AD](https://github.com/privacy-protection-tools/anti-AD) - 致力于成为中文区命中率最高的广告过滤列表，实现精确的广告屏蔽和隐私保护。anti-AD现已支持AdGuardHome，dnsmasq， Surge，Pi-Hole，smartdns等网络组件。完全兼容常见的广告过滤工具所支持的各种广告过滤列表格式
* [qkqpttgf/OneManager-php](https://github.com/qkqpttgf/OneManager-php) - An index & manager of Onedrive based on serverless. Can be deployed to Heroku/Glitch/SCF/FG/FC/CFC/PHP web hosting/VPS.
* [Yoast/wordpress-seo](https://github.com/Yoast/wordpress-seo) - Yoast SEO for WordPress
* [nunomaduro/laravel-console-menu](https://github.com/nunomaduro/laravel-console-menu) - 🔘 Beautiful PHP CLI menus. Is a php-school/cli-menu wrapper for Laravel/Artisan Console Commands
* [appserver-io/appserver](https://github.com/appserver-io/appserver) - A multithreaded application server for PHP, written in PHP.
* [JBZoo/Utils](https://github.com/JBZoo/Utils) - A collection of useful PHP functions, mini classes and snippets that you need and can use every day.
* [Sonerezh/sonerezh](https://github.com/Sonerezh/sonerezh) - A self-hosted, web-based application to stream your music, everywhere.
* [bugsnag/bugsnag-laravel](https://github.com/bugsnag/bugsnag-laravel) - Bugsnag notifier for the Laravel PHP framework. Monitor and report Laravel errors.
* [daylerees/scientist](https://github.com/daylerees/scientist) - A PHP experimentation library inspired by Github's own Scientist.
* [openid/php-openid](https://github.com/openid/php-openid) - OpenID library for PHP5
* [EnMarche/en-marche.fr](https://github.com/EnMarche/en-marche.fr) - Le site principal du mouvement En Marche !
* [yii2-starter-kit/yii2-starter-kit](https://github.com/yii2-starter-kit/yii2-starter-kit) - Yii2 Starter Kit
* [EleTeam/Yii2Shop](https://github.com/EleTeam/Yii2Shop) - EleTeam开源项目-电商全套解决方案之PHP版-Shop-for-PHP-Yii2。一个类似京东/天猫/淘宝的商城，有对应的APP支持，由EleTeam团队维护！
* [zendframework/zend-expressive](https://github.com/zendframework/zend-expressive) - PSR-15 middleware in minutes!
* [phayes/geoPHP](https://github.com/phayes/geoPHP) - Advanced geometry operations in PHP
* [domnikl/DesignPatternsPHP](https://github.com/domnikl/DesignPatternsPHP) - sample code for several design patterns in PHP 7.4
* [Atlantic18/DoctrineExtensions](https://github.com/Atlantic18/DoctrineExtensions) - Doctrine2 behavioral extensions, Translatable, Sluggable, Tree-NestedSet, Timestampable, Loggable, Sortable
* [phalcon/zephir](https://github.com/phalcon/zephir) - Zephir is a compiled high level language aimed to the creation of C-extensions for PHP
* [jqhph/dcat-admin](https://github.com/jqhph/dcat-admin) - 🔥  使用很少的代码快速构建一个功能完善的高颜值后台系统，内置丰富的后台常用组件，开箱即用，让开发者告别冗杂的HTML代码，基于Laravel Admin 实现。
* [sensiolabs-de/deptrac](https://github.com/sensiolabs-de/deptrac) - Keep your architecture clean.
* [studio24/wordpress-multi-env-config](https://github.com/studio24/wordpress-multi-env-config) - WordPress Multi-Environment Config
* [ilya-dev/belt](https://github.com/ilya-dev/belt) - A handful of tools for PHP developers.
* [MrRio/shellwrap](https://github.com/MrRio/shellwrap) - Lovely PHP wrapper for using the command-line
* [clue/graph-composer](https://github.com/clue/graph-composer) - Dependency graph visualization for composer.json (PHP + Composer)
* [clue/php-stream-filter](https://github.com/clue/php-stream-filter) - A simple and modern approach to stream filtering in PHP
* [RubixML/RubixML](https://github.com/RubixML/RubixML) - A high-level machine learning and deep learning library for the PHP language.
* [EleTeam/Shop-PHP-Yii2](https://github.com/EleTeam/Shop-PHP-Yii2) - EleTeam开源项目-电商全套解决方案之PHP版-Shop-for-PHP-Yii2。一个类似京东/天猫/淘宝的商城，有对应的APP支持，由EleTeam团队维护！
* [spiral/goridge](https://github.com/spiral/goridge) - High-performance PHP-to-Golang IPC bridge
* [phalcon/incubator](https://github.com/phalcon/incubator) - Incubator adapters/functionality for the Phalcon PHP Framework
* [essence/essence](https://github.com/essence/essence) - Extracts information about web pages, like youtube videos, twitter statuses or blog articles.
* [ausi/slug-generator](https://github.com/ausi/slug-generator) - Slug Generator Library for PHP, based on Unicode’s CLDR data
* [sofadesign/limonade](https://github.com/sofadesign/limonade) - a PHP micro-framework
* [rmccue/Requests](https://github.com/rmccue/Requests) - Requests for PHP is a humble HTTP request library. It simplifies how you interact with other sites and takes away all your worries.
* [dr5hn/countries-states-cities-database](https://github.com/dr5hn/countries-states-cities-database) - 🌍 World countries, states/regions, cities in JSON, SQL, XML, PLIST, YAML and CSV. All Countries, Cities, States with ISO2, ISO3, Country Code, Phone Code, Capital and Currency [Linked with Each Other By ID] [Countries-States-Cities-Database]
* [mauricesvay/php-facedetection](https://github.com/mauricesvay/php-facedetection) - Detect face in images in pure PHP
* [luyadev/luya](https://github.com/luyadev/luya) - LUYA is a scalable web framework and content management system with the goal to please developers, clients and users alike.
* [overtrue/wechat](https://github.com/overtrue/wechat) - :package: It is probably the best SDK in the world for developing WeChat App.
* [directus/directus](https://github.com/directus/directus) - Directus 8 Suite — Future-Proof Headless CMS & API for Custom Databases
* [whiteoctober/Pagerfanta](https://github.com/whiteoctober/Pagerfanta) - Pagination for PHP.
* [movim/movim](https://github.com/movim/movim) - Movim - Decentralized social platform
* [opulencephp/Opulence](https://github.com/opulencephp/Opulence) - A simple, secure, and scalable PHP application framework
* [onlychain/OCSystem](https://github.com/onlychain/OCSystem) - 🚀ONLYCHAIN blockchain underlying system-OCSystem
* [amazonwebservices/aws-sdk-for-php](https://github.com/amazonwebservices/aws-sdk-for-php) - (DEPRECATED) AWS SDK for PHP - Version 1. Version 3 is the latest:
* [symfony/polyfill-php70](https://github.com/symfony/polyfill-php70) - This component provides features unavailable in releases prior to PHP 7.0.
* [symfony/polyfill-php56](https://github.com/symfony/polyfill-php56) - This component provides functions unavailable in releases prior to PHP 5.6.
* [youshido-php/GraphQL](https://github.com/youshido-php/GraphQL) - Pure PHP realization of GraphQL protocol
* [fennb/phirehose](https://github.com/fennb/phirehose) - PHP interface to Twitter Streaming API
* [davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs) - Laravel Breadcrumbs - A simple Laravel-style way to create breadcrumbs.
* [ircmaxell/php-compiler](https://github.com/ircmaxell/php-compiler) - A compiler. For PHP
* [MenaraSolutions/geographer](https://github.com/MenaraSolutions/geographer) - PHP library that knows how countries and cities are called in any language
* [ronanguilloux/IsoCodes](https://github.com/ronanguilloux/IsoCodes) - PHP library - Validators for standards from ISO, International Finance, Public Administrations, GS1, Book Industry, Phone numbers & Zipcodes for many countries
* [nahid/jsonq](https://github.com/nahid/jsonq) - A PHP query builder for JSON
* [apereo/phpCAS](https://github.com/apereo/phpCAS) - Apereo PHP CAS Client
* [Program-O/Program-O](https://github.com/Program-O/Program-O) - PHP MySQL AIML Chatbot - One click installation. Fully loaded admin area to admin your chatbot. Set up multiple chatbots. Foreign language support. XML/JSON responses or just plain HTML. Massive community of users. Twitter Plugins and lots and lots more. Please feel free to fork the DEV branch and contribute. :)
* [mongodb/mongo-php-driver](https://github.com/mongodb/mongo-php-driver) - MongoDB PHP driver
* [bshaffer/oauth2-demo-php](https://github.com/bshaffer/oauth2-demo-php) - A demo application for running an OAuth2 server
* [SSilence/selfoss](https://github.com/SSilence/selfoss) - selfoss: The multipurpose rss reader, live stream, mashup, aggregation web application
* [tightenco/jigsaw](https://github.com/tightenco/jigsaw) - Simple static sites with Laravel’s Blade.
* [nesk/puphpeteer](https://github.com/nesk/puphpeteer) - A Puppeteer bridge for PHP, supporting the entire API.
* [microsoft/tolerant-php-parser](https://github.com/microsoft/tolerant-php-parser) - An early-stage PHP parser designed for IDE usage scenarios.
* [niutech/node.php](https://github.com/niutech/node.php) - Run node.js apps from PHP even on a shared hosting!
* [nrk/predis](https://github.com/nrk/predis) - Flexible and feature-complete Redis client for PHP and HHVM
* [caouecs/Laravel-lang](https://github.com/caouecs/Laravel-lang) - List of 75 languages for Laravel 4, 5, 6 and 7
* [paquettg/php-html-parser](https://github.com/paquettg/php-html-parser) - An HTML DOM parser. It allows you to manipulate HTML. Find tags on an HTML page with selectors just like jQuery.
* [jmathai/epiphany](https://github.com/jmathai/epiphany) - A micro PHP framework that's fast, easy, clean and RESTful. The framework does not do a lot of magic under the hood. It is, by design, very simple and very powerful.
* [PHPIDS/PHPIDS](https://github.com/PHPIDS/PHPIDS) - PHPIDS (PHP-Intrusion Detection System) is a simple to use, well structured, fast and state-of-the-art security layer for your PHP based web application
* [mattiasgeniar/php-exploit-scripts](https://github.com/mattiasgeniar/php-exploit-scripts) - A collection of PHP exploit scripts, found when investigating hacked servers. These are stored for educational purposes and to test fuzzers and vulnerability scanners. Feel free to contribute.
* [m4tthumphrey/php-gitlab-api](https://github.com/m4tthumphrey/php-gitlab-api) - GitLab API client for PHP
* [brianlmoon/GearmanManager](https://github.com/brianlmoon/GearmanManager) - PHP daemon for managing gearman workers
* [xx19941215/light-tips](https://github.com/xx19941215/light-tips) - Some code tips about algorithms, php and more 🔥
* [cloudreve/Cloudreve](https://github.com/cloudreve/Cloudreve) - 🌈支持多家云存储的云盘系统 (A project helps you build your own cloud in minutes)
* [facebook/php-graph-sdk](https://github.com/facebook/php-graph-sdk) - The Facebook SDK for PHP provides a native interface to the Graph API and Facebook Login.  https://developers.facebook.com/docs/php
* [jeremeamia/super_closure](https://github.com/jeremeamia/super_closure) - Serialize closures with this uncanny PHP library.
* [laravelio/portal](https://github.com/laravelio/portal) - The Laravel.io Community Portal
