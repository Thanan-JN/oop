<?php
  $temp = array(1,5,3,4,6,9,10,7,8,2);
  function findAverage($temp)
  {
	 $sum = 0;
     for($i=0;$i<count($temp);$i++)
	 {
		 $sum = $sum+$temp[$i];
		 
	 }	
     $avg = $sum/count($temp);	 
     echo "Avarage is:",$avg,"<br>";	 
  }
  function find_lowest($temp,$num)
  {
	 
     sort($temp);
	 for($j=0;$j<$num;$j++)
	 {
		 echo $temp[$j],", ";
	 }
	 
	 echo "Lowest val is:",$temp[0],"<br>";	
  }
  function slice($temp)
  {
	  sort($temp);
	  echo "Lowest Val";
	  print_r (array_slice($temp,0,1));
	  echo "<br>";
	  echo "highest Val";
	  print_r (array_slice($temp,count($temp)-2,count($temp)-1));
	  
	  
  }
 
  findAverage($temp);
  find_lowest($temp,5);
  slice($temp);

  echo "/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// <br>";
?>
<?php
 $temp1 = array(4,5,6,7,9);
 echo current($temp1),"<br>";
 echo key($temp1),"<br>";
 echo next($temp1),"<br>";
 echo key($temp1),"<br>";
 echo next($temp1),"<br>";
 echo end($temp1),"<br>";
 //reset($temp1),"<br>";
 echo current($temp1),"<br>";
 
 $myBooks = array(
  array("title"=>"The Grapes of Wrath",
  "author"=>"John Steinbeck",
  "pubYear"=>1939),
  array(
  "title"=>"The trial",
  "author"=>"Franz Kafka",
  "pubYear"=>1929
  ));
  print_r($myBooks);
  echo "<br>";
  echo "/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// <br>";
  // PHP Date
  echo "Today is:".date("Y/m/d")."<br>";
  echo "Today is:".date("Y.m.d")."<br>";
  echo "Today is:".date("Y-m-d")."<br>";
  echo "Today is:".date("|")."<br>";
 
 
 
 






?>