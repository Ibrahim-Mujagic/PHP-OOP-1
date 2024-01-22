<?php 

class Genre{
  public $genre;
  public $secondary_genre;
  public $tertiary_genre;

  public function __construct($_genre,$_secondary_genre,$_tertiary_genre = null) {
    $this->genre = $_genre;
    $this->secondary_genre = $_secondary_genre;
    $this->tertiary_genre = $_tertiary_genre;
  }

}