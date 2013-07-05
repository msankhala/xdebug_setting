<?php
ini_set('xdebug.auto_trace', 'On');

 /* Type: boolean, Default value: 0
Normally you need to use a specific HTTP GET/POST variable to start remote debugging (see Remote Debugging). When this setting is set to 1, Xdebug will always attempt to start a remote debugging session and try to connect to a client, even if the GET/POST/COOKIE variable was not present. */
ini_set('xdebug.remote_autostart', 0); 
ini_set('xdebug.remote_connect_back', 1); 


?>