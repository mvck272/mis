<?php
include '../server/server.php';

$charset = "utf8";

$sqlScript = "";
$sqlScript  = "# MIS : MySQL database backup\n";
$sqlScript .= "#\n";
$sqlScript .= "# Generated: " . date('l j. F Y') . "\n";
$sqlScript .= "# Hostname: " . $host . "\n";
$sqlScript .= "# Database: " . $database . "\n";
$sqlScript .= "# --------------------------------------------------------\n";

try {
    $pdo = new PDO("mysql:host={$host};dbname={$database};charset={$charset}", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get All Table Names From the Database
    $tables = array();
    $result = $pdo->query('SHOW TABLES');

    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        $tables[] = $row[0];
    }
    foreach ($tables as $table) {

        // Add SQL statement to drop existing table
        $sqlScript .= "\n";
        $sqlScript .= "\n";
        $sqlScript .= "#\n";
        $sqlScript .= "# Delete any existing table `" . $table . "`\n";
        $sqlScript .= "#\n";
        $sqlScript .= "\n";
        $sqlScript .= "DROP TABLE IF EXISTS `" . $table . "`;\n";

        /* Table Structure */

        // Comment in SQL-file
        $sqlScript .= "\n";
        $sqlScript .= "\n";
        $sqlScript .= "#\n";
        $sqlScript .= "# Table structure of table `" . $table . "`\n";
        $sqlScript .= "#\n";
        $sqlScript .= "\n";

        // Prepare SQLscript for creating table structure
        $query = "SHOW CREATE TABLE $table";
        $result = $pdo->query($query);
        $row = $result->fetch(PDO::FETCH_NUM);

        $sqlScript .= "\n\n" . $row[1] . ";\n\n";


        $query = "SELECT * FROM $table";
        $result = $pdo->query($query);

        $columnCount = $result->columnCount();

        // Prepare SQLscript for dumping data for each table
        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            $sqlScript .= "INSERT INTO $table VALUES(";
            for ($j = 0; $j < $columnCount; $j++) {
                $row[$j] = $row[$j];

                if (isset($row[$j])) {
                    $sqlScript .= '"' . $row[$j] . '"';
                } else {
                    $sqlScript .= '""';
                }
                if ($j < ($columnCount - 1)) {
                    $sqlScript .= ',';
                }
            }
            $sqlScript .= ");\n";
        }

        $sqlScript .= "\n";
    }

    if (!empty($sqlScript)) {
        // Save the SQL script to a backup file
        $backup_file_name = $database . '_backup_' . time() . '.sql';
        $fileHandler = fopen($backup_file_name, 'w');
        $number_of_lines = fwrite($fileHandler, $sqlScript);
        fclose($fileHandler);

        // Download the SQL backup file to the browser
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($backup_file_name));
        ob_clean();
        flush();
        readfile($backup_file_name);
        exec($backup_file_name);

        $action = "Backup";
        $details = "Successful new backup data [$backup_file_name]";
        logActivity($action, $details);
    }
} catch (PDOException $e) {
    echo "Backup failed: " . $e->getMessage();
}
