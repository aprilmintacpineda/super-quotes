<?php
include 'make.php';

$generate = new Generate(new RecursiveDirectoryIterator(__dir__. '\\raw'));
$collection = $generate->getCollection();
$authors = $generate->getAuthors();

echo "Generating to <strong>". __dir__. '\\raw\\quotes.json</strong><br/>';

$combined_file = fopen('combined/quotes.json', 'w+');
fwrite($combined_file, json_encode($collection, JSON_PRETTY_PRINT));
fclose($combined_file);

echo "<br/>Generated a total of <strong>", count($collection), ' quotes<strong> from <strong>', count($authors), " authors</strong><br/>";

echo '<strong>Cheers!</strong>';