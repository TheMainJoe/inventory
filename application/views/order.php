<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Icons</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/datepicker3.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
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
			<div style="background:#f1f4f7 " class="col-md-12">
				
						<div class="canvas-wrapper">
							<div class="col-lg-offset-4 col-lg-4 ">

									<div class="form-group">
									
									<div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">Chips
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">Chips + Egg
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="option3" id="optionsRadios3" name="optionsRadios">Radio Button 3
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="option3" id="optionsRadios3" name="optionsRadios">Radio Button 4
										</label>
									</div>
								</div>


							</div>


									
							
						</div>
					
			</div>
			





		</div>	
		
		
	</div><!--/.main-->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
