<?php
include 'server/server.php';

// Create a SQL query to retrieve the initial data for the table
$query = "SELECT ris_no, MAX(`date`) AS max_date, dept, rcc, fund
          FROM ris_entry
          GROUP BY ris_no, dept, rcc
          ORDER BY max_date";
$stmt = $conn->prepare($query);
$stmt->execute();

$ris = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $ris[] = $row;
}

// Create HTML for the initial data
$output = '';
foreach ($ris as $row) {
    $output .= '<tr>';
    $output .= '<td>' . $row['ris_no'] . '</td>';
    $output .= '<td>' . $row['fund'] . '</td>';
    $output .= '<td>' . $row['dept'] . ' - ' . $row['rcc'] . '</td>';
    $output .= '<td>' . date('M d Y / h:ia', strtotime($row['max_date'])) . '</td>';
    $output .= '</tr>';
}

echo $output;
?>
