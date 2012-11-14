ShrinkURL
=========

Yes this is another URL shortener.

Takes a longUrl from the POST variables and shortens it down to 5 alphanumeric characters.

[Thank you] (http://stackoverflow.com/questions/4356289/php-random-string-generator)

[Example Implementation] (http://ssebastian.koding.com/index.html)

Also in order to not have to use the ".php" on the end of all of the urls you'll have to append the follwing on to your .htaccess file
(which I found (created) in the /var/www) This is also in the .htaccess file

	RewriteCond %{REQUEST_FILENAME}.php -f
	RewriteRule !.*\.php$ %{REQUEST_FILENAME}.php [L]