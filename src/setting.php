<?php

// Database connection settings

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

       
         // Database connection settings           
          "db" => [
            "host" => "localhost", // nama host
            "dbname" => "ckp",     // nama database
            "user" => "root",	   // user 		
            "pass" => ""           // pass
        ],
    ],
];


		
?>		