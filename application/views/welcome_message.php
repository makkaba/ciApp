<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require '/application/libraries/Instagram.php';

/*
TODO: api callback 을 success.php로 채우기.
TODO: 받아온 코드를 $data = $instagram->getOAuthToken($code);
 $username = $data->user->username;
    // store user access token
    $instagram->setAccessToken($data);
    // now you have access to all authenticated user methods
    $result = $instagram->getUserMedia();

TODO:vardump로 다 뿌려보고
TODO:call 함수로 curl통신을 해서 데이터 가져오기.
TODO:가져온 데이터를 foreach 써서 img 폼에 맞춰서 뿌려주기.


*/
$instagram = new Instagram(array(
	'apiKey'=>'db4f35cd0f1042629eb500ca10af6810',
	'apiSecret'=>'2fc0e4f024464cdb9555dea61e422a70',
	'apiCallback'=>
));
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

<?php 


if(isset($_GET['code']) === true){
	$code = $_GET['code'];
	var_dump($code);
	$
	session_start();
	$_SESSSION['user_token'] = $code;

	$
}
	
?>
	
<pre><code class="language-markup">
	<xmp>

		<html>
			<body>
				<ul>
					<li>dlk</li>
					<li>asdfjkh</li>
					<li>welirh</li>
				</ul>
			</body>
		</html>

	</xmp>
</code></pre>


<?php 

$keyword = 'good';
$access_token = '1491046049.d6e77b1.cb12f23d408648e08e0ccbe6023d6b48';
//$endpoint = 'https://api.instagram.com/v1/tags/'.$keyword.'/media/recent?access_token=1491046049.d6e77b1.cb12f23d408648e08e0ccbe6023d6b48';
//$endpoint ='https://api.instagram.com/v1/users/self/?access_token=1491046049.d6e77b1.cb12f23d408648e08e0ccbe6023d6b48';
$endpoint = 'https://api.instagram.com/v1/media/search?lat=48.858844&lng=2.294351&access_token=1491046049.d6e77b1.cb12f23d408648e08e0ccbe6023d6b48';



// $curl = curl_init($endpoint);
// curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// $data = curl_exec($curl);

// var_dump($data);


?>



<footer>Jeff</footer>

<script src="/include/js/prism.js"></script>
</body>
</html>