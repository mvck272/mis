<?php
require 'server/server.php';

if (isset($_POST['item'])) {
  $itemNO = $_POST['item'];

  // Prepare and execute the query
  $query = "SELECT stock_tbl.stock_no, stock_tbl.item, stock_tbl.stock_desc, stock_tbl.unit, stock_tbl.fund, delivery_entry.qty, delivery_entry.fund 
            FROM stock_tbl 
            JOIN delivery_entry ON stock_tbl.stock_no = delivery_entry.stock_no 
            WHERE stock_tbl.item = :item";
  $statement = $conn->prepare($query);
  $statement->bindParam(':item', $itemNO);
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
                  <th>Name - Description</th>
                  <th>Unit</th>
                  <th>Fund</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>';

  while ($itemDetails = $statement->fetch(PDO::FETCH_ASSOC)) {
    $stockNo = $itemDetails['stock_no']; // Unique stock number

    echo '<tr>
            <td>'.$stockNo.'</td>
            <td>'.$itemDetails['item'].' - '.$itemDetails['stock_desc'].'</td>
            <td>'.$itemDetails['unit'].'</td>
            <td>'.$itemDetails['fund'].'</td>
            <td>'.$itemDetails['qty'].'</td>
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
