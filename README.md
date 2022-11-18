# About

This repository is a website for Construction Management.

# Technologies used

Following technologies are used to develop this website:

| Frontend                                                                                | Backend | Database |
| --------------------------------------------------------------------------------------- | ------- | -------- |
| i) HTML.<br />ii) Bootstrap - CSS Framework.<br />iii) AngularJS - JavaScript Framework | PHP     | MongoDB  |

# Prerequisites

Before the website is hosted, following prerequisites are to be followed:

#### i) Install XAMPP:

A web server is needed to host the website. For this we need to install any of the following softwares:

a) WAMP (Windows Platform, Apache Web Server, MySQL Database, PHP scripting language)

b) LAMP (Linux Platform, Apache Web Server, MySQL Database, PHP scripting language)

c) XAMPP (Cross Platform, Apache Web Server, MySQL Database, PHP scripting language, Perl Scripting Language)

Since we want the websites to function properly in all platforms, XAMPP is preferred.

Visit [https://www.apachefriends.org/]() to download the latest version of XAMPP.

#### ii) Download Composer:

Composer is an application-level dependency manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries.

It is similar to Node Package Manager(NPM) of Node.js

Visit [https://getcomposer.org/download/]() to download the latest version of Composer.

#### iii) Download MongoDB PHP Driver:

By default, PHP works with MySQL Database. To work with MongoDB, we need to install MongoDB PHP Driver.

Visit [https://www.php.net/manual/en/set.mongodb.php/]() to  download the driver extension and follow the steps mentioned.

#### iv) Download MongoDB Library:

After the above steps are completed, we need to run this command

`composer require mongodb/mongodb`

**Remember, run this command at the root of the directory. Otherwise, it won't work.**

**For example, if your website is located at c:\\xampp\htdocs\\`<project-folder>`, get inside the  `<project-folder>`  and run the command.**

In case the directory has composer.lock and composer.json files, you need to run this command

`composer install`
