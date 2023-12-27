<?php
require 'server/server.php';

if (isset($_POST['iar_no'])) {
    $iar_no = $_POST['iar_no'];

    if (isset($_POST['selectedStockData']) && !empty($_POST['selectedStockData'])) {
        $selectedStockDataJSON = $_POST['selectedStockData'];
    
    // Decode the JSON string to get the selected stock numbers and quantities
    $selectedStockData = json_decode($selectedStockDataJSON, true);

    $sql = "SELECT stock_tbl.stock_no, stock_tbl.item, stock_tbl.stock_desc, delivery_entry.stock_no, delivery_entry.qty, delivery_entry.id
            FROM delivery_entry
            INNER JOIN stock_tbl 
            ON delivery_entry.stock_no = stock_tbl.stock_no
            WHERE delivery_entry.iar_no = :iar_no";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':iar_no', $iar_no);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($itemDetails = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $stockNo = $itemDetails['stock_no'];

                // Initialize quantity and remarks variables
                $quantity = '';
                $remarks = '';

                // Check if the stock number exists in the selected stock data
                if (isset($selectedStockData[$stockNo])) {
                    $selectedStockItem = $selectedStockData[$stockNo];
                    $quantity = $selectedStockItem['qty'];
                    $remarks = $selectedStockItem['remarks'];
                }

                echo '<tr>
                        <td>' . $stockNo . '</td>
                        <td>' . $itemDetails['item'] . '</td>
                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;">' . $itemDetails['stock_desc'] . '</td>
                        <td>' . $itemDetails['qty'] . '</td>
                        <td><input type="number" class="form-control" name="qty[' . $stockNo . ']" value="' . $quantity . '"></td>
                        <td><input type="text" class="form-control" name="remarks[' . $stockNo . ']" value="' . $remarks . '"></td>
                        <td class="text-center">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox' . $stockNo . '">
                                <label for="customCheckbox' . $stockNo . '" class="custom-control-label"></label>
                            </div>
                        </td>
                    </tr>';
            }
            
        } else {
            echo "No data found";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
        } else {
    }   
} else {
    echo json_encode(array('error' => 'Missing iar_no details'));
}
?>
