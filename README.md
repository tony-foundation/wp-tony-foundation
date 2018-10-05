# wp-tony-foundation
the first gen website for Tony Foundation, currently located at http://tonyfoundation.org

we'd like to re-build this site with gatsby for use with netlify cms... but until that happens, the current wordpress site (tony-foundation theme files in this repo) will still need love. 

## #help-wanted! 
Here's a list of the latest enhancement requests from leadership:
https://github.com/tony-foundation/wp-tony-foundation/issues

If you hate cancer and would like to contribute some time to a great cause, please reach out and/or submit a pull request!

### Project background
(super quick version) 
- The Tony Foundation website is a wordpress website that uses a custom theme called `tony-foundation`. 
- The `tony-foundation` theme is based on the popular and widely-tested starter theme `_s` which is also well-documented: https://underscores.me/
- Various custom post types and options have been added -- generally, you can identify them by the `tf-` naming convention. 
  -- Additions like this were designed based on well-tested patterns recommended in the [WP Codex](https://codex.wordpress.org) 

### Using the test data for local development
(not necessary, but highly recommended)   
  
If you like having a fresh wp db and install on your local machine when starting a new project:
  
- the `_db` contains sql statements for creating a wordpress database and inserting records containing recent TF site content
- use these statements (in order per filename) to create a new local test db before installing wordpress and updating `wp-config.php`
- some records have been redacted from the code for security reasons (if you need help setting up a test database, contact me (@haileypate). i feel your pain.)
