<?php 
/**
** Class name: PM
** Author: HonqphucIT
** Date:24/12/2020
** Tested: OK 25/12/2020 11:00 AM
*/
header('Content-Type: application/json');
class PM {

    protected   $_URL = "https://phake-mailer.herokuapp.com/",
                $_ACT,
                $_RESPONSE;

    public function getMailRandom($num) {

        $ch = curl_init($this->_URL);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=phake_rand&num='.$num);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

        $this->_RESPONSE = curl_exec($ch);
        curl_close($ch);
    }

    public function getMailFilter($num, $username, $domain, $dot) {

        $ch = curl_init($this->_URL);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=phake_filter&num='.$num.'&username='.$username.'&dot='.$dot.'&domain='.$domain.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

        $this->_RESPONSE = curl_exec($ch);
        curl_close($ch);
    }

    public function _getResponse() {
        return $this->_RESPONSE;
    }
}

$Phuc = new PM;

?>