<?php

namespace App\Service;

use App\Container\Container;

class HomeService {
  
  use Container;

  public function __construct() {
    global $App__homeRepository;
    $this->homeRepository = $App__homeRepository;
  }
}