# Tresorita

<p align="center">
    <img src="php/src/images/tresorita-logo.jpg">
</p>

This website is created for Mr. Josi Cherian. To contact him:

1. Email : [josi@inoways.com](mailto:josi@inoways.com)
2. Phone No. : [+91 98201 84902](tel:+919820184902)

All of the website code is in php/src.
The backend for this website has been made with PHP and MySQL.  
The CSS Preprocessor I used in this project is Sass.  
This website uses the Bootstrap and Font Awesome libraries.  
All of the major styles are in assets/css/style.css.  
The usersTable.sql only contains the code for the users table.  
There is no React, Angular, Vue or any frontend library.  
Warning: This website is not yet hosted.  
Please do create an issue if you find a bug.

The includes/submitform.inc.php stores the contents the user fills in in a table.
Here is what it looks like:

```php
<?php
  if (isset($_POST["submit"])) {
    #Storing Contents Of Contact Form in main.php in database
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once('dbh.inc.php');
    require_once('functions.inc.php');

    if (invalidEmail($email) !== false) {
      header("location: ../index.php?error=invalidemail");
    }

    storeContentsOfContact($conn, $firstName, $lastName, $email, $message);
  }

```

## Tools Used

<p align="center">
    <a href="https://php.net" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" height="100px"></a>&nbsp;
    <a href="https://mysql.com" target="_blank_"><img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" height="100px"></a>&nbsp;
    <a href="https://sass-lang.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="100px"></a>
    <br><br>
    <img src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" height="100px">&nbsp;
    <a href="https://npmjs.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Npm-logo.svg/540px-Npm-logo.svg.png" height="100px"></a>&nbsp;&nbsp;
    <a href="https://getbootstrap.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" height="100px"></a>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" width="100px">
    <br><br>
    <a href="https://fontawesome.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Font_Awesome_5_logo_black.svg/1920px-Font_Awesome_5_logo_black.svg.png" height="100px">&nbsp;</a>
</p>
