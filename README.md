PHPowerCache
============

An autonomous browser cache manager

This short class atomaticly handles updating the browsers cache. It takes the time stamp of the file referenced and uses it as an argument in the uri. This will force the browser to request a new copy of the file whenever it is changed on the server end. 

here is some example code

  echo PHPC::js("/some/javascript.js");
  echo PHPC::css("/some/cssFile.css");
  echo '<img src="' . PHPC::uri("some/image.png") . '"/>';
