<?php

// カテゴリグループ対応 /////////////////////////////////////////////////////////////////////////////////////
		
		$list_life   = array( 'gr23_004' );
		$list_work   = array( 'gr23_005' );
		$list_meet   = array( 'gr23_006' );
		$list_health = array( 'gr23_007' );
		$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
		$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
		$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );
		$SmartyObj->assign( 'list_health', getIndexData( $list_health ) );


?>
