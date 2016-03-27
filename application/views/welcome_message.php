<?php
defined('BASEPATH') OR exit('No direct script access allowed');


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