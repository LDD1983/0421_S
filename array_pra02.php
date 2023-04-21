<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }

</style>
<?php
$nine  = [];

for ($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = " . $i*$j;
    }
}


// echo"<pre>";
// print_r($nine);
// echo "</pre>";

foreach($nine as $k => $str){
    echo $k ." , ";
   
    echo $str ." , ";
    if($k%9==8){
        echo"<br>";
    }  
}

echo "<hr>";
echo "<h1>威力彩</h1>";

echo rand(1,38);
echo "<br>";
echo rand(1,38);
echo "<br>";
echo rand(1,38);
echo "<br>";
echo rand(1,38);
echo "<br>";
echo rand(1,38);
echo "<br>";
echo rand(1,38);
echo "<br>";

echo"<hr>";


for($i=1;$i<=8;$i++)
{
    echo rand(1,38);
echo "<br>";
}

echo"<hr>";


$lottery=[];
while(count($lottery)<6){
     $tmp=rand(1,38);
    //  $tmp 在lottery有沒有重複
    echo $tmp;
    if(in_array($tmp,$lottery)){

    }else{
        $lottery[]=$tmp;
    }

    
    echo "<pre>";
    print_r($lottery);
    echo "</pre>";
}

foreach ($lottery as $nums) {
    echo $nums .",";
    # code...
}
echo"<br>";

echo rand (1,8);

echo"<hr>";

echo"<h1>2023-2523 閏年</h1>";

// date("Y");

// if (($year % 4 == 0) && ($year %100 !=0)  || $year % 400 == 0) {
//     echo $year .' 是閏年';
//   }
  
//   else{
//     echo $year .' 不是閏年';
//   }

  $leapyears=[];

  for($year = 2023; $year <= 2523; $year++) {
    if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        $leapyears[] = $year; // 如果是閏年，就存入陣列中
    }
}

foreach ($leapyears as $year) {
    echo $year . " , " ;
    # code...
}
echo "<hr>";

print_r($year);

echo "<hr>";


$t=2352;

if(in_array($t,$leapyears)){
    echo "leap";
}else{echo "not leap";}


echo"<h1>干支年</h1>";

$sky= [ "甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸", ];

$land=["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥",];

$skyland=[];

for ($i=0; $i <60; $i++) { 
    $skyland[]=$sky[$i%10] . $land[$i%12];
    # code...
}

echo "<pre>";
print_r($skyland);
echo "</pre>";
echo "<hr>";

$year=2053;



echo $skyland[($year-4)%60];

echo "<hr>";

echo"<h1>陣列反轉</h1>";

$a=[2,4,6,1,8,20] ;
$times= ceil (count($a)/2);
$max=count($a)-1;

for ($i=0; $i <$times ; $i++) { 
      $temp=$a[$i];
      $a[$i]=$a[$max-$i];
      $a[$max-$i]=$temp ;
    # code...
}
print_r($a);

echo "<hr>";


$input = [9,8,4,3,4,5,2,4];
$input = array_reverse($input);


print_r($input);

































