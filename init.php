<?php
require_once 'classes/Generate.php';
require_once 'classes/Make.php';

$generate = new Generate(new RecursiveDirectoryIterator(__dir__. '\\raw'));
$collection = $generate->getCollection();
$authors = $generate->getAuthors();