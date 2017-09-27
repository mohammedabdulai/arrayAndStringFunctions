<?php include("arrayFunctions.php"); ?>
<?php include("stringFunctions.php"); ?>

<?php

  /* STRING FUNCTIONS VARIABLES/PROPERTIES */	
  $strF = new stringFunctions();
  $str = "Hello World! My name is Mohammed Abdulai";
  $value = 046;
  $arr = array('Hello','World!','Beautiful','Day!');
  $input = "Hello";
  $link = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';

   
  $strF->chopThis($str);
  $strF->chrThis($value);
  $strF->chunkThis($str);
  $strF->countThis($str);
  $strF->explodeThis($str);
  $strF->implodeThis($arr);
  $strF->itrimThis($str);
  $strF->md5This($str);
  $strF->asciiThis($input);
  $strF->htmlentitieslThis($link);


/* ARRAY FUNCTIONS */
 

  $arrayF = new arrayFunctions();
  $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
  $prices=array("35","37","43", "75", "85", "95");
  $prices=array("35","37","53", "55", "85", "95");
  $values="3, 5, 6, 7";
  $flipValues=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $key="a";
  $colors=array("red","green","blue");


  $arrayF->chunkThis($cars);
  $arrayF->combineThis($cars, $prices);
  $arrayF->diffThis($prices, $prices2);
  $arrayF->fillThis($values);
  $arrayF->flipThis($flipValues);
  $arrayF->intersectThis($prices, $prices2);
  $arrayF->checkKey($key, $flipValues);
  $arrayF->printKeys($flipValues);
  $arrayF->mergeThis($prices,$prices2);
  $arrayF->popThis($colors);


?>