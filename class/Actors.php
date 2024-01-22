<?php 

class Actors{
  public $actor_protagonist;
  public $actor_antagonist;
  public $actor_extra;

  public function __construct($_actor_protagonist,$_actor_antagonist,$_actor_extra = null) {
    $this->actor_protagonist = $_actor_protagonist;
    $this->actor_antagonist = $_actor_antagonist;
    $this->actor_extra = $_actor_extra;
  }
}
