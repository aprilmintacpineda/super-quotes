<?php

class Make {
  public static function jsonFile(Array $collection) {
    try {
      if(!is_dir('combined/')) throw new Exception('Directory combined not found.');

      $combined_file = fopen('combined/quotes.json', 'w+');
      fwrite($combined_file, json_encode($collection, JSON_PRETTY_PRINT));
      fclose($combined_file);

      return true;
    } catch(Exception $e) {
      return $e->getMessage();
    }
  }

  public static function textFile(Array $collection) {
    try {
      if(!is_dir('combined/')) throw new Exception('Directory **combined** not found.');

      $stringed = '';

      foreach($collection as $item) {
        $stringed .= $item['quote']. ' ~ '. $item['name']. "\n";
      }

      $combined_file = fopen('combined/quotes.txt', 'w+');
      fwrite($combined_file, $stringed);
      fclose($combined_file);

      return true;
    } catch(Exception $e) {
      return $e->getMessage();
    }
  }

  public static function variousArrays(Array $collection) {
    try {
      if(!is_dir('combined/')) throw new Exception('Directory combined not found.');

      // PHP arrays
      $numeric = "// Numeric array of quotes\n// Each array is a quote\n// With the author after the `~`\n". '$numeric = ['. "\n";
      $assoc = "// Associative array of quotes\n// Each array is an associative array of quotes\n// With keys `quote` for the body and `name` for the author\n". '$assoc = [' . "\n";
      $javaScript = "// JavaScript array\nvar quotes = [\n";

      foreach($collection as $item) {
        $numeric .= "\t'". addslashes($item['quote']) ." ~ ". addslashes($item['name']) ."',\n";
        $javaScript .= "\t'". addslashes($item['quote']) ." ~ ". addslashes($item['name']) ."',\n";
      }

      foreach($collection as $item) {
        $assoc .= "\t[\n\t\t'quote' => '". addslashes($item['quote']) ."',\n\t\t'name' => '". addslashes($item['name']) ."'\n\t],\n";
      }

      $numeric .= '];';
      $assoc .= '];';
      $javaScript .= '];';

      $numeric = "<?php\n\n{$numeric}\n";
      $assoc = "<?php\n\n{$assoc}\n";

      // create PHP numeric arrays
      $combined_file = fopen('combined/quotes_numeric_array.php', 'w+');
      fwrite($combined_file, $numeric);
      fclose($combined_file);
      // create PHP associative arrays
      $combined_file = fopen('combined/quotes_assoc_array.php', 'w+');
      fwrite($combined_file, $assoc);
      fclose($combined_file);
      // create JavaScript array
      $combined_file = fopen('combined/quotes.js', 'w+');
      fwrite($combined_file, $javaScript);
      fclose($combined_file);

      return true;
    } catch(Exception $e) {
      return $e->getMessage();
    }
  }
}