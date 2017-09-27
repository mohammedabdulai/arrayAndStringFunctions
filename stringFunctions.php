<?php

  class stringFunctions {

    public function __construct() {

      echo 'These are my 10 String Functions </br>';

    }

    public function chopThis($str) {
      echo '<h1>String Chop Function</h1>';
      echo $str . '<br>';
	  echo chop($str,"World!");
      echo '<hr>';
    }

    public function chrThis($value) {
      echo '<h1>String chr() function</h1>';
      $str = chr($value);
      echo("You $str me forever!");
      echo '<hr>';
    }

    public function chunkThis($str) {
      echo '<h1>String chunk_split() Function </h1>';
      print($str);
      echo chunk_split($str,1,".");
      echo '<hr>';
    }

    public function countThis($str) {
      echo '<h1>String count_chars() Function</h1>';
      print($str);
      echo count_chars($str,3);
      echo '<hr>';
    }

    public function explodethis($str) {
      echo '<h1>String explode() Function </h1>';
      print($str);
      print_r (explode(" ",$str));
      echo '<hr>';
    }

    public function implodeThis($arr) {
      echo '<h1>String implode() Function</h1>';
      print_r($arr);
      echo implode(" ",$arr);
      echo '<hr>';
    }

    public function itrimThis($str) {
      echo '<h1>String ltrim() Function </h1>';
      echo $str . "<br>";
	  echo ltrim($str,"Hello");
      echo '<hr>';
    }

    public function asciiThis($input) {
      echo '<h1>String ord() Function</h1>';
      print($input);
      echo ord($input);
      echo '<hr>';
    }

    public function md5This($str) {
      echo '<h1>String md5() Function </h1>';
      print($str);
      echo md5($str);
      echo '<hr>';
    }

    public function htmlentitiesThis($link) {
      echo '<h1>String htmlentities() Function</h1>';
      print($link);
      echo htmlentities($link);
      echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> End of String Functions';

    }
  }
  
?>
