<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kota Market</title>

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="../aasets/js/html5shiv.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	
		
	<div class="col-sm-12 col-lg-12 main">			
		<div class="row">
			<?php foreach($menu as $item): ?>
				<button type="button" class="col-lg-2 col-sm-4 btn btn-default" style="margin:10px;">
					<h4><?=$item['name']?></h4>
					<p><?=$item['price']?></p>
					<p><?php $item = explode(',',$item['items']); unset($item[0]); echo implode(",",$item); ?></p>
				</button>
			<?php endforeach; ?>
		</div>
				
	</div><!--/.main-->

	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
		
</body>

</html>
