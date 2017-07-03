<?php

class Config {
  private static $config = [
    'output' => __dir__. '\..\builds\\',
    'addends' => __dir__. '\..\raw\\'
  ];

  public static function get($cons) {
    if(array_key_exists($cons, self::$config)) {
      return self::$config[$cons];
    }

    return false;
  }
}