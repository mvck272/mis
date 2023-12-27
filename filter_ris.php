<?php
include 'server/server.php';

$response = array(); // Initialize a response array

if (isset($_POST['dateRange']) && isset($_POST['fund'])) {
    $dateRange = $_POST['dateRange'];
    $selectedFund = $_POST['fund'];

    list($startDate, $endDate) = explode(' - ', $dateRange);
    $startDate = date("Y-m-d", strtotime($startDate));
    $endDate = date("Y-m-d", strtotime($endDate));

    $risIDs = array();

    $query = "SELECT stock_tbl.stock_no, stock_tbl.item, stock_tbl.stock_desc, ris_entry.id, ris_entry.ris_no, ris_entry.dept, ris_entry.fund, ris_entry.rcc, ris_entry.qty ,ris_entry.date
              FROM ris_entry
              INNER JOIN stock_tbl ON ris_entry.stock_no = stock_tbl.stock_no
              WHERE `date` BETWEEN :start_date AND :end_date AND ris_entry.fund = :selected_fund
              ORDER BY ris_entry.ris_no";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':start_date', $startDate);
    $stmt->bindParam(':end_date', $endDate);
    $stmt->bindParam(':selected_fund', $selectedFund);
    $stmt->execute();

    $risArray = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $ris_no = $row['ris_no'];
        $risIDs[] = $row['id'];
        if (!isset($risArray[$ris_no])) {
            $risArray[$ris_no] = array();
        }
        $risArray[$ris_no][] = $row;
    }

    if (count($risArray) > 0) {
        $response['success'] = true;
        $response['data'] = $risArray;
    } else {
        $response['success'] = false;
        $response['message'] = 'No data found for the selected date range';
    }

    $risIDsJSON = json_encode($risIDs);
}

header('Content-Type: application/json');
echo json_encode($response);
?>