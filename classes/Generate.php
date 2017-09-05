<?php
class Generate {
  protected $authors = [],
            $collection = [],
            $directory = null;

  /**
   * requires the directory
   * @param RecursiveDirectoryIterator $directory
   */
  public function __construct(RecursiveDirectoryIterator $directory) {
    // get all files in the /raw directory
    // iterator that can be used to iterate through the files
    $iterator = new RecursiveIteratorIterator($directory);

    foreach($iterator as $file) {
      $target_file = @file_get_contents(Config::get('addends'). $file->getFileName());

      if($target_file) {
        // convert the file contents to json
        $json = json_decode($target_file, true);

        if($json) {
          /*
           * if it's in json, simply merge the arrays
           * assuming:
           * quote = the body of the quote
           * name = the name of author
           */
          $this->collection = array_merge($json, $this->collection);
        } else {
          foreach(explode("\n", $target_file) as $target_file) {
            // separate the quote and the author
            $quote = explode('~', $target_file);
            // format the author's name
            $author = ucwords(strtolower(rtrim($quote[1])));

            // add this collection to the $collection array
            $this->collection[] = [
              'quote' => ucfirst(rtrim($quote[0])),
              'name' => $author
            ];

            // add unique authors to $authors array
            if(!in_array($quote[1], $this->authors)) {
              $this->authors[] = $author;
            }
          }
        }
      }
    }
  }

  /**
   * $this->collection getter
   * @return array
   */
  public function getCollection() {
    return $this->collection;
  }

  /**
   * $this->authors getter
   * @return array
   */
  public function getAuthors() {
    return $this->authors;
  }
}