<?php

// カテゴリグループ対応 /////////////////////////////////////////////////////////////////////////////////////
		
		$list_life   = array( 'gq24_004' );
		$list_work   = array( 'gq24_005' );
		$list_meet   = array( 'gq24_006' );
		$list_health = array( 'gq24_007' );
		$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
		$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
		$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );
		$SmartyObj->assign( 'list_health', getIndexData( $list_health ) );


?>
