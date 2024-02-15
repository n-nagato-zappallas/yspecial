<?php

/**
 * 入力パラメータが異なるコンテンツの場合
$user_keys	= array( 'name', 'sex', 'birth_year', 'birth_mon', 'birth_mday' );
$self->init( $user_keys );
*/

$menu = new menuInfo();
$menuData = $menu->getData();
foreach( $menuData as $key => $val )
	$SmartyObj->assign( 'menu_' .$key, $val );

/**
 * 結果ページの場合
 */
$result_flag = strpos( $self->get('t'), 'result' ) !== false;


/**
 * 入力チェック
 * result_jiyugaoka_zap.check_userinfo
 */
if( $result_flag && !$msg ) {
		checkInputParam();
}



/**
 * ロジック結果を取得
 */
if( $result_flag && !$msg ) {
	// パラメータセット
	$pkg = 'webteam';
	$logic_name = 'AkimiUnion003';
	$param = '&group_no=1';
	$fortune_date = $self->get('fortune_date');
	if( !$fortune_date )
		$fortune_date = date( 'YmdHis' );
	if( strlen($fortune_date) == 8 )
		$fortune_date .= '100000';
	$param .= '&fortune_date=' .$fortune_date;
	foreach( $target as $t ) {
		$birth_date	= sprintf( "%04d%02d%02d", $self->get('birth_year_' .$t), $self->get('birth_mon_' .$t), $self->get('birth_mday_' .$t) );
		$param .= '&birth_' .$t .'=' .$birth_date;
	}
	
	
	// 占断
	// ※ 4番目の引数は 'object', 'explanation' どちらかを選択する事
	$result = logicserver( 'webteam', $logic_name, $param, 'explanation' );
	
	// 戻り値から 使いたいロジックコードを選ぶ
	//   main logic_tarot       タロットA [自分]
	//   next logic_base_other  基本性格  [相手]
	$logic_cd = substr( $result['logic_tarot'], 0, strpos( $result['logic_tarot'], ',' ) );
	$next_cd  = $result['logic_base_other'];
}

/**
 * 小メニュー 結果テキストを取得／HTML置換
 */
if( $result_flag &&  !$msg ) {
	$sql = "SELECT r.disp_no, r.text "
		 . "FROM " .$self->get('contents') .".result_menu_tbl r "
		 . "WHERE r.menu_id = ? "
		 . "AND r.logic_cd = ? ";
	$result = select( $sql, array( $self->get('menu_id'), $logic_cd ) );
	if( $result && $result[0] ) {
		foreach( $result as $row ) {
			$SmartyObj->assign( 'result_menu_' .$row['disp_no'], replace_name( $row['text'] ) );
		}
	}
	else $msg .= "結果テキストが取得できませんでした。<br>";
}

?>
