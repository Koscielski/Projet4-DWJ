<?php

namespace modele;

class Manager{
  protected function dbConnect(){
    $db = new PDO('mysql:host=localhost;dbname=alaska;charset=UTF-8', 'root', '');
    return $db;
  }
}
