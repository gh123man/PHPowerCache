<?php
/*
    By Brian Floersch (gh123man@gmail.com)
    A simple autonomous browser cache manager.
*/

class PHPC {

    public static function js($uri) {
        return '<script type="text/javascript" src="' . PHPC::uri($uri) . '"></script>' . "\n";
    }
    
    public static function css($uri) {
        return '<link href="' . PHPC::uri($uri) . '" rel="stylesheet" type="text/css">' . "\n";
    }
    
    public static function uri($uri) {
        if ( strpos($uri, '/', 0) == 0 ) {
            $localFile = substr($uri, 1, strlen($uri));
        } else {
            $localFile = $uri;
        }
       
        return $uri . "?PHPC=" . filemtime($localFile);
    }
}

?>
