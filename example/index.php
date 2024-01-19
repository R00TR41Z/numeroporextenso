<?php
  include __DIR__.'/../vendor/autoload.php';

  use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

  $extenso = new NumeroPorExtenso('metical');
  echo $extenso->converter(1000000)."\n\n";