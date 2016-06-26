<?php include_once('header.php'); ?>

<div class="row">
	<div class="col-lg-6" id="mydiv">
		<h4>Inventory List</h4>
		<table class="table table-bordered">
			<thead> <tr> <th>Name</th> <th>Quantity</th> <th>Actions</th> </tr> </thead>
			<tbody>
				<?php if(!empty($items)): foreach( $items as $item ): ?>
					<tr> 
						<td><?=$item['name']?></td> 
						<td><?=$item['quantity']?></td> 
						<td>
							<a href="#" class="btn btn-primary" id="invupdt" data-id="<?=$item['id']?>" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil icon-pencil"></i></a>
							<a href="#" data-id="<?=$item['id']?>" id="invdel" class="btn btn-danger"><i class="glyphicon glyphicon-trash icon-trash"></i></a>
						</td> 
					</tr>
				<?php endforeach; else: ?>
				<tr> 
					<td colspan="3">No data available.</td> 
					 
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
	<div class="col-xs-12">
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#newModal"><i class="glyphicon glyphicon-plus icon-plus"></i> New item</a>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Item Quantity</h4>
      </div>
      <div class="modal-body">
      	<form id="frmeditinv">
	        <div class="form-group">
				<label>Additinal quantity</label>
				<input class="form-control" name="quantity" placeholder="100">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="invupdt" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Item</h4>
      </div>
      <div class="modal-body">
      	<form id="frmadd">
	        <div class="form-group">
				<label>Name</label>
				<input class="form-control" name="name" placeholder="Cheese">
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input class="form-control" name="quantity" placeholder="100">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="invadd" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include_once('scripts.php'); ?>


<?php include_once('footer.php'); ?>