<?php
$iRankCount = 15;
$iCountMessage = 10;
$procent = 60;

$test = procent($iRankCount , $iCountMessage, $procent);

foreach( $test as $value ) {
	echo number_format($value, 2, '.', ' ') . '<br />';
}

function procent( $iRankCount , $iCountMessage, $procent ) {
	$arrResult[] = $iCountMessage;
	for ( $i = 1; $i < $iRankCount ; $i++ ) {
		$result = ( ( end($arrResult) / 100) * $procent ) + end($arrResult);
		array_push($arrResult, $result);
	}
	return $arrResult;
}