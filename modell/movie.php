<?php 

class Movie{
  public $name;
  public $autor;
  public $actor;

  public function __construct(string $_name, string $_autor, string $_actor)
  {
    $this->name = $_name;
    $this->autor = $_autor;
    $this->actor = $_actor;
  }

  public function getNameAndAutor(){
    return "$this->name creato da $this->autor";
  }
}