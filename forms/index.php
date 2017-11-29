<?php
//var_dump($_GET);
$x =$_GET["x"];
$y =$_GET["y"];
$op =$_GET["op"];
echo "<br/>";
if($op=="add"){
  echo "$x plus $y =";
  echo $x + $y;
}elseif ($op=="sub") {
  echo "$x minus $y =";
  echo $x - $y;
}elseif ($op=="mult") {
  echo "$x times $y =";
  echo $x * $y;
}else{
  echo "please choose operation";
}
 ?>
