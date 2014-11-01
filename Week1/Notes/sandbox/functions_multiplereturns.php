<!DOCTYPE html>
<html>
<head>
    <title>Functions: Multiple Returns</title>
</head>
<body>

 <?php

 function add_subt($val1, $val2){
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return $add;    //but how can we return $subt too?
 }

 $result = add_subt(10, 5);
 echo $result;
 ?>


 <br />

 <p>Multiple Return:</p>
 <?php

  function add_subtract($value1, $value2){
     $addVal = $value1 + $value2;
     $subtVal = $value1 - $value2;
     return array($addVal, $subtVal);
  }

  $result_array = add_subtract(10, 5);
  echo "Add: " . $result_array[0] . "<br />";
  echo "Subtract: " . $result_array[1] . "<br />";

  //cleaner way to write code:
  list($add_result, $subt_result) = add_subtract(20, 7);
    echo "Add: " . $add_result . "<br />";
    echo "Subtract: " . $subt_result . "<br />";
  ?>


</body>
</html>