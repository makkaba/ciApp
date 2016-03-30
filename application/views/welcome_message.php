<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once ('Instagram.php');


// $params = array(
// 	'apiKey'=>'db4f35cd0f1042629eb500ca10af6810',
// 	'apiSecret'=>'2fc0e4f024464cdb9555dea61e422a70',
// 	'apiCallback'=>'http://lionlove.me'
// );
// $instagram = $this->load->library('Simplelib');
//$instagram = $this->Instagram->__construct($params);

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
	'apiCallback'=>'http://www.lionlove.me'
));

// receive OAuth code parameter
$code = $_GET['code'];
// check whether the user has granted access
if (isset($code)) {
    // receive OAuth token object
    $data = $instagram->getOAuthToken($code);
    $username = $data->user->username;
    // store user access token
    $instagram->setAccessToken($data);
    // now you have access to all authenticated user methods
    $result = $instagram->getUserMedia();
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

<div class="container">
    <header class="clearfix">
        <h1>Instagram <span>display your photo stream</span></h1>
    </header>
    <div class="main">
        <ul class="grid">
            <li><img src="assets/instagram-big.png" alt="Instagram logo"></li>
            <li>
                <a class="login" href="<?php echo $loginUrl ?>">» Login with Instagram</a>
                <h4>Use your Instagram account to login.</h4>
            </li>
        </ul>
        <!-- GitHub project -->
        <footer>
            <p>created by <a href="https://github.com/cosenary/Instagram-PHP-API">cosenary's Instagram class</a>,
                available on GitHub</p>
        </footer>
    </div>
</div>
<div class="container">
    <header class="clearfix">
        <img src="assets/instagram.png" alt="Instagram logo">

        <h1>Instagram photos <span>taken by <?php echo $data->user->username ?></span></h1>
    </header>
    <div class="main">
        <ul class="grid">
            <?php
            // display all user likes
            foreach ($result->data as $media) {
                $content = '<li>';
                // output media
                if ($media->type === 'video') {
                    // video
                    $poster = $media->images->low_resolution->url;
                    $source = $media->videos->standard_resolution->url;
                    $content .= "<video class=\"media video-js vjs-default-skin\" width=\"250\" height=\"250\" poster=\"{$poster}\"
                           data-setup='{\"controls\":true, \"preload\": \"auto\"}'>
                             <source src=\"{$source}\" type=\"video/mp4\" />
                           </video>";
                } else {
                    // image
                    $image = $media->images->low_resolution->url;
                    $content .= "<img class=\"media\" src=\"{$image}\"/>";
                }
                // create meta section
                $avatar = $media->user->profile_picture;
                $username = $media->user->username;
                $comment = $media->caption->text;
                $content .= "<div class=\"content\">
                           <div class=\"avatar\" style=\"background-image: url({$avatar})\"></div>
                           <p>{$username}</p>
                           <div class=\"comment\">{$comment}</div>
                         </div>";
                // output media
                echo $content . '</li>';
            }
            ?>
        </ul>
        <!-- GitHub project -->
        <footer>
            <p>created by <a href="https://github.com/cosenary/Instagram-PHP-API">cosenary's Instagram class</a>,
                available on GitHub</p>
            <iframe width="95px" scrolling="0" height="20px" frameborder="0" allowtransparency="true"
                    src="http://ghbtns.com/github-btn.html?user=cosenary&repo=Instagram-PHP-API&type=fork&count=true"></iframe>
        </footer>
    </div>
</div>





<a href="https://api.instagram.com/oauth/authorize?client_id=db4f35cd0f1042629eb500ca10af6810&redirect_uri=http://www.lionlove.me&scope=basic+likes&response_type=code">
	
	인스타그램 로그인
</a>


	
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

<script>
    $(document).ready(function () {
        // rollover effect
        $('li').hover(
            function () {
                var $media = $(this).find('.media');
                var height = $media.height();
                $media.stop().animate({marginTop: -(height - 82)}, 1000);
            }, function () {
                var $media = $(this).find('.media');
                $media.stop().animate({marginTop: '0px'}, 1000);
            }
        );
    });
</script>
</body>
</html>