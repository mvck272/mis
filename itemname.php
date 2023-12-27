<?php
require 'server/server.php';

if (isset($_POST['fund'])) {
  $fund = $_POST['fund'];

  // Prepare and execute the query
  $query = "SELECT DISTINCT item FROM stock_tbl WHERE fund = :fund GROUP BY item";
  $statement = $conn->prepare($query);
  $statement->bindParam(':fund', $fund);
  $statement->execute();

  // Start building the select element
  $selectHTML = '<select class="form-control select2bs4" style="width: 100%;" id="itemSelect2">';
  $selectHTML .= '<option value="0" selected disabled>--Select Item Name--</option>';

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $selectHTML .= '<option>' . $row['item'] . '</option>';
  }

  $selectHTML .= '</select>';

  // Return the select element as the response
  echo $selectHTML;
} else {
  // Handle the case when the fund parameter is not set
  echo '<select class="form-control select2bs4" style="width: 100%;">';
  echo '<option selected disabled>--Select Item Name--</option>';
  echo '</select>';
}
?>
