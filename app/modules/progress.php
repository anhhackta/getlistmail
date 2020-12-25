<?php 
require_once '../lib/phakeMailer.class.php';

if( isset($_POST['type']) ) {

	if($_POST['type'] === 'get-mail-random' && isset($_POST['num'])) {

		$Phuc->getMailRandom($_POST['num']);
		echo $Phuc->_getResponse();
		
	}

	if($_POST['type'] === 'get-mail-filter' && isset($_POST['num']) && isset($_POST['username']) && isset($_POST['domain']) && isset($_POST['dot'])) {

		$Phuc->getMailFilter($_POST['num'], $_POST['username'], $_POST['domain'], $_POST['dot']);
		echo $Phuc->_getResponse();

	}

}
?>