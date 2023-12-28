<?php
include 'server/server.php';

if (isset($_POST['year'])) {
    $year = $_POST['year'];

    // Log the selected year
    error_log('Selected Year: ' . $year);

    $funds = ['F-101', 'F-103', 'F-103A', 'CFAG'];
    $datasets = [];

    // Fetch distinct months for the selected year
    $stmtMonths = $conn->prepare("SELECT DISTINCT MONTH(date) AS month FROM delivery_entry WHERE YEAR(date) = :year");
    $stmtMonths->bindParam(':year', $year, PDO::PARAM_INT);
    $stmtMonths->execute();

    $months = [];
    while ($monthResult = $stmtMonths->fetch(PDO::FETCH_ASSOC)) {
        $months[] = date('F', mktime(0, 0, 0, $monthResult['month'], 1));
    }

    foreach ($funds as $fund) {
        $stmt = $conn->prepare("SELECT COUNT(qty1) AS count, MONTH(date) AS month FROM delivery_entry WHERE fund = :fund AND YEAR(date) = :year GROUP BY MONTH(date)");
        $stmt->bindParam(':fund', $fund, PDO::PARAM_STR);
        $stmt->bindParam(':year', $year, PDO::PARAM_INT);
        $stmt->execute();

        // Log the SQL query
        error_log('SQL Query: ' . $stmt->queryString);

        $fundData = [];
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $count = $result['count'];
            $month = $result['month'];
            $fundData[$month - 1] = $count; // Adjust month to be zero-based
        }

        // Log the fetched data
        error_log('Fetched Data for ' . $fund . ': ' . json_encode(['data' => $fundData]));

        $datasets[] = [
            'label'               => $fund,
            'backgroundColor'     => getFundColor($fund),
            'borderColor'         => getFundColor($fund),
            'pointRadius'         => false,
            'pointColor'          => getFundColor($fund),
            'pointStrokeColor'    => getFundColor($fund),
            'pointHighlightFill'  => '#fff',
            'pointHighlightStroke' => getFundColor($fund),
            'data'                => array_values($fundData), // Ensure data is indexed numerically
        ];
    }

    // Prepare the data to be sent back to the client
    $response = ['datasets' => $datasets, 'months' => $months];

    // Return the JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle invalid request
    http_response_code(400);
    echo 'Invalid request';
}

function getFundColor($fund) {
    // Return a color based on the fund
    switch ($fund) {
        case 'F-101':
            return 'rgba(0, 123, 255, 0.7)'; // Blue
        case 'F-103':
            return 'rgba(40, 167, 69, 0.7)'; // Green
        case 'F-103A':
            return 'rgba(255, 193, 7, 0.7)'; // Yellow
        case 'CFAG':
            return 'rgba(220, 53, 69, 0.7)'; // Red
        default:
            return getRandomColor();
    }
}

function getRandomColor() {
    // Generate a random color code
    return 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')';
}
?>
