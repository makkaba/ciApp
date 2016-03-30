<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once ('Instagram.php');
const API_OAUTH_TOKEN_URL = 'https://api.instagram.com/oauth/access_token';
const MY_API_KEY = 'db4f35cd0f1042629eb500ca10af6810';
const MY_SECRET = '2fc0e4f024464cdb9555dea61e422a70';
const MY_RETURN = 'http://www.lionlove.me';
/*
TODO:vardump로 다 뿌려보고
TODO:call 함수로 curl통신을 해서 데이터 가져오기.
TODO:가져온 데이터를 foreach 써서 img 폼에 맞춰서 뿌려주기.


*/
$instagram = new Instagram(array(
	'apiKey'=>'db4f35cd0f1042629eb500ca10af6810',
	'apiSecret'=>'2fc0e4f024464cdb9555dea61e422a70',
	'apiCallback'=>'http://www.lionlove.me'
));


// create login URL
$loginUrl = $instagram->getLoginUrl();


if (isset($_GET['code'])) {
	$code = $_GET['code'];
    // receive OAuth token object
	$apiData = array(
            'grant_type' => 'authorization_code',
            'client_id' => MY_API_KEY,
            'client_secret' => MY_SECRET,
            'redirect_uri' => MY_RETURN,
            'code' => $code
	);



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiHost);
        curl_setopt($ch, CURLOPT_POST, count($apiData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 90);
        $jsonData = curl_exec($ch);
        if (!$jsonData) {
            throw new InstagramException('Error: _makeOAuthCall() - cURL error: ' . curl_error($ch));
        }
        curl_close($ch);


    var_dump($jsonData);
} else {
    // check whether an error occurred
    if (isset($_GET['error'])) {
        echo 'An error occurred: ' . $_GET['error_description'];
    }
}


?>




<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>welcome</title>
	<link rel="stylesheet" href="/include/css/welcome.css">
	<link rel="stylesheet" href="/include/css/prism.css">
</head>
<body>





<a href="https://api.instagram.com/oauth/authorize?client_id=db4f35cd0f1042629eb500ca10af6810&redirect_uri=http://www.lionlove.me&scope=basic+likes&response_type=code">
	
	인스타그램 로그인
</a>

</body>
</html>