PHPowerCache
============

An autonomous browser cache manager

This short class atomaticly handles updating the browsers cache. It takes the time stamp of the file referenced and uses it as an argument in the uri. This will force the browser to request a new copy of the file whenever it is changed on the server end. 

here is some example code

    echo PHPC::js("/some/javascript.js");
    echo PHPC::css("/some/cssFile.css");
    echo '<img src="' . PHPC::uri("some/image.png") . '"/>';

your httpd.conf for apache should contain something like this:


    <IfModule mod_expires.c>
      ExpiresActive On
      ExpiresDefault "access plus 1 seconds"
      ExpiresByType text/html "access plus 1 seconds"
      ExpiresByType image/gif "access plus 12 months"
      ExpiresByType image/jpeg "access plus 12 months"
      ExpiresByType image/png "access plus 12 months"
      ExpiresByType text/css "access plus 1 week"
      ExpiresByType text/javascript "access plus 1 week"
      ExpiresByType application/x-javascript "access plus 1 week"
      ExpiresByType text/xml "access plus 1 week"
    </IfModule>
