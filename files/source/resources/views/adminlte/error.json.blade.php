<?php
// BEGIN: Deny direct access
if (strtolower(basename($_SERVER['PHP_SELF']))
		== strtolower(basename(__FILE__))) {
	header('HTTP/1.0 404 Not Found');
	header('Status: 404 Not Found');
	die();
} // if (strtolower(basename($_SERVER['PHP_SELF']))
// END: Deny direct access
?>
{"lastMessage":"","errorCount":<?php echo intval($controller->errorCount); ?>,"lastError":"<?php echo ($controller->lastError); ?>"}