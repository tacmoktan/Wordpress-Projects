# Wordpress-Projects
Some wordpress projects I worked on.

# REFERENCES 

1. codex.wordpress (for syntax)
2. underscores.me (for themes)
3. template hierarchy (for maintaining template) 

# STEPS
## Setting up wordpress backend
1. Create database in phpmyadmin
2. Download theme from underscores.me
3. Create folder with *projectname* in htdocs & copy the *wordpress 5.0* content in it.
4. Insert wordpress files in projectName...checkout `localhost/projectName` in the URL.
5. Add dbName, username:root, password:(empty)
6. Checkout `http://localhost/projectName/wp-login.php` to enter backend.
7. Enter name(which is different from username), pw.

## Setting up styles(css) and scripts(js)
1. Add theme through admin panel  
2. Checkout `xampp/htdocs/projectName/wp-content/themes` in local disk.
3. Update theme in **wp-content** with the frontend project files(css, js, others..)
4. Follow template hierarchy
5. Maintain *header.php*, *footer.php* (leave *index.php* as it is)
6. Create and maintain *front-page.php*
7. Add `<?php get_header(); ?>`, `<?php get_footer();?>` to include header & footer in *front-page.php*
8. Go to *function.php* & add necessary `wp_enqueue` for *style*(only .css files) and *script*(only .js files).
9. Add `<?php wp_head();?>` immediately before `</head>` in *header.php* & `<?php wp_footer();?>` before `</body>` in *footer.php*. This will hook the stylesheets and scripts to the wordpress. & the webpage will be in its required style.
10. Maintain dependencies (jquery is always on the top in `wp_enqueue_scripts()`). Open the **.html** file in text editor, order the links of styles and scripts in function of **.php** file similar to what is shown in **.html** file.

# Creating pages

1. create a page in the **wp-admin** backend of wordpress.
2. create *page-PageName.php* file.

# Page Handling
## Single page handling
### For in-built post types (blogs, news, faqs)
1. Create *single-post.php* file.
2. Copy all the necessary designs in it.
3. Add `the_permalink()` whereever necessary which when clicked, redirects to the single page.

### For custom post types
1. Create *single-<registered_post_type_slug>.php* 
2. Same
3. Same

## Taxonomy page handling
1. Create *taxonomy-<taxonomy_name>.php* file
2. Copy the designs as single page.
3. Add `the_permalink()` where necessary.


# Necessary Plugins 
## Advanced custom fields plugin
* To create **metabox** in posts.

## Code-star Framework
### Setting up codestar-framework

1. Copy and paste the  codestar-framework folder (containing the framework) into the `wp-content/themes/my-theme/plugin(createnewfolder)/`
2. Now add import that *cs-framework.php* file using
```php
require get_template_directory().'/plugin/codestar-framework/codestar-framework1.0.2/cs-framework.php'
```

**NOTE:** don't use codestar if the page needs a **single-page**. Instead create a **custom post type** because 
**permalinks** to the single-page can only be assigned through custom post type.

## MaxMega menu plugin
* To create dynamic menu.  
* Steps to work in the wp-admin backend
1. Go to **Appearance > Menus** 'Home' (*front-page.php*) is already in the menu by default.
2. Add pages created to the menu and save. 
**Exceptional case:** add CustomLinks (menu items) manually and create a menu with menuName and save.
3. Click the **enable** checkbox on MaxMegaMenu Settings and save.
4. Remove all the `<li>` menu items with nav from header.php.
5. Go to **Mega Menu > Menu Locations** and copy PHP function and paste it within the `<ul>` tag of 
*header.php*.
6. Go to **Mega Menu > Menu Themes** and start styling. 

## Contact Form 7 plugin
* To manage contact forms excluding register forms, sign up forms.  
1. Copy the content within `<form> </form>` tags and paste it in the box.
2. Replace the input types with the ones in the plugins with correct *labels, classess, placeholders, required 
or not*.

## ACF gallery plugin
* For adding images sliders

## SSBA ( simple share buttons )
* For adding shareable links

## Comments
* Add comments in the Post(default not custom) section using `<?php wp_comment();?>`.
* Also add necessary styles to it.
