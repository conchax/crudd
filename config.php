<?php
//conectame a la base de datos
  define('DB_SERVER','127.0.0.1');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','password');
  define('DB_NAME','php_crud');

  $link = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

  if ($link->connect_error) {
    printf("Connect failed: %s\n", $link->connect_error);
    exit();
  }

?>
