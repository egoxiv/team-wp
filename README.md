# Wordpress Team

## Setting up a Wordpress dashboard!
![Image of Wordpress dashboard](https://codex.wordpress.org/images/thumb/3/30/dashboard.png/500px-dashboard.png)

* First - [Download and unzip the Wordpress package](https://wordpress.org/). This will have all the files needed to start a basic Wordpress app.

* Then - [Download MAMP for Mac](https://www.mamp.info/en/downloads/). This will allow you to run all the files locally on your machine so you can code, test and debug. 

## Configuring MAMP
You will want to configure MAMP after it is downloaded with these steps:
1. In your applications folder, find MAMP and open it. 
![MAMP Dashboard](http://dl2.macupdate.com/images/screens/uploaded/JPG/16197_scr_uc1.jpg)
2. Click on preferences and then click on the Ports tab.
3. Update `Apache Port` to work on port `80`
4. Update `MySQL Port` to work on port `3306`
5. Click on the folder icon ![Folder Icon](https://www.evernote.com/l/Aqwo3ANoJw5GJZUEYXyzIPhxbJK4kLPE75U) and set the `Document Root` to `Applications/MAMP/htdocs` (this maybe the default behavior, if thats the case then all you need to do is confirm)
6. After all of that is complete, drag and drop the Wordpress package into the `htdocs` in your MAMP directory folder.

* You now have a basic MAMP setup *

Now we have to configure the Wordpress app. 
1. Inside `/MAMP/htdocs/app_dir/wordpress` find `wp-config-sample.php`, we are going to write some code in here. *go to localhost/phpMyAdmin, click on user, and click go.*

2. 
```
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
```
- Update the name of your database, like "wordpress" above. 

```
/** MySQL database username */
define('DB_USER', 'burgersnkale');
```
- Update the name of the user, like "burgersnkale" above

```
/** MySQL database password */
define('DB_PASSWORD', 'burgersnkale');
```
- Create a password, like "burgersnkale" above

```
/** MySQL hostname */
define('DB_HOST', 'localhost');
```
- Update name of DB_HOST to "localhost"

```
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
```
- LEAVE THIS ALONE!

```
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', ''); 
```
- LEAVE THIS ALONE TOO!

Do this: 
![](https://www.evernote.com/l/AqwjE9Qo3QJKv4ljStAEiuLcTWL3iPxj318)

And then enter all of your sites information!

 ##Creating Child Themes

A child theme consists of at least one directory (the child theme directory) and two files (style.css and functions.php), which you will need to create:

![filder Icon](https://codex.wordpress.org/images/3/3d/child-theme-items.jpeg)


- The child theme directory
- style.css
- functions.php

---



###Step 1
 The first step in creating a child theme is to create the child theme directory, which will be placed in` wp-content/themes`.
 
###Step 2

It is recommended that the name of your child theme directory is appended with `'-child'`. Example  `'twentyfifteen-child'` indicating that the parent theme is the Twenty Fifteen theme.

###Step 3

Add in the following header

```
/*
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twenty-fifteen-child
*/
```

###Step 4

The final step is to enqueue the parent and child theme stylesheets. 

```
@import url("../twentysixteen/style.css");

```

###Step 5

Activate it through WorldPress in Appearance => Themes


## You're Done! 
