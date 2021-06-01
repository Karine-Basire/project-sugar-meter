# Sugar meter

## Trello

> https://trello.com/invite/b/aPuF0ZDy/4c011a1f2bde8eb5df6f3ba3b9a1f059/projet-sugar-meter

# Installing & Setting up the Symfony Framework 5.3 version

## Tools technical

- PHP 7.4.9
- MySQL 5.7.31
- COMPOSER 2.0.14
- SYMFONY CLI 4.25.2

## CONNECTION DATABASE

> DATABASE_URL="mysql://root:bXmsI8JEhXuGpb9W@127.0.0.1:3306/sugar?serverVersion=5.7"

## Checking if my computer meets all requirements

> symfony check:requirements

## Creating Symfony Application

> symfony new sugar-meter

## Checking project information

> php bin/console about

## Checking the console and the web server are using the same PHP version and configuration

> symfony local:php:list

## Installing the secure version of my application locally

> symfony server:ca:install

## Running Symfony Application (keep two terminals)

_Support for HTTP/2, concurrent requests, TLS/SSL and automatic generation of security certificates_

> symfony serve

## Installing the VarDumper component

> composer require --dev symfony/var-dumper

## Installing Package Symfony Flex

_Automatise les tâches les plus courantes des applications Symfony_

> composer require logger

## Installing annotations (alias by symfony flex)

> composer require annotations

## Checking Security Vulnerabilities

> symfony check:security

## Installing Twig (alias by symfony flex)

> composer require twig

## Test to see the service container

> php bin/console debug:autowiring --all

## Installing Bundle DOCTRINE(ORM) (alias by symfony flex)

_3 tools: entity, repository, manager_

> composer require doctrine

## Create database

> php bin/console doctrine:database:create or d:d:c

## Installing maker bundle (alias by symfony flex)

> composer require maker

## Entities sugar-meter

> php bin/console make:entity

### <u>First:</u>

- **Class name**:Consumption
- **property name:** product_quantity -> **type:** integer -> **null:** no
- **property name** sugar_quantity-> **type** integer -> **null** no
- **property name:** create_at -> **type:** datetime -> **null:** no

### <u>Second:</u>

- **Class name**:Product
- **property name:** code -> **type:** string -> **lenght**: 13 -> **null:** no
- **property name:** name -> **type:** string -> **lenght**: 50 -> **null:** no
- **property name:** picture -> **type:** string -> **lenght**: 255 -> **null:** yes
- **property name:** sugar_thousand -> **type:** integer -> **null:** no

## Compare BDD with my new data, use make:migration

> php bin/console make:migration

## Run the migration

> php bin/console doctrine:migrations:migrate or `d:m:m`
> with --no-interaction (no questions)

## Command list Doctrine

> php bin/console doctrine

## See my migrations

> php bin/console doctrine:migrations:status

## Profiler and Debugger

_monitors application performance_

> composer require --dev symfony/profiler-pack

## Installing component security Symfony

> composer require symfony/security-bundle

## Verification tools

> php bin/console debug:autowiring password

## Entity User

> php bin/console make:user

### <u>Third:</u>
- **name of the security user class**: User
- **user data in the database ?**: yes
- **property name unique**: email
- **need to hash/check user password**: yes
  > php bin/console make:entity User
- **property name:** nickname -> **type:** string -> **lenght**: 80 -> **null:** no

## Les relations

> php bin/console make:entity Consumption

- **property name:** product -> **type:** OneToMany -> **entity be related**: Product -> **property null**: yes -> **access/update**: yes -> **name inside**: default

> php bin/console make:entity Consumption

- **property name:** user -> **type:** OneToMany -> **entity be related**: User -> **property null**: yes -> **access/update**: yes -> **name inside**: default

> php bin/console make:entity User

- **property name:** products -> **type:** ManyToMany -> **entity be related**: Product -> **property null**: yes -> **access/update**: yes -> **name inside**: default

## CSRF Protection
_Protection against CSRF attacks is built into the Form component_
> composer require symfony/security-csrf
