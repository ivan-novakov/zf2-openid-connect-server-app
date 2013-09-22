# OpenID Connect Server in PHP

**Note:** This is a work in progress. If you are interested, please, contact me.

## Introduction

## Requirements

* PHP >= 5.3.3
* Zend Framework >= 2.2

## Installation

Clone the repository and run `composer install` from within the root directory.

## Database

The server needs a session storage. It comes with a standard storage implementation which uses a MySQL database to store data. If you want to use a different storage mechanism you need to implement it yourself.

To use the MySQL storage you need to create a database, assign a user with read/write rights and run the initialization script:

    mysql -u <user> -p <DB name> < vendor/ivan-novakov/phpid-server/doc/auth_server_session_storage.sql



## Configuration

Copy the sample configuration file from `vendor/ivan-novakov/phpid-server/config/autoload` to `config/autoload`, rename it from `*.php.dist` to `*.php` and modify it appropriately.

Settings to be set:

* session storage (database)
* logger
* client registry storage + add client records
* user authentication
