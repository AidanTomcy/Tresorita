# Tresorita

This website is created for Mr. Josi Cherian. To contact him:

1. Email : [josi@inoways.com](mailto:josi@inoways.com)
2. Phone No. : [+91 98201 84902](tel:+919820184902)

This repository has been forked from my real account ([AidanTomcy](https://github.com/AidanTomcy)) as I had originally published it there.  
The backend for this website has been made with PHP and MySQL.  
The CSS Preprocessor I used in this project is Sass.  
This website uses the Bootstrap and Font Awesome libraries.  
All of the major styles are in [assets/css/style.css](https://github.com/Tresorita/tresorita-website/blob/master/assets/css/style.css).  
The usersTable.sql only contains the code for the users table.  
There is no React, Angular, Vue or any frontend library.  
Warning: This website is not yet hosted.  
Please do make a pull request if you find a bug.

The [submitform.php](https://github.com/Tresorita/tresorita-website/blob/master/submitform.php) is like this because
I am trying to figure out how to mail the contents of the form in [main.php](https://github.com/Tresorita/tresorita-website/blob/master/main.php) to a specific email address.
Here is what the submitform.php file looks like:

```php
<?php
    $sendToEmail = 'josi@inoways.com';
    $sendFromEmail = '';
    $subject = 'New form submission in Tresorita Website';
    $content = '';
    $firstName = '';
    $lastName = '';
    $email = '';
    $message = '';

```

## Tools Used

<p align="center">
    <a href="https://php.net" target="new"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" height="100px"></a>&nbsp;
    <a href="https://mysql.com" target="new"><img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" height="100px"></a>&nbsp;
    <a href="https://sass-lang.com" target="new"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="100px"></a>
    <br><br>
    <img src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" height="100px">&nbsp;
    <a href="https://npmjs.com" target="new"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Npm-logo.svg/540px-Npm-logo.svg.png" height="100px"></a>&nbsp;&nbsp;
    <a href="https://getbootstrap.com" target="new"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" height="100px"></a>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" width="100px">
    <br><br>
    <a href="https://fontawesome.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Font_Awesome_5_logo_black.svg/1920px-Font_Awesome_5_logo_black.svg.png" height="100px">&nbsp;</a>
</p>
