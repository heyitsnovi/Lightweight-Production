# LightWeight

A Lightweight,Simple PHP MVC Mini Framework. Built for Rapid Prototyping and Small-Scaled Projects.


## Installation

Installing LightWeight

Clone the repository to your xampp "htdocs" directory or to your wampp "www" directory:

```bash
  git clone https://github.com/heyitsnovi/Lightweight-Production.git
```
Then go to LightWeight directory and run

```bash
composer install
```
Wait until all packages gets installed.

After Installation configure the .env file with your database credentials and  PROJECT_BASEURL. Please modify these settings according to your set-up.

```
# Please Modify These Settings According To Your Set Up

PROJECT_BASEURL = "http://localhost/lightweight-prod/"
MYSQL_HOST	= 
MYSQL_USERNAME  = 
MYSQL_PASSWORD  = 
MYSQL_DATABASE  = 
MYSQL_CHARSET   = "utf8"
MYSQL_COLLATION = "utf8_unicode_ci"
MYSQL_PREFIX	= 
DB_DRIVER	= "mysql"

```
After setting up your .env file, Go to your browser and type:

```
http://localhost/lightweight-prod/


Router File location:

```
routes/routes.php

```

Default Controller File location:

```
app/controllers/Home.php
```


Default Views File location:

```
app/views/default.php

```

Default 404 View location:

```
app/views/errors/404.php
```
    
## Features

- Uses bramus/router PHP Router

- Uses Illuminate\Database package for expressive query builder, ActiveRecord style ORM, and schema builder

- Uses Rakit Validation - PHP Standalone Validation Library for Form Validation

- Anti XSS Library by Voku (voku/anti-xss)

- Twig Templating Engine Ready

- Built-In Pagination Class


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Acknowledgements

 - [Bramus Router](https://github.com/bramus/router)
 - [Rakit Form Validation Library](https://github.com/rakit/validation)
 - [Laravel Illuminate Database](https://github.com/illuminate/database)
 - [Voku Anti XSS](https://github.com/voku/anti-xss)
 - [Twig Templating Engine](https://github.com/twigphp/Twig)
 - [David Carr's Pagination Library](https://github.com/dcblogdev/pagination)
 
## Feedback

If you have any feedback, suggestions or any ideas that might be helpful, please reach out to me at novhex94@gmail.com

