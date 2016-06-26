<?php include_once('header.php'); ?>

<div class="row">
	<div class="col-lg-6">
		<h4>Received Orders</h4>
		<table class="table table-bordered">
			<thead> <tr> <th>Time</th><th>Order #</th><th>Name</th> <th>Order</th> <th>Actions</th> </tr> </thead>
			<tbody>
				
				<?php if(!empty($orders)): foreach( $orders as $item ): ?>
					<tr> 
						<td><?=$item->date?></td> 
						<td><?=$item->orderNo?></td> 
						<td><?=$item->name?></td> 
						<td><?=$item->order?></td> 
						<td>
							<a href="#" data-id="<?=$item->id?>" class="btn btn-warning pay"><i class="glyphicon glyphicon-bitcoin icon-bitcoin"></i> R</a>
						</td>
					</tr>
				<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6">
		<h4>Paid Orders</h4>
		<table class="table table-bordered">
			<thead> <th>Time</th><th>Order #</th><th>Name</th> <th>Order</th> <th>Actions</th> </tr> </thead>
			<tbody>
				
				<?php if(!empty($paid)): foreach( $paid as $item ): ?>
					<tr> 
						<td><?=$item->date?></td> 
						<td><?=$item->orderNo?></td> 
						<td><?=$item->name?></td> 
						<td><?=$item->order?></td> 
						<td>
							<a href="#" data-id="<?=$item->id?>" class="btn btn-success done"><i class="glyphicon glyphicon-ok icon-ok"></i></a>
						</td> 
					</tr>
				<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
	<!-- <div class="col-xs-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#newModal"><i class="glyphicon glyphicon-plus icon-plus"></i> New item</a>
	</div> -->
</div>

<?php include_once('scripts.php'); ?>

<script>
	$(document).ready(function(){
		$('.pay').click(function(){
			var id = $(this).attr('data-id');
			$.post('orders','paid=paid&id='+id,function(){}).done(function(){ location.reload; });
		});

		$('.done').click(function(){
			var id = $(this).attr('data-id');
			$.post('orders','done=done&id='+id,function(){}).done(function(){ location.reload; });
		});
	});
</script>

<?php include_once('footer.php'); ?>