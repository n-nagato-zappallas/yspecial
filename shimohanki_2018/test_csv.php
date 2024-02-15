<?php
//     http://web-dev.ura.pga.jp:8080/yspecial/shimohanki_2018/test_csv.php

require_once './../function.php';
require_once './logic.php';
$self = new selfInfo;

// spshimada_zap
//$csv = "fortune_date,birthday_self,birthday_other,sex_self,shimada[a1],shimada[a2],shimada[year1],shimada[year2],shimada[month1],shimada[month2]\r\n";
// suisho_zap
//$csv = "fortune_date,birthday_self,birthday_other,sex_self,suisho[seiza1],suisho[seiza2],suisho[syuku1],suisho[syuku2]\r\n";
// complete_zap
//$csv = "fortune_date,birthday_self,birthday_other,sex_self,complete[seiza1],complete[seiza2]\r\n";
// fujiko_ccs
$csv = "fortune_date,birthday_self,birthday_other,sex_self,fujiko[a1],fujiko[a2],fujiko[2A]\r\n";
// hosoki_ccs
//$csv = "fortune_date,birthday_self,birthday_other,sex_self,hosoki[a1],hosoki[a2],hosoki[b1],hosoki[b2],hosoki[2A]\r\n";

$now = date("Ymd");
//$now = '20180701';
//$now = '20180801';
$self->set( 'now', $now );
$self->set( 'year_now', substr($now, 0, 4) );
$self->set( 'month_now', substr($now, 4, 2) );
$self->set( 'mday_now', substr($now, 6, 2) );

for( $y1 = 1970; $y1 <= 1985; $y1++ ) {
	for( $m1 = 1; $m1 <= 12; $m1++ ) {
		for( $d1 = 1; $d1 <= 31; $d1++ ) {
			if( $m1 > 1 && $d1 > 1 ) continue;
			$self->set( 'birth_year_self', $y1 );
			$self->set( 'birth_mon_self', $m1 );
			$self->set( 'birth_mday_self', $d1 );
			for( $s = 1; $s <= 2; $s++ ) {
				$self->set( 'sex_self', $s );
				for( $p = 1; $p <= 2; $p++ ) {
					$menuData = array( 'person' => $p );
					for( $y2 = 1970; $y2 <= 1985; $y2++ ) {
						for( $m2 = 1; $m2 <= 12; $m2++ ) {
							for( $d2 = 1; $d2 <= 31; $d2++ ) {
								if( $m2 > 1 && $d2 > 1 ) continue;
								if( ( $p == 1 || ( $y1>1970 || $m1>1 || $d1>1 ) ) && ( $y2>1970 || $m2>1 || $d2>1 ) ) continue;
								if( $p == 2 && ( $y1>1970 || $m1>1 || $d1>1  ) ) continue;
								$self->set( 'birth_year_other', $y2 );
								$self->set( 'birth_mon_other', $m2 );
								$self->set( 'birth_mday_other', $d2 );
								$row = $now ."," .sprintf("%04d%02d%02d",$y1,$m1,$d1) ."," .($p==1?'':sprintf("%04d%02d%02d",$y2,$m2,$d2)) ."," .$s;
								
								//$lc = get_logic_cd( 'spshimada_zap' );
								//$row .= ",".$lc['a1'].",".$lc['a2'].",".$lc['d'].",".$lc['f'].",".$lc['c'].",".$lc['h']."\r\n";
								
								//$lc = get_logic_cd( 'suisho_zap' );
								//$row .= ",".$lc['a1'].",".$lc['a2'].",".$lc['b1'].",".$lc['b2']."\r\n";
								
								//$lc = get_logic_cd( 'complete_zap' );
								//$row .= ",".$lc['a1'].",".$lc['a2']."\r\n";
								
								$lc = get_logic_cd( 'fujiko_ccs' );
								$row .= ",".$lc['a1'].",".$lc['a2'].",".$lc['2A']."\r\n";
								
								//$lc = get_logic_cd( 'hosoki_ccs' );
								//$row .= ",".$lc['a1'].",".$lc['a2'].",".$lc['b1'].",".$lc['b2'].",".$lc['2A']."\r\n";
								
								$csv .= $row;
							}
						}
					}
				}
			}
		}
	}
}


/**/
header( 'Content-Type: application/octet-stream' );
header( 'Content-Disposition: attachment; filename=test_data' .date("Ymd") .'.csv' );

$enc = mb_convert_encoding( $csv, "sjis-win", 'utf-8' );

echo $enc;
 ?>