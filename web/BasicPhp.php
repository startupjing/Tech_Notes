<?php
  
  //strings
  $apple = "apple";
  $banana = "banana";
  $fruits = "$apple\n$banana";
  $fruits = $apple."\n".$banana;
  

  //arrays
  $fruits = array("Apple", "Banana", "Grape");
  echo $fruits[1];
  echo count($fruits);

  $fruits["a"] = "apple";
  $fruits["b"] = "banana";
  echo $fruits["a"];
  $keys = array_keys($fruits);
  echo $keys[1];


  //conditional
  $grade = 10;
  if($grade < 60){
  	  echo "F";
  }elseif($grade < 70){
  	  echo "B";
  }else{
  	  echo "A";
  }

  switch($grade){
  	  case 60:
  	  case 70:
  	     echo "Something";
  	     break;
  	  case 80:
  	     echo "better";
  	     break;
  	  default:
  	     echo "default";
  	     break;
   }


   //loops
   $mystring = "";
   $i = 0;
   while($i < 5){
   	  $mystring .= "haha";
   	  $i ++;
   }

   $arr = array("apple", "banana", "cat");
   for($i=0; $i<count($arr); $i++){
   	   $mystring .= $i .": ".$mystring[$i];
   }

   foreach($arr as $key => $value){
   	   $mystring .= $key .": ".$value;
   }


   //functions
   function add($x, $y){
   	   return $x + $y;
   }
   echo add(3,5);

   function sayHello($name="John"){
   	   return "Hello, $name";
   }
   echo sayHello("Todd");
   echo sayHello();


   //OOP
   class Food{
   	  protected $name;

   	  function _construct($name){
   	  	  $this->name = $name;
   	  }

   	  static function getDefinition(){
   	  	  return "Food is good";
   	  }

   	  function formatName(){
   	  	  return "I love ".$this->name;
   	  }
    }

    class Fruit extends Food{
    	function formatName(){
    		return Food::formatName() . "(fruit)";
    	}
    }

    $fruit = new Fruit("cherry");
    echo $fruit->formatName();
    echo Fruit::getDefinition();


    //printing
    $medals = array("US" => array(1,2,3), "UK" => array(1,2,3), "CH" => array(1,2,3));
    foreach($medals as $country => $counts){
    	echo sprintf("<tr>
    		              <td>%s</td>
    		              <td>%d</td>
    		              <td>%d</td>
    		              <td>%d</td>
    		          </tr>", htmlentities($country), $counts[0], $counts[1], $counts[2]);
        printf("this is equivalent");
    }

?>
