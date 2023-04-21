<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<h1>Array 陣列</h1>

<?php

$a[1] = "A";
$a['001'] = "B";
$a['name'] = "johnny";
$a['sername'] = "lee";
// $a='cdef';
$a=[
    [22,33,44,55],
    [29,12,33,77],
    [98,22]
  ];

  $a=[
    '數學'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '國文'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>58
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>73
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>90
                ]
        
            ]
];
echo"<pre>";
print_r($a) ."<br>";
echo"</pre>";

$b[] = "B";
$b[] = "C";
$b[] = "D";
$b[] = "E";


$b=[
    [22,33,44,55],
    [29,12,33,77],
    [98,22]
  ];



echo"<pre>";
print_r($b) ."<br>";
echo"</pre>";

$c = ["A", "B", "C"];
$c[] = "D";
$c[] = "E";
$c['total'] = 4;
$c['total'] = 5;

echo"<pre>";
print_r($c) .'$c';
echo"</pre>";

$d[] = "a";
$d["aaa"] = "aaa";
$d[46782] = 'hfuio';
$d["if" ] = "else";
$d["true"] = "false";
$d["?"] = "$";




echo "<pre>";
print_r($d);
echo "</pre>";







echo "<hr>";
$name = "145";


if (is_array($name)) {
    echo "array";
    # code...
}else{
    echo "not array";
}
echo "<br>";

if(in_array("D",$a)){
    echo "D in array";
}else{
    echo "D not in ";
}
echo "<br>";

$ch=is_array($a);

if ($ch) {
    echo "array";
    # code...
}else{
    echo "not array";
}
echo "<br>";

$h = [12,15,156,45,654,644];
sort($h);

echo "<pre>";
print_r($h) ;
echo "</pre>";

echo "<hr>";

$i = 10;
$j = 20;
$k = $i + $j;
$k = &$i + $j;



echo $k ."<br>";
echo $i;

echo "<hr>";



$fill = array_fill(1,25,'hi');

echo "<pre>";
print_r($fill);
echo "</pre>";

echo "<pre>";
print_r($d) ;
echo "</pre>";


echo array_search("a",$d);

echo "<br>";

$keys=array_keys($d);

echo "<pre>";
print_r($keys) ;
echo "</pre>";

$merge = array_merge($a,$b);
echo "<pre>";
print_r($merge) ;
echo "</pre>";

$seA = serialize($h);
$ueA = unserialize($seA);

echo $seA ."<br>";

print_r($ueA);

echo "<hr>";

$imp = implode('-',$d);
echo $imp;

$lo="fjieo joiefj joiej jiowejoj disojf psojfpo";
$exP = explode(" ",$lo );



echo "<pre>";
print_r($exP) ;
echo "</pre>";


















?>