<?php include_once('header.php'); ?>

<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead> <tr> <th>Name</th> <th>Quantity</th> <th>Actions</th> </tr> </thead>
			<tbody>
				<tr> 
					<td>Eggs</td> 
					<td>200</td> 
					<td>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil icon-pencil"></i></a>
						<a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash icon-trash"></i></a>
					</td> 
				</tr>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      	<form>
	        <div class="form-group">
				<label>Additinal quantity</label>
				<input class="form-control" placeholder="100">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      	<form>
	        <div class="form-group">
				<label>Name</label>
				<input class="form-control" placeholder="Cheese">
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input class="form-control" placeholder="100">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>