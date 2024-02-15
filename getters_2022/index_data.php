<?php

// カテゴリグループ対応 /////////////////////////////////////////////////////////////////////////////////////
		
		$list_life   = array( 'gs22_004' );
		$list_work   = array( 'gs22_005' );
		$list_meet   = array( 'gs22_006' );
		$list_health = array( 'gs22_007' );
		$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
		$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
		$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );
		$SmartyObj->assign( 'list_health', getIndexData( $list_health ) );


?>
