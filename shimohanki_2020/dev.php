<?php
require_once './logic.php';

//     http://web-dev.ura.pga.jp:8080/yspecial/shimohanki_2019/dev.php


$by = 1979;
$bm = 3;
$bd = 30;

//$ny = date('Y');
//$nm = date('m');
//$nd = date('d');
$ny = '2019';
$nm = '10';
$nd = '08';

///////////////////// 運命日テスト


	// 運命数 0 - 9
	$y1 = get_singular( 0,$by );
	$m1 = get_singular( 0, $bm );
	$d1 = get_singular( 0, $bd );
	$num = get_singular( 0, $y1 .$m1 .$d1 );
	
	$ret1 = array( 0, 0, 0, 0, 0 );
	$arrA = array( 0, 1, 3, 5, 7 );
	$arrB = array( 0,  801,  816,  901,  916, 1001, 1016, 1101, 1116, 1201 );
	$div = $num==2 || $num==6 ?16 :15;
	
	for( $i=1; $i<=4; $i++ ) {
		$num_c = ($num +9 -$arrA[$i]) %9 +1;
		echo ((int)( "" .$arrA[$i] .$bm .$bd.$arrA[$i] ) *$arrA[$i]) .':'.( ((int)( "" .$arrA[$i] .$bm .$bd.$arrA[$i] ) *$arrA[$i]) %$div ).'<br>';
		$ret1[$i] = $arrB[$num_c] + ((int)( "" .$arrA[$i] .$bm .$bd .$arrA[$i] ) *$arrA[$i]) %$div;
	}
	foreach( $arrB as $key => $val ) {
		for( $i=1; $i<=4; $i++ ) {
			if( $ret1[$i] >= $val ) $ret2[$i] = $key;
		}
	}


echo '<br> <hr> 運命日テスト<br>';
echo '<pre>';
var_dump($ret1);
echo '</pre>';
echo '<pre>';
var_dump($ret2);
echo '</pre>';
echo "　　　　" .'<br>';


///////////////////// 四柱推命テスト

//# 十干
$kan=		array( '', '甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸' );
//# 十二支
$eto=		array( '', '子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥' );
//# 十二運
$un=		array( '', '長生', '沐浴', '冠帯', '建禄', '帝旺', '衰', '病', '死', '墓', '絶', '胎', '養' );

$juniun = array( '',
	array( '',  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12,  1 ),
	array( '',  7,  6,  5,  4,  3,  2,  1, 12, 11, 10,  9,  8 ),
	array( '', 11, 12,  1,  2,  3,  4,  5,  6,  7,  8,  9, 10 ),
	array( '', 10,  9,  8,  7,  6,  5,  4,  3,  2,  1, 12, 11 ),
	array( '', 11, 12,  1,  2,  3,  4,  5,  6,  7,  8,  9, 10 ),
	array( '', 10,  9,  8,  7,  6,  5,  4,  3,  2,  1, 12, 11 ),
	array( '',  8,  9, 10, 11, 12,  1,  2,  3,  4,  5,  6,  7 ),
	array( '',  1, 12, 11, 10,  9,  8,  7,  6,  5,  4,  3,  2 ),
	array( '',  5,  6,  7,  8,  9, 10, 11, 12,  1,  2,  3,  4 ),
	array( '',  4,  3,  2,  1, 12, 11, 10,  9,  8,  7,  6,  5 ),
);

$arr = get_fortune_no( $by, $bm );
$destiny_no = $arr[1] -1;

$arr2 = get_fortune_no( $ny, $nm );
$destiny_no2 = $arr2[1] -1;
$s2 = ( $destiny_no2 -1 ) %12 +1;

echo '<br> <hr> 四柱推命テスト<br>';
echo '【運命数】<br>';
echo "　　　　" .$destiny_no .'<br>';

echo '【十干】<br>';
$k = ( $destiny_no -1 ) %10 +1;
echo "　　　　" .$k .':' .$kan[$k] .'<br>';

echo '【十二支】<br>';
$s = ( $destiny_no -1 ) %12 +1;
echo "　　　　" .$s .':' .$eto[$s] .'<br>';

echo '【十二運】<br>';
$u = $juniun[ $k ][ $s2 ];
echo "　　　　" .$u .':' .$un[$u] .'<br>';



///////////////////// 九星気学テスト
/*
	2019年[己亥] の年盤(2019/2/4～2020/2/3)
		　　南　　
		　七三五　
		東六八一西
		　二四九　
		　　北　　
	
	この年盤のどこに本命星があるかで、
	年運が決まる
	
	定位盤方位ID
		1 北  , 2 南西, 3 東  , 4 東南, 5 中央, 6 北西, 7 西  , 8 北東, 9 南
*/

$kyu = array( '', '一白水星', '二黒土星', '三碧木星', '四緑木星', '五黄土星', '六白金星', '七赤金星', '八白土星', '九紫火星' );
$houi = array( '', '北', '南西', '東', '東南', '中央', '北西', '西', '北東', '南' );
// key : 本命星ID
// val : 定位盤ID
$d = array( '', 7, 8, 9, 1, 2, 3, 4, 5, 6 );
$h = get_singular( 0, 11 -get_singular( 0, $by ) );

echo '<br> <hr> 九星気学テスト<br>';
echo '【本命星】<br>';
echo "　　　　" .$h .':' .$kyu[$h] .'<br>';

echo '【年運】<br>';
echo "　　　　" .$d[$h] .':' .$houi[ $d[$h] ] .'<br>';


///////////////////// 唯ちゃん干支テスト

$arr = get_fortune_no( $ny, $nm );
$n = $arr[0];
$arr = get_fortune_no( $by, $bm );
$e = $arr[0];

$c = 1;
for( ; $c <= 12; $c++ ) {
	if( $n == $e ) break;
	$e = $e >= 12 ?1 :$e +1;
}


echo '<br> <hr> 唯ちゃん干支テスト<br>';
echo '【今年干支】<br>';
echo "　　　　" .$n .':' .$eto[$n] .'<br>';
echo '【自分干支】<br>';
echo "　　　　" .$arr[0] .':' .$eto[$arr[0]] .'<br>';

echo '【年運】<br>';
echo "　　　　" .$c .'<br>';

 ?>