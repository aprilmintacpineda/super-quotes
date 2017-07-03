<?php
spl_autoload_register(function($class) {
  if(file_exists(__dir__. '\\classes/'. $class. '.php')) {
    include_once __dir__. '\\classes\\'. $class. '.php';
  } else if(file_exists(__dir__. '\\config\\'. $class. '.php')) {
    include_once __dir__. '\\config\\'. $class. '.php';
  } else {
    return false;
  }
});

$generate = new Generate(new RecursiveDirectoryIterator(__dir__. '\\raw'));
$collection = $generate->getCollection();
$authors = $generate->getAuthors();