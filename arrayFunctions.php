<?php

  class stringFunctions {

    public function __construct() {

      echo 'Below are my 10 Array Functions </br>';

    }

    public function chunkThis($cars) {
      echo 'Array array_chunk() Function</h1>';
      print_r($cars);
      print_r(array_chunk($cars,2));
      echo '<hr>';
    }

    public function combineThis($cars, $prices) {
      echo '<h1>Array array_combine() Function</h1>';
      $c=array_combine($cars,$prices);
      print_r($c);
      echo '<hr>';
    }

    public function diffThis($prices, $prices2) {
      echo '<h1>Array array_diff() Function</h1>';
      $result=array_diff($prices,$prices2);
      print_r($result);
      echo '<hr>';
    }

    public function fillThis($values) {
      echo '<h1>Array array_fill() Function</h1>';
      $a1=array_fill($values);
      print_r($a1);
      echo '<hr>';
    }

    public function flipThis($flipValues) {
      echo '<h1>Array array_flip() Function </h1>';
      print_r($flipValues);
      $result=array_flip($flipValues);
      print_r($result);
      echo '<hr>';
    }

    public function intersectThis($prices, $prices2) {
      echo '<h1>Array array_intersect() Function</h1>';
      $result=array_intersect($prices,$prices2);
      print_r($result);
      echo '<hr>';
    }

    public function checkKey($key, $arr) {
      echo '<h1>Array array_key_exists() Function </h1>';
      if (array_key_exists($key,$arr))
        {
        echo "Key exists!";
        }
      else
        {
        echo "Key does not exist!";
        }
      echo '<hr>';
    }

    public function printKeys($array) {
      echo '<h1>Array array_keys() Function</h1>';
      print_r($array);
      echo 'The keys are: ';
      print_r(array_keys($array));
      echo '<hr>';
    }

    public function mergeThis($in1, $in2) {
      echo '<h1>Array array_merge() Function </h1>';
      print_r(array_merge($in1,$in2));
      echo '<hr>';
    }

    public function popThis($array) {
      echo '<h1>Array array_pop() Function</h1>';
      print_r($array);
      array_pop($array);
      print_r($array);
      echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>
