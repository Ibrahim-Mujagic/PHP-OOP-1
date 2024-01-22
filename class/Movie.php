<?php

class Movie{
  public $title;
  public $protagonist;
  public $actors;
  public $image;
  public $release_date;
  public $genre;
  public $age_wachers;

  /**
   * @param String $_title 
   * @param String $_protagonist 
   * @param Actors $_actors
   * @param Date $_release_date
   * @param Number $_age_wachers
   * @param Genre $_genre, 
   */
  public function __construct($_title,$_protagonist,Actors $_actors,$_release_date,$_age_wachers,Genre $_genre,) {
    $this->title = $_title; 
    $this->protagonist = $_protagonist; 
    $this->actors = $_actors; 
    $this->release_date = $_release_date; 
    $this->age_wachers = $_age_wachers; 
    $this->genre = $_genre; 
  }
  public function checkAgeWacher() {
    if ($this->age_wachers < 18) {
      return true;
    }else{
      return false;
    }
  }
  public function addImage($_image){
    $this->image = $_image;
  }

}

$wonka = new Movie('Wonka','Timothée Chalamet',new Actors('Timothée Chalamet','Calah Lane','Hugh Grant'),'14 dicembre 2023',9,new Genre('Commedia','Avventura'));
$wonka->addImage('https://www.warnerbros.it/wp-content/uploads/2023/07/Wonka_Poster-Italia.jpg');


$enea = new Movie('Enea','Pietro Castellitto', new Actors('Pietro Castellitto','Giorgio Quarzo Guarascio'),'11 gennaio 2024',18,new Genre('Drammatico','Commedia'));
$enea->addImage('https://i.ytimg.com/vi/W26p_-d5fio/sddefault.jpg');
