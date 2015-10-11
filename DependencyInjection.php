<?php
class DvdPlayer{

  public function playDisc(Disc $disc){
    echo "Now Playing: ".$disc->getMovieTitle();
    $tv = new Tv('Samsung 40"');
    $tv->sendToOutput($disc->getResource());
  }
}

class DvdPlayer{
  private $tv;

  public function __construct(){
    $tv->tv = new Tv('Samsung 40"');
  }
  public function playDisc(Disc $disc){

    echo "Now Playing: ".$disc->getMovieTitle();
    $this->tv->sendToOutput($disc->getResource());

  }
}