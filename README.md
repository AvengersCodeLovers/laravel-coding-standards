# Laravel CS

This project aims to provide a common PHP-CS-Fixer configuration for Laravel projects.

## Purpose

The purpose of this project is to share a standardized PHP-CS-Fixer configuration that can be easily used across different Laravel projects. By using this configuration, you can ensure consistent code formatting and style throughout your codebase.

## Usage

To use this configuration, install this composer package:

```bash
composer require --dev avengerscodelovers/laravel-cs
```

Then, you can use PHP-CS-Fixer with `--config` option:

```bash
./vendor/bin/php-cs-fixer fix --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php
```
To incorporate CI integration, you can utilize the following command to verify if the code adheres to the conventions:

```bash
./vendor/bin/php-cs-fixer fix --dry-run -v --config=./vendor/avengerscodelovers/laravel-cs/.php-cs-fixer.dist.php
```

By using this configuration, PHP-CS-Fixer will apply the defined rules to your codebase, ensuring that it adheres to the Laravel CS standards.

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

This will apply the defined rules to your codebase, ensuring that it adheres to the Laravel CS standards.
You can also integrate with [lint-staged](https://github.com/lint-staged/lint-staged) to automatically run the fixer when committing changes:

```json
"lint-staged": {
    "*.php": [
        "composer cs:fix",
        "composer phpstan"
    ]
}
```