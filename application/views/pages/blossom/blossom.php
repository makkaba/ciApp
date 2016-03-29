this is blossom...


<a href="https://api.instagram.com/oauth/authorize?client_id=db4f35cd0f1042629eb500ca10af6810&redirect_uri=http://www.lionlove.me&scope=basic+likes&response_type=code">
	
	인스타그램 로그인
</a>

<?php 


if(isset($_GET['code']) === true){
	$code = $_GET['code'];
	var_dump($code);
}
	
?>