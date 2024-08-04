# Laravel CS

This project aims to provide a common coding standards, static analysis configuration for Laravel projects.

## Purpose

The purpose of this project is to share a standardized PHP-CS-Fixer and PHPStan configuration that can be easily used across different Laravel projects. By using this configuration, you can ensure consistent code formatting, style, and static analysis throughout your codebase.

## Install

To use this configuration, install this composer package:

```bash
composer require --dev avengerscodelovers/laravel-cs
```

## Usage

### Code conventions

You can use PHP-CS-Fixer to check code conventions, format code with `--config` option:

```bash
./vendor/bin/php-cs-fixer fix --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php
```

To incorporate CI integration, you can utilize the following command to verify if the code adheres to the conventions:

```bash
./vendor/bin/php-cs-fixer fix --dry-run -v --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php
```

By using this configuration, PHP-CS-Fixer will apply the defined rules to your codebase, ensuring that it adheres to the coding standards.

You can also add add the PHP-CS-Fixer command to the `composer.json` scripts:

```json
    "scripts": {
        "cs": "php-cs-fixer fix --dry-run -v --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php",
        "cs:fix": "php-cs-fixer fix -v --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php",
    }
```

After adding the script, you can run the PHP-CS-Fixer command by executing the following command in your terminal:

```bash
composer cs
composer cs:fix
```

### Static analysis

To perform static analysis on your code and identify potential issues or errors, you can use PHPStan.

First, create a `phpstan.neon` or `phpstan.neon.dist` file in the root of your application. It might look like this:

```yml
includes:
    - ./vendor/avengerscodelovers/laravel-cs/phpstan.neon

parameters:

    paths:
        - app/

    # Level 9 is the highest level
    level: 5

    ## Exclude files or folder from analysis ##
    # excludePaths:
    #    - app/Modules/*/Tests/*
```

Then you can run PHPStan with the following command:

```bash
./vendor/bin/phpstan analyze
```

You may add the PHPStan command to the `composer.json` scripts:

```json
"scripts": {
    "phpstan": "phpstan analyse --memory-limit 2G"
}
```

After adding the script, you can run PHPStan by executing the following command in your terminal:

```bash
composer phpstan
```

### Usage with `lint-staged`

You can also integrate with [lint-staged](https://github.com/lint-staged/lint-staged) and pre-commit to automatically run the fixer, static analysis when committing changes:

```json
"lint-staged": {
    "*.php": [
        "composer cs:fix",
        "composer phpstan"
    ]
}
```