<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>jeff</title>
	<link rel="stylesheet" href="/include/css/common.css">
</head>
<body>
	
	
	<div class="main">
		<?php $this->load->view($subview); ?>
		
	</div>
	


    <script src="/include/js/jquery-2.2.2.min.js"></script>
    <script src="/include/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js">
	</script>
    <?php foreach($js as $jsFile): ?>
        <script src="/include/js/<?php echo $jsFile; ?>"></script>
    <?php endforeach;?>
</body>
</html>