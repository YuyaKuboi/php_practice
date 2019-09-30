/*
$a = 3;
$b = 7;
echo $a + $b;

$array_manth = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_manth[7];

$hello = "Hello,";
$name = "Kuboi";
$world = "'s World!";
echo $hello . $name . $world;

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar_2018["December"];
*/

<?php
//ここから課題
$name = "クボイユウヤ";
if ($name) {
  echo "私はクボイユウヤです";
} else {
  echo "$name ではありません";
}  

$total = 0;
for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("梨", "柿", "桃", "りんご", "みかん");
foreach($fruits as $fruits){
  echo "好きなフルーツは" . $fruits;
  echo "\n";
}

$a = 1;
$b = 100;
for ($i = $a; $i <= $b; $i++){
  if(($i % 5) == 0){
    echo $i;
    echo "\n";
  }
}

