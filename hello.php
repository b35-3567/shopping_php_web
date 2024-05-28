<?php
echo 'hello bạn ơiv555 ';
echo 'vì sao bạn ơi tôi<br>  
   <ul>
   <li>không thể bên bạn được</li>
   <li>không thể bên bạn được</li>
   </ul>';
$name = "Một câu nói<br>";
echo $name;
$a = 89;
$b = 'g';
if ($a != $b) {
  echo "đúng";
} else {
  echo "sai";
}
////////////////////////////////
echo '<br>ví dụ 1 <br>';
$numbers = array(1, 2, 3, 4, 5);
$i = 0;
echo 'số lượng phẩn tử trong mảng',count($numbers),'<br>';
while ($i < count($numbers)) {
    echo $numbers[$i] . "<br>";
    $i++;
}
//////////////////////////////
echo '<br> ví duj2 <br>';
$numbers = array(1, 2, 3, 4, 5);
$i = 0;

while ($i < count($numbers))
    echo $numbers[$i++] . "<br>";