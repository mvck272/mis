<?php
require 'server/server.php';

if (isset($_POST['item']) && isset($_POST['fund'])) {
  $itemNO = $_POST['item'];
  $fund = $_POST['fund'];

  // Prepare and execute the query with both item and fund filters
  $query = "SELECT * FROM stock_tbl WHERE item = :item AND fund = :fund";
  $statement = $conn->prepare($query);
  $statement->bindParam(':item', $itemNO);
  $statement->bindParam(':fund', $fund);
  $statement->execute();

  // Fetch the item details
  echo '<div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Items Table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive table-bordered p-0" style="height: 300px;">
            <table id="sitems" class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>Stock No.</th>
                  <th>Item Name</th>
                  <th>Item Description</th>
                  <th>Unit</th>
                  <th>Fund</th>
                  <th>Inventory Type</th>
                  <th>Expenses Type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>';

  while ($itemDetails = $statement->fetch(PDO::FETCH_ASSOC)) {
    $stockNo = $itemDetails['stock_no']; // Unique stock number

    echo '<tr>
            <td>'.$stockNo.'</td>
            <td>'.$itemDetails['item'].'</td>
            <td>'.$itemDetails['stock_desc'].'</td>
            <td>'.$itemDetails['unit'].'</td>
            <td>'.$itemDetails['fund'].'</td>
            <td>'.$itemDetails['inv_type'].'</td>
            <td>'.$itemDetails['exp_type'].'</td>
            <td class="text-center">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox'.$stockNo.'">
                <label for="customCheckbox'.$stockNo.'" class="custom-control-label"></label>
              </div>
            </td>
          </tr>';

  }

  echo '</tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>';
} else {
  // Handle the case when stock_no parameter is not set
  echo json_encode(array('error' => 'Missing stock_no parameter'));
}
?>
