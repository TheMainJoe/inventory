<?php include_once('header.php'); ?>

<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead> <tr> <th>Time</th><th>Order #</th><th>Name</th> <th>Order</th> <th>Actions</th> </tr> </thead>
			<tbody>
				<tr> 
					<td>Eggs</td> 
					<td>Eggs</td> 
					<td>Eggs</td> 
					<td>200</td> 
					<td>
						<a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-bitcoin icon-bitcoin"></i></a>						
					</td> 
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead> <th>Time</th><th>Order #</th><th>Name</th> <th>Order</th> <th>Actions</th> </tr> </thead>
			<tbody>
				<tr> 
					<td>Eggs</td> 
					<td>Eggs</td> 
					<td>Eggs</td> 
					<td>200</td> 
					<td>
						<a href="#" class="btn btn-success"><i class="glyphicon glyphicon-ok icon-ok"></i></a>						
					</td> 
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-xs-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#newModal"><i class="glyphicon glyphicon-plus icon-plus"></i> New item</a>
	</div>
</div>

<?php include_once('footer.php'); ?>