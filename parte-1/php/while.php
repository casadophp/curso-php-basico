<?php

// $i = 1;
// while($i <= 10) {
//   echo "<br />", $i++;
// }

// $i = 1;
// while($i <= 10):
//   echo "<br />", $i++;
// endwhile;

// print_r($array);

// echo "<br />",$array[0];
// echo "<br />",$array[1];
// echo "<br />",$array[2];
// echo "<br />",$array[3];
// echo "<br />",$array[4];

$array = [
  1,
  2,
  3,
  4,
  5
];
$total = count($array);

$i = -1;

while($i < $total) {
  $i++;
  echo "<br />" ,$array[$i];
}

for ($i = 0; $i <= 5; $i++) {
 echo "<br />" ,$array[$i];
}