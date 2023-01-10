# About

This repository is a website for Construction Management.

# Technologies used

Following technologies are used to develop this website:

| Frontend                                                                                                                | Backend              | Database                  |
| ----------------------------------------------------------------------------------------------------------------------- | -------------------- | ------------------------- |
| i) HTML.<br />ii) Bootstrap - CSS Framework. (Version 5.2.2)<br />iii) AngularJS - JavaScript Framework (Version 1.8.2) | PHP (Version 8.1.10) | MongoDB (Version 5.0.13)) |

# Prerequisites

Before the website is hosted, following prerequisites are to be followed:

#### i) Install XAMPP:

A web server is needed to host the website. For this we need to install any of the following softwares:

a) WAMP (Windows Platform, Apache Web Server, MySQL Database, PHP scripting language)

b) LAMP (Linux Platform, Apache Web Server, MySQL Database, PHP scripting language)

c) XAMPP (Cross Platform, Apache Web Server, MySQL Database, PHP scripting language, Perl Scripting Language)

Since we want the websites to function properly in all platforms, XAMPP is preferred.

Visit https://www.apachefriends.org to download the latest version of XAMPP.

#### ii) Download Composer:

Composer is an application-level dependency manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries.

It is similar to Node Package Manager (NPM) of Node.js

Visit https://getcomposer.org/download to download the latest version of Composer.

#### iii) Download MongoDB PHP Driver:

By default, PHP works with MySQL Database. To work with MongoDB, we need to install MongoDB PHP Driver.

Visit https://www.php.net/manual/en/set.mongodb.php to  download the driver extension and follow the steps mentioned.

#### iv) Install Dependencies:

After all the above steps are followed, we need to install dependencies using Composer. Run this command at the root of the project folder:

```
composer install
```

#### v) Configuring Environment Variables:

Environment Variables are used to store sensitive data, such as Database access credentials, secret keys for APIs.

To configure environment variables, we create `.env` File at the project folder root.

The content of the `.env` file should be like

```
URI=<mongodb-uri>
```

For example, if your mongodb URI is `mongodb://localhost:27017`, the `.env` file content should be 

```
URI=mongodb://localhost:27017
```
