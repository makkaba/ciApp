<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once ('Instagram.php');

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
    $data = $instagram->getOAuthToken($code);
    $username = $data->user->username;
    // store user access token
    $instagram->setAccessToken($data);
    // now you have access to all authenticated user methods
    $result = $instagram->getUserMedia();
    var_dump($result);
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