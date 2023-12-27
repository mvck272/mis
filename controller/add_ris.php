<?php
require '../server/server.php';

// Generate the RIS number on the server-side
$stmt = $conn->query("SELECT MAX(ris_no) AS max_ris_no FROM ris_entry");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$maxRisNo = $row['max_ris_no'];

if (!$maxRisNo) {
    $maxRisNo = date("Y-m-0001");
} else {
    $maxRisNo = date("Y-m-" . str_pad((substr($maxRisNo, 8) + 1), 4, "0", STR_PAD_LEFT));
}

$ris_no = $maxRisNo; // Set the new RIS number

$fund = $_POST['fund'];
$dept = $_POST['dept'];
$rcc = $_POST['rcc'];
$purpose = $_POST['purpose'];
$req_by = $_POST['req_by'];
$app_by = $_POST['app_by'];
$iss_by = $_POST['iss_by'];
$req_desig = $_POST['req_desig'];
$app_desig = $_POST['app_desig'];
$iss_desig = $_POST['iss_desig'];
$iar_no = $_POST['iar_no'];
$quantities = $_POST['qty'];
$remarks = $_POST['remarks'];

$selectedQuantities = array();
$selectedRemarks = array();

foreach ($quantities as $stockNo => $qty) {
    if (!empty($qty)) {
        $selectedQuantities[$stockNo] = $qty;
        $selectedRemarks[$stockNo] = $remarks[$stockNo];
    }
}

if (empty($selectedQuantities)) {
    echo "No checkboxes were selected.";
} else {
    foreach ($selectedQuantities as $stockNo => $qty) {
        $stock_no = $stockNo;
        echo "Stock No:  $stock_no";
    
        // Fetch unit_cost from delivery_entry based on your logic
        $stmt = $conn->prepare("SELECT unit_cost FROM delivery_entry WHERE stock_no = :stock_no AND iar_no = :iar_no");
        $stmt->bindParam(':stock_no', $stock_no);
        $stmt->bindParam(':iar_no', $iar_no);
        $stmt->execute();
        $unit_cost_row = $stmt->fetch(PDO::FETCH_ASSOC);
        $unit_cost = $unit_cost_row['unit_cost'];
    
        // Insert into ris_entry
        $stmt = $conn->prepare("INSERT INTO ris_entry (ris_no, fund, dept, rcc, stock_no, qty, unit_cost, remarks, purpose, req_by, app_by, iss_by, req_desig, app_desig, iss_desig, iar_no, date) 
                                VALUES (:ris_no, :fund, :dept, :rcc, :stock_no, :qty, :unit_cost, :remarks, :purpose, :req_by, :app_by, :iss_by, :req_desig, :app_desig, :iss_desig, :iar_no, CURRENT_TIMESTAMP)");
    
        $stmt->bindParam(':ris_no', $ris_no);
        $stmt->bindParam(':fund', $fund);
        $stmt->bindParam(':dept', $dept);
        $stmt->bindParam(':rcc', $rcc);
        $stmt->bindParam(':stock_no', $stock_no);
        $stmt->bindParam(':qty', $qty);
        $stmt->bindParam(':unit_cost', $unit_cost); // Make sure to bind the unit_cost parameter
        $stmt->bindParam(':remarks', $selectedRemarks[$stock_no]);
        $stmt->bindParam(':purpose', $purpose);
        $stmt->bindParam(':req_by', $req_by);
        $stmt->bindParam(':app_by', $app_by);
        $stmt->bindParam(':iss_by', $iss_by);
        $stmt->bindParam(':req_desig', $req_desig);
        $stmt->bindParam(':app_desig', $app_desig);
        $stmt->bindParam(':iss_desig', $iss_desig);
        $stmt->bindParam(':iar_no', $iar_no);
        $stmt->execute();
    
        // Update delivery_entry
        $stmt = $conn->prepare("UPDATE delivery_entry SET qty = qty - :qty WHERE stock_no = :stock_no AND iar_no = :iar_no");
        $stmt->bindParam(':qty', $qty);
        $stmt->bindParam(':stock_no', $stock_no);
        $stmt->bindParam(':iar_no', $iar_no);
        $stmt->execute();
    }
    
    header("Location: ../risPage.php");
    exit;
}