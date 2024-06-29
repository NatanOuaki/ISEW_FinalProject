<div class="container-fluid" style="margin-top:98px">
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="partials/_menuManage.php" method="post" enctype="multipart/form-data">
				<div class="card mb-3">
					<div class="card-header" style="background-color: #53BFFB;">
						Create New Item
				  	</div>
					<div class="card-body">
							<div class="form-group">
								<label class="control-label">Name: </label>
								<input type="text" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<label class="control-label">Description: </label>
								<textarea cols="30" rows="3" class="form-control" name="description"></textarea>
							</div>
                            <div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control" name="price" required min="1">
							</div>	
							
							<div class="form-group">
								<label class="control-label">Image</label>
								<input type="text" class="form-control" name="image" required min="1">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="mx-auto">
								<button type="submit" name="createItem" class="btn btn-sm btn-primary"> Create </button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover mb=0">
							<thead style="background-color: #53BFFB;">
								<tr>
									<th class="text-center" style="width:7%;">Cat. Id</th>
									<th class="text-center">Img</th>
									<th class="text-center" style="width:58%;">Item Detail</th>
									<th class="text-center" style="width:18%;">Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php
                                $sql = "SELECT * FROM `items`";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                    $itemId = $row['item_id'];
                                    $itemName = $row['item_name'];
                                    $itemPrice = $row['item_price'];
                                    $itemDesc = $row['item_description'];
                                    $itemImage = $row['item_image'];

                                    echo '<tr>
                                            <td class="text-center">' .$itemId. '</td>
                                            <td>
                                                <img src="' .$itemImage. '" alt="image for this item" width="150px" height="150px">
                                            </td>
                                            <td>
                                                <p>Name : <b>' .$itemName. '</b></p>
                                                <p>Description : <b class="truncate">' .$itemDesc. '</b></p>
                                                <p>Price : <b>' .$itemPrice. '</b></p>
                                            </td>
                                            <td class="text-center">
												<div class="row mx-auto" style="width:112px">
													<button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#updateItem' .$itemId. '">Edit</button>
													<form action="partials/_menuManage.php" method="POST">
														<button name="removeItem" class="btn btn-sm btn-danger" style="margin-left:9px;">Delete</button>
														<input type="hidden" name="itemId" value="'.$itemId. '">
													</form>
												</div>
                                            </td>
                                        </tr>';
                                }
                            ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	
</div>

<?php 
    $itemsql = "SELECT * FROM `items`";
    $itemResult = mysqli_query($conn, $itemsql);
    while($itemRow = mysqli_fetch_assoc($itemResult)){
        $currentItemId = $itemRow['item_id'];
        $itemId = $itemRow['item_id'];
        $itemName = $itemRow['item_name'];
        $itemPrice = $itemRow['item_price'];
        $itemDesc = $itemRow['item_description'];
        $itemImage = $itemRow['item_image'];
?>

<!-- Modal -->
<div class="modal fade" id="updateItem<?php echo $itemId; ?>" tabindex="-1" role="dialog" aria-labelledby="updateItem<?php echo $itemId; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #53BFFB;">
        <h5 class="modal-title" id="updateItem<?php echo $itemId; ?>">Item Id: <?php echo $currentItemId; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<form action="partials/_menuManage.php" method="post" enctype="multipart/form-data">
		    <div class="text-left my-2 row" style="border-bottom: 2px solid #dee2e6;">
		   		<div class="form-group col-md-8">
                    <b><label class="control-label">Image</label></b>
                    <input type="text" class="form-control" name="image" value="<?php echo $itemImage; ?>" required min="1">
					<small id="Info" class="form-text text-muted mx-3">Please enter path to the image.</small>
				</div>
				<div class="form-group col-md-4">
					<img src="<?php echo $itemImage; ?>" id="itemPhoto" name="itemPhoto" alt="item image" width="100" height="100">
				</div>
			</div>
            <div class="text-left my-2">
                <b><label for="itemId">Item Id</label></b>
                <input class="form-control" type="number" id="itemId" name="itemId" value="<?php echo $itemId; ?>">
            </div>
            <div class="text-left my-2">
                <b><label for="name">Name</label></b>
                <input class="form-control" id="name" name="name" value="<?php echo $itemName; ?>" type="text" required>
            </div>
			<div class="text-left my-2 row">
				<div class="form-group col-md-12">
                	<b><label for="price">Price</label></b>
                	<input class="form-control" id="price" name="price" value="<?php echo $itemPrice; ?>" type="number" min="1" required>
				</div>
            </div>
            <div class="text-left my-2">
                <b><label for="desc">Description</label></b>
                <textarea class="form-control" id="desc" name="desc" rows="2"><?php echo $itemDesc; ?></textarea>
            </div>
            <input type="hidden" name="currentItemId" value="<?php echo $currentItemId; ?>">
            <button type="submit" class="btn btn-success" name="updateItem">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
	}
?>
