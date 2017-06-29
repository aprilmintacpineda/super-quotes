<?php
require 'classes/Generate.php';

$generate = new Generate(new RecursiveDirectoryIterator(__dir__. '\\raw'));
$collection = $generate->getCollection();
$authors = $generate->getAuthors();