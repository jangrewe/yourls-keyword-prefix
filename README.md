Add the following line to 'user/config.php' and 
set the prefix to your preferred character or string:

```define('KEYWORD_PREFIX', '!');```

You may also want to move the YOURLS folder into a subdirectory,
in case you want to run a different site on your domain, so
you also have to change the '.htaccess' file from:

```RewriteRule ^(.*)$ /yourls-loader.php [L]```

to:

```RewriteRule ^(.*)$ /path-to-yourls/yourls-loader.php [L]```
