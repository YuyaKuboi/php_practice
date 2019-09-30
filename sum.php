<?php
/*
function sum($max){
    $result = 0;
    for($i = 0; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";
*/
//課題1.
function pro($number){
    return $number*2;
}
echo pro(35);
echo "\n";
//2.
function f($a , $b){
    $result = $a + $b;
return $result;
}
echo f(3 , 5);
echo "\n";
//3.

function a_p($arr){
    $result = 1;
    foreach ($arr as $array){
     $result *= $array;
    }
    return $result;
}
echo a_p(array(1, 3, 5, 7, 9));
echo "\n";
//4.
function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
        if($max_number < $a){
        $max_number = $a;    
        }
    }
    return $max_number;
}
echo max_array(array(2, 4, 6, 8, 10, 18, 12));
echo "\n";

//5.strip_tags
echo "<h1>strip_tagsについて</h1>
<p>実際に使うと</p>";
echo "\n";
$str = "<h1>strip_tagsについて</h1>
<p>実際に使うと</p>";
echo strip_tags($str);
echo "\n";
$str = "<h1>strip_tagsについて</h1>
<p>実際に使うと</p>";
echo strip_tags($str, "<p>");
echo "\n";
$str = "<ul>HTMLのタグを非表示にできる</ul>
<li>と共に表示させることもできる</li>";
echo strip_tags($str, "<ul>");
echo "\n";

//array push 配列に値を追加する関数
$western = array("spurs", "lakers", "suns", "jazz");
//まず配列を作る
array_push ($western, "clippers", "warriors");
//追加したい配列とその値を記述する。
print_r($western);

//array_merge 配列に別の配列をマージする（統合する）
$p_division = array("lakers", "suns", "kings");
$n_west = array("thunder", "blazers", "jazz");
$s_west = array("rockets",  "pelicans", "spurs");
//それぞれの配列を統合する。数字の配列も可。
$w_conference  = array_merge($p_division, $n_west, $s_west);
print_r($w_conference);

//time,mktime UNIXタイムスタンプの取得(1970年1月1日0時0分0秒からの経過秒数)
echo time() ."\n";
//現在の時刻の取得
echo mktime(1,51,30,10,1,2019) . "\n";
//指定日時のタイムスタンプを取得。mktime(時、分、秒、月、日、年)


 















