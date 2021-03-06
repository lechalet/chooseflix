![](/assets/images/chooseflix.jpg)
# Chooseflix

## Installation
Configure the .env file with your following informations 
Configuring Environment Variables in .env Files¶
Instead of defining env vars in your shell or your web server, Symfony provides a convenient way to define them inside a .env (with a leading dot) file located at the root of your project.

The .env file is read and parsed on every request and its env vars are added to the $_ENV & $_SERVER PHP variables. Any existing env vars are never overwritten by the values defined in .env, so you can combine both.

For example, to define the DATABASE_URL env :

## .env
`DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"`
This file should be committed to your repository and (due to that fact) should only contain “default” values that are good for local development. This file should not contain production values.

In addition to your own env vars, this .env file also contains the env vars defined by the third-party packages installed in your application (they are added automatically by Symfony Flex when installing packages).

### Run following commands 
- `composer install`
- `yarn encore production`
- `yarn install`
- `php bin/console d:d:c`
- `php bin/console make:migration`
- `php bin/console d:m:m`
- `symfony server:start`

### Link

- Go to [Localhost](http://127.0.0.1:8000) to enjoy
## Requirements

- [PHP](https://www.php.net/downloads.php) 7.4.7 (cli)
- [Composer](https://getcomposer.org/download/) 2.0.13
- [Yarn](https://classic.yarnpkg.com/en/docs/install/#windows-stable) 1.22.4
- [Symfony](https://symfony.com/download) 5.*
- [Npm](https://docs.npmjs.com/getting-started) 6.14.6