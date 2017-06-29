<?php
include 'init.php';

echo 'Generating to <strong>'. __dir__. '\\raw\\quotes.json</strong><br><br>';

// Generate text file
if(true === ($textFile = Make::textFile($collection))) {
  echo 'Generated TEXT file.<br>';
} else {
  echo '~ Failed to create TEXT file. '. $textFile. '<br>';
}

// Generate JSON file
if(true === ($jsonFile = Make::jsonFile($collection))) {
  echo 'Generated JSON file.<br>';
} else {
  echo '~ Failed to create JSON file. '. $jsonFile. '<br>';
}

/**
 * Generate as various arrays
 * JavaScript
 * PHP
 */
if(true === ($variousArrays = Make::variousArrays($collection))) {
  echo 'Generated as various arrays.<br>';
} else {
  echo '~ Failed to create various arrays. '. $variousArrays. '<br>';
}

echo '<br/>Generated a total of <strong>', count($collection), ' quotes<strong> from <strong>', count($authors), ' authors</strong><br>';